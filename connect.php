<?php
    $dsn = "mysql:host=localhost; dbname=project; charset=utf8";

    try {
        $con = new PDO($dsn,'root','');
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>