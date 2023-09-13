<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="adm.css">
    <?php include("../cabecalho/cabecalho.php"); ?>
    <style>
    body{
    background-color: #34383B;
}
</style>

</head>
<body>
  <main>
    <!--Começo do corpo -->
    <div class="container">
        <div class="content">
            <form method="POST" action="enviar.php" enctype="multipart/form-data"> 
                <fieldset>
                    <label for="nome">ID Do Produto: </label>
                    <input type="text" name="id" placeholder="id do produto" id="id"><br>

                    <label for="nome">Nome da Imagem: </label>
                    <input type="text" name="nome" placeholder="Nome da imagem" id="nome">
                    <br>
                    <label for="preco">Preço:</label>
                    <input type="text" name="preco" placeholder="Preço" id="preco">
                    <br>
                    <label for="preco">Descrição:</label>
                    <input type="text" name="descricao" placeholder="descrição" id="descricao">
                    <br>
                    <label for="preco">Gênero:</label>
                    <input type="text" name="genero" placeholder="genero" id="genero">
                    <br>
                    <input type="file" name="imagem" accept="image/*" > 
                    <p>
                      <p>
                    <button type="submit" id="buttom">Enviar</button>
                </fieldset>
            </form>

            <?php
    include('../conexao.php');
    $diretorio = "outraimg/";

    $sql = "SELECT id, nome, preco, descricao, genero, nome_arc, ext_arc FROM produto";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nome = $row['nome'];
        $preco = $row['preco'];
        $descricao = $row['descricao'];
        $genero = $row['genero'];
        $nome_arc = $row['nome_arc'];
        $ext_arc = $row['ext_arc'];
        $imagemPath=$diretorio . $nome_arc;
        echo '
            <div class="card">
                <img src="'.$imagemPath.'" class="card-img-top" >
                <div class="card-body">
                    <h3 class="card-title"><b>Título:</b> '.$nome.'</h3>
                    <h6 class="card-text"><b>Descrição:</b> '.$descricao.'<h6>
                    <p class="card-text"><b>Preço:</b> '.$preco.'</p>
                    <p class="card-text"><b>Genero:</b> '.$genero.'</p>
                </div>
            </div>';
    }
    
    $stmt->closeCursor();
    ?>
        </div>
    </div>
          </main>
</body>
</html>