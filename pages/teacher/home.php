<?php
    include '../../includes/teacherlogin.php';
    // include '../../includes/createquiz.php';
    if($_SESSION['Tid'] === null || $_SESSION['Name'] === null || $_SESSION['EmailId'] === null || $_SESSION['Password'] === null){
        header('Location: ../forbidden.php');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Quiz Zone (Teacher page)</title>
    <!-- <link rel="stylesheet" type="text/css" href="../styles/teacherHome.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            color:#fff;
            font-style: Arial;    
            margin: 1px;  
         }
         #content{
            display:grid;
            grid-template-columns: repeat(3,1fr);
            grid-template-rows: repeat(11,minmax(30px,auto))
            margin:0 auto;
            grid-row-gap: 10px;
            grid-column-gap: 8px;
            margin 0px auto;

         }
         #content header{
            padding:5px;
            background-color: #720245;
            grid-column: 1 / 4;
         }
         #content section{
            padding:30px;
            background-color: #720245;
            grid-column: 1 / 3;
            grid-row:2/7;
            display: flex;
            justify-content: space-around;
         }
         #content aside{
            padding:30px;
            background-color: #eee9;
            grid-column:  3/ 5;
            grid-row: 2/ 11;
         }
         #content div{
            padding:10px;
            background-color: #eee9;
            grid-column: 1/3;
            grid-row: 7/ 11;
            height: 100%;
         }  
         label{
            float:left;
            font-size: 20px;
            font-weight: bold;
         }
         header > button {
            float:right;
            background-color: #eeee;
            border: none;
            color: white;
            padding: 8px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 20px;
            border: 2px solid #fff; 
            width:180px;
           margin:10px;
         }
        button:hover {
            background-color: #eee; /* Green */
            color: white;
        }
        button:active { 
            background-color: #eee;
        }
         section > select ,section > input {
            padding: 2px 10px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 20px;
            border: 2px solid #fff; 
            width:190px;
            background-color: #eee;
            margin-right:15px;
         }
         section>h4{
             margin:20px;
         }
         #rndbtn{
            width:18% ;
            height:39%;
            background-color:#720245;
            color:white;
            margin-left:200px;
            margin-top:200px;
            border-radius: 50%;
            font-size: 16px;
            border:0px;
            cursor:pointer;
			}

        #oldquiz{
            width:100%;
            display:inline-block;
            text-align:center;
        }
        h2{
            color:black;
            padding:10px;
            background-color:#f4511e;
            font-size:30px;
        }
        #quizzes{
            width:99%;
            /* padding:5px;
            text-align:center;
            font-size:20px;
            margin-bottom:5px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); */
            /* background-color: #4CAF50; Green */
            /* background-color: #4CAF50; Green */
            border: none;
            color: black;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }
        #quizzes:hover {background-color: #720245;}
        #curso{
            color:black;
            cursor: pointer;
            
        }
        aside {
        /* background-color: #123456; */
        height:530px;
        border:2px solid #123456;
        overflow:auto
    }
    #res{
        text-align:center;
        color:black;
        font-size:28px;
        margin-top:0px;

    }
        #viewresult{
            width:100%;
            display:inline-block;
            background-color: white; 
            color: black; 
            font-size:18px;
            padding:10px;
            margin:2px; 
            background-color:#f4511e;
            cursor:pointer
        } 
        #viewresult:hover{
            background-color:#f4545e;
        }
    </style>

</head>

