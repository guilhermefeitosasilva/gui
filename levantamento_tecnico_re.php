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

    if ( !isset($_SESSION["user_portal"]) ) {
        header("location:login.php");
    }
    // fim do teste de seguranca

    // Determinar localidade BR
    setlocale(LC_ALL, 'pt_BR');


?>
<!DOCTYPE html>
<html>
  <head>
<meta charset="UTF-8">
<title>MAXTEC-SERVICOS</title>
	  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="../residuos/js/selecao.js"></script>

<link rel="stylesheet" href="../../../css/sienge-e.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />       
<link rel="shortcut icon" href="../../../COMPOSER/img/icone.jpg" type="image/x-jpg">    
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link href="../../../css/sienge-d.css" rel="stylesheet">
<link href="../../../css/sienge-b.css" rel="stylesheet">
<link href="../../../css/estilo-b.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
<style>
	.dinamic-select {
				display: inline-flex;
				flex-direction: column;
				padding: 10px;
				color: #FFF;
				background-color: #004050;
				list-style-type: none;
			}

	.dinamic-select:hover li.option {
				display: block;
			}

	.dinamic-select li.option {
				display: none;
			}

	#cadastrar {
				padding: 10px;
			}
</style>
	  
<style type="text/css">
            .hidden {
            
                display: none;
                
            }
            input{
                
    background: #FFE5CC; 
            }
</style>
	  
<!-- Adicionando Javascript do CEP -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#endereco").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#endereco").val("Carregando...");
                        $("#bairro").val("Carregando...");
                        $("#cidade").val("Carregando...");
                        $("#uf").val("Carregando...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#endereco").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
			
			function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#endereco_lps").val("");
                $("#bairro_lps").val("");
                $("#cidade_lps").val("");
                $("#uf_lps").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep_lps").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#endereco_lps").val("Carregando...");
                        $("#bairro_lps").val("Carregando...");
                        $("#cidade_lps").val("Carregando...");
                        $("#uf_lps").val("Carregando...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#endereco_lps").val(dados.logradouro);
                                $("#bairro_lps").val(dados.bairro);
                                $("#cidade_lps").val(dados.localidade);
                                $("#uf_lps").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
		});
</script>    

</head>
<?php require_once("../../../_incluir/topo.php"); ?>

<!--- AQUI É O MENU --->
<main> 
<div id="accordian">
	<ul>
		<li>
			<h3><span  class="fa fa-home"></span>Home</h3>
			<ul>
				<li><a href="../../../home.php">Home</a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
		</li>
		<li >
			<h3><span class="fa fa-building"></span>Comercial</h3>
            
			<ul>
				<li><a href="../../cliente/consultar_cliente.php">Cliente</a></li>
                
				<li><a href="../../levantamento_tecnico/residuos/consultar_levantamento_re.php">Levantamento Tecnico Resíduo</a></li>
                
				<li><a href="../../levantamento_tecnico/mao_de_obra/consultar_levantamento_mo.php">Levantamento Tecnico Mão Obra</a></li>
                
                <li><a href="#">Proposta</a></li>
                
            <h3><span class="#"></span>Cadastro de Itens</h3>
              
		          <li><a href="../../../comercial/apoio/objetodeservico/consultar_objetodeservico.php">Objeto de Serviço</a></li>
		          <li><a href="../../../comercial/apoio/tipoderesiduo/consultar_tipoderesiduo.php">Tipo de Resíduo</a></li>
		          <li><a href="../../../comercial/apoio/destinacaoderesiduo/consultar_destinacaoderesiduo.php">Destinação do Resíduo</a></li>
		          <li><a href="../../../comercial/apoio/periodicidadedacoleta/consultar_periodicidadedacoleta.php">Periodicidade das Coletas</a></li>
		          <li><a href="../../../comercial/apoio/equipedetrabalho/consultar_equipedetrabalho.php">Equipe de Trabalho</a></li>
		          <li><a href="../../../comercial/apoio/material_equipamento/consultar_material_equipamento.php">Material/Equipamentos</a></li>
		          <li><a href="../../../comercial/apoio/fardamento_epi/consultar_fardamento_epi.php">Fardamento/Epi</a></li>
                <li><a href="../../../comercial/apoio/precos/consultar_precos.php">Preços</a></li>
                
                <li><a href="../../../comercial/apoio/formasdepagamento/consultar_formasdepagamento.php">Formas de Pagamentos</a>
                
                </li><li><a href="../../../comercial/apoio/responsaveltecnico/consultar_responsaveltecnico.php">Responsavel Técnico</a></li>
				
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
</main> 
<!--- AQUI É O FORMULARIO --->
 <main> 
     <div id="janela_formulario">
 
