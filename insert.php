
<?php 
//insert.php
$connect = mysqli_connect("localhost", "root", "", "andes");

if(isset($_POST["login"]) || isset($_POST["nome"]) || isset($_POST["nome_fantasia"]) || isset($_POST["tipo_pessoa"]) || isset($_POST["tipo_cliente"]) || isset($_POST["empresa"]) || isset($_POST["cep"]) || isset($_POST["endereco"]) || isset($_POST["numero"]) || isset($_POST["bairro"]) || isset($_POST["cidade"]) || isset($_POST["uf"]) || isset($_POST["telefone"]) || isset($_POST["data_visita"]) || isset($_POST["objeto"]) || isset($_POST["tipo_residuo"]) || isset($_POST["destinacao"]) || isset($_POST["periodicidade"]) || isset($_POST["quantidade_equipe"]) || isset($_POST["funcaoo"])|| isset($_POST["quantidade_material"])|| isset($_POST["unidade_material"])|| isset($_POST["especificacao_material"]) || isset($_POST["quantidade_fardamento"]) || isset($_POST["unidade_fardamento"]) || isset($_POST["especificacao_fardamento"]) || isset($_POST["especificacao_treinamento"]) || isset($_POST["opcao_integracao"]) || isset($_POST["informacaoo"]) || isset($_POST["nome_responsaveltec"]) || isset($_POST["funcao_responsaveltec"]) || isset($_POST["analise_critica"]) || isset($_POST["contato"]) || isset($_POST["funcao"]) || isset($_POST["email"]) || isset($_POST["cep_lps"]) || isset($_POST["endereco_lps"]) || isset($_POST["numero_lps"]) || isset($_POST["bairro_lps"]) || isset($_POST["cidade_lps"]) || isset($_POST["uf_lps"]) )
{
    

    $login                          = $_POST["login"];
    $nome                           = utf8_decode( $_POST["nome"]);
    $nome_fantasia                  = utf8_decode($_POST["nome_fantasia"]);
    $tipo_pessoa                    = utf8_decode($_POST["tipo_pessoa"]);
    $tipo_cliente                   = utf8_decode($_POST["tipo_cliente"]);
    $empresa                        = utf8_decode($_POST["empresa"]);
    $cep                            = $_POST["cep"];
    $endereco                       = utf8_decode($_POST["endereco"]);
    $numero                         = $_POST["numero"];
    $bairro                         = utf8_decode($_POST["bairro"]);
    $cidade                         = utf8_decode($_POST["cidade"]);
    $uf                             = $_POST["uf"];       
    $telefone                       = $_POST["telefone"];
    $datavisita                     = $_POST["data_visita"];
	$contato                  	    = utf8_decode($_POST["contato"]);
	$funcao        	                = utf8_decode($_POST["funcao"]);
	$email		                    = utf8_decode($_POST["email"]);    
    $cep_lps                            = $_POST["cep_lps"];
    $endereco_lps                       = utf8_decode($_POST["endereco_lps"]);
    $numero_lps                         = $_POST["numero_lps"];
    $bairro_lps                         = utf8_decode($_POST["bairro_lps"]);
    $cidade_lps                         = utf8_decode($_POST["cidade_lps"]);
    $uf_lps                             = $_POST["uf_lps"]; 
$objeto = '';
 foreach($_POST["objeto"] as $row)
 {
  $objeto .= $row . ', ';
 } 

$tipo_residuo = '';
 foreach($_POST["tipo_residuo"] as $row)
 {
  $tipo_residuo .= $row . ', ';
 } 
    
$destinacao = '';
 foreach($_POST["destinacao"] as $row)
 {
  $destinacao .= $row . ', ';
 } 
    
$periodicidade = '';
 foreach($_POST["periodicidade"] as $row)
 {
  $periodicidade .= $row . ', ';
 } 
  $quantidade_equipe  = $_POST["quantidade_equipe"];

    
$funcaoo = '';
 foreach($_POST["funcaoo"] as $row)
 {
  $funcaoo .= $row . ', ';
 } 
    
$quantidade_material    = $_POST["quantidade_material"];
    
$unidade_material   = $_POST["unidade_material"];   
    
    
$especificacao_material = '';
 foreach($_POST["especificacao_material"] as $row)
 {
  $especificacao_material .= $row . ', ';
 }    
    
 $quantidade_fardamento    = $_POST["quantidade_fardamento"];
    
$unidadefardamento   = $_POST["unidade_fardamento"];    
    
$especificacao_fardamento = '';
 foreach($_POST["especificacao_fardamento"] as $row)
 {
  $especificacao_fardamento .= $row . ', ';
 }    
    
 $especificacao_treinamento   = $_POST["especificacao_treinamento"];   
    
 $opcao_integracao  = $_POST["opcao_integracao"];
   
 $informacao    = $_POST["informacaoo"];   
    
    
 $nome_responsaveltec = '';
 foreach($_POST["nome_responsaveltec"] as $row)
 {
  $nome_responsaveltec .= $row . ', ';
 }  
    
 $funcao_responsaveltec = '';
 foreach($_POST["funcao_responsaveltec"] as $row)
 {
  $funcao_responsaveltec .= $row . ', ';
 }
    
 $analise_critica   = $_POST["analise_critica"];
    
    
    $objeto = substr($objeto, 0, -2); 
    $tipo_residuo = substr($tipo_residuo, 0, -2);
    $destinacao = substr($destinacao, 0, -2); 
    $periodicidade = substr($periodicidade, 0, -2);
    $funcaoo = substr($funcaoo, 0, -2);
    $especificacao_material = substr($especificacao_material, 0, -2);
    $especificacao_fardamento = substr($especificacao_fardamento, 0, -2);
    $nome_responsaveltec = substr($nome_responsaveltec, 0, -2);
    $funcao_responsaveltec = substr($funcao_responsaveltec, 0, -2);
   

$query = "INSERT INTO cad_cliente(login,nome,nome_fantasia,tipo_pessoa,tipo_cliente,empresa,cep,endereco,numero,bairro,cidade,uf,telefone,data_visita,contato,funcao,email,objeto,tipo_residuo,destinacao,periodicidade,quantidade_equipe,funcaoo,quantidade_material,unidade_material,especificacao_material,quantidade_fardamento,unidade_fardamento,especificacao_fardamento,especificacao_treinamento,opcao_integracao,informacaoo,nome_responsaveltec,funcao_responsaveltec,analise_critica,cep_lps,endereco_lps,numero_lps,bairro_lps,cidade_lps,uf_lps)

VALUES('".$login."','".$nome."','".$nome_fantasia."','".$tipo_pessoa."','".$tipo_cliente."','".$empresa."','".$cep."','".$endereco."','".$numero."','".$bairro."','".$cidade."','".$uf."','".$telefone."','".$datavisita."','".$contato."','".$funcao."','".$email."','".$objeto."','".$tipo_residuo."','".$destinacao."','".$periodicidade."','".$quantidade_equipe."','".$funcaoo."','".$quantidade_material."','".$unidade_material."','".$especificacao_material."','".$quantidade_fardamento."','".$unidadefardamento."','".$especificacao_fardamento."','".$especificacao_treinamento."','".$opcao_integracao."','".$informacao."','".$nome_responsaveltec."','".$funcao_responsaveltec."','".$analise_critica."','".$cep_lps."','".$endereco_lps."','".$numero_lps."','".$bairro_lps."','".$cidade_lps."','".$uf_lps."')";
    

 if(mysqli_query($connect, $query))
 {
  echo 'Dados Inseridos !';
     
 }
    
}
?>
