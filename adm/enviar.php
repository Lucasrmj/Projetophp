<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="enviar.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<form action="adm.php">
</body>
</html>

<?php
include('../conexao.php');
 
if(isset($_FILES['imagem']))
 {
    $ext = strtolower(substr($_FILES['imagem']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = 'outraimg/'; //Diretório para uploads 
    move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    
	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$preco = $_POST["preco"];
	$descricao = $_POST["descricao"];
	$genero = $_POST["genero"];
	$nome_arc = $new_name;
	$ext_arc = $ext;
	
	$sql = "INSERT INTO produto (id, nome, preco, descricao, genero, nome_arc, ext_arc) VALUES (?, ?, ?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(1, $id);
	$stmt->bindParam(2, $nome);
	$stmt->bindParam(3, $preco);
	$stmt->bindParam(4, $descricao);
	$stmt->bindParam(5, $genero);
	$stmt->bindParam(6, $nome_arc);
	$stmt->bindParam(7, $ext_arc);

	if($stmt->execute()){
		echo"<div class='container'>";
		echo"<h1>Imagem Enviada com sucesso</h1>";
		echo "<input type='submit' value='Voltar para a Página'>";
		echo"</div>";
	}
 }
 echo"</div>";
 	echo"</div>";
?>