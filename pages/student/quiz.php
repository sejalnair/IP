
<!Doctype html>
<html>
<head>
<title>Add Questions</title>
<meta charset="UTF-8"/>

<style type="text/css">
aside {
	background-color: #123456;
	width:20%;
	height:500px;
	float:left;
	margin:20px;
	margin-top: 40px;
}
section {
	background-color: #eeeee9;
	width:70%;
	height: 600px;
	float:left;
	margin:10px auto;
}
#questions {
	width:90%;
	height:150px;
    border:solid 3px #123456;
	 
}
#que {
	margin-top: 30px;
	margin-left: 40px;
	margin-bottom: 10px;
	font-size: 16px;

}
#choice{
	padding:0px;

}
button{
	font-size: 16px;
	padding:5px;
}

input[type="text"],{
	width: 20px;
}
#header{
    margin-top: 0px;
    background-color: #123456;
    width:100%;
    height:80px;
}
#submit{
    margin-top:0px;
}
</style>

</head>
	<body>
        <header>
            <div id="header">
                <h2 style="color:white;padding:5px;">Quiz Title: <?php echo $_COOKIE['title']?> </h2>
                <input id="time" type="time" name="remaining_time " style="float:right">
                <label  style="color:white;padding:5px;float: right;">Remaining Time:</label>>
               
            </div>
        </header>
			<aside >
				<?php 
					include '../../includes/dbh.inc.php';
					$examname =  $_COOKIE['examname'];
					$sql = "select * from $examname;";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					for($i=1;$i<=$count;$i++){
						echo "<input type='button' name='startqz' value='$i' style='width:14% ;height:7%;margin:10px ;background-color:white;border-radius: 50%;font-size: 10px;border:0px;font-weight: bold;font-size:20px;'/>";
					}


				?>
    		</aside>
			<section>
				<form action="../../includes/addquestions.php" method="post">
				<?PHP
				if(isset($c)) {   $fetchqry = "SELECT * FROM 'd15_maths1_1' where id='$c'"; 
					$result=mysqli_query($con,$fetchqry);
					$num=mysqli_num_rows($result);
					$row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
			?>
				<div id="que">
					<h2> Question:- </h2>
					<div >
						<textarea  name="Questions" id="questions"><?php if(isset($post['question']) && !empty($_POST["question"])){ echo $_SESSION['question'];}else{echo 'empty';}?></textarea>
					</div>

					<div id="choice">
						<input type="radio" name="option" value="<?php echo $row['c1'];?>">&nbsp;<?php echo $row['c1']; ?>
						<input type="text" name="ot1" style="width: 30%; padding:8px; border:solid 2px #123456;margin-top:10px;"><br><br>
						<input type="radio" name="option" value="o1">
						<input type="text" name="ot2" style="width: 30%; padding:8px; border:solid 2px #123456;"><br><br>
						<input type="radio" name="option" value="o1">
						<input type="text" name="ot3" style="width: 30%; padding:8px; border:solid 2px #123456;"><br><br>
						<input type="radio" name="option" value="o1">
						<input type="text" name="ot4" style="width: 30%; padding:8px; margin-bottom:0px;border:solid 2px #123456;"><br><br>
					</div>
					<div id="submit">
						<button id="previous" style="background-color:#123456;color:white;margin-left:20px;margin-right:50px;margin-bottom:20px;">Previous</button>
						<button id="next" style="background-color:#123456;color:white;margin-right:50px;">Next</button>
                        <button id="bookmarked" style="background-color:#123456;color:white;margin-right:50px;">Bookmarked</button><br>
                        <button id="last" style="background-color:blue; width:30px;height:30px;margin-right:50px;margin-left:380px;"></button><label>Attempted</label>
                        <button id="last" style="background-color:yellow; width:30px;height:30px;margin-left:50px;"></button><label>Bookmarked</label>
                        <button id="last" style="background-color:white; width:30px;height:30px;margin-left:50px;"></button><label>Unattempted</label>
					</div>
				</div>
			</form>
			</section>
	</body>
</html