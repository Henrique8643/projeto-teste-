<?php
if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    file_put_contents("teste.txt", $nome, FILE_APPEND);
    // Esse File_put_contents serve para criar um arquivo e escrever dentro dele, esse para FLIE_APPEND não vai so escrever,ele vai aproveitar o nome e adicionar mais um nome.
    header("Location: indexanti-f5.php");
    //Para direcionar para dentro do proprio arquivo que estou desenvolvendo é só redirecionar com o comando header.
}
?>
<form method="POST">

    <input type="text" name="nome" />
    <input type="submit" value="Enviar" />

</form>