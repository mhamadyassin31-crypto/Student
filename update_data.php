<?php
    include './includes/connect.php';

    if(isset($_POST['getData'])) {
        $id = $_POST['id'];
        $name = $_POST['fname'];
        $city = $_POST['city'];
        $age = $_POST['age'];
        $sql = "UPDATE students SET student_name = :fname , student_city = :city, 
        student_age = :age WHERE id= :id";

        $stmt = $con->prepare($sql);
        $stmt->execute([":fname"=>$name, ":city"=>$city, ":age"=>$age, ":id"=>$id]);
            header('Location: index.php');
    }else{
        header('Location: index.php');
    }
?>