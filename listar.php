<?php

    $host ="localhost";
    $usuario ="root";
    $senha ="";
    $banco ="agenda";

$conexao=mysqli_connect(
    $host,
    $usuario,
    $senha,
    $banco
);

$sql="select * from contatos";

$resultado = mysqli_query($conexao,$sql);


echo "<center>";
echo "    <table border='1'>";
echo "    <tr>";
echo "    <th>ID</th>";
echo "    <th>NOME</th>";
echo "    <th>TELEFONE</th>";
echo "</tr>";

while($linha= mysqli_fetch_assoc($resultado))
{
echo "    <tr>";
echo "    <th>".$linha['ID']."</th>";
echo "    <th>".$linha['NOME']."</th>";
echo "    <th>".$linha['TELEFONE']."</th>";
echo "    </tr>";
}
echo "</table>";
echo "</center>";

mysqli_close($conexao);

?>
