
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
	margin-top: 60px;
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
</style>

</head>
	<body>
			<aside >
			<h1>Question Numbers</h3>
				
			</aside>
			<section>
				<form action="../../includes/addquestions.php" method="post">
				<div id="que">
					<h2>Enter Question:- </h2>
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
						<input type="submit" name="addquestion" value="Add Question" id="addqbtn" style="background-color:#123456;color:white;font-size: 16px">
						<button id="resetbtn" style="background-color:#123456;color:white">Reset</button>
						<button id="finishbtn" style="background-color:#123456;color:white">Finish</button>
					</div>
				</div>
			</form>
			</section>
	</body>
</html