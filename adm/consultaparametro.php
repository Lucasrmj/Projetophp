<!DOCTYPE html>
<html>
<head>
    <title>Pesquisa de Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #34383B;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color:#00bf63;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 7px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        h2 {
            margin-top: 20px;
            
        }
.h2{
    color:#00bf63;
}
        .produto {
            border: 1px solid #00bf63;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        .p{
            color: white;
        }
        .b{
            color:#00bf63;
        }

        /* Estilizando o botão de enviar */
#input[type="submit"] {
    background-color: #4CAF50; /* Cor de fundo */
    color: white; /* Cor do texto */
    padding: 15px 30px; /* Espaçamento interno */
    border: none; /* Sem borda */
    border-radius: 5px; /* Cantos arredondados */
    cursor: pointer; /* Altera o cursor ao passar por cima */
    font-size: 18px; /* Tamanho da fonte */
    text-transform: uppercase; /* Texto em maiúsculas */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transições suaves de transformação e sombra */
    outline: none; /* Remove a borda ao focar */
}

/* Estilizando o botão de enviar quando o mouse está sobre ele */
#input[type="submit"]:hover {
    background-color: #45a049; /* Cor de fundo alterada ao passar o mouse */
    transform: scale(1.05); /* Efeito de crescimento suave */
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2); /* Sombra ao passar o mouse */
}

/* Estilizando o botão de enviar quando está em foco (pressionando Tab) */
#input[type="submit"]:focus {
    outline: none; /* Remove a borda ao focar */
    transform: scale(1.05); /* Efeito de crescimento suave */
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2); /* Sombra ao focar */
}
.back-button {
    display: block;
    text-align: center;
    background-color: red;
    border-color: red;
    color: white;
    padding: 10px 20px;
    margin-top: 20px;
    text-decoration: none;
    border-radius: 5px;
}

.back-button:hover {
    background-color: #ff6961;
    border-color: #ff6961;
    color: white;
    transition: 0.2s;
}
    </style>
</head>
<body>

    <h1>Pesquisa de Produtos</h1>

    <form method="GET" action="consultaparametro.php">
        <label for="pesquisa">Nome do Livro:</label>
        <input type="text" name="pesquisa" id="pesquisa" required><br>

        <h2>Filtros:</h2>
        <label for="genero">Gênero:</label>
        <input type="text" name="genero" id="genero"><br>

        <label for="preco_min">Preço Mínimo:</label>
        <input type="number" name="preco_min" id="preco_min" step="0.01"><br>

        <label for="preco_max">Preço Máximo:</label>
        <input type="number" name="preco_max" id="preco_max" step="0.01"><br>

        <input type="submit" value="Pesquisar" id="input">
        <a href='adm.php' class='back-button'>Voltar</a>
    </form>
</body>
</html>

<?php
if (isset($_GET['pesquisa'])) {
    // Inclua seu arquivo de conexão
    include '../conexao.php';

    $pesquisa = $_GET['pesquisa'];
    $genero = isset($_GET['genero']) ? $_GET['genero'] : '';
    $preco_min = isset($_GET['preco_min']) ? (float)$_GET['preco_min'] : null;
    $preco_max = isset($_GET['preco_max']) ? (float)$_GET['preco_max'] : null;

    // Construa a consulta SQL com base nos filtros
    $sql = "SELECT * FROM produto WHERE nome LIKE :pesquisa";

    // Adicione filtros opcionais
    if (!empty($genero)) {
        $sql .= " AND genero = :genero";
    }

    if (!is_null($preco_min)) {
        $sql .= " AND preco >= :preco_min";
    }

    if (!is_null($preco_max)) {
        $sql .= " AND preco <= :preco_max";
    }

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':pesquisa', '%' . $pesquisa . '%', PDO::PARAM_STR);

    // Bind dos filtros opcionais
    if (!empty($genero)) {
        $stmt->bindValue(':genero', $genero, PDO::PARAM_STR);
    }

    if (!is_null($preco_min)) {
        $stmt->bindValue(':preco_min', $preco_min, PDO::PARAM_STR);
    }

    if (!is_null($preco_max)) {
        $stmt->bindValue(':preco_max', $preco_max, PDO::PARAM_STR);
    }

    $stmt->execute();

    echo "<h2 class='h2'>Resultados da pesquisa:</h2>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='produto'>";
        echo "<p class='p'><b class='b'>Nome:</b> " . htmlentities($row['nome']) . "<br>";
        echo "<b class='b'>Preço:</b> $" . number_format($row['preco'], 2) . "<br>";
        echo "<b class='b'>Descrição:</b> " . htmlentities($row['descricao']) . "<br>";
        echo "<b class='b'>Gênero:</b> " . htmlentities($row['genero']) . "</p>";
        
        echo "</div>";
    }
}
?>
