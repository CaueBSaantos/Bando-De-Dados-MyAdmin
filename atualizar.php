<html>
    <META charset="UTF-8">
    <?php  include('conexao.php');
    $id= $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    echo "<P>Nome do usuario: ".$nome."<BR>";
    echo "E-mail: ".$email."<BR>";
    echo "Telefone: ".$idade."</P>";

    $sql="UPDATE usuario SET nome = '$nome', email ='$email', idade='$idade' WHERE id = '$id'";
    $result = mysql_query($sql);
    if ($result) echo "Dados Atualizados com sucesso!";
    else
        echo "Erro ao tentar ATUALIZAR dados no banco!";

    
    
    
    ?>
    <META charset="UTF-8">
    <a href="index.html">voltar</a>
</html>