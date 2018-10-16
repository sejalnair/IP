
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Error.... Your are not allowed to direct access of any pages</h1>
        <button id='back'>Back to home page</button>
        <script type="text/javascript">
            document.getElementById("back").onclick = function () {
                location.href = "../index.php";
            };
        </script>
    </div>
    
</body>
</html>