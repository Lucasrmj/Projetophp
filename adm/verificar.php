<?php 
include("../conexao.php");
$login=$_POST["login"];
$senha=$_POST["senha"];

$sql = "SELECT login, senha FROM adm where login='$login' and senha='$senha'";
$result = $conn->query($sql);



if ($result->rowCount() > 0) {
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      if(($login==$row["login"]) && ($senha==$row["senha"])){
          header("location:adm.php");
      }   
    }
          
} else {
    header("location:erro.php");
}
?>