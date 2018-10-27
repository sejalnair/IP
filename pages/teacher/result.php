<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../../quizicon.png" />
    <title>Result</title>
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
        <th>Sr no.</th>
        <th>Sid</th>
        <th>Class</th>
        <th>Marks Scored</th>
        <th>Out of</th>
    </tr>
        <?php 
            include '../../includes/dbh.inc.php';
            $tablename = $_COOKIE['result'];
            $sql = "select * from result where examname = '$tablename';";
            $sql1 = "select count(*) from $tablename;";
            $res = mysqli_query($conn,$sql1);
            $outof = mysqli_fetch_array($res);
            
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $srno = $row['Id'];
                    $sid = $row['Sid'];
                    $class = $row['Class'];
                    $marks = $row['result'];
                    echo "<tr> <td>$srno</td><td>$sid</td><td>$class</td><td>$marks</td><td>$outof[0]</td></tr>";
                }
            }
        ?>
    </table>

</body>
</html>