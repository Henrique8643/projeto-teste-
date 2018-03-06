<?php
if(isset($_POST['email']) && !empty($_POST['senha'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
   
    header("Location: SiteFlexbox.html");
}
?>
<html>
<head>
    <title>Projeto de teste</title>
    <meta name="viewport" content="width=device-width,user-scalable=0" />
    
    </head>
    <body>
        <h1>Iniciando Projeto Teste</h1>
        
    <form method="POST">
    Usuario :
    <input type="text" name="email" placeholder="email" /><br/><br/>
    Senha :
    <input type="text" name="senha" maxlength="4" placeholder="senha" />
    <input type="submit" value="Login" />

</form>
    </body>
    
</html>
