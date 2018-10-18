
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
	margin-top: 15px;
	padding: 10px 15px ;
}
section {
	background-color: #eeeee9;
	width:76.5%;
	height: fit-content;
	float:left;
	margin:10px auto;
}
#question {
	display:block;
	width:90%;
	height:185px;
    border:solid 3px #123456;
	padding:15px;
	font-size:20px;
}
#que {
	margin-top: 30px;
	margin-left: 40px;
	margin-bottom: 10px;

}
#choice{
	display:block;
	padding:10px;
	margin-top: 10px;
	font-size:18px;
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
	display:inline-block;
	padding:5px;
}
#last{
	float:right;
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
					background-color:white;border-radius: 50%;font-size: 10px;border:0px;font-weight: bold;font-size:20px;padding:5px;'/>";
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
				
				$ans = $_COOKIE['answer'];
			?>
			<form action="../../includes/quiz.php" method="POST">
			
			<div id="que">
				<h2> Question:- <?php echo $questno;?></h2>
				<div >
					<label  name="Questions" id="question"><?php echo $question;?></label>
				</div>
				<div id="choice">
					<input type="radio" name="option" value="o1" <?php echo ($ans=='o1')?'checked':'' ?> > 
					<label type="ot1" id="ot1" style="width: 300px; padding:8px; border:solid 2px #123456;"><?php echo $c1;?></label><br><br>
					<input type="radio" name="option" value="o2" <?php echo ($ans=='o2')?'checked':'' ?> >
					<label  name="ot2" id="ot2" style="width:300px; padding:8px; border:solid 2px #123456;"><?php echo $c2;?></label><br><br>
					<input type="radio" name="option" value="o3" <?php echo ($ans=='o3')?'checked':'' ?>>
					<label  name="ot3" id="ot3" style="width : 300px; padding:8px; border:solid 2px #123456;"><?php echo $c3;?></label><br><br>
					<input type="radio" name="option" value="o4" <?php echo ($ans=='o4')?'checked':'' ?>>
					<label type="text" name="ot4" id="ot4" style="width: 300px; padding:8px; border:solid 2px #123456;"><?php echo $c4;?></label><br><br>
					</div>
					<div id="submit">
						<button id="previous" name="previous" style="background-color:#123456;color:white;margin-left:20px;margin-right:50px;margin-bottom:20px;">Previous</button>
						<button id="next" name="next" style="background-color:#123456;color:white;margin-right:50px;">Next</button>
                        <button id="bookmarked" name="bookmark" onClick="cColor()" style="background-color:#123456;color:white;margin-right:50px;">Bookmarked</button><br>
                        <label id="last">Unattempted</label><button id="last" style="background-color:white; width:30px;height:30px;margin-left:50px;"></button>
						<label id="last">Bookmarked</label><button id="last" style="background-color:yellow; width:30px;height:30px;margin-left:50px;"></button>
						<label id="last">Attempted</label><button id="last" style="background-color:blue; width:30px;height:30px;;margin-left:380px;"></button>
                        
                        
					</div>
				</div>
			</form>
			</section>
			<script>
				window.onload = function () {
					colorChange();
				};

			function colorChange(){
				var count= '<?php echo $count?>';
				var i;
				for (i=0;i<=count;i++){
					var property = getElementByName(i);
					if(document.getElementByName('option').checked){
							property.style.backgroundColor=blue;
					}
				}
			}

			function cColor(){
				var i='<?php echo $questno; ?>';
				document.getElementByName(i).style.backgroundColor=yellow;
			}
			</script>
	</body>
</html>
