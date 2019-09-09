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

  

$sql = "select * from cad_cliente ";
$consulta = mysqli_query($conecta,$sql);
$registros = mysqli_num_rows($consulta);
$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM cad_cliente WHERE nome LIKE '%$nome%' order by nome";
			$resultado_usuario = mysqli_query($conecta, $result_usuario) ;
        }


?>


<!doctype html>
<html>
    <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>MAXTEC-SERVICOS</title>
        <link rel="shortcut icon" href="../../COMPOSER/img/icone.jpg" type="image/x-jpg">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"> 
        <!-- estilo -->
<link rel="stylesheet" href="../../../css/bootstrap.min.css" />	
        <link href="../../../css/sienge.css" rel="stylesheet">
        <link href="../../../css/sienge-b.css" rel="stylesheet">
        <link href="../../../css/estilo-b.css" rel="stylesheet">
		<link rel="stylesheet" href="../../../css/bootstrap.min.css" />	
        <link rel="stylesheet" href="../../../_css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </head>
    
<main> 
          <body>  
            <div id="janela_formulario">
                <form action="consultar_levantamento_re.php" method="post">
       <br>                
<h2>LEVANTAMENTO TÉCNICO - RESÍDUO</h2>
                   
<h3>PARÂMETROS DE CONSULTA</h3>
                         
                   
                    <div >
                        <br>
                        <label for="num_levantamento">Nº Levantamento:</label>
                        <input type="text" class="janela_formulario" name="num_levantamento" id="num_levantamento" size="8" maxlength="8">
                    </div>
                    
                    <div>     
                        <label for="login">Login / CNPJ / CPF*:</label>
                        <input type="text" class="janela_formulario" name="login" id="login" size="20" maxlength="18">
                	</div>
                    <div>   
                        <label for="nome">Nome / Razão Social*:</label>
                        <input type="text" class="janela_formulario" name="nome" id="nome" size="47" maxlength="60">
                        
                        <label for="nome_fantasia">Nome Fantasia:</label>
                        <input type="text" class="janela_formulario" name="nome_fantasia" id="nome_fantasia" size="47" maxlength="60">
                     </div>
                         <br>

<div class="pull-right">
	
	<button value="Consultar" type="submit" class="btn btn-warning"  name="SendPesqUser">Consultar</button>
<a href="levantamento_tecnico_re.php"  type="button" class="btn btn-success">Novo</a>

	
					</div>               

				</form>
			  </div>
	</body>
	</main>
<br>
					
<main>

	<div class="container" id="container">
	<table class="table-bordered striped ">

			<tr>
				<th>Nº LEV      </th>
				<th>CNPJ / CPF</th>
				<th> Nome / Razão Social</th>
				<th> Nome Fantasia</th>
			</tr>
	
<?php                        
while($exibirRegistros = mysqli_fetch_array($resultado_usuario)){
?>  
			<tr>
				<td><?php echo utf8_encode($exibirRegistros["num_levantamento"]) ?></td>
				<td><?php echo utf8_encode($exibirRegistros["login"]) ?></td>
				<td><?php echo utf8_encode($exibirRegistros["nome"])?></td>
				<td><?php echo utf8_encode($exibirRegistros["nome_fantasia"]) ?></td>
				
				<td><a href="alteracao_levantamentotecnico_re.php?num_levantamento=<?php echo $exibirRegistros["num_levantamento"] ?>" >Editar</a></td>
			</tr>
<?php
}
?>

	</table>
	</div>
	
					</main>

</html>

<br><br><br>
  <?php include_once("../../../_incluir/rodape.php"); ?> 

    
<?php
    // Fechar conexao
    mysqli_close($conecta);
?>