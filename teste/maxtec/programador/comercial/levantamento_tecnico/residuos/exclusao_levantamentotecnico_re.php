<?php require_once("../../../../../../conexao/conexao.php"); ?>
<?php
    // teste de segurança
    session_start();

    if ( !isset($_SESSION["usuarioId"]) ) {
        header("location:login.php");
    }
    // fim do teste de seguranca

    // Determinar localidade BR
    setlocale(LC_ALL, 'pt_BR');


    // Consulta a tabela de clientes
    $tr = "SELECT * ";
    $tr .= "FROM cad_cliente ";
    if(isset($_GET["num_levantamento"]) ) {
        $id = $_GET["num_levantamento"];
        $tr .= "WHERE num_levantamento = {$id} ";
    } else {
        $tr .= "WHERE num_levantamento = 1 ";
    }

    $con_cliente = mysqli_query($conecta,$tr);
    if(!$con_cliente) {
        die("Erro na consulta");
    }
    $info_listagem_cliente = mysqli_fetch_assoc($con_cliente);


//-------------------------------------------------------------------------------------------------------   
// consulta aos objetos de servicos
    $objeto = "SELECT * ";
    $objeto .= "FROM objetoservico ";
    $lista_objeto = mysqli_query($conecta, $objeto);
    if(!$lista_objeto) {
       die("erro no banco"); 
    } 


// consulta aos tipo de pessoa
    $tipopessoas = "SELECT * ";
    $tipopessoas .= "FROM tipopessoas ";
    $lista_pessoa = mysqli_query($conecta, $tipopessoas);
    if(!$lista_pessoa) {
       die("erro no banco"); 
    }

// consulta aos tipo de cliente
    $tipoclientes = "SELECT * ";
    $tipoclientes .= "FROM tipocliente ";
    $lista_clientes = mysqli_query($conecta, $tipoclientes);
    if(!$lista_clientes) {
       die("erro no banco"); 
    }

// consulta aos tipo de resíduo
    $tiporesiduos = "SELECT * ";
    $tiporesiduos .= "FROM tiporesiduo ";
    $lista_residuos = mysqli_query($conecta, $tiporesiduos);
    if(!$lista_residuos) {
       die("erro no banco"); 
    }

// consulta as destinacoes
    $destinacoes = "SELECT * ";
    $destinacoes .= "FROM destinacaoresiduo ";
    $lista_destinacoes = mysqli_query($conecta, $destinacoes);
    if(!$lista_destinacoes) {
       die("erro no banco"); 
    }

// consulta as periodicidades
    $periodicidades = "SELECT * ";
    $periodicidades .= "FROM periodicidadecoleta ";
    $lista_periodicidades = mysqli_query($conecta, $periodicidades);
    if(!$lista_periodicidades) {
       die("erro no banco"); 
    }


// consulta a equipe de trabalho
    $equipetrabalho = "SELECT * ";
    $equipetrabalho .= "FROM equipetrabalho ";
    $lista_equipes = mysqli_query($conecta, $equipetrabalho);
    if(!$lista_equipes) {
       die("erro no banco"); 
    }


// consulta o material e equipamento
    $equipamento = "SELECT * ";
    $equipamento .= "FROM materialequipamento ";
    $lista_equipamentos = mysqli_query($conecta, $equipamento);
    if(!$lista_equipamentos) {
       die("erro no banco"); 
    }


// consulta o fardamento/epi
    $fardamentoepi = "SELECT * ";
    $fardamentoepi .= "FROM fardamentoepi ";
    $lista_fardamentos = mysqli_query($conecta, $fardamentoepi);
    if(!$lista_fardamentos) {
       die("erro no banco"); 
    }

// consulta o responsavel tecnico
    $responsavel_tecnico = "SELECT * ";
    $responsavel_tecnico .= "FROM responsaveltecnico ";
    $lista_responsalvels = mysqli_query($conecta, $responsavel_tecnico);
    if(!$lista_responsalvels) {
       die("erro no banco"); 
    }

