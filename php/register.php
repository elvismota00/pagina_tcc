<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>