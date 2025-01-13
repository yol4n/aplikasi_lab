<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM samples WHERE id = $id";

    if ($conn->query($query)) {
        header('Location: index.php');
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
