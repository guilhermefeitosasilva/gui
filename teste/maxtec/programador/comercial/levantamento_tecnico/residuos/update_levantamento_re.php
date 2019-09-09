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

if( isset($_POST["login"]) ) {
 $login                    = utf8_decode($_POST["login"]);
  $nome                     = utf8_decode($_POST["nome"]);
  $nome_fantasia            = utf8_decode($_POST["nome_fantasia"]);
  $tipo_pessoa              = utf8_decode($_POST["tipo_pessoa"]);
  $tipo_cliente             = utf8_decode($_POST["tipo_cliente"]);
  $empresa                  = utf8_decode($_POST["empresa"]);
  $telefone                 = utf8_decode($_POST["telefone"]);
  $contato                  = utf8_decode($_POST["contato"]);
  $funcao                   = utf8_decode($_POST["funcao"]);
  $data_visita              = utf8_decode($_POST["data_visita"]);
  $email                    = utf8_decode($_POST["email"]);
  $cep                      = utf8_decode($_POST["cep"]);
  $endereco                 = utf8_decode($_POST["endereco"]);
  $numero                   = utf8_decode($_POST["numero"]);
  $bairro                   = utf8_decode($_POST["bairro"]);
  $cidade                   = utf8_decode($_POST["cidade"]);
  $uf                       = utf8_decode($_POST["uf"]);
  $cep_lps                  = utf8_decode($_POST["cep_lps"]);
  $endereco_lps             = utf8_decode($_POST["endereco_lps"]);
  $numero_lps               = utf8_decode($_POST["numero_lps"]);
  $bairro_lps               = utf8_decode($_POST["bairro_lps"]);
  $cidade_lps               = utf8_decode($_POST["cidade_lps"]);
  $uf_lps                   = utf8_decode($_POST["uf_lps"]);
  $objeto                   = utf8_decode($_POST["objeto"]);
  $tipo_residuo             = utf8_decode($_POST["tipo_residuo"]);
  $destinacao               = utf8_decode($_POST["destinacao"]);
  $periodicidade            = utf8_decode($_POST["periodicidade"]);
  $quantidade_equipe        = utf8_decode($_POST["quantidade_equipe"]);
  $funcaoo                  = utf8_decode($_POST["funcaoo"]);
  $quantidade_material      = utf8_decode($_POST["quantidade_material"]);
  $unidade_material         = utf8_decode($_POST["unidade_material"]);
  $especificacao_material   = utf8_decode($_POST["especificacao_material"]);
  $quantidade_fardamento    = utf8_decode($_POST["quantidade_fardamento"]);
  $unidade_fardamento       = utf8_decode($_POST["unidade_fardamento"]);
  $especificacao_fardamento = utf8_decode($_POST["especificacao_fardamento"]);
  $especificacao_treinamento = utf8_decode($_POST["especificacao_treinamento"]);
  $opcao_integracao         = utf8_decode($_POST[" opcao_integracao"]);
  $informacaoo              = utf8_decode($_POST["informacaoo"]);
  $nome_responsaveltec      = utf8_decode($_POST["nome_responsaveltec"]);
  $funcao_responsaveltec    = utf8_decode($_POST["funcao_responsaveltec"]);
  $aprovador                = utf8_decode($_POST["aprovador"]);
  $funcao_aprovador         = utf8_decode($_POST["funcao_aprovador"]);
  $analise_critica          = utf8_decode($_POST["analise_critica"]);
 
 
 
    

  $tID                      = $_POST["num_levantamento"];      
 
// Objeto para alterar
$alterar = "UPDATE cad_cliente ";
$alterar .= "SET ";    
$alterar .= "login = '{$login}', ";
$alterar .= "nome = '{$nome}', ";
$alterar .= "nome_fantasia = '{$nome_fantasia}', ";
$alterar .= "tipo_pessoa = '{$tipo_pessoa}', ";
$alterar .= "tipo_cliente = '{$tipo_cliente}', ";
$alterar .= "empresa = '{$empresa}', ";
$alterar .= "telefone = '{$telefone}', ";
$alterar .= "contato = '{$contato}', ";
$alterar .= "funcao = '{$funcao}', ";
$alterar .= "data_visita = '{$data_visita}', ";
$alterar .= "email = '{$email}', ";
$alterar .= "cep = '{$cep}', ";
$alterar .= "endereco = '{$endereco}', ";
$alterar .= "numero = '{$numero}', ";
$alterar .= "bairro = '{$bairro}', ";
$alterar .= "cidade = '{$cidade}', ";
$alterar .= "uf = '{$uf}', ";
$alterar .= "cep_lps = '{$cep_lps}', ";
$alterar .= "endereco_lps = '{$endereco_lps}', ";
$alterar .= "numero_lps = '{$numero_lps}', ";
$alterar .= "bairro_lps = '{$bairro_lps}', ";
$alterar .= "cidade_lps = '{$cidade_lps}', ";
$alterar .= "uf_lps = '{$uf_lps}', ";
$alterar .= "objeto = '{$objeto}', ";
$alterar .= "tipo_residuo = '{$tipo_residuo}', ";
$alterar .= "destinacao = '{$destinacao}', ";
$alterar .= "periodicidade = '{$periodicidade}', ";
$alterar .= "quantidade_equipe = '{$quantidade_equipe}', ";
$alterar .= "funcaoo = '{$funcaoo}', ";
$alterar .= "quantidade_material = '{$quantidade_material}', ";
$alterar .= "unidade_material = '{$unidade_material}', ";
$alterar .= "especificacao_material = '{$especificacao_material}', ";
$alterar .= "quantidade_fardamento = '{$quantidade_fardamento}', ";
$alterar .= "unidade_fardamento = '{$unidade_fardamento}', ";
$alterar .= "especificacao_fardamento = '{$especificacao_fardamento}', ";
$alterar .= "especificacao_treinamento = '{$especificacao_treinamento}', ";
$alterar .= "opcao_integracao = '{$opcao_integracao}', ";
$alterar .= "informacaoo = '{$informacaoo}', ";
$alterar .= "nome_responsaveltec = '{$nome_responsaveltec}', ";
$alterar .= "funcao_responsaveltec = '{$funcao_responsaveltec}', ";
$alterar .= "aprovador = '{$aprovador}', ";
$alterar .= "funcao_aprovador = '{$funcao_aprovador}', ";
$alterar .= "analise_critica = '{$analise_critica}' ";
    

    $alterar .= "WHERE num_levantamento = {$tID} ";    
    
        $operacao_alterar = mysqli_query($conecta, $alterar);
        if(!$operacao_alterar) {
            die("Erro na alteracao");   
        } else {
            header("location:consultar_levantamento_re.php");   
        }
        
    }

?>
