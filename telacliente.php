------------------<HTML>
<HEAD>
 <TITLE>Cadastro de Cliente</TITLE>
</HEAD>
<BODY bgcolor="#9F9F00">
  <form method="post"name="formulario"action="cadastrarcliente.php">
       <table name="table" width="400" align="center" border="3" cellpadding="3" cellspacing="4" bordercolor="black">
       <tr>
           <td BGCOLOR="#D0D0D0" align="center"colspan="10">CADASTRO DE CLIENTES</td>
       </tr>
       
       <tr>
           <td colspan="4">CRIE UM CODIGO</td>
           <td colspan="4"><input type="text"name="codigo" value=""></td>
       </tr>
       
       <tr>
           <td colspan="4">NOME</td>
           <td colspan="4"><input type="text"name="nome" value=""></td>
       </tr>
       
       <tr>
           <td colspan="4">CPF</td>
           <td colspan="4"><input type="text"name="cpf" value=""></td>
       </tr>
       
       <tr>
		<td colspan="10" align=center>
            <input type="submit" class="submit" name="btSubmit" value="Cadastrar">
            <input type="button" value="Voltar" onclick="location='http://localhost/modelocadastrar/interfacemodelo.php'">
        </td>
 	   </tr>
 	   </table>
  </form>
</BODY>
</HTML>