<br><br>
    <form method="post" id="framework_form">
       <div class="form-group">
           
<h2>LEVANTAMENTO TÉCNICO - RESÍDUO</h2>
          <h3>DADOS DO CLIENTE</h3> 
   
<div >
<label for="login">Login / CNPJ / CPF*:</label>
    <input type="text" class="janela_formulario" name="login" id="login" size="20" maxlength="18">
</div>
<div >
<label for="nome">Nome / Razão Social*:</label>
    <input type="text" class="janela_formulario" name="nome" id="nome" size="47" maxlength="100">
                        
<label for="nome_fantasia">Nome Fantasia:</label>
    <input type="text" class="janela_formulario" name="nome_fantasia" id="nome_fantasia" size="47" maxlength="100">
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
    <input type="text" class="janela_formulario" name="empresa" id="empresa" size="56" maxlength="100">
</div>
   
<br>
		   
<h3>CONTATO</h3>
		   <input id="bma" type="button" value="+" onclick="mostra('ma')" /> 
		   <div id="ma" class="">
                        
	<div>
                        
	<label for="telefone">Telefone*:</label>
	<input type="text" class="janela_formulario" name="telefone" id="telefone" size="20" maxlength="14">
                        
	<label for="contato">Contato:</label>
	<input type="text" class="janela_formulario" name="contato" id="contato" size="18" maxlength="50">
                        
	<label for="funcao">Funçao:</label>
	<input type="text" class="janela_formulario" name="funcao" id="funcao" size="31" maxlength="50">
                        
	<label for="data_visita">Data da Visita:</label>
	<input type="text" class="janela_formulario" name="data_visita" id="data_visita" size="13" maxlength="10">
	</div>
	<div>  
		<label for="email">E-mail*:</label>
		<input type="text" class="janela_formulario" name="email" id="email" size="125" maxlength="50">
                       
	</div>
	<br>  
		   </div>                             
<h3>ENDEREÇO COMERCIAL</h3>
                        
<input id="bmb"  type="button" value="+" onclick="mostra('mb')" /> 
<div id="mb" class="">
<div>
<label for="cep">CEP*:</label> 
    <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" /> 
	
 <label for="endereco">Rua:</label>
	 <input name="endereco" type="text" id="endereco" size="60" />
                    
<label for="numero">N°:</label>
    <input type="text" class="janela_formulario" name="numero" id="numero" size="2" maxlength="4">
                     
<label for="bairro">Bairro:</label>
	<input name="bairro" type="text" id="bairro" size="40" />
</div>
                    
<div>
<label for="cidade">Cidade:</label>
	<input name="cidade" type="text" id="cidade" size="40" />
                        
<label for="uf">Estado:</label>
	<input name="uf" type="text" id="uf" size="2" />
</div>
<br>
 </div>
	
<h3>LOCAL DA PRESTAÇÃO DO SERVIÇO</h3>
                        
