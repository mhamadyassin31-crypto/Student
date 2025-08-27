<?php
    include './includes/connect.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM students WHERE id = :id";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        header('Location: index.php');
    }else{
        header('Location: index.php');
        }
?>