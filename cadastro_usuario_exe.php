<html>
<META charset=UTF-8>
<?php include ('conexao.php');

$nome=$_POST['nome'];
$email=$_POST['email'];
$idade=$_POST['idade'];


echo "<P>Nome do usuário: ".$nome."<BR>";
echo "E-mail: ".$email."<BR>";
echo "Idade: ".$idade."<P/>";

$sql= "INSERT INTO usuario (nome, email,idade)
VALUES ('$nome','$email','$idade')";
$result = mysql_query($sql);
if($result) echo "Dados cadastrados com sucesso";
else
	echo "Erro ao tentar cadastrar dados no banco!";


?>
</html>
<META  charset=UTF-8>
<p><a href = "index.php"