<input id="bmc"  type="button" value="+" onclick="mostra('mc')" /> 
<div id="mc" class="">
<div>
<div>
<label for="cep_lps">CEP*:</label> 
    <input name="cep_lps" type="text" id="cep_lps" value="" size="10" maxlength="9" /> 
	
 <label for="endereco_lps">Rua:</label>
	 <input name="endereco_lps" type="text" id="endereco_lps" size="60" />
                    
<label for="numero_lps">N°:</label>
    <input type="text" class="janela_formulario" name="numero_lps" id="numero_lps" size="2" maxlength="4">
                     
<label for="bairro_lps">Bairro:</label>
	<input name="bairro_lps" type="text" id="bairro_lps" size="40" />
</div>
                    
<div>
<label for="cidade_lps">Cidade:</label>
	<input name="cidade_lps" type="text" id="cidade_lps" size="40" />
                        
<label for="uf_lps">Estado:</label>
	<input name="uf_lps" type="text" id="uf_lps" size="2" />
</div>

<br>
 </div>
           

<h3>OBJETO DO SERVIÇO</h3>              
           <input id="bmd"  type="button" value="+" onclick="mostra('md')" /> 
           <div id="md" class="">  
<div class="pull-right">
	<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcaa">Adicionar</button>
</div>
			   
			   <!-- Inicio Modal -->
<div class="modal fade" id="myModalcaa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Adicionar Objeto do Serviço</h4>
			</div>
<select id="objeto" name="objeto[]" multiple class="form-control" >
<?php
$result_objeto = "SELECT * FROM objetoservico";
$result_objeto = mysqli_query( $conecta, $result_objeto );

while ( $row_objeto = mysqli_fetch_assoc( $result_objeto ) ) {
?>
    <option value="<?php echo $row_objeto[ 'objeto' ]; ?>"> <?php echo $row_objeto[ 'objeto' ]; ?></option>
<?php
    }
?>
</select> 
<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-success">Adicionar</button>
			</div>
		</div>
	</div>
</div>
			   <!-- Fim Modal -->

<br>	
<div class="row">
	<div class="col-md-6">
		<table class="table">
			<thead>
				<tr>
					<th>Objeto do Serviço</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
</div> 
<br>  
           
           
<h3>TIPO DE RESÍDUO</h3>             
           <input id="bme"  type="button" value="+" onclick="mostra('me')" /> 
           <div id="me" class=""> 
<div class="pull-right">
	<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcab">Adicionar</button>
</div>
			   
			   <!-- Inicio Modal -->
<div class="modal fade" id="myModalcab" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Adicionar Tipo de Resíduo</h4>
			</div>
<select id="tipo_residuo" name="tipo_residuo[]" multiple class="form-control" >
<?php
$result_tiporesiduo = "SELECT * FROM tiporesiduo";
$result_tiporesiduo = mysqli_query( $conecta, $result_tiporesiduo );

while ( $row_tiporesiduo = mysqli_fetch_assoc( $result_tiporesiduo ) ) {
?>
    <option value="<?php echo $row_tiporesiduo[ 'tipo_residuo' ]; ?>"> <?php echo $row_tiporesiduo[ 'tipo_residuo' ]; ?></option>
<?php
    }
?>
</select> 
<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-success">Adicionar</button>
			</div>
		</div>
	</div>
</div>
<!-- Fim Modal -->

<br>	
<div class="row">
	<div class="col-md-6">
		<table class="table">
			<thead>
				<tr>
					<th>Tipo de Resíduo</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
</div> 
<br> 

<h3>DESTINAÇÃO DO RESÍDUO</h3>             
           <input id="bmf"  type="button" value="+" onclick="mostra('mf')" /> 
           <div id="mf" class="">        
<div class="pull-right">
	<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcac">Adicionar</button>
</div>
			   
			   <!-- Inicio Modal -->
<div class="modal fade" id="myModalcac" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Adicionar Destinação do Resíduo</h4>
			</div>
