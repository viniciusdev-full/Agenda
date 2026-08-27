<?php

  $servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "agenda";

$conexao=mysqli_connect(
    $host,
    $usuario,
    $senha,
    $banco
);

echo "<pre>";
print_r($_POST);
echo "</pre>";


if(!$conexao){
    die("erro na conexão".mysqli_connect());
}else{
    $nome = $_POST['NOME'];
    $telefone = $_POST['TELEFONE'];
}

$sql = "INSERT INTO contatos(NOME,TELEFONE)
VALUES('$nome','$telefone')";

    if(mysqli_query($conexao,$sql)){
        echo "contato salvo com sucesso!";
    }else{
        echo "erro ao salvar".mysqli_error($conexao);
    }

    mysqli_close($conexao);

?>
