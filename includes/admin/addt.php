<?php
    include "../../includes/dbh.inc.php";
    // Check connection
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $name = $_POST['name'];
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    //mysqli_free_result($t);
    if($name != ''||$emailid != ''||$password !=''){    
        
        $sql ="INSERT INTO teacher_login (name, emailid, password) VALUES ('$name', '$emailid', '$password')";
        if(mysqli_query($conn,$sql) === TRUE) {
            echo '<script language="javascript">';
            echo 'confirm("New record created successfully")';
            echo '</script>';
            echo '<script language="javascript">';
            echo "window.location = ('../../pages/admin/home.php');\n";
            echo '</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        
    header("Location: ../../pages/admin/home.php");

    }
    echo '<script language="javascript">';
    echo 'alert("Name or EmailID or Password not entered")';
    echo '</script>';
    mysqli_close($conn);
?>