<select id="destinacao" name="destinacao[]" multiple class="form-control" >
<?php
$result_destinacaoresiduo = "SELECT * FROM destinacaoresiduo";
$result_destinacaoresiduo = mysqli_query( $conecta, $result_destinacaoresiduo );
    
while ( $row_destinacaoresiduo = mysqli_fetch_assoc( $result_destinacaoresiduo ) ) {
?>
    <option value="<?php echo $row_destinacaoresiduo[ 'destinacao_residuo' ]; ?>"> <?php echo $row_destinacaoresiduo[ 'destinacao_residuo' ]; ?></option>
<?php
    }
?>
</select> 
<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-success">Adicionar</button>
			</div>
		</div>
	</div>
</div>
			   <!-- Fim Modal -->

<br>	
<div class="row">
	<div class="col-md-6">
		<table class="table">
			<thead>
				<tr>
					<th>Destinação do Resíduo</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
</div> 
<br>        
		   
<h3>PERIODICIDADE DAS COLETAS</h3>             
           <input id="bmg"  type="button" value="+" onclick="mostra('mg')" /> 
           <div id="mg" class="">    
<div class="pull-right">
	<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcad">Adicionar</button>
</div>
			   
			   <!-- Inicio Modal -->
<div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Adicionar Periodicidade das Coletas</h4>
			</div>

<select id="periodicidade" name="periodicidade[]" multiple class="form-control" >
<?php
$result_periodicidadecoleta = "SELECT * FROM periodicidadecoleta";
$result_periodicidadecoleta = mysqli_query( $conecta, $result_periodicidadecoleta );

while ( $row_periodicidadecoleta = mysqli_fetch_assoc( $result_periodicidadecoleta ) ) {
?>
    <option value="<?php echo $row_periodicidadecoleta[ 'periodicidade_coleta' ]; ?>"> <?php echo $row_periodicidadecoleta[ 'periodicidade_coleta' ]; ?></option>
<?php
    }
?>
</select> 
<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-success">Adicionar</button>
			</div>
		</div>
	</div>
</div>
			   <!-- Fim Modal -->

<br>	
<div class="row">
	<div class="col-md-6">
		<table class="table">
			<thead>
				<tr>
					<th>Periodicidade das Coletas</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
</div> 
<br>      
					
<h3>EQUIPE DE TRABALHO</h3>             
<input id="bmh"  type="button" value="+" onclick="mostra('mh')" /> 
<div id="mh" class="">

<div class="pull-right">
	<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcae">Adicionar</button>
</div>
			   
			   <!-- Inicio Modal -->
<div class="modal fade" id="myModalcae" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Adicionar Equipe de Trabalho</h4>
			</div>

<label for="quantidade_equipe ">Quantidade:</label>
<input type="text" class="janela_formulario"  name="quantidade_equipe" id="quantidade_equipe" size="4" maxlength="5">
								 

<select id="funcaoo" name="funcaoo[]" multiple class="form-control" >

<?php
$result_equipetrabalho = "SELECT * FROM equipetrabalho";
$result_equipetrabalho = mysqli_query( $conecta, $result_equipetrabalho );

while ( $row_equipetrabalho = mysqli_fetch_assoc( $result_equipetrabalho ) ) {
?>
    <option value="<?php echo $row_equipetrabalho[ 'equipe_trabalho' ]; ?>"> <?php echo $row_equipetrabalho[ 'equipe_trabalho' ]; ?></option>
<?php
    }
?>
</select> 
	<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-success">Adicionar</button>
			</div>
		</div>
	</div>
</div>
			   <!-- Fim Modal -->

<br>	
<div class="row">
	<div class="col-md-6">
		<table class="table">
			<thead>
				<tr>
					<th>Quantidade</th>
					<th>Item</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
</div> 
<br>
	
<h3>MATERIAL E EQUIPAMENTOS</h3>              
<input id="bmi"  type="button" value="+" onclick="mostra('mi')" /> 
<div id="mi" class="">

