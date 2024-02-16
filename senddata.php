<?php

@include("dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = $_POST['add'];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO todoitems (todoitem) VALUES (?)");
    $stmt->bind_param("s", $data);

    $stmt->execute();

    $stmt->close();
    $conn->close();
}

?>