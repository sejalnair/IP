<?php
session_start();
    if($_SESSION['Aid'] === null ||  $_SESSION['EmailId'] === null || $_SESSION['Password'] === null){
        header('Location: ../forbidden.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../../quizicon.png" />
    <link rel="stylesheet" type="text/css" href="../styles/adminHome.css">
    <title>Admin Page</title>
    <script>
    function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

    }
    // Get the element with id="defaultOpen" and click on it
    window.onload = function () {
        startTab();
    };

    function startTab() {
        document.getElementById("defaultOpen").click();
    }

</script>
</head>
<body>
<div id="lo">
    <form action="../../includes/admin/logout.php" method='post'>
    <button name='logout' id="logoutbtn">Logout</button>
    </form>
</div>
<div class="btn-group">
    <button class="tablink" onclick="openPage('ADDT', this, '#97025b')"> Add Teacher</button>
    <button class="tablink" onclick="openPage('ADDstu', this, '#97025b')" id="defaultOpen"> Add Student</button>
    <button class="tablink" onclick="openPage('ADDSub', this, '#97025b')"> Add Subject</button>
</div>
<div id="ADDT" class="tabcontent">
    <h5 class="text-center text-success"></h5>
    <form action="../../includes/admin/addt.php" method="POST" >
        <label>Name :</label>
        <input type="text" placeholder="Name" name="name" style="width:370px" required />
        <br>
        <br>
        <label>Email ID :</label>
        <input type="email" placeholder="Email" name="emailid" style="width:370px" required />
        <br>
        <br>
        <label>Password :</label>
        <input type="text" style="width:370px" name="password" placeholder="Password" required />
        <br>
        <br>
        <input type="submit" value="Submit" id="submit">
        <button type="reset" value="Reset" id="reset">Reset</button>
    </form>
</div>
<div id="ADDstu" class="tabcontent">
    <form action="../../includes/admin/addstu.php" method="POST" >
        <label>Name :</label>
        <input type="text" placeholder="First name" name="fname" required /> 
        <input type="text" placeholder="Last name" name="lname">
        <br>
        <br>
        <label>Roll No. :</label>
        <input type="number" placeholder="Roll No." name="rollno">
        <br>
        <br>
        <label>Class :</label>
        <input list="class" name="class" placeholder="Class">
        <datalist  id="class">
            <option value="D10">D10</option>
            <option value="D15">D15</option>
            <option value="D20">D20</option>
        </datalist>
        <br>
        <br>
        <label>Email ID :</label>
        <input type="text" placeholder="Email" style="width:370px"  name="emailid">
        <br>
        <br>
        <label>Password :</label>
        <input type="text" style="width:370px" name="password" placeholder="Password">
        <br>
        <br>
        <input type="submit" value="Submit" name="submit" id="submit">
        <button type="reset" value="Reset" id="reset">Reset</button>
    </form>
</div>
<div id="ADDSub" class="tabcontent">
    <form action="../../includes/admin/addsub.php" method="POST">
        <label>Subject :</label>
        <input type="text" name="subject" placeholder="Subject Name" style="width:370px">
        <br>
        <br>
        <label>Class :</label>
        <input list="class" name="class" placeholder="Class">
        <datalist  id="class">
            <option value="D10">D10</option>
            <option value="D15">D15</option>
            <option value="D20">D20</option>
        </datalist>
        <br>
        <br>
        <label>Teacher's Name :</label>
        <input type="text" name="teacher" style="width:370px" placeholder="Teacher's Name">
        <br>
        <br>
        <input type="submit" value="Submit" id="submit">
        <button type="reset" value="Reset" id="reset">Reset</button>
    </form>
</div>
</body>
</html>