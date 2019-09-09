
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


//-------------------------------------------------------------------------------------------------------   
// consulta aos objetos de servicos
    $objeto = "SELECT * ";
    $objeto .= "FROM objetoservico ";
    $lista_objeto = mysqli_query($conecta, $objeto);
    if(!$lista_objeto) {
       die("erro no banco"); 
    } 


//-------------------------------------------------------------------------------------------------------   

?>


<!DOCTYPE html>
<html>
 <head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="../residuos/js/selecao.js"></script>
<link rel="stylesheet" href="../../../css/bootstrap.min.css" />		
<link href="../../../css/sienge-d.css" rel="stylesheet">
<link href="../../../css/sienge-e.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!--- AQUI É O FORMULARIO --->
 <main> 
     <div id="janela_formulario">
 
<br><br>
    <form  id="framework_form">
       <div class="form-group">
           
<h2>LEVANTAMENTO TÉCNICO - RESÍDUO</h2>
          <h3>DADOS DO CLIENTE</h3> 
<br>
 
<div >
<label for="login">Login / CNPJ / CPF*:</label>
    <input type="text" class="janela_formulario" name="login" id="login" size="20" maxlength="18" onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' >
</div>
<div >
<label for="nome">Nome / Razão Social*:</label>
    <input type="text" class="janela_formulario" name="nome" id="nome" size="47" maxlength="100" >
                        
<label for="nome_fantasia">Nome Fantasia:</label>
    <input type="text" class="janela_formulario" name="nome_fantasia" id="nome_fantasia" size="47" maxlength="100" >
</div>
 
<h3>OBJETO DO SERVIÇO</h3>              
         <input id="bmd"  type="button" value="+" onclick="mostra('md')" /> 
         <div id="md" class="">  


  
  <label for="objeto">Objeto</label>
                    <select id="objeto"  class="form-control" > 
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
 <br><br>
<div class="pull-right">
    <button class="btn btn-warning" type="button" onclick="add1()">Add</button>
</div>
<br>
 <ul id="list"></ul>            
<hr>
         
</div> 
<br><br><br>
    
<div class="pull-right">
	<button type="submit" class="btn btn-success" onclick="return message();">Cadastrar</button>
	
	<button type="reset" class="btn btn-secondary">Limpar</button>
</div>
	   
        </div>
		
   </form>
   <br/>
</div>

</main> 
    <script>
        window.procutList = []
        function add1(value = undefined) {
            var select = value || document.getElementById("objeto").value
            window.procutList.push(select)
            var list = window.procutList.map(function (item, index) {
                return `<li>${item}<input
                        type="hidden"
                        name="objeto[${index}]"
                        value="${item}">
                    </li>
                `
            }).join('')
            document.getElementById("list").innerHTML = list
        }
    </script>    
   

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
                url:"inserir_levantamento_re.php",
                assync:false,
                success:function(data)
                {
              
	               window.location='consultar_levantamento_re.php';
	               alert('Colaborador, Seu Levantamento foi Cadastrado!');
                }
                
            });
        };
    </script>
    
</html>
<?php include_once("script_levantamento_tecnico_re.php"); ?>  

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
       