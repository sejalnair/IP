<?php 
	include "../../includes/dbh.inc.php";
	session_start();
	 if($_SESSION['Tid'] === null || $_SESSION['Name'] === null || $_SESSION['EmailId'] === null || $_SESSION['Password'] === null){
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
    <title>Edit: <?php $questno = $_COOKIE['questno']; echo $questno; ?></title>
    <style>
        #edit{
            margin-left:15%;
            margin-right:15%;
            background-color:#eeeee9;
            height:600px;
            text-align:center;
        }
        #txtarea{
            width:90%;
	        height:200px;
            border:solid 3px #123456;
        }
        #choice{
	        padding:20px;
        }
        #btn {
            background-color: white; 
            color: black; 
            border: 2px solid #97025b;
            font-size:20px
        }

        #btn:hover {
            background-color: #97025b;
            color: white;
        }
            </style>
    <?php
        include "../../includes/dbh.inc.php";
        $quest_no = $_COOKIE['quest_no']; 
        $tablename = $_COOKIE['displaytable'];
        $sql = "select * from $tablename where Question_no = $quest_no";
        $result= mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($result);
        $question = $data[1];
        $c1 = $data[2];
        $c2 = $data[3];
        $c3 = $data[4];
        $c4 = $data[5];
        $ans = $data[6];
    ?>
    
<!-- 'document.getElementById("txtarea").value = "Query did not work"' -->

</head>
<body>
    <br><br><br>
    <div id="edit">
    <h1>Edit Question No: <?php echo $quest_no;?></h1>
    <form action="../../includes/questionupdate.php" method="post">
    <textarea  name="question" id="txtarea"></textarea>
    <div id="choice">
        <input type="radio" id="ck1" name="option" value="a" >
        <input type="text" id="ot1" name="ot1"  style="width: 30%; padding:8px; border:solid 2px #123456;"><br><br>
        <input type="radio" id="ck2" name="option" value="b" >
        <input type="text" id="ot2" name="ot2" style="width: 30%; padding:8px; border:solid 2px #123456;"><br><br>
        <input type="radio" id="ck3" name="option" value="c">
        <input type="text"  id="ot3" name="ot3" style="width: 30%; padding:8px; border:solid 2px #123456;"><br><br>
        <input type="radio" id="ck4" name="option" value="d">
        <input type="text" id="ot4" name="ot4" style="width: 30%; padding:8px; border:solid 2px #123456;"><br><br>
    </div>
    <div>
        <input type="submit" name="update" value="Update Question" id="btn" >
        <input type="submit" name="backbutton" value="Go Back" id="btn" >
    </div>
    </form>
    </div>
    <script>
        document.getElementById('txtarea').value = "<?php echo $question;?>";
        document.getElementById('ot1').value = "<?php echo $c1;?>";
        document.getElementById('ot2').value = "<?php echo $c2;?>";
        document.getElementById('ot3').value = "<?php echo $c3;?>";
        document.getElementById('ot4').value = "<?php echo $c4;?>";
        if("<?php echo $ans;?>" ==='a'){
            document.getElementById('ck1').checked = true;
        }else if("<?php echo $ans;?>" ==='b'){
            document.getElementById('ck2').checked= true;
        }else if("<?php echo $ans;?>" ==='c'){
            document.getElementById('ck3').checked= true;
        }else if("<?php echo $ans;?>" ==='d'){
            document.getElementById('ck4').checked= true;
        }

    </script>
</body>
</html>