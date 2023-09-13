<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];

    
    $servername = "localhost"; 
    $username = "root";     
    $password = "";     
    $dbname = "blabla";     

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO cadastrados (nome, email, senha, telefone) VALUES ('$nome', '$email', '$senha', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro efetuado com sucesso.";
    } else {
        echo "Error." . $sql . "<br>" . $conn->error;
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
