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

    echo "<h2>Resultados da pesquisa:</h2>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='produto'>";
        echo "<p><b>Nome:</b> " . htmlentities($row['nome']) . "<br>";
        echo "<b>Preço:</b> $" . number_format($row['preco'], 2) . "<br>";
        echo "<b>Descrição:</b> " . htmlentities($row['descricao']) . "<br>";
        echo "<b>Gênero:</b> " . htmlentities($row['genero']) . "</p>";
        echo "</div>";
    }
}
?>