<?php require_once("../../../../../conexao/conexao.php"); ?>
<?php
//ESTE IF ERA PARA PASSAR OS DADOS DO CHECK PARA O DB 
if(isset($_POST["objeto"]))
{
 $framework = '';
 foreach($_POST["objeto"] as $row)
 {
  $framework .= $row . ', ';
 }
 $framework = substr($framework, 0, -2);
 $query = "INSERT INTO cad_cliente";
 if(mysqli_query($conecta, $query))
 {
  echo 'Data Inserted';
 }
}

$sql = "select * from cad_cliente ";
$consulta = mysqli_query($conecta,$sql);
$registros = mysqli_num_rows($consulta);

//-- ESTE SELECT É PARA PEGAR OS DADOS SALVO NA TABELA DE OBJETOSERVICO, O CAMPO OBJETO, E SELECIONAR NO CHECKBOX PARA SALVAR NO DB NA TABELA CAD_CLIENTE, NO CAMPO OBJETO.
$select = "SElECT objeto ";
$select .= "FROM objetoservico ";
$lista_objetos = mysqli_query($conecta, $select);
if(!$lista_objetos){
    die("Erro no banco");
    
}

 
 // teste de segurança
    session_start();

    if ( !isset($_SESSION["user_portal"]) ) {
        header("location:login.php");
    }
    // fim do teste de seguranca

    // Determinar localidade BR
    setlocale(LC_ALL, 'pt_BR');

    // insercao no banco
    if(isset($_POST["login"])) {
        $login                          = $_POST["login"];
        $nome                           = $_POST["nome"];
        $nome_fantasia                  = $_POST["nome_fantasia"];
        $tipo_pessoa                    = $_POST["tipo_pessoa"];
        $tipo_cliente                   = $_POST["tipo_cliente"];
        $empresa                        = $_POST["empresa"];
        $cep                            = $_POST["cep"];
        $endereco                       = $_POST["endereco"];
        $numero                         = $_POST["numero"];
        $bairro                         = $_POST["bairro"];
        $cidade                         = $_POST["cidade"];
        $uf                             = $_POST["uf"];       
        $telefone                       = $_POST["telefone"];
        $datavisita                     = $_POST["data_visita"];
        $objeto                         = $_POST["objeto"];
        $tipo_residuo                   = $_POST["tipo_residuo"];
        $destinacao                     = $_POST["destinacao"];
        $periodicidade                  = $_POST["periodicidade"];
        $quantidade_equipe              = $_POST["quantidade_equipe"];
        $funcao                         = $_POST["funcaoo"];
        $quantidade_material            = $_POST["quantidade_material"];
        $unidade_material               = $_POST["unidade_material"];
        $especificacao_material         = $_POST["especificacao_material"];
        $quantidade_fardamento          = $_POST["quantidade_fardamento"];
        $unidade_fardamento             = $_POST["unidade_fardamento"];
        $especificacao_fardamento       = $_POST["especificacao_fardamento"];
        $especificacao_treinamento      = $_POST["especificacao_treinamento"];
        $informacao                     = $_POST["informacaoo"];
        $nome_responsaveltec            = $_POST["nome_responsaveltec"];
        $funcao_responsaveltec          = $_POST["funcao_responsaveltec"];
        $nome_tecseguranca              = $_POST["nome_tecseguranca"];
        $funcao_tecseguranca            = $_POST["funcao_tecseguranca"];
        

        $inserir    = "INSERT INTO cad_cliente ";
        $inserir    .= "(login,nome,nome_fantasia,tipo_pessoa,tipo_cliente,empresa,cep,endereco,numero,bairro,cidade,uf,telefone,data_visita,objeto,tipo_residuo,destinacao,periodicidade,quantidade_equipe,funcaoo,quantidade_material,unidade_material,especificacao_material,quantidade_fardamento,unidade_fardamento,especificacao_fardamento,especificacao_treinamento,informacaoo,nome_responsaveltec,funcao_responsaveltec,nome_tecseguranca,funcao_tecseguranca) ";
        $inserir   .= "VALUES ";
        $inserir   .= "('$login','$nome','$nome_fantasia','$tipo_pessoa','$tipo_cliente','$empresa','$cep','$endereco','$numero','$bairro','$cidade','$uf','$telefone','$datavisita','$objeto','$tipo_residuo','$destinacao','$periodicidade','$quantidade_equipe','$funcao','$quantidade_material','$unidade_material','$especificacao_material','$quantidade_fardamento','$unidade_fardamento','$especificacao_fardamento','$especificacao_treinamento','$informacao','$nome_responsaveltec','$funcao_responsaveltec','$nome_tecseguranca','$funcao_tecseguranca') ";
        
        $operacao_inserir = mysqli_query($conecta,$inserir);
        if(!$operacao_inserir) {
            die("Erro no banco");
        } else {
            header("location:consultar_levantamento_re.php");   
        } 
    }

