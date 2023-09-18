<!DOCTYPE html>
<html>
<head>
    <title>Sua Página PHP Estilizada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #34383B;
        }

        .livro {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            background-color: #fff;
        }

        .livro h2 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .livro p {
            margin: 0;
        }
        h1{
            color: #00bf63;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    include("../conexao.php");

    // Conecte-se ao banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistema";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Consulta SQL para selecionar livros do gênero especificado
    $sql = "SELECT * FROM produto WHERE genero = 'historia'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exiba os livros encontrados
        while ($row = $result->fetch_assoc()) {
            echo '<div class="livro">';
            echo '<h2>Título: ' . $row["nome"] . '</h2>';
            echo '<p>Preço: ' . $row["preco"] . '</p>';
            echo '<p>Descrição: ' . $row["descricao"] . '</p>';
            echo '<p>Gênero: ' . $row["genero"] . '</p>';
            // Adicione aqui outras informações que deseja exibir
            echo '</div>';
        }
    } else {
        echo "<h1>Nenhum livro encontrado para o gênero 'história'.</h1>";
    }

    $conn->close();
    ?>
</body>
</html>