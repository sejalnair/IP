<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    document.getElementById("defaultOpen").click();
</script>
</head>
<body>
<div id="lo">
    <button id="logoutbtn">Logout</button>
</div>
<div class="btn-group">
    <button class="tablink" onclick="openPage('ADDT', this, '#97025b')"> Add Teacher</button>
    <button class="tablink" onclick="openPage('ADDstu', this, '#97025b')" id="defaultOpen"> Add Student</button>
    <button class="tablink"> Add Subject</button>
</div>
<div id="ADDT" class="tabcontent">
    <form>
        <label>Name :</label>
        <input type="text" placeholder="Name" style="width:370px">
        <br>
        <br>
        <label>Email ID :</label>
        <input type="text" placeholder="Email" style="width:370px">
        <br>
        <br>
        <label>Password :</label>
        <input type="text" style="width:370px">
        <br>
        <br>
        <input type="submit" value="Submit" id="submit">
        <input type="reset" value="Reset" id="reset">
    </form>
</div>
<div id="ADDstu" class="tabcontent">
    <form>
        <label>Name :</label>
        <input type="text" placeholder="First name" > 
        <input type="text" placeholder="Middle name">
        <input type="text" placeholder="Last name">
        <br>
        <br>
        <label>Year :</label>
        <select>
            <option value="FirstYear">First Year</option>
            <option value="SecondYear">Second Year</option>
            <option value="ThirdYear">Third Year</option>
            <option value="FourthYear">Fourth Year</option>
        </select>
        <br>
        <br>
        <label>Class :</label>
        <select>
            <option value="1">D10</option>
        </select>
        <br>
        <br>
        <label>Email ID :</label>
        <input type="text" placeholder="Email" style="width:370px">
        <br>
        <br>
        <label>Password :</label>
        <input type="text" style="width:370px">
        <br>
        <br>
        <input type="submit" value="Submit" id="submit">
        <input type="reset" value="Reset" id="reset">
    </form>
</div>
</body>
</html>