?>

<!doctype html>
<html>
<!---- AQUI É O SCRIPTS PARA O CHECKBOX --->
    <html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
 </head>

    <head>
        <meta charset="UTF-8">
        <title>MAXTEC-SERVICOS</title>
        <link rel="shortcut icon" href="../../../COMPOSER/img/icone.jpg" type="image/x-jpg">
        
        
        <!-- estilo -->
       
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link href="../../../css/sienge-d.css" rel="stylesheet">
        <link href="../../../css/sienge-b.css" rel="stylesheet">
        <link href="../../../css/estilo-b.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../_css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
          <style type="text/css">
            .hidden {
            
                display: none;
                
            }
            input{
                
    background: #FFE5CC; 
            }
        
        </style>
<!--- AQUI É PARA ABRIR E FECHAR OS INPUTS --->
        <script>
            function mostra(id){
                 if(document.getElementById(id).style.display == 'none'){
                document.getElementById(id).style.display = 'block';
                document.getElementById('b'+id).value="-";
                }else{ document.getElementById(id).style.display = 'none'; 
                document.getElementById('b'+id).value="+"; 
                     }
            }
        </script>
</head>
<?php require_once("../../../_incluir/topo.php"); ?>

<!--- AQUI É O MENU --->
<main> 
<div id="accordian">
	<ul>
		<li>
			<h3><span class="fa fa-home"></span>Home</h3>
			<ul>
				<li><a href="../../../home.php">Home</a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
		</li>
		<!-- we will keep this LI open by default -->
		<li >
			<h3><span class="fa fa-building"></span>Comercial</h3>
			<ul>
				<li><a href="../../cliente/consultar_cliente.php">Cliente</a></li>
				<li><a href="../../levantamento_tecnico/residuos/consultar_levantamento_re.php">Levantamento Tecnico Resíduo</a></li>
                
                <li><a href="../../levantamento_tecnico/mao_de_obra/consultar_levantamento_mo.php">Levantamento Tecnico Mão Obra</a></li>
               <h3><span class="#"></span>Cadastro de Itens</h3>
              
		          <li><a href="../../../comercial/apoio/objetodeservico/consultar_objetodeservico.php">Objeto de Serviço</a></li>
		          <li><a href="#">Tipo de Resíduo</a></li>
		          <li><a href="#">Destinação do Resíduo</a></li>
		          <li><a href="#">Periodicidade das Coletas</a></li>
		          <li><a href="#">Equipe de Trabalho</a></li>
		          <li><a href="#">Material/Equipamentos</a></li>
		          <li><a href="#">Fardamento/Epi</a></li>
				
			</ul>
		</li>
		<li>
			<h3><span class="fa fa-users"></span>Úsuarios</h3>
			<ul>
				<li><a href="../../../usuario/consultar_usuario.php">Úsuario</a></li>
			</ul>
		</li>
	</ul>
</div>

    <script>
    /*jQuery time*/
