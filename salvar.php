<?php

    $host ="sql304.infinityfree.com";
    $usuario ="if0_42268756";
    $senha ="8HvdIImZiyp";
    $banco ="if0_42268756_agenda";

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
    $NOME = $_POST['NOME'];
    $TELEFONE = $_POST['TELEFONE'];
}

$sql = "INSERT INTO contatos(NOME,TELEFONE)
VALUES('$NOME','$TELEFONE')";

    if(mysqli_query($conexao,$sql)){
        echo "contato salvo com sucesso!";
    }else{
        echo "erro ao salvar".mysqli_error($conexao);
    }

    mysqli_close($conexao);

?>
