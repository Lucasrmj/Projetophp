<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "blabla";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO usuarios (username, password) VALUES ('$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Login concluido.";
    } else {
        echo "Erro. " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
</body>
</html>
