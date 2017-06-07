<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php
 
 	include_once 'functions.php';
 
  $email = $_POST["email"];
  $senha = codificasenha($_POST["senha"]);
  
  
  /*
  if($cargo == "rbAluno")
  	$cargo = 1;
  else
  	$cargo = 0;
  */
  $link = conectar();
  $sql = "SELECT u_email, u_senha FROM usuario WHERE u_email = '$email' AND u_senha = '$senha';";
			
	mysqli_query($link, $sql);
	if(mysqli_affected_rows($link) == 1){
		redireciona("..\mural.php");
	}
	else{
		// PASSAR VARIÁVEIS POR URL PARA RECARREGAR NO FORM DE CADASTRO
		redireciona("..\login.php?login_valido=1");
	}
  	desconectar($link);	
	
	
	
	
	// --------------------------------------------------------------------------------
  
 ?>   
</body>
</html>