$(document).ready(function(){
	$("#accordian h3").click(function(){
		//slide up all the link lists
		$("#accordian ul ul").slideUp();
		//slide down the link list below the h3 clicked - only if its closed
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
})
    </script> 
<!--- AQUI A PAGINA DE ONDE IREI PASSAR OS DADOS DOS CAMPOS PARA SALVAR NO DB -->
</main>     
    <body>
      <main> 
            <div id="janela_formulario">
                <form action="levantamento_tecnico_re.php" method="post">
                    
     <br>               
     <br>               
<h2>LEVANTAMENTO TÉCNICO - RESÍDUO</h2>
          
<h3>DADOS DO CLIENTE</h3> 
                    
                    
                    <div >
                        <label for="codigo">Codigo:</label>
                        <input type="text" class="janela_formulario" name="codigo" id="codigo" size="2" maxlength="4">
                         
                        <label for="login">Login / CNPJ / CPF*:</label>
                        <input type="text" class="janela_formulario" name="login" id="login" size="20" maxlength="18">
                    </div>
                    
                    <div >
                     <label for="nome">Nome / Razão Social*:</label>
                        <input type="text" class="janela_formulario" name="nome" id="nome" size="47" maxlength="60">
                        
                        <label for="nome_fantasia">Nome Fantasia:</label>
                        <input type="text" class="janela_formulario" name="nome_fantasia" id="nome_fantasia" size="47" maxlength="60">
                    </div>
                    
                    <div>    
                        <label for="tipo_pessoa">Tipo de Pessoa*:</label>                
                        <select name="tipo_pessoa">
                            <option value=''>--Selecione--</option>
                            <option value='Juridica'>Jurídica</option>
                            <option value='Fisica'>Física</option>
                        </select>
                   
                         <label for="tipo_cliente">Tipo de Cliente:</label>
                         <select name="tipo_cliente">
                            <option value=''>-----Selecione-----</option>
                            <option value='Autonomo'>Autônomo</option>
                            <option value='Empresa Privada'>Empresa Privada</option>
                            <option value='Empresa Publica'>Empresa Pública</option>
                        </select>
                       
                        <label for="empresa">Empresa:</label>
                        <input type="text" class="janela_formulario" name="empresa" id="empresa" size="56" maxlength="40">
                    </div>
                    
                    <div>   
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="janela_formulario" name="telefone" id="telefone" size="12" maxlength="14">
                        
                        <label for="data_visita">Data da Visita:</label>
                        <input type="text" class="janela_formulario" name="data_visita" id="data_visita" size="12" maxlength="14">
                        
                     </div>
                    <br>
                       
<h3>ENDEREÇO COMERCIAL</h3>
                        
                    <input id="bmb"  type="button" value="+" onclick="mostra('mb')" /> 
                    <div id="mb" class="">
                    
                        <div>
                        <label for="cep">CEP:</label>
                        <input type="text" class="janela_formulario" name="cep" id="cep" size="14" maxlength="10">
                       
                        <label for="endereco">Endereço*:</label>
                        <input type="text" class="janela_formulario" name="endereco" id="endereco" size="55" maxlength="50">
                    
                        <label for="numero">N°:</label>
                        <input type="text" class="janela_formulario" name="numero" id="numero" size="2" maxlength="4">
                     
                        <label for="bairro">Bairro*:</label>
                        <input type="text" class="janela_formulario" name="bairro" id="bairro" size="25" maxlength="20">
                    </div>
                    
                    <div>
                        <label for="cidade">Cidade*:</label>
                        <input type="text" class="janela_formulario" name="cidade" id="cidade" size="27" maxlength="30">
                        
                        <label for="uf">UF*:</label>
                        <input type="text" class="janela_formulario" name="uf" id="uf" size="2" maxlength="2">
                    </div>
                    <br>
                        </div>
       
<!--- NESTE CAMPO ONDE ESTA SITUADO O SELECT - CHECKBOX PARA PASSAR UM OU MAIS DE UM DADO PARA O CAMPO DA MINHA DB, ONDE É MEU MAIOR PROBLEMA. -->
<h3>OBJETO DO SERVIÇO</h3>              
<input id="bmc"  type="button" value="+" onclick="mostra('mc')" /> 
<div id="mc" class="">
 
<div class="container" style="width:600px; margin-top:-20px; margin-right:230px;">
    
    <div class="form-group">
        <select id="objeto" name="objeto" multiple class="form-control" >
            
<?php
        while($linha = mysqli_fetch_assoc($lista_objetos)){
?>
        <option value="<?php echo $linha["objeto"] ?>">
            <?php echo utf8_encode($linha["objeto"]); ?>
        </option>
            
<?php
    }
 ?>

    </select>
    </div>
    </div>
</div>
     
   <br>                 
   <br>                 
   <br>                 
   <br>                 
   <br>                 
   <br>                 
<h3>TIPO DE RESÍDUO</h3>
                              
                    <input id="bmd"  type="button" value="+" onclick="mostra('md')" /> 
                    <div id="md" class="">
                    
                    <div>
                        <label for="tipo_residuo ">Insira o Tipo:</label>
                        <input type="text" class="janela_formulario"  name="tipo_residuo" id="tipo_residuo" size="121" maxlength="200">
                    </div>     
                     <br>
                        </div>
                        
<h3>DESTINAÇÃO DO RESÍDUO</h3>
                              
                    <input id="bme"  type="button" value="+" onclick="mostra('me')" /> 
                    <div id="me" class="">
                    
                    <div>
                        <label for="destinacao">Insira a Destinação:</label>
                        <input type="text" class="janela_formulario"  name="destinacao" id="destinacao" size="115" maxlength="200">
                    </div>     
                     <br>
                        </div>
                 
<h3>PERIODICIDADE DAS COLETAS</h3>
                              
                    <input id="bmf"  type="button" value="+" onclick="mostra('mf')" /> 
                    <div id="mf" class="">
                    
                    <div>
                        <label for="periodicidade ">Insira a Periodicidade:</label>
                        <input type="text" class="janela_formulario"  name="periodicidade" id="periodicidade" size="113" maxlength="200">
                    </div>     
                    <br>
                        </div>
                    
<h3>EQUIPE DE TRABALHO</h3> 
                              
                    <input id="bmg"  type="button" value="+" onclick="mostra('mg')" /> 
                    <div id="mg" class="">
                    
                    <div>
                        <label for="quantidade_equipe ">Quantidade:</label>
                        <input type="text" class="janela_formulario"  name="quantidade_equipe" id="quantidade_equipe" size="4" maxlength="3">
                         
                        <label for="funcaoo ">Função:</label>
                        <input type="text" class="janela_formulario"  name="funcaoo" id="funcaoo" size="106" maxlength="200">
                    </div>
                     <br>
                        </div>
                    
<h3>MATERIAL E EQUIPAMENTOS</h3>
                              
                    <input id="bmh"  type="button" value="+" onclick="mostra('mh')" /> 
                    <div id="mh" class="">
                    
                    <div>
                        <label for="quantidade_material ">Quantidade:</label>
                        <input type="text" class="janela_formulario"  name="quantidade_material" id="quantidade_material" size="4" maxlength="5">
                         
                        <label for="unidade_material ">Unidade:</label>
                        <input type="text" class="janela_formulario"  name="unidade_material" id="unidade_material" size="2" maxlength="4">
                         
                        <label for="especificacao_material ">Especificação:</label>
                        <input type="text" class="janela_formulario"  name="especificacao_material" id="especificacao_material" size="87" maxlength="200">
                    </div>
                     <br>
                        </div>
                    
<h3>FARDAMENTO/EPI</h3>
                              
                    <input id="bmi"  type="button" value="+" onclick="mostra('mi')" /> 
                    <div id="mi" class="">
                    
                    <div>
                        <label for="quantidade_fardamento ">Quantidade:</label>
                        <input type="text" class="janela_formulario"  name="quantidade_fardamento" id="quantidade_fardamento" size="4" maxlength="5">
                         
                        <label for="unidade_fardamento ">Unidade:</label>
                        <input type="text" class="janela_formulario"  name="unidade_fardamento" id="unidade_fardamento" size="2" maxlength="4">
                         
                        <label for="especificacao_fardamento ">Especificação:</label>
                        <input type="text" class="janela_formulario"  name="especificacao_fardamento" id="especificacao_fardamento" size="87" maxlength="200">
                         
                    </div>  
                     <br>
                        </div>
                    
<h3>TREINAMENTO</h3>
                              
                    <input id="bmj"  type="button" value="+" onclick="mostra('mj')" /> 
                    <div id="mj" class="">
                    
                    <div>
                        <label for="especificacao_treinamento ">Especificação:</label>
                        <input type="text" class="janela_formulario"  name="especificacao_treinamento" id="especificacao_treinamento" size="120" maxlength="200">
                     </div>
                     <br>
                        </div>
                    
<h3>OUTRAS INFORMAÇÕES</h3>
                              
                    <input id="bmk"  type="button" value="+" onclick="mostra('mk')" /> 
                    <div id="mk" class="">
                    
                    <div>
                        <label for="informacaoo ">Informações:</label>
                        <input type="text" class="janela_formulario"  name="informacaoo" id="informacaoo" size="121" maxlength="200">
                         
                    </div>
                     <br>
                        </div>
                    
<h3>RESPONSÁVEIS TÉCNICOS</h3>
                              
                    <input id="bml"  type="button" value="+" onclick="mostra('ml')" /> 
                    <div id="ml" class="">
                    
                    <div>
                        <h4>Responsável Técnico</h4>
                        <label for="nome_responsaveltec ">Nome:</label>
                        <input type="text" class="janela_formulario"  name="nome_responsaveltec" id="nome_responsaveltec" size="58" maxlength="30"> 
                         
                        <label for="funcao_responsaveltec ">Função:</label>
                        <input type="text" class="janela_formulario"  name="funcao_responsaveltec" id="funcao_responsaveltec" size="57" maxlength="50">
                        
                         <h4>Técnico Segurança Responsável </h4>
                        <label for="nome_tecseguranca ">Nome:</label>
                        <input type="text" class="janela_formulario"  name="nome_tecseguranca" id="nome_tecseguranca" size="58" maxlength="30"> 
                         
                        <label for="funcao_tecseguranca ">Função:</label>
                        <input type="text" class="janela_formulario"  name="funcao_tecseguranca" id="funcao_tecseguranca" size="57" maxlength="50">  
                     </div> 
                        </div>
                    
                    <ul>
                        <table>
                            <td><input type="submit" value="Cadastrar" size="10px"></td>
                            <td><input type="reset" value="Limpar"></td>
                        </table>
                    </ul>
                </form>
                
            </div>
        </main>
        
    </body>

</html>
<!---ESTE ESCRIPT É DO CHECKBOX --->
<script>
$(document).ready(function(){
 $('#objeto').multiselect({
  nonSelectedText: 'Selecione Objeto',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'300px'
 });
 
 $('#objeto_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"levantamento_tecnico_re.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#objeto option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#objeto').multiselect('refresh');
    alert(data);
   }
  });
 });
});
</script>

<br><br>
        <?php include_once("../../../_incluir/rodape.php"); ?>  
        <br><br>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>