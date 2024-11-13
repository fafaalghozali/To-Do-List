<?php

if (isset($_POST['id'])) {
    require '../db_conn.php';

    $id = $_POST['id'];

    if (empty($id)) {
        echo 0;
    } else {
        // Prepare and execute the delete query
        $stmt = $conn->prepare("DELETE FROM todos WHERE id = ?");
        $res = $stmt->execute([$id]);

        // Check if the query was successful
        if ($res) {
            echo 1;
        } else {
            echo 0;
        }

        $conn = null;
        exit();
    }
} else {
    header("Location: ../index.php?mess=error");
}
