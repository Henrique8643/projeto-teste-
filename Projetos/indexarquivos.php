 <?php
//Usando varios arquivos em php e recebendo dados de outro arquivo.
require "recebedor.php";//posso usar INCLUDE OU REQUIRE_ONCE
?>

        <form method="POST" >
            E-mail:<br/>
            <input type="text" name="email" /><br/>
            
            <input type="submit" value="Enviar Dados" />
        </form>
        