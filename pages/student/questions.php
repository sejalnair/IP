<?php
	include '../../includes/addquestions.php';
	

?>

<!Doctype html>
<html>
<head>
<title>Quiz</title>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="../styles/stuque.css">

</head>
	<body>
        <header>
            <div id="header">
                <h2 style="color:white;png
                :5px;display:contents">Quiz Title:..................</h2>
                <!-- Timer -->
                <input id="time" type="time" name="remaining_time " style="float:right">
                <label  style="color:white;padding:5px;float: right;font-size:22px;">Remaining Time:</label>
               
            </div>
        </header>
			<aside>
            <div >
					<h1>Questions </h3><hr style="background-color:red">
				</div>
			<form action="../../includes/update.php" method='get'>
			<?php
				include "../../includes/dbh.inc.php";
				session_start();
				$num = 0;
				$tablename = $_COOKIE['tablename'];
				$sql =  "Select * from $tablename;";
				$result = mysqli_query($conn,$sql);
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
						$rowno = $row['Question_no'];
						echo "<button name='questno' id='quebtn' value='$rowno' >Question No: ".$row['Question_no']."</h1>";
						$num = $row['Question_no'];
					}
				}
			?>
			</form>
			</aside>
			<section>
				<form action="" method="post">
			
				<div id="que">
					<h2> Question:- </h2>
					<div >
						<textarea  name="Questions" id="questions"><?php if(isset($post['question']) && !empty($_POST["question"])){ echo $_SESSION['question'];}else{echo 'empty';}?></textarea>
					</div>

					<div id="choice">
                        <input type="radio" name="option" >&nbsp;
                        <!-- style="margin-left:18px"<?php echo $row['c1']; ?> -->
						<input type="text" name="ot1" style="width: 30%; padding:8px; border:solid 2px #720245;margin-top:10px;"><br><br>
						<input type="radio" name="option" value="o1">
						<input type="text" name="ot2" style="width: 30%; padding:8px; border:solid 2px #720245;"><br><br>
						<input type="radio" name="option" value="o1">
						<input type="text" name="ot3" style="width: 30%; padding:8px; border:solid 2px #720245;"><br><br>
						<input type="radio" name="option" value="o1">
						<input type="text" name="ot4" style="width: 30%; padding:8px; margin-bottom:0px;border:solid 2px #720245;"><br><br>
					</div>
					<div id="submit">
						<button id="previous" style="background-color:#720245;color:white;margin-left:20px;margin-right:50px;margin-bottom:20px;">Previous</button>
						<button id="next" style="background-color:#720245;color:white;margin-right:50px;">Next</button>
                        <button id="bookmarked" style="background-color:#720245;color:white;margin-right:50px;">Bookmarked</button><br>
                        <label id="last" style="background-color:blue; width:30px;height:30px;margin-right:50px;margin-left:380px;"></label><label>Attempted</label>
                        <label id="last" style="background-color:yellow; width:30px;height:30px;margin-left:50px;"></label><label>Bookmarked</label>
                        <label id="last" style="background-color:white; width:30px;height:30px;margin-left:50px;"></label><label>Unattempted</label>
					</div>
				</div>
			</form>
			</section>
	</body>
</html