<div class="pull-right">
	<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcadf">Adicionar</button>
</div>
			   
			   <!-- Inicio Modal -->
<div class="modal fade" id="myModalcadf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Adicionar Material e Equipamento</h4>
			</div>

<label for="quantidade_material ">Quantidade:</label>
    <input type="text" class="janela_formulario"  name="quantidade_material" id="quantidade_material" size="4" maxlength="5">
                         
<label for="unidade_material ">Unidade:</label>
    <input type="text" class="janela_formulario"  name="unidade_material" id="unidade_material" size="2" maxlength="4">
								 
<select id="especificacao_material" name="especificacao_material[]" multiple class="form-control" >

<?php
$result_materialequipamento = "SELECT * FROM materialequipamento";
$result_materialequipamento = mysqli_query( $conecta, $result_materialequipamento );

while ( $row_materialequipamento = mysqli_fetch_assoc( $result_materialequipamento ) ) {
?> 
    <option value="<?php echo $row_materialequipamento[ 'material_equipamento' ]; ?>"> <?php echo $row_materialequipamento[ 'material_equipamento' ]; ?></option>
<?php
    }
?>
</select> 
	<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-success">Adicionar</button>
			</div>
		</div>
	</div>
</div>
			   <!-- Fim Modal -->

<br>	
<div class="row">
	<div class="col-md-8">
		<table class="table">
			<thead>
				<tr>
					<th>Quantidade</th>
					<th>Unidade</th>
					<th>Item</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
</div> 
<br> 
 	
   
<h3>FARDAMENTO/EPI</h3>
                              
<input id="bmj"  type="button" value="+" onclick="mostra('mj')" /> 
<div id="mj" class="">
                    

<div class="pull-right">
	<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcadg">Adicionar</button>
</div>
			   
			   <!-- Inicio Modal -->
<div class="modal fade" id="myModalcadg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Adicionar Fardamento/EPI</h4>
			</div>
<label for="quantidade_fardamento ">Quantidade:</label>
    <input type="text" class="janela_formulario"  name="quantidade_fardamento" id="quantidade_fardamento" size="4" maxlength="5">
                         
<label for="unidade_fardamento ">Unidade:</label>
    <input type="text" class="janela_formulario"  name="unidade_fardamento" id="unidade_fardamento" size="2" maxlength="4">

    
<select id="especificacao_fardamento" name="especificacao_fardamento[]" multiple class="form-control" >

<?php
$result_fardamentoepi = "SELECT * FROM fardamentoepi";
$result_fardamentoepi = mysqli_query( $conecta, $result_fardamentoepi );

while ( $row_fardamentoepi = mysqli_fetch_assoc( $result_fardamentoepi ) ) {
?>
     <option value="<?php echo $row_fardamentoepi[ 'fardamento_epi' ]; ?>"> <?php echo $row_fardamentoepi[ 'fardamento_epi' ]; ?></option>
<?php
    }
?>
</select> 
          <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-success">Adicionar</button>
			</div>
		</div>
	</div>
</div>
			   <!-- Fim Modal -->

<br>	
<div class="row">
	<div class="col-md-8">
		<table class="table">
			<thead>
				<tr>
					<th>Quantidade</th>
					<th>Unidade</th>
					<th>Item</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
</div> 
<br> 
	
	
<h3>TREINAMENTO ESPECIFICO</h3>
                              
<input id="bmk"  type="button" value="+" onclick="mostra('mk')" /> 
<div id="mk" class="">
                    

<div class="pull-right">
	<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcadh">Adicionar</button>
</div>
			   
			   <!-- Inicio Modal -->
<div class="modal fade" id="myModalcadh" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Adicionar Treinamento Específico</h4>
			</div>

 
<div class="form-group">
<label for="especificacao_treinamento ">Especificação:</label>
	<textarea name="especificacao_treinamento" class="form-control" id="especificacao_treinamento"></textarea>
