<?php
$hostname = "localhost";
$db       = "andes";
$Username = "root";
$Password = "";


$conecta = mysqli_connect( "localhost", "root", "", "andes" );
if ( mysqli_connect_errno() ) {
    die( "Conexao falhou: " . mysqli_connect_errno() );
}
// teste de segurança
    session_start();

    if ( !isset($_SESSION["usuarioId"]) ) {
        header("location:login.php");
    }
    // fim do teste de seguranca

    // Determinar localidade BR
    setlocale(LC_ALL, 'pt_BR');

    if( isset($_POST["nome"]) ){
        $tID = $_POST["num_levantamento"];
        
        $exclusao = "DELETE FROM cad_cliente ";
        $exclusao .= "WHERE num_levantamento = {$tID}";
        $con_exclusao = mysqli_query($conecta,$exclusao);
        if(!$con_exclusao){
            die("Registro não excluido");
        } else {
            header("location:consultar_levantamento_re.php");
        }
    }


?>