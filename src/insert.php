<?php
include "db_connection.php";
$conn = OpenCon();

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$description = $_POST['description'];
$title = $_POST['title'];


$query = "INSERT INTO posty (name, surname, email, description, title)
            VALUES ('{$name}','{$surname}','{$email}','{$description}','{$title}')";

$conn->query($query);
$conn->close();

?>