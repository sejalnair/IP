<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_COOKIE['displaytable']; ?></title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}
    button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }   
    button2 {background-color: #008CBA;} /* Blue */
</style>
</head>
<body>
    <form action="../../includes/display.php" method='post'>
        <button type="submit" name="back">Back</button>
    </form>
    <table>
    <tr>
        <th>Question no</th>
        <th>Question</th>
        <th>Choice 1</th>
        <th>Choice 2</th>
        <th>Choice 3</th>
        <th>Choice 4</th>
        <th>Answer</th>
    </tr>
        <form method='post' action='../../includes/update.php'>
        <?php 
            include '../../includes/dbh.inc.php';
            $tablename = $_COOKIE['displaytable'];
            $sql = "select * from $tablename;";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    $quest_no = $row['Question_no'];
                    $quest = $row['Question'];
                    $c1 = $row['C1'];
                    $c2 = $row['C2'];
                    $c3 = $row['C3'];
                    $c4 = $row['C4'];
                    $ans = $row['Answer'];
                    echo "<tr> <td>$quest_no</td><td>$quest</td><td>$c1</td><td>$c2</td><td>$c3</td><td>$c4</td><td>$ans</td><td><button type='submit' id='edit' value='$quest_no' name='quest_no'>Edit</button></td></tr>";
                }
            }
        ?>
        </form>
    </table>

</body>
</html>