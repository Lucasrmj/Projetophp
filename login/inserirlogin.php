
<?php
include("../conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "sistema";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO usuario (username, senha) VALUES ('$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        $message = "Login concluído.";
        $message_class = "success";
    } else {
        $message = "Erro: " . $sql . "<br>" . $conn->error;
        $message_class = "error";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #34383B;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .success {
            color: #008000;
        }

        .error {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <p class="<?php echo $message_class; ?>"><?php echo $message; ?></p>
    </div>
</body>
</html>

