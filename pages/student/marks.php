
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../../quizicon.png" />
    <title>Marks</title>
    <style>
        div {
            margin:0 auto;
            text-align:center;
        }
        h1{
            font-size:100px;
        }
        h3{
            font-size:70px;
        }
        button{
            font-size:20px;
            padding:10px;
            background-color:#720245;
            color:white;
        }
    </style>
</head>
<body>
    <div>
        <h1>Result</h1>
        <h3>You have scored:- <?php echo $_COOKIE['marks']?></h3>
        <form action="../../includes/gotohome.php" method='post'>
            <button name='home'>Home</button>
        </form>
    </div>
</body>
</html>