
<!Doctype html>
<html>
<head>
<title>Quiz</title>
<meta charset="UTF-8"/>

<style type="text/css">
*{
	box-sizing: border-box;
}
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
#question {
	display:block;
	width:90%;
	height:220px;
    border:solid 3px #123456;
	 
}
#que {
	margin-top: 30px;
	margin-left: 40px;
	margin-bottom: 10px;
	font-size: 16px;

}
#choice{
	display:block;
	padding:10px;
	margin-top: 20px;
}
button{
	font-size: 16px;
	padding:5px;
}

input[type="text"]{
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
label{
	display:block;
}
</style>
</head>
	<body>
        <header>
            <div id="header">
                <h2 style="color:white;padding:5px;">Quiz Title: <?php echo $_COOKIE['title']?> </h2>
                <input id="time" type="time" name="remaining_time " style="float:right">
                <label  style="color:white;padding:5px;float: right;">Remaining Time:</label>
               
            </div>
        </header>
		<aside >
		<form action="../../includes/quiz.php" method="POST">
			<?php 
				 
				include '../../includes/dbh.inc.php';
				$examname =  $_COOKIE['examname'];
				$sql = "select * from $examname;";
				$result1 = mysqli_query($conn,$sql);
				$count = mysqli_num_rows($result1);

				for($i=1;$i<=$count;$i++){
					echo "<input type='submit' name='questionbtn' value='$i' style='width:14% ;height:7%;margin:10px ;
					background-color:white;border-radius: 50%;font-size: 10px;border:0px;font-weight: bold;font-size:20px;'/>";
				}
			?>
			</form>
		</aside>
		<section>
			<?php
				$questno = $_COOKIE['QuestionNo'];
				$sql1 = "select * from $examname where Question_no=$questno;";
				$result = mysqli_query($conn,$sql1);

				$data = mysqli_fetch_array($result);
				if (!$data) {
					printf("Error: %s\n", mysqli_error($conn));
					exit();
				}
				$question = $data[1];
				$c1 = $data[2];
				$c2 = $data[3];
				$c3 = $data[4];
				$c4 = $data[5];
				
			?>
			<form action="" method="post">
			<div id="que">
				<h2> Question:- <?php echo $questno;?></h2>
				<div >
					<label  name="Questions" id="question"><?php echo $question;?></label>
				</div>
				<div id="choice">
					<input type="radio" name="option" value="o1">
					<label type="ot1" id="ot1" style="width: 200px; padding:8px; border:solid 2px #123456;margin-top:10px;"></label>
					<input type="radio" name="option" value="o2">
					<label  name="ot2" id="ot2" style="width:200px; padding:8px; border:solid 2px #123456; margin-top:10px;"></label>
					<input type="radio" name="option" value="o3">
					<label  name="ot3" id="ot3" style="width : 200px; padding:8px; border:solid 2px #123456; margin-top:10px;"></label>
					<input type="radio" name="option" value="o4">
					<label type="text" name="ot4" id="ot4" style="width: 200px; padding:8px; margin-bottom:0px;border:solid 2px #123456;margin-top:10px;"></label>
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
			<script>
        document.getElementById('question').textContent = "<?php echo $question;?>";
        document.getElementById('ot1').textContent = "<?php echo $c1;?>";
        document.getElementById('ot2').textContent = "<?php echo $c2;?>";
        document.getElementById('ot3').textContent = "<?php echo $c3;?>";
        document.getElementById('ot4').textContent = "<?php echo $c4;?>";
        // if("<?php echo $ans;?>" ==='a'){
        //     document.getElementById('ck1').checked = true;
        // }else if("<?php echo $ans;?>" ==='b'){
        //     document.getElementById('ck2').checked= true;
        // }else if("<?php echo $ans;?>" ==='c'){
        //     document.getElementById('ck3').checked= true;
        // }else if("<?php echo $ans;?>" ==='d'){
        //     document.getElementById('ck4').checked= true;
        // }

    </script>

	</body>
</html>
