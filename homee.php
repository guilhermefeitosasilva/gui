<?php require_once("comercial/conexao/conexao.php"); ?>

<?php
$select = "SElECT objeto ";
$select .= "FROM objetoservico ";
$lista_objetos = mysqli_query($conecta, $select);
if(!$lista_objetos){
    die("Erro no banco");
    
$sql = "select * from cad_cliente ";
$consulta = mysqli_query($conecta,$sql);
$registros = mysqli_num_rows($consulta);
}
//-----------------------------------------------------------------------

 // insercao no banco
    if(isset($_POST["objeto"])) {
        $objeto                         = $_POST["objeto"];
        $inserir    = "INSERT INTO cad_cliente ";
        $inserir    .= "(objeto) ";
        $inserir   .= "VALUES ";
        $inserir   .= "('$objeto') ";
        
        $operacao_inserir = mysqli_query($conecta,$inserir);
        if(!$operacao_inserir) {
            die("Erro no banco");
        } else {
            header("location:homee.php");   
        } 
    }

?>

<html>
     <form action="homee.php" method="post">
    <style>
    #novo_select_container{
	position: relative;
	height: 21px;
	display: inline-block;
}

#novo_select{
	background: #ddd;
}

#novo_select li, #novo_select ul{
	padding: 0;
	margin: 0;
}

#novo_select li{
	padding: 0 10px;
	line-height: 25px;
	cursor: default;
}

#novo_select li:first-child{
	background: url(https://www.materialui.co/materialIcons/navigation/arrow_drop_down_grey_192x192.png) right no-repeat;
	background-size: contain;
	padding-right: 25px;
}

.novo_select_aberto{
	position: relative;
	display: inline-block;
}

.novo_select_fechado{
	position: absolute;
	clip: rect(0px 1000px 25px 0px);
}
    </style>


    <select multiple name="objeto" id="objeto">
 <?php
        while($linha = mysqli_fetch_assoc($lista_objetos)){
?>
        <option value="<?php echo $linha["objeto"] ?>">
            <?php echo utf8_encode($linha["objeto"]); ?>
        </option>
            
<?php
    }
 ?>
<input type="submit" value="Cadastrar" size="10px">
        
</select>
<div id="novo_select_container">
	<div id="novo_select" class="novo_select_fechado"><ul><li>Selecione...</li></ul></div>
</div>
        </form>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

 <script>
$(document).ready(function(){
	el_select = $("select[name=objeto]");
	el_select.hide();
	$.each(el_select.find("option"), function(){
		$("#novo_select_container ul").append(
		'<li><input type="checkbox" value="'+$(this).val()+'" />'+$(this).text()+'</li>'
		);
	});

	$("#novo_select input[type=checkbox]").on("click",function(){
		if($(this).is(":checked")){
			$("select[name=objeto] option[value="+$(this).val()+"]").attr("selected","selected");
		}else{
			$("select[name=objeto] option[value="+$(this).val()+"]").removeAttr("selected");
		}
	});

	$("#novo_select li:not(:eq(0))").on("click",function(){
		$(this).find("input").trigger("click");
	});

	$("#novo_select_container li:eq(0)").on("click", function(){
		if($("#novo_select").hasClass("novo_select_fechado")){
			$("#novo_select").removeClass("novo_select_fechado").addClass("novo_select_aberto");
			$("#novo_select_container").css("height","auto");
		}else{
			$("#novo_select").removeClass("novo_select_aberto").addClass("novo_select_fechado");
			$("#novo_select_container").css("height","21px");
		}
	});

	$("#novo_select_container li input, #novo_select_container li").on("click", function(e){
		e.stopPropagation();
	});
	
	$(document).on('click',function(){
		if($("#novo_select").hasClass("novo_select_aberto")){
			$("#novo_select").removeClass("novo_select_aberto").addClass("novo_select_fechado");
			$("#novo_select_container").css("height","21px");
		}
	});
});
     </script> 


