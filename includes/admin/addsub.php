<?php
    include "../../includes/dbh.inc.php";
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $subject = $_POST['subject'];
    $class = $_POST['class'];
    $teacher = $_POST['teacher'];
    $t = mysqli_query($conn,"select Tid from teacher_login where Name='$teacher'"); 
    if(mysqli_num_rows($t)>0){
        while($row= mysqli_fetch_assoc($t)){
            $teacher_id= $row['Tid'];
        }
    }
    $check=mysqli_query($conn,"select * from subject_assigned where Name='$teacher' && class='$class'"); 
    
    mysqli_free_result($t);
    if($subject != ''||$class != ''||$teacher_id !=''){    
        if(mysqli_num_rows($check)>0){
            $sql ="Update subject_assigned set subject='$subject' where (teacher_id='$teacher_id' && class='$class')";    
        }
        else{
            $sql ="INSERT INTO subject_assigned (class, subject, teacher_id) VALUES ('$class', '$subject', '$teacher_id')";
        }
        
        
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
    mysqli_close($conn);
?>

