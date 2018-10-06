<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
<style>
*{
    box-sizing: border-box;
    
}

.row{
    width: 100%;
    height: 60%;
    margin-left: 7%;
    overflow: hidden;
}

.col-4{
    background-color: #e7b3ff;
    width: 28%;
    height: inherit;
    float:left;
    margin-right: 10px;
    padding: 25px;
    font-size: 28px;
    border:5px solid #720245;
    padding-left: 60px;
}
.col-4:hover{
    background: #720245;
    
}
a{
    color: black;
    text-decoration: none;
    display: block;
    height: 100%;
    width: 100%;
    text-decoration: none;
}
a:hover{
    color:white;
}

iframe{
    border: none;
    width:85.3%;
    height:100%;
    min-height: 750px;
    overflow: hidden;
    margin-top:15px;
}
button{
    float:right;
    background: #720245;
    color:white;
    width: 150px;
    border-radius: 25px;
    margin-right: 110px;
    padding:10px;
    font-size: 16px;
    margin-bottom: 10px;
}

</style>
</head>
<body>
<div>
<button>Logout</button>
</div>
<section>
	<div class="row">
        <div class="col-4" id="firstdiv">
            <a href="./addteacher.php" target="bellow">Add Teacher</a>
        </div>
        <div class="col-4" >
                <a href="./addstudent.php" target="bellow">Add Student</a>
        </div>
        <div class="col-4">
                <a href="" target="bellow">Add Subject</a>
        </div>
        <br>
        <iframe src="./addstudent.php" name="bellow" scrolling="no"></iframe>
	</div>
</section>
</body>
</html>