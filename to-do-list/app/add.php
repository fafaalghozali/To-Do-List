<?php

if(isset($_POST['title'], $_POST['deadline'], $_POST['status'])) {
    require '../db_conn.php';

    $title = $_POST['title'];
    $deadline = $_POST['deadline'];
    $status = $_POST['status'];

    if(empty($title)){
        header("Location: ../index.php?mess=error");
    } else {
        // Update query to insert deadline and status
        $stmt = $conn->prepare("INSERT INTO todos (title, deadline, status) VALUES (?, ?, ?)");
        $res = $stmt->execute([$title, $deadline, $status]);

        if($res){
            header("Location: ../index.php?mess=success"); 
        } else {
            header("Location: ../index.php");
        }
        $conn = null;
        exit();
    }
} else {
    header("Location: ../index.php?mess=error");
}
