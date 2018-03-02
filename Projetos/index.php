<html>
<head>
    
    </head>
    <body>
        <h1>Aprendendo PHP !</h1>
        <?php
        /*$ esse sinal indica que será usada para uma variavel
        
            $nomedoaluno = "Henrique";
            $sobrenome = "Jesus";
            $idade = 34;
            // echo sua função é exibir na tela.
            echo "Tudo posso naquele que me fortalece!";
            echo " Meu nome eh :" .$nomedoaluno." ".$sobrenome." eu tenho ".$idade. " anos";
            //Outra maneira de escrever o código php.
            echo " Meu nome eh : " .$nomedoaluno." ".$sobrenome;
            echo " e eu tenho ".$idade. " anos";*/
        
            // variaveis
       /* $nome = "Henrique";//string
        $idade = 34; //inteiro,int,integer.
        $nota = 9.5;  //float
        $ligado = true; //boolean : TRUE / FALSE.
        $grupos = array(1,2,3,4,5); //array
        $caracteristicas = array("alegre","feliz");//array com strings.*/
        
        //variaveis compostas
       /* $variavel = array(
                "nome" => "Henrique",
                "sobrenome" => "Jesus",
                "idade" => 34,
                "sexo" => "masculino"
        );
        $variavel1 = array(
            0 => "Henrique",
            1 => "Jesus"
        );
        //outra forma
       // echo $variavel ["idade"] = 35;
        
        //echo $variavel ["idade"];
        // esse comando mostra todos os meus array
        print_r($variavel);
        print_r($variavel1);*/
        
        //OUTRA FORMA DE ARRAY
       /* $produtos = array (
        0 => array (
            "nome" => "1",
            "quantidade" => "",
            "infor" => ""
        
        ),
        1 => array (
            "nome" => "2",
            "quantidade" => "",
            "infor" => ""
        ),
            
        
        );
        
        $produtos[] = array (
            "nome" =>"3",
            "quantidade" => "",
            "infor" => ""
        );
        //dentro de varios array posso usar tambem strings.
        $produtos[] = "teste";
        
        print_r($produtos);*/
        
        // VARÍAVEIS GLOBAIS
       // print_r ($_SERVER);// UMA DAS VARIAVEIS GLOBAL QUE O PHP TEM.
        //$nome = $_GET["nome"];//transferindo uma variavel global para uma variavel nome.
        
        //echo "Seu nome eh " .$nome;
       // $video = $_GET["v"];// variavel $_POST passa por dentro da requesição / variavel $_GET mostra todo o acesso na url.
        
       // echo "O video que voce esta acessando : " .$video;
        
        // CONSTANTE
           /* define("URL", " http://www.meusite.com.br");

            echo " Meu site para acessar :" .URL;
        
            define("VERSION", "1.0");// defino no começo do meu sistema versão 1.0.
            
            echo "Versao" .VERSION;*/
        
            // Posso encontrar codigo escritos assim
           /* $nome = "henrique";
              echo " Meu nome eh : $nome";// Mas a melhor forma de escrever é a que estou aprendendo.
              echo 'Meu nome en : $nome';// desta forma ler como texto.*/
        //IF E ELSE
       /* $nome = "Henrique";
        $idade= 34;
        //Operadores logicos &&,||,
        if($nome == "Henrique" && $idade == 34){
            echo "Meu nome esta certo";
        }
        else{
            echo "Meu nome esta errado";
        }*/
        // essa função isset: retorna true ou false, empty:tambem retorna true ou false,posso usar essa forma tambem.
       // if(isset($_POST['email']) && !empty($_POST['email']))
       /* if(isset($_POST['email']) && empty($_POST['email']) == false){
            if(isset($_POST['senha']) && empty($_POST['senha']) == false){
               
                $email = $_POST["email"];
                $senha = $_POST['senha'];
                echo "Meu email eh :" .$email. " e minha senha : ".$senha;
                //posso usar para varias coisas como login,cadastro,receber mensagem,salva no banco de dados e outras maneiras.

            }
          
        }*/
        //APRENDENDO SWITCH
       $x = 0;
        
        switch($x){
            case 0:
                echo "O x eh zero";
                echo " E voce tirou zero";
                 break;
            case 1:
                echo "O x eh um";
                 break;
            case 2:
                echo "O x eh dois";
                break;
            default:
                echo " O x nao eh nada nem ninguem.";
                break;
        }
       // USANDO MULTIPLOS ARQUIVOS PHP
        
      

            
        ?>
     
        <!--<form method="post">
            E-mail :<br/>
            <input type="text" name="email"/><br/><br/>
            Senha :<br/>
            <input type="text" name="senha"/><br/><br/>
            
            <input type="submit" value="Enviar Dados"/>
        </form> ESSE CODIGO ESTA JUNTO COM PHP(FORMULARIO)-->
    
    </body>

</html>