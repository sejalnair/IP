<?php
    include '../../includes/teacherlogin.php';
    // include '../../includes/createquiz.php';
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
            padding:20px 10px 20px 10px;
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
             margin:10px 10px;
         }
         #rndbtn{
            width:18% ;
            height:39%;
            background-color:#123456;
            color:white;
            margin-left:300px;
            margin-top:200px;
            border-radius: 50%;
            font-size: 16px;
            border:0px;
			-webkit-animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			-moz-animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			-ms-animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			}

		@-webkit-keyframes zoom-in-out {
			0%{ -webkit-transform: scale(1); transform: scale(1.5); }
			50%{ -webkit-transform: scale(1.08); transform: scale(1.08); }
			100%{ -webkit-transform: scale(1); transform: scale(1.5); }
			}

		@keyframes zoom-in-out {
			0%{ -ms-transform: scale(1); transform: scale(1.5); }
			50%{ -ms-transform: scale(1.08); transform: scale(1.08); }
			100%{ -ms-transform: scale(1); transform: scale(1.5); }
        }
        @media screen and (max-width: 640px) {
            #content{
                width:100%;
            }
            #section{
                flaot:left;
                width:100%;
            }
            #aside{
                grid-row:1/5;
                float:left;
                width:100%; 
            }

        }
    </style>

</head>

<body>
    <form action="../../includes/createquiz.php" method="post">
    <div id="content">
        <header > 
            <label id="name">Name:  <?php echo $_SESSION['Name']?></label>
            <button >Change Password</button>
            <button>Logout</button>
        </header>
        <section id="section">
            <h4>Class:</h4><br>
            <select id="classname" name="class" label="hello" style="width:fit-content">
                <option value="d10">D10</option>
                <option value="d15">D15</option>
                <option value="d20">D20</option>
            </select>
            <h4>Subject:</h4><br>
            <br><select id="subject" name="subject" style="width:fit-content">
                <option value="maths1">Maths-1</option>
                <option value="ld">Logic Design</option>
                <option value="dsa">DSA</option>
                <option value="dbms">DBMS</option>
            </select>
            <h4>Time: </h4>
            <input id="time" type="time" name="exam_time" style="width:fit-content">
            <h4>Date: </h4>
            <input id="date" type="date" name="exam_date" style="width:fit-content">
        </section>
        <aside id="aside">
                <input type="button" name="Sub1" value="History1" style="width:100% ; size: 30px;padding:20px;background-color:#720245;color:white;margin: 5px;" /> 
                <input type="button" name="Sub2" value="History2" style="width:100% ;size: 30px;padding:20px;background-color:#720245;color:white; margin: 5px;" />
                <input type="button" name="Sub3" value="History3" style="width:100%;size: 30x;padding:20px;background-color: #720245;color:white;margin: 5px;" />
                <input type="button" name="Sub4" value="History4" style="width:100% ;size: 30pxs;padding:20px;background-color: #720245;color:white;margin: 5px;" />
        </aside>
        <div>

            <label style="color:#123456;">Title: <input type="text" name="title"> </label> 
           
            <label style="color:#123456;float:right">Sub Title: <input type="text" name="subtitle"></label> <br><br>
            
            <input type="submit" onclick="createquiz()" value="CREATE QUIZ" name="createqz" id="rndbtn" >

        </div>
        <div style="grid-row:auto;"></div>
    </div>
    </form>
</body>

</html>