</div>                     
          <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-success">Adicionar</button>
			</div>
		</div>
	</div>
</div>
			   <!-- Fim Modal -->

<br>	
<div class="row">
	<div class="col-md-8">
		<table class="table">
			<thead>
				<tr>
					<th>Especificação</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
</div> 
<br>
	  
<h3>PRECISA INTEGRAÇÃO DA EQUIPE E EQUIPAMENTOS NO CLIENTE?</h3>
                              
<input id="bml"  type="button" value="+" onclick="mostra('ml')" /> 
<div id="ml" class="">

<div class="pull-right">
	<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcadi">Adicionar</button>
</div>
			   
			   <!-- Inicio Modal -->
<div class="modal fade" id="myModalcadi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Adicionar Integração da Equipe e Equipamentos no Cliente</h4>
						</div>

<div class="form-group">
	<select name="opcao_integracao">
    <option value='Sim'>Sim</option>
    <option value='Nao'>Nao</option>
</select>
<br>
<label for="informacaoo ">Especificação:</label>
<textarea name="informacaoo" class="form-control" id="informacaoo"></textarea>
</div>              
          <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-success">Adicionar</button>
			</div>
		</div>
	</div>
</div>
<!-- Fim Modal -->

<br>	
<div class="row">
	<div class="col-md-8">
		<table class="table">
			<thead>
				<tr>
					<th>Opção</th>
					<th>Especificação</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
</div> 
<br>

<h3>RESPONSÁVEL</h3>
                              
<input id="bmm"  type="button" value="+" onclick="mostra('mm')" /> 
<div id="mm" class="">

<div class="pull-right">
	<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcadj">Adicionar</button>
</div>
			   
			   <!-- Inicio Modal -->
<div class="modal fade" id="myModalcadj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Adicionar Responsável Pelo Levantamento Tecníco</h4>
						</div>

<div class="form-group">
<label for="">Nome:</label>
<select id="nome_responsaveltec" name="nome_responsaveltec[]" multiple class="form-control" >
<?php
$result_responsaveltecnico = "SELECT * FROM responsaveltecnico";
$result_responsaveltecnico = mysqli_query( $conecta, $result_responsaveltecnico );

while ( $row_responsaveltecnico = mysqli_fetch_assoc( $result_responsaveltecnico ) ) {
?>
       <option value="<?php echo $row_responsaveltecnico[ 'responsavel_tecnico' ]; ?>"> <?php echo $row_responsaveltecnico[ 'responsavel_tecnico' ]; ?></option>
<?php
    }
?>
</select> 
</div> 
<div class="form-group">
<label for="">Função:</label>
<select id="funcao_responsaveltec" name="funcao_responsaveltec[]" multiple class="form-control" >       
<?php
$result_responsaveltecnico = "SELECT * FROM responsaveltecnico";
$result_responsaveltecnico = mysqli_query( $conecta, $result_responsaveltecnico );

while ( $row_responsaveltecnico = mysqli_fetch_assoc( $result_responsaveltecnico ) ) {
?>
    <option value="<?php echo $row_responsaveltecnico[ 'funcao_responsavel' ]; ?>"> <?php echo $row_responsaveltecnico[ 'funcao_responsavel' ]; ?></option>
<?php
    }
?>
</select> 
</div> 
  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-success">Adicionar</button>
			</div>
		</div>
	</div>
</div>
<!-- Fim Modal -->

<br>	
<div class="row">
	<div class="col-md-8">
		<table class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Função</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
</div> 
<br>     
    
<h3>ANÁLISE CRÍTICA - COM BASE NAS INFORMAÇÕES DO LEVANTAMENTO TÉCNICO, A MAXTEC TEM CONDIÇÕES DE FORNECER OS SERVIÇOS AO CLIENTE?</h3>
                              
