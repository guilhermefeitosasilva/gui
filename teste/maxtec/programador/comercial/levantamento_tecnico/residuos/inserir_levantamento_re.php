<?php
$hostname = "localhost";
$db       = "andes";
$Username = "root";
$Password = "";


$conecta = mysqli_connect( "localhost", "root", "", "andes" );
if ( mysqli_connect_errno() ) {
    die( "Conexao falhou: " . mysqli_connect_errno() );
}

//insercao no banco
if(isset($_POST["login"])) {
  $login                    = utf8_decode($_POST["login"]);
  $nome                     = utf8_decode($_POST["nome"]);
  $nome_fantasia            = utf8_decode($_POST["nome_fantasia"]);
  $objeto                   = utf8_decode(implode(', ', $_POST["objeto"]));
  $tipo_residuo             = utf8_decode(implode(', ', $_POST["tipo_residuo"]));
  
 

    $inserir                = "INSERT INTO cad_cliente";
    $inserir               .= "(login,nome,nome_fantasia,objeto) ";
    
    $inserir               .= "VALUES ";
    $inserir               .= "('$login','$nome','$nome_fantasia','$objeto')"; 
    
   
    
    $retorno = array();
    $operacao_inserir = mysqli_query($conecta, $inserir);
    if($operacao_inserir) {
          $retorno["sucesso"] = true;
        $retorno["mensagem"] = "Colaborador, seu cadastro foi inserido com sucesso!";
        } else {
            $retorno["sucesso"] = false;
        $retorno["mensagem"] = "Colaborador, seu cadastro ocorreu um erro!";

        }
        
    }

//

?>

       