// consulta a funcao do responsavel tecnico
    $funcao_responsavel = "SELECT * ";
    $funcao_responsavel .= "FROM responsaveltecnico ";
    $lista_funcao_respons = mysqli_query($conecta, $funcao_responsavel);
    if(!$lista_funcao_respons) {
       die("erro no banco"); 
    }


// consulta o aprovador
    $aprovador = "SELECT * ";
    $aprovador .= "FROM aprovadores ";
    $lista_aprovadors = mysqli_query($conecta, $aprovador);
    if(!$lista_aprovadors) {
       die("erro no banco"); 
    }

// consulta a funcao do aprovador
    $funcao_aprovadores = "SELECT * ";
    $funcao_aprovadores .= "FROM aprovadores ";
    $lista_funcao_apros = mysqli_query($conecta, $funcao_aprovadores);
    if(!$lista_funcao_apros) {
       die("erro no banco"); 
    }

//-------------------------------------------------------------------------------------------------------   

?>

<!doctype html>
<html>
  <head>
<meta charset="UTF-8">
<title>MAXTEC-SERVICOS</title>
	  
<link rel="shortcut icon" href="../../../COMPOSER/img/icone.jpg" type="image/x-jpg">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="../residuos/js/selecao.js"></script>
<link rel="stylesheet" href="../../../css/sienge-e.css" />
	

<link rel="stylesheet" href="../../../css/bootstrap.min.css" />	
	
<link href="../../../css/sienge-d.css" rel="stylesheet">
<link href="../../../css/sienge-b.css" rel="stylesheet">
<link href="../../../css/estilo-b.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php require_once("../../../_incluir/topo.php"); ?>

<main> 
<div id="accordian">
	<ul>
		<li>
			<h3><span  class="fa fa-home"></span>Home</h3>
			<ul>
				<li><a href="./../../../../home.php">Home</a></li>
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
                
                <li><a href="../../proposta/consultar_proposta.php">Proposta</a></li>
                
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

<!-- prefix free to deal with vendor prefixes -->
<script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript" type="text/javascript"></script>

    </main>     
    <body>
     <main> 
     <div id="janela_formulario">
 <form  id="framework_form">
     <div class="form-group">
          
        <br><br>                      
<h2>LEVANTAMENTO TÉCNICO - RESÍDUO</h2>
          <h3>DADOS DO CLIENTE</h3> 
   <br>
<div >
	<label for="num_levantamento" >Nº Levantamento*: </label>
    <input type="text" class="janela_formulario" name="num_levantamento" id="num_levantamento" size="20" maxlength="8" value="<?php echo utf8_encode($info_listagem_cliente["num_levantamento"])  ?>">
</div>
		 
<div >
<label for="login">Login / CNPJ / CPF*:</label>
	<input type="text" class="janela_formulario" name="login" id="login" size="20" maxlength="18" value="<?php echo utf8_encode($info_listagem_cliente["login"])  ?>" onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' >
</div>
<div >
<label for="nome">Nome / Razão Social*:</label>
    <input type="text" class="janela_formulario" name="nome" id="nome" size="47" maxlength="100" value="<?php echo utf8_encode($info_listagem_cliente["nome"])  ?>" >
                        
<label for="nome_fantasia">Nome Fantasia:</label>
    <input type="text" class="janela_formulario" name="nome_fantasia" id="nome_fantasia" size="47" maxlength="100" value="<?php echo utf8_encode($info_listagem_cliente["nome_fantasia"])  ?>">
</div>
        
