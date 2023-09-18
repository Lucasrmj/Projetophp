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
    $sql = "SELECT * FROM produto WHERE genero = 'romance'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exiba os livros encontrados
        while ($row = $result->fetch_assoc()) {
            echo "Título: " . $row["nome"] . "<br>";
            echo "Preço: " . $row["preco"] . "<br>";
            echo "Descrição: " . $row["descricao"] . "<br>";
            echo "Gênero: " . $row["genero"] . "<br>";
            // Adicione aqui outras informações que deseja exibir
            echo "<hr>";
        }
    } else {
        echo "Nenhum livro encontrado para o gênero '$genero'.";
    }

    $conn->close();
?>
