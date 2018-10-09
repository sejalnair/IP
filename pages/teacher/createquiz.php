
<!Doctype html>
<html>
<head>
<title>Add Questions</title>
<meta charset="UTF-8"/>

<style type="text/css">
aside {
	/* background-color: #123456; */
	width:20%;
	height:620px;
	float:left;
	margin:20px;
	margin-top: 20px;
	border:2px solid black;
	overflow:auto;
}
section {
	background-color: #eeeee9;
	width:70%;
	height: 625px;
	float:left;
	margin:20px auto;
}
#questions {
	width:90%;
	height:200px;
    border:solid 3px #123456;
	 
}
#que {
	margin-top: 30px;
	margin-left: 40px;
	margin-bottom: 10px;
	font-size: 16px;

}
#choice{
	padding:20px;

}
button{
	font-size: 16px;
	padding:5px;
}
#finishbtn{
	float:right;
	margin: 20px;
}
#resetbtn{
	margin-left: 25px;
}
#addqbtn{
	margin-left:44px;
}
input[type="text"],{
	width: 20px;
}
#quest{
	padding:0px;
}
#btn{
	width:100%;
	display:inline-block;
	background-color: white; 
    color: black; 
	font-size:20px;
	padding:10px;
	height:60px;

}
#btn:hover {
    background-color: #97025b;
    color: white;
}
#btn1{
	background-color: white; 
	color: black; 
	border: 2px solid #97025b;
	font-size:20px;
	margin-left:50px;
}

#btn1:hover {
	background-color: #97025b;
	color: white;
}

h1{
	text-align:center;
}
#head{
	width:100%;
	background-color:#97025b;
	padding:10px;
	margin-left:20px;
	margin-right:20px;
}
#btn3{
	background-color: #97025b; 
	color: white; 
	border: 2px solid #97025b;
	font-size:20px;
	margin-right:50px;
	padding:10px;
}

#btn3:hover {
	background-color: #f4511e;
	color: white;
}

</style>

</head>
	<body>
	<div id='head'>
			<form  action="../../includes/addquestions.php" method="post">
			<input type="submit" onclick="callme()" name="home" value="Home" id="btn3" >
			</form>
	</div>
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
						echo "<button name='questno' id='btn' value='$rowno' >Question No: ".$row['Question_no']."</h1>";
						$num = $row['Question_no'];
					}
				}
			?>
			</form>
			</aside>
			<section>
			
				<form action="../../includes/addquestions.php" method="post">
				<div id="que">
					<h2>Enter Question:- <?php echo $num+1?></h2>
					<div >
						<textarea  name="question" id="questions"></textarea>
					</div>
					<div id="choice">
						<input type="radio" name="option" value="a">
						<input type="text" name="ot1" style="width: 30%; padding:8px; border:solid 2px #123456;"><br><br>
						<input type="radio" name="option" value="b">
						<input type="text" name="ot2" style="width: 30%; padding:8px; border:solid 2px #123456;"><br><br>
						<input type="radio" name="option" value="c">
						<input type="text" name="ot3" style="width: 30%; padding:8px; border:solid 2px #123456;"><br><br>
						<input type="radio" name="option" value="d">
						<input type="text" name="ot4" style="width: 30%; padding:8px; border:solid 2px #123456;"><br><br>
					</div>
					<div>
						<input type="submit" name="addquestion" value="Add Question" id="btn1" >
						<input type="submit" name="reset" value="Reset" id="btn1">
						<input type="submit" name="finish" value="Finish" id="btn1" style="float:right;margin-right:50px;">
						
					</div>
				</div>
			</form>
			</section>
	</body>
</html