<div>    
  <label for="tipo_pessoa">Tipo de Pessoa*:</label>
                    <select id="tipo_pessoa" name="tipo_pessoa"> 
                        <?php 
                            $tipodepessoa = $info_listagem_cliente["tipo_pessoa"];
                            while($linha = mysqli_fetch_assoc($lista_pessoa)) {
                                $pessoa_principal =  $linha["nome"];
                                if($tipodepessoa == $pessoa_principal) {
                        ?>
                            <option value="<?php echo utf8_encode($linha["nome"]) ?>" selected>
                                <?php echo utf8_encode($linha["nome"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo utf8_encode($linha["nome"]) ?>" >
                                <?php echo utf8_encode($linha["nome"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>    
    
    
    
<label for="tipo_cliente">Tipo de Cliente*:</label>
                    <select id="tipo_cliente" name="tipo_cliente"> 
                        <?php 
                            $tipodecliente = $info_listagem_cliente["tipo_cliente"];
                            while($linha = mysqli_fetch_assoc($lista_clientes)) {
                                $cliente_principal =  $linha["nome"] ;
                                if($tipodecliente == $cliente_principal) {
                        ?>
                            <option value="<?php echo utf8_encode($linha["nome"]) ?>" selected>
                                <?php echo utf8_encode($linha["nome"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo utf8_encode($linha["nome"]) ?>" >
                                <?php echo utf8_encode($linha["nome"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>     

    <label for="empresa">Empresa:</label>
    <input type="text" class="janela_formulario" name="empresa" id="empresa" size="64" maxlength="100" value="<?php echo utf8_encode($info_listagem_cliente["empresa"])  ?>" >
</div>
<br>
<h3>CONTATO</h3> 
		 <input id="bma"  type="button" value="+" onclick="mostra('ma')" /> 
		 <div id="ma" class="">
<div>  
	<label for="telefone">Telefone*:</label>
	<input type="text" class="janela_formulario" name="telefone" value="<?php echo utf8_encode($info_listagem_cliente["telefone"])  ?>"  id="telefone" size="20" maxlength="50" >
                        
	<label for="contato">Contato:</label>
	 <input type="text" class="janela_formulario" name="contato" value="<?php echo utf8_encode($info_listagem_cliente["contato"])  ?>"  id="contato" size="18" maxlength="50">
                        
 	 <label for="funcao">Funçao:</label>
 	<input type="text" class="janela_formulario" name="funcao" value="<?php echo utf8_encode($info_listagem_cliente["funcao"])  ?>"  id="funcao" size="31" maxlength="30" >
                        
 	<label for="data_visita">Data da Visita:</label>
 	<input type="text" class="janela_formulario" name="data_visita" value="<?php echo utf8_encode($info_listagem_cliente["data_visita"])  ?>"  id="data_visita" size="13" maxlength="10" >
</div>
                    
 <div>    
    <label for="email">E-mail*:</label>
    <input type="text" class="janela_formulario" name="email" value="<?php echo utf8_encode($info_listagem_cliente["email"])  ?>"  id="email" size="115" maxlength="100" >
                       
 </div>
		 </div>
 <br>                         
<h3>ENDEREÇO COMERCIAL</h3>
                        
<input id="bmb"  type="button" value="+" onclick="mostra('mb')" /> 
<div id="mb" class="">
<div>

<label for="cep">CEP*:</label> 
	<input name="cep" type="text" id="cep" size="10" maxlength="9" value="<?php echo utf8_encode($info_listagem_cliente["cep"])  ?>" >
 <label for="endereco">End:</label>
	 <input name="endereco" type="text" id="endereco" size="55" value="<?php echo utf8_encode($info_listagem_cliente["endereco"])  ?>" >
                    
<label for="numero">N°:</label>
    <input type="text" class="janela_formulario" name="numero" id="numero" size="2" maxlength="4" value="<?php echo utf8_encode($info_listagem_cliente["numero"])  ?>" >
                     
<label for="bairro">Bairro:</label>
	<input name="bairro" type="text" id="bairro" size="30" value="<?php echo utf8_encode($info_listagem_cliente["bairro"])  ?>" >
</div>
                    
<div>
<label for="cidade">Cidade:</label>
	<input name="cidade" type="text" id="cidade" size="40" value="<?php echo utf8_encode($info_listagem_cliente["cidade"])  ?>" >
                        
<label for="uf">Estado:</label>
	<input name="uf" type="text" id="uf" size="2" value="<?php echo utf8_encode($info_listagem_cliente["uf"])  ?>">
</div>

	</div>
<br>
 <h3>LOCAL DA PRESTAÇÃO DO SERVIÇO</h3>
                        
<input id="bmc"  type="button" value="+" onclick="mostra('mc')" /> 
<div id="mc" class="">
<div>
<label for="cep_lps">CEP*:</label> 
    <input name="cep_lps" type="text" id="cep_lps"  size="10" maxlength="9" value="<?php echo utf8_encode($info_listagem_cliente["cep_lps"])  ?>" >
	
 <label for="endereco_lps">End:</label>
	 <input name="endereco_lps" type="text" id="endereco_lps" size="55" value="<?php echo utf8_encode($info_listagem_cliente["endereco_lps"])  ?>" >
                    
<label for="numero_lps">N°:</label>
    <input type="text" class="janela_formulario" name="numero_lps" id="numero_lps" size="2" maxlength="4" value="<?php echo utf8_encode($info_listagem_cliente["numero_lps"])  ?>">
                     
<label for="bairro_lps">Bairro:</label>
	<input name="bairro_lps" type="text" id="bairro_lps" size="30" value="<?php echo utf8_encode($info_listagem_cliente["bairro_lps"])  ?>">
</div>
                    
<div>
<label for="cidade_lps">Cidade:</label>
	<input name="cidade_lps" type="text" id="cidade_lps" size="40" value="<?php echo utf8_encode($info_listagem_cliente["cidade_lps"])  ?>" >
                        
<label for="uf_lps">Estado:</label>
	<input name="uf_lps" type="text" id="uf_lps" size="2" value="<?php echo utf8_encode($info_listagem_cliente["uf_lps"])  ?>" >
</div>
<br>
 </div>  

<h3>OBJETO DO SERVIÇO</h3>              
         <input id="bmd"  type="button" value="+" onclick="mostra('md')" /> 
         <div id="md" class="">  


       
  <label for="objeto">Objeto</label>
                    <select id="objeto" name="objeto" multiple class="form-control"> 
                        <?php 
                            $meuobjeto = $info_listagem_cliente["objeto"];
                            while($linha = mysqli_fetch_assoc($lista_objeto)) {
                                $objeto_principal = $linha["objeto"];
                                if($meuobjeto == $objeto_principal) {
                        ?>
                            <option value="<?php echo utf8_encode($linha["objeto"]) ?>" selected>
                                <?php echo utf8_encode($linha["objeto"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo utf8_encode($linha["objeto"]) ?>" >
                                <?php echo utf8_encode($linha["objeto"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>             

         </div> 
<br> <br>  
           
  <h3>TIPO DE RESÍDUO</h3>             
           <input id="bme"  type="button" value="+" onclick="mostra('me')" /> 
           <div id="me" class=""> 
<label for="tipo_residuo">Tipo de Resíduo:</label>
                    <select id="tipo_residuo" name="tipo_residuo" multiple class="form-control"> 
                        <?php 
                            $meuresiduo = $info_listagem_cliente["tipo_residuo"];
                            while($linha = mysqli_fetch_assoc($lista_residuos)) {
                                $residuo_principal = $linha["tipo_residuo"];
                                if($meuresiduo == $residuo_principal) {
                        ?>
                            <option value="<?php echo utf8_encode($linha["tipo_residuo"]) ?>" selected>
                                <?php echo utf8_encode($linha["tipo_residuo"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo utf8_encode($linha["tipo_residuo"]) ?>" >
                                <?php echo utf8_encode($linha["tipo_residuo"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>                            
    </div>
<br><br>

<h3>DESTINAÇÃO DO RESÍDUO</h3>             
<input id="bmf"  type="button" value="+" onclick="mostra('mf')" /> 
<div id="mf" class="">    
                
<label for="destinacao">Destinação:</label>
                    <select id="destinacao" name="destinacao"  multiple class="form-control" > 
                        <?php 
                            $meudestinacao = $info_listagem_cliente["destinacao"];
                            while($linha = mysqli_fetch_assoc($lista_destinacoes)) {
                                $destinacao_principal = $linha["destinacao_residuo"];
                                if($meudestinacao == $destinacao_principal) {
                        ?>
                            <option value="<?php echo utf8_encode($linha["destinacao_residuo"]) ?>" selected>
                                <?php echo utf8_encode($linha["destinacao_residuo"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo utf8_encode($linha["destinacao_residuo"]) ?>" >
                                <?php echo utf8_encode($linha["destinacao_residuo"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>               
               
    </div>
 <br><br>   
  
<h3>PERIODICIDADE DAS COLETAS</h3>             
           <input id="bmg"  type="button" value="+" onclick="mostra('mg')" /> 
           <div id="mg" class="">    
               
<label for="periodicidade">Destinação:</label>
                    <select id="periodicidade" name="periodicidade"  multiple class="form-control" > 
                        <?php 
                            $meuperiodicidade = $info_listagem_cliente["periodicidade"];
                            while($linha = mysqli_fetch_assoc($lista_periodicidades)) {
                                $periodicidade_principal = $linha["periodicidade_coleta"];
                                if($meuperiodicidade == $periodicidade_principal) {
                        ?>
                            <option value="<?php echo utf8_encode($linha["periodicidade_coleta"]) ?>" selected>
                                <?php echo utf8_encode($linha["periodicidade_coleta"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo utf8_encode($linha["periodicidade_coleta"]) ?>" >
                                <?php echo utf8_encode($linha["periodicidade_coleta"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>                
               
    </div>
<br><br>
            
<h3>EQUIPE DE TRABALHO</h3>             
<input id="bmh"  type="button" value="+" onclick="mostra('mh')" /> 
<div id="mh" class="">
 <label for="quantidade_equipe" >Quantidade:</label>
<input type="text"  name="quantidade_equipe" id="quantidade_equipe" size="4" maxlength="5" value="<?php echo utf8_encode($info_listagem_cliente["quantidade_equipe"])  ?>">
    
<label for="funcaoo">Função:</label>
                    <select id="funcaoo" name="funcaoo"  multiple class="form-control" > 
                        <?php 
                            $meuequipe = $info_listagem_cliente["funcaoo"];
                            while($linha = mysqli_fetch_assoc($lista_equipes)) {
                                $equipe_principal = $linha["equipe_trabalho"];
                                if($meuequipe == $equipe_principal) {
                        ?>
                            <option value="<?php echo utf8_encode($linha["equipe_trabalho"]) ?>" selected>
                                <?php echo utf8_encode($linha["equipe_trabalho"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo utf8_encode($linha["equipe_trabalho"]) ?>" >
                                <?php echo utf8_encode($linha["equipe_trabalho"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>        
    
    </div>
<br><br>
    
<h3>MATERIAL E EQUIPAMENTOS</h3>              
<input id="bmi"  type="button" value="+" onclick="mostra('mi')" /> 
<div id="mi" class="">

<label for="quantidade_material ">Quantidade:</label>
    <input type="text" class="janela_formulario"  name="quantidade_material" id="quantidade_material" size="4" maxlength="5"  value="<?php echo utf8_encode($info_listagem_cliente["quantidade_material"])  ?>">
    
<label for="unidade_material ">Unidade:</label>
    <input type="text" class="janela_formulario"  name="unidade_material" id="unidade_material" size="2" maxlength="4"   value="<?php echo utf8_encode($info_listagem_cliente["unidade_material"])  ?>">
    
<label for="especificacao_material">Especificação:</label>
                    <select id="especificacao_material" name="especificacao_material"  multiple class="form-control" > 
                        <?php 
                            $meuespecificacao = $info_listagem_cliente["especificacao_material"];
                            while($linha = mysqli_fetch_assoc($lista_equipamentos)) {
                                $especificacao_principal = $linha["material_equipamento"];
                                if($meuespecificacao == $especificacao_principal) {
                        ?>
                            <option value="<?php echo utf8_encode($linha["material_equipamento"]) ?>" selected>
                                <?php echo utf8_encode($linha["material_equipamento"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo utf8_encode($linha["material_equipamento"]) ?>" >
                                <?php echo utf8_encode($linha["material_equipamento"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select> 
    </div>
<br><br>
         
    
<h3>FARDAMENTO/EPI</h3>
                              
<input id="bmj"  type="button" value="+" onclick="mostra('mj')" /> 
<div id="mj" class="">
    
<label for="quantidade_fardamento ">Quantidade:</label>
    <input type="text" class="janela_formulario"  name="quantidade_fardamento" id="quantidade_fardamento" size="4" maxlength="5" value="<?php echo utf8_encode($info_listagem_cliente["quantidade_fardamento"])  ?>">
                         
<label for="unidade_fardamento ">Unidade:</label>
    <input type="text" class="janela_formulario"  name="unidade_fardamento" id="unidade_fardamento" size="2" maxlength="4"  value="<?php echo utf8_encode($info_listagem_cliente["unidade_fardamento"])  ?>">

  <label for="especificacao_fardamento">Especificação:</label>
                    <select id="especificacao_fardamento" name="especificacao_fardamento"  multiple class="form-control" > 
                        <?php 
                            $meufardamento = $info_listagem_cliente["especificacao_fardamento"];
                            while($linha = mysqli_fetch_assoc($lista_fardamentos)) {
                                $fardamento_principal = $linha["fardamento_epi"];
                                if($meufardamento == $fardamento_principal) {
                        ?>
                            <option value="<?php echo utf8_encode($linha["fardamento_epi"]) ?>" selected>
                                <?php echo utf8_encode($linha["fardamento_epi"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo utf8_encode($linha["fardamento_epi"]) ?>" >
                                <?php echo utf8_encode($linha["fardamento_epi"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>       
    </div>
    <br><br>
        
        
 <h3>TREINAMENTO ESPECIFICO</h3>
                              
<input id="bmk"  type="button" value="+" onclick="mostra('mk')" /> 
<div id="mk" class="">
    
<label for="especificacao_treinamento ">Especificação:</label>
<input name="especificacao_treinamento" class="form-control" id="especificacao_treinamento" value="<?php echo utf8_encode($info_listagem_cliente["especificacao_treinamento"])  ?>">

</div>
<br><br>
 
<h3>PRECISA INTEGRAÇÃO DA EQUIPE E EQUIPAMENTOS NO CLIENTE?</h3>
                              
<input id="bml"  type="button" value="+" onclick="mostra('ml')" /> 
<div id="ml" class="">
<br>
<label for="opcao_integracao ">Opção:</label>
	<select name="opcao_integracao">
    <option value='Sim'>Sim</option>
    <option value='Nao'>Nao</option>
</select>
<br>
<label for="informacaoo ">Especificação:</label>
<input name="informacaoo" class="form-control" id="informacaoo" value="<?php echo utf8_encode($info_listagem_cliente['informacaoo']); ?>">

</div>
<br><br>       
         

<h3>RESPONSÁVEL</h3>
                              
<input id="bmm"  type="button" value="+" onclick="mostra('mm')" /> 
<div id="mm" class="">    
    
  <label for="nome_responsaveltec">Nome:</label>
                    <select id="nome_responsaveltec" name="nome_responsaveltec"  multiple class="form-control" > 
                        <?php 
                            $meuresponsavel = $info_listagem_cliente["nome_responsaveltec"];
                            while($linha = mysqli_fetch_assoc($lista_responsalvels)) {
                                $responsavel_principal = $linha["responsavel_tecnico"];
                                if($meuresponsavel == $responsavel_principal) {
                        ?>
                            <option value="<?php echo utf8_encode($linha["responsavel_tecnico"]) ?>" selected>
                                <?php echo utf8_encode($linha["responsavel_tecnico"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo utf8_encode($linha["responsavel_tecnico"]) ?>" >
                                <?php echo utf8_encode($linha["responsavel_tecnico"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>
    
    
   <label for="funcao_responsaveltec">Função:</label>
                    <select id="funcao_responsaveltec" name="funcao_responsaveltec"  multiple class="form-control" > 
                        <?php 
                            $meufuncao_respon = $info_listagem_cliente["funcao_responsaveltec"];
                            while($linha = mysqli_fetch_assoc($lista_funcao_respons)) {
                                $funcao_respon_principal = $linha["funcao_responsavel"];
                                if($meufuncao_respon == $funcao_respon_principal) {
                        ?>
                            <option value="<?php echo utf8_encode($linha["funcao_responsavel"]) ?>" selected>
                                <?php echo utf8_encode($linha["funcao_responsavel"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo utf8_encode($linha["funcao_responsavel"]) ?>" >
                                <?php echo utf8_encode($linha["funcao_responsavel"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>         
</div>
<br><br>
   
<h3>APROVADOR</h3>
                              
<input id="bmn"  type="button" value="+" onclick="mostra('mn')" /> 
<div id="mn" class="">   

  <label for="aprovador">Nome:</label>
                    <select id="aprovador" name="aprovador"  multiple class="form-control" > 
                        <?php 
                            $meuaprovador = $info_listagem_cliente["aprovador"];
                            while($linha = mysqli_fetch_assoc($lista_aprovadors)) {
                                $aprovador_principal = $linha["aprovador"];
                                if($meuaprovador == $aprovador_principal) {
                        ?>
                            <option value="<?php echo utf8_encode($linha["aprovador"]) ?>" selected>
                                <?php echo utf8_encode($linha["aprovador"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo utf8_encode($linha["aprovador"]) ?>" >
                                <?php echo utf8_encode($linha["aprovador"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>
    
    
   <label for="funcao_aprovador">Função:</label>
                    <select id="funcao_aprovador" name="funcao_aprovador"  multiple class="form-control" > 
                        <?php 
                            $meufuncao_apro = $info_listagem_cliente["funcao_aprovador"];
                            while($linha = mysqli_fetch_assoc($lista_funcao_apros)) {
                                $funcao_apro_principal = $linha["funcao_apro"];
                                if($meufuncao_apro == $funcao_apro_principal) {
                        ?>
                            <option value="<?php echo utf8_encode($linha["funcao_apro"]) ?>" selected>
                                <?php echo utf8_encode($linha["funcao_apro"]) ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo utf8_encode($linha["funcao_apro"]) ?>" >
                                <?php echo utf8_encode($linha["funcao_apro"]) ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>         
</div>
<br><br>    
                 
     
 <h3>ANÁLISE CRÍTICA - COM BASE NAS INFORMAÇÕES DO LEVANTAMENTO TÉCNICO, A MAXTEC TEM CONDIÇÕES DE FORNECER OS SERVIÇOS AO CLIENTE?</h3>
                              
<input id="bmo"  type="button" value="+" onclick="mostra('mo')" /> 
<div id="mo" class="">
    <br>
<select name="analise_critica">
    <option value='Sim'>Sim</option>
    <option value='Nao'>Nao</option>
</select>    
</div>
    
<br> <br> 

                        <ul>
                            <table>
                            <td><input type="hidden" name="num_levantamento" value="<?php echo $info_listagem_cliente["num_levantamento"] ?>"></td>
                            
							<button type="submit" class="btn btn-danger">Excluir</button>
                            </table>
                        </ul>
     </div>
                     </form>
                    </div>

        </main>
        
        
<script src="js/personalizado.js"></script>	
		
<?php include_once("script_alteracao_levantamentotecnico_re.php"); ?>  
		
<?php include_once("../../../_incluir/rodape.php"); ?>  

    <br><br>
    </body>
      
    <script>
        $('#framework_form').submit(function(e) {
            e.preventDefault();
            var formulario = $(this);
            var retorno = inserirFormulario(formulario)
        });
        
        function inserirFormulario(dados){
            $.ajax({
                type:"POST",
                data:dados.serialize(),
                url:"delete_levantamentotecnico_re.php",
                assync:false,
                success:function(data)
                {
	               window.location='consultar_levantamento_re.php';
	               alert('Colaborador, Seu Levantamento foi Apagado com Sucesso!.');
                }
                
            });
        };
    </script>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>