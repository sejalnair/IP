<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    </style>
    <?php
        include "../../includes/dbh.inc.php";
        session_start();
        $tablename = $_COOKIE['tablename'];
        $sql = "select * from $tablename where Question_no = $questno";
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
    
    <div id="edit">
    <h1>Edit Question No: <?php $questno = $_COOKIE['questno']; echo $questno;?></h1>
    <form action="" method="post">
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
        <input type="submit" name="addquestion" value="Add Question" id="addqbtn" style="background-color:#123456;color:white;font-size: 16px">
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