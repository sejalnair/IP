<!DOCTYPE html>
<html>
<head>
	<title>Quiz-Zone</title>
	<!-- <link rel="stylesheet" type="text/css" href="styles/style.css">  -->
<style>	
	*{
    overflow: hidden;;
} 
#header{
    background-color: #f7eff0;

}
#img{
    margin-left:30px;
    float:left;
}
#img2{
    opacity: 0.1;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}
#nav{
	float:right;
	background:transparent;
}
a{
    padding:10px;
    color:#1323f9;
    /*text-decoration: none;*/
    line-height: 80px;
    margin-top: 100px;
}
a:hover{
    color: #5bdee5;
}
#teacher{
    background-color: #ad9c3a; /* Green */
    border: none;
    color: white;
    padding: 5px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    border-radius: 20px;
    border: 2px solid #fff; 
    margin:30px;
    margin-left:38%;
    margin-top:200px;
	opacity:unset;
	box-shadow: 5px 10px 8px #888888;
}

#student{
    background-color: #ad9c3a; /* Green */
    border: none;
    color: white;
    padding: 5px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    border-radius: 20px;
    border: 2px solid #fff; 
	margin:30px;
	margin-top:10px;
    margin-left:38%;
	opacity:unset;
	box-shadow: 5px 10px 8px #888888;

}

.background{
	position:absolute;
	background-image: url("images/backgrnd.jpg");
	width: 100%;
	height: 100%;
    background-size:cover;
    /* background-color:rgba(0,0,0,0.3); */
	opacity: 0.2; 
}

#teacher ,#student{
	position:relative;
	background-color:#720245;
	opacity:0.8;
}
#teacher:hover{
	background-color:#720245;
	opacity:unset;
}
#student:hover{
	background-color:#720245;
	opacity:unset;
}

</style>
</head>
<body>
	<header>
		<div id="header">
			<img src="images/quiz-zone.png" width="150px" id="img">
			<nav id="nav">
				<a href="#">Home</a> 
				<a href="aboutsus.html">About</a> 
				<a href="aboutsus.html">Contact</a> 
				
			</nav>
		</div>
	</header>
	<section>
		<div id="section">
			<div class="background"></div>
			<!-- <img src="images/backgrnd.jpg" width="100%" id="img2"> -->
			<div class="teacher">
            	<a id="teacher" value="Teacher" name="btn" href="pages/teacher/loginTeacher.php">Login as Teacher</a>
			</div>
			<div>
            	<a id="student" value="Student" name="btn" href="pages/student/loginStudent.php">Login as Student</a>
			</div>
			<div style="height:100%;padding:115px"></div>
		</div>
	</section>
</body>
</html> 