<input id="bmn"  type="button" value="+" onclick="mostra('mn')" /> 
<div id="mn" class="">
<div class="pull-right">
	<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcadk">Adicionar</button>
</div>
			   
			   <!-- Inicio Modal -->
<div class="modal fade" id="myModalcadk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Adicionar Responsável Pelo Levantamento Tecníco</h4>
						</div>

<div class="form-group">	
<select name="analise_critica">
    <option value='Sim'>Sim</option>
    <option value='Nao'>Nao</option>
</select>
</div>              
          <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-success">Adicionar</button>
			</div>
		</div>
	</div>
</div>
<!-- Fim Modal -->

<br>	
<div class="row">
	<div class="col-md-8">
		<table class="table">
			<thead>
				<tr>
					<th>Opção</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
</div> 
<br><br><br> 


<div class="pull-right">
	<button type="submit" class="btn btn-success" onclick="return message();">Cadastrar</button>
	
	<button type="reset" class="btn btn-secondary">Limpar</button>
</div>
	   
        </div>
		</div>
   </form>
   <br/>
</div>
   
  
</main> 
    
</html>
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


<script>
    /*jQuery time*/
$(document).ready(function(){
	$("#accordian h3").click(function(){
		//slide up all the  lists
		$("#accordian ul ul").slideUp();
		//slide down the link list below the h3 clicked - only if its closed
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
})
    </script> 

<!--- AQUI É O SCRIPT CHEKCBOX --->
<script>
$(document).ready(function(){
 $('#objeto').multiselect({
  nonSelectedText: 'Selecione',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });

 $('#tipo_residuo').multiselect({
  nonSelectedText: 'Selecione',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
    
 $('#destinacao').multiselect({
  nonSelectedText: 'Selecione',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 }); 
    
 $('#periodicidade').multiselect({
  nonSelectedText: 'Selecione',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
    
 $('#funcaoo').multiselect({
  nonSelectedText: 'Selecione',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 $('#especificacao_material').multiselect({
  nonSelectedText: 'Selecione',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 $('#especificacao_fardamento').multiselect({
  nonSelectedText: 'Selecione',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });

 $('#nome_responsaveltec').multiselect({
  nonSelectedText: 'Selecione',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'300px'
 });
 
 $('#funcao_responsaveltec').multiselect({
  nonSelectedText: 'Selecione',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'300px'
 });
 
 $('#framework_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#objeto option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#objeto').multiselect('refresh');
   
    $('#tipo_residuo option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#tipo_residuo').multiselect('refresh');
     
    $('#destinacao option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#destinacao').multiselect('refresh');
     
    $('#periodicidade option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#periodicidade').multiselect('refresh');
    
    $('#funcaoo option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#funcaoo').multiselect('refresh');
    
    $('#especificacao_material option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#especificacao_material').multiselect('refresh');
    
    $('#especificacao_fardamento option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#especificacao_fardamento').multiselect('refresh');
    
    $('#nome_responsaveltec option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#nome_responsaveltec').multiselect('refresh');
      
    $('#funcao_responsaveltec option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#funcao_responsaveltec').multiselect('refresh');

	   window.location='consultar_levantamento_re.php';
	   alert('Colaborador, Seu cadastro foi realizado.');
   }
  });
 });
});
	
</script>

<script type="text/javascript">
			$('#exampleModal').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget) // Button that triggered the modal
				var recipient = button.data('whatever') // Extract info from data-* attributes
				var recipientnome = button.data('whatevernome')
				var recipientdetalhes = button.data('whateverdetalhes')
				// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
				// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
				var modal = $(this)
				modal.find('.modal-title').text('ID do Curso: ' + recipient)
				modal.find('#id_curso').val(recipient)
				modal.find('#recipient-name').val(recipientnome)
				modal.find('#detalhes-text').val(recipientdetalhes)
			})
</script> 

      <?php include_once("../../../_incluir/rodape.php"); ?>  
        <br><br>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
       
