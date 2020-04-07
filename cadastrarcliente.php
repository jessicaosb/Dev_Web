<?php
$conexao = new mysqli("localhost", "root", "","sismodelo") or die ("Erro na conexão ao banco de dados.");


$codigo=$_POST['codigo'];
$nomecliente=$_POST['nome'];
$cpfcliente=$_POST['cpf'];

      $sql = "INSERT INTO cliente(codigo,nome,cpf) values ('$codigo','$nomecliente','$cpfcliente')";
      $conexao->query($sql) or die ("Codigo já existente!<br><br><br>
      <input type='button' value='Voltar' onclick=location='telacliente.php'>");


echo "<center>";
echo "<h1>Cadastro com Sucesso!</h1><br>";
echo "<input type='button' onclick=location='http://localhost/modelocadastrar/interfacemodelo.php' value='Voltar à Tela de Interface'>";
echo "</center>";
?>
