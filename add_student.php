<?php
    include './connect.php';

    if(isset($_POST['add'])){
        if(empty($_POST['fname']) || empty($_POST['city']) || empty($_POST['age'])) {
            echo "One or more fields are empty";
        }else{  
            $name = $_POST['fname'];
            $city = $_POST['city'];
            $age = $_POST['age'];
            $sql = "INSERT INTO students (student_name, student_city, student_age)
            VALUES (:fname, :city, :age)";
            $stmt = $con->prepare($sql);

            $stmt->execute([":fname"=>$name ,":city"=>$city , ":age"=>$age]);

            header('location: ../index.php');
    
        }
        
    } else {
        header('location: ../index.php');
    }
    
?>