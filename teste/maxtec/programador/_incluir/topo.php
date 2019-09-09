<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style/mm_health_nutr.css" type="text/css" />
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " "  + d.getDate() + ", " + d.getFullYear();
var HOJE = d.getDate() + " de "  + monthname[d.getMonth()] + " de " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>

        <meta charset="UTF-8">
        <title>MAXTEC-SERVICOS</title>
       
        <link rel="shortcut icon" href="../../COMPOSER/img/icone.jpg" type="image/x-jpg">
         <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link href="css/sienge.css" rel="stylesheet">
        <link href="css/sienge-b.css" rel="stylesheet">
        <link href="css/estilo-b.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    </head>


<header>
    <div id="header_central">
<?php
            if ( isset($_SESSION["usuarioId"])  ) {
                $user = $_SESSION["usuarioId"];
                
                $saudacao = "SELECT nomecompleto ";
                $saudacao .= "FROM usuarios ";
                $saudacao .= "WHERE id = {$user} ";
                
                $saudacao_login = mysqli_query($conecta,$saudacao);
                if(!$saudacao_login) {
                    die("Falha no banco");   
                }
                
                $saudacao_login = mysqli_fetch_assoc($saudacao_login);
                $nomecompleto = $saudacao_login["nomecompleto"];
                
        ?>
            <div id="header_saudacao"><h5>Bem vindo, <?php echo $nomecompleto ?> - <a href="../../../../login/sair.php"> Sair </a></h5></div>
			<div id="header_data"><h5><script language="JavaScript" type="text/javascript">
      document.write(HOJE);	</script></h5></div>
	
        <?php
            }
        ?>
    </div>
</header>