<body>
    <form action="../../includes/createquiz.php" method="post">
    <div id="content">
        <header > 
            <label>Name:  <?php echo $_SESSION['Name']?></label>
                    <button name='changepassword' id='curso'>Change Password</button>
                    <button name='logout' id='curso' >Logout</button>
                
        </header>
        <section id="section">
            <h4>Class:</h4><br>
            <select id="classname" name="class" label="hello">
                <option value="d10">D10</option>
                <option value="d15">D15</option>
                <option value="d20">D20</option>
            </select>
            <h4>Subject:</h4><br>
            <br><select id="subject" name="subject">
                <option value="maths1">Maths-1</option>
                <option value="ld">Logic Design</option>
                <option value="dsa">DSA</option>
                <option value="dbms">DBMS</option>
            </select>
            <h4>Time: </h4>
            <input id="time" type="time" name="exam_time">
            <h4>Date: </h4>
            <input id="date" type="date" name="exam_date">
        </section>
        <aside id="aside">
                <h1 id='res'>View Result</h1>
                <!-- <input type="button" name="Sub1" value="History1" style="width:100% ; size: 30px;padding:20px;background-color:#720245;color:white;margin: 5px;" /> 
                <input type="button" name="Sub2" value="History2" style="width:100% ;size: 30px;padding:20px;background-color:#720245;color:white; margin: 5px;" />
                <input type="button" name="Sub3" value="History3" style="width:100%;size: 30x;padding:20px;background-color: #720245;color:white;margin: 5px;" />
                <input type="button" name="Sub4" value="History4" style="width:100% ;size: 30pxs;padding:20px;background-color: #720245;color:white;margin: 5px;" /> -->
                <?php 
                    include '../../includes/dbh.inc.php';
                    $tid = $_SESSION['Tid'];
                    $sql = "select * from teacherquiz where Tid = $tid";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                            $tbname = $row['quizname'];
                            if(strpos($tbname,'d10') !== false){
                                $sql = "select * from d10 where Tablename = '$tbname'";
                                $res = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($res)>0){
                                    while($rowi = mysqli_fetch_assoc($res)){
                                        $title = $rowi['Title'];
                                        $subtitle = $rowi['Subtitle'];
                                        $class = $rowi['Class'];
                                        $examdate = $rowi['Examdate'];
                                        echo "<button id='viewresult' name='result' value='$tbname'>Class : $class <br>Title : $title</button><br>";
                                    }
                                }
                            }
                            else if(strpos($tbname,'d15') !== false){
                                $sql = "select * from d15 where Tablename = '$tbname'";
                                $res = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($res)>0){
                                    while($rowi = mysqli_fetch_assoc($res)){
                                        $title = $rowi['Title'];
                                        $subtitle = $rowi['Subtitle'];
                                        $class = $rowi['Class'];
                                        $examdate = $rowi['Examdate'];
                                        echo "<button id='viewresult' name='result' value='$tbname'>Class : $class <br>Title : $title</button><br>";
                                    }
                                }
                            }
                            else{
                                $sql = "select * from d20 where Tablename = '$tbname'";
                                $res = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($res)>0){
                                    while($rowi = mysqli_fetch_assoc($res)){
                                        $title = $rowi['Title'];
                                        $subtitle = $rowi['Subtitle'];
                                        $class = $rowi['Class'];
                                        $examdate = $rowi['Examdate'];
                                        echo "<button id='viewresult' name='result' value='$tbname'>Class : $class <br>Title : $title</button><br>";
                                    }
                                }
                            }
                        }
                        
                    }
                ?>
        </aside>
        <div style="height:450px;">

            <label style="color:#123456;">Title: <input type="text" style="width:100%;text-align:center" name="title"> </label> 
           
            <label style="color:#123456;float:right">Sub Title: <input type="text" style="width:100%;" name="subtitle"></label> <br><br>
            
            <input type="submit" onclick="createquiz()" value="CREATE QUIZ" name="createqz" id="rndbtn">

        </div>
    </div>
    </form>
    <div id='oldquiz'>
        <h2>Previous Created Quiz</h1>
        <form action="../../includes/display.php" method="post" autocomplete="on">
        <?php 
            include '../../includes/dbh.inc.php';
            $tid =  $_SESSION['Tid'];
            $sql  = "select * from teacherquiz where Tid = $tid order by Id desc;";
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    print_r($row);
                    $tablename =  $row['quizname'];
                    if(strpos($tablename,'d10') !== false){
                        $sql = "select * from d10 where Tablename = '$tablename'";
                        $res = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($res)>0){
                            while($rowi = mysqli_fetch_assoc($res)){
                                $title = $rowi['Title'];
                                $subtitle = $rowi['Subtitle'];
                                $class = $rowi['Class'];
                                $examdate = $rowi['Examdate'];
                                echo "<button type='submit' name='quest' id='quizzes' value='$tablename'><pre><h3>Title: $title                   Subtitle: $subtitle
                                    </h3><h4>      Class: $class                        Exam Date: $examdate</h4></button></pre>";
                            }
                        }
                    }
                    if(strpos($tablename,'d15') !== false){
                        $sql = "select * from d15 where Tablename = '$tablename'";
                        $res = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($res)>0){
                            while($rowi = mysqli_fetch_assoc($res)){
                                $title = $rowi['Title'];
                                $subtitle = $rowi['Subtitle'];
                                $class = $rowi['Class'];
                                $examdate = $rowi['Examdate'];
                                echo "<button type='submit' name='quest' id='quizzes' value='$tablename'><pre><h3>Title: $title                   Subtitle: $subtitle
                                    </h3><h4>      Class: $class                        Exam Date: $examdate</h4></button></pre>";
                            }
                        }
                    }
                    if(strpos($tablename,'d20') !== false){
                        $sql = "select * from d20 where Tablename = '$tablename'";
                        $res = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($res)>0){
                            while($rowi = mysqli_fetch_assoc($res)){
                                $title = $rowi['Title'];
                                $subtitle = $rowi['Subtitle'];
                                $class = $rowi['Class'];
                                $examdate = $rowi['Examdate'];
                                echo "<button type='submit' name='quest' id='quizzes' value='$tablename'><pre><h3>Title: $title                   Subtitle: $subtitle
                                    </h3><h4>      Class: $class                        Exam Date: $examdate</h4></button></pre>";
                            }
                        }
                    }
                }
            }
        ?>
        </form>
    </div>
</body>

</html>