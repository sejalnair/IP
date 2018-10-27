<!DOCTYPE html>
<html>
<head>
	<title>Quiz-Zone</title>
	<!-- <link rel="stylesheet" type="text/css" href="styles/style.css">  -->
	<link rel="icon" href="quizicon.png" />
	<link href='https://fonts.googleapis.com/css?family=Libre Baskerville' rel='stylesheet'>
<style>	
body{
	margin:1px;
}
	*{

    overflow: hidden;;
} 
#header{
	background-color: #f7eff0;
	padding:10px;

}
#img{
    margin-left:30px;
	float:left;
	margin-right:10px;
	/* padding:10px; */

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
img{
	padding-left:20px;
}
body{
	background-color:#9b0d62;
	/*720245;*/

}
.tm_header{
	background-color:white;
}
.tm_nav ul li  {
	display:inline-block;
	padding:10px;
}
.tm_nav ul li a  {
	text-decoration:none;
	line-height:100px;
	color:black;
	font-size: 40px;
}
.tm_nav{
	float:right;
}
.tm_nav ul li a:hover{
	color:blue;
}
.tm_nav ul li a:visited{
	color:#720245;
}
.tm_conatiner0{
	max-width:1100px;
	margin:0 auto;
	background-color:white;
	}
.tm_conatiner{
	max-width:1100px;
	margin:0 auto;
	background-color:white;
	padding:30px;
	height:100%;
	}
.tm_conatiner1{
	max-width:1100px;
	margin:0 auto;
	margin-left:200px;
	margin-bottom:5px;
	}	
img{
	padding-right:50px;
	max-width:100%
	}	
p,h1,h2,h3,h4{
	margin-left:40px
	
}
ul{
	margin-left:20px;
}
.img1{
	width:200px;
    border-radius: 50%;
    margin:20px;
    margin-left:100px;

}
.img2{
	width:200px;
	height:220px;
    border-radius: 50%;
    margin:20px;


}
.img3{
	width:200px;
    border-radius:50%;
    height:220px;
    margin:20px;

}
.header1{
    margin-top:10px;
	margin-left: 170px;
}
.header2{
	margin-left: 100px;
}
.header3{
	margin-left: 100px;
}

#nav{
	float:right;
    background:transparent;
    padding:20px;
    text-decoration:none;
    font-size:20px;

}
#nav > a{
    padding:10px;
    color:black;
}
p{
    font-size:15px;
    font-family:Libre Baskerville;

}
</style>
</head>
<body>
	<header>
		<div id="header">
			<img src="quizicon.png" width="70px" id="img">
			<label style='font-size:50px;font-family:Libre Baskerville;color:#720245'>Quiz Zone</label>
			<!-- <img src="images/quiz-zone.png" width="150px" id="img"> -->
			<nav id="nav">
				<a href="index.php">Home</a> 
				<a href="#">About</a> 		
			</nav>
		</div>
    </header>
    <section>
    <div class="tm_conatiner">
    <center><h1>THE QUIZ ZONE</h1></center>
      <p>Quiz Zone is the educational website which provides a different aspect to the quizes held in classrooms.
      This website not only allows the students to test their intelligence through various quiz but also allows teachers to create quiz according to their convenience.The website provide different logins for student,teacher as well as admin providing another level of security.Admin can add teacherand student as and when required.Our website provides a whole new way to classroom learning with real life interactive and attractive sessions over web.</p> 
    <center><h1>MEET US</h1></center>
    <aside>
    <div class="about" style="float: left;">
      <img src="raj.jpg" class="img1">
      <h3 class="header1">Raj Madheshia<h3>
      <h4 class="header1">Web Developer<h4>
    </div>
    <div class="about1"  style="float: left;">
      <img src="pranali.jpg" class="img2">
      <h3 class="header2">Pranali Patil<h3>
      <h4 class="header2">Web Developer<h4>
    </div>
      <div class="about1"  style="float: left;">
      <img src="sejal4.jpg" class="img3">
      <h3 class="header3">Sejal Nair<h3>
      <h4 class="header3">Web Developer<h4>
    </div>
    </aside>
    </section>
	
</body>
</html> 