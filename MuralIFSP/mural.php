<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mural IFSP - prc</title>
    <meta name="viewport" content="width=device-width, initial-scale = 1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
		<!--Topnav-->
		<nav class="navbar navbar-inverse"  id="navBar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><font color="#000000">Mural IFSP</font></a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Início</a></li>
                    <li><a onclick="openNav()"><span class="glyphicon glyphicon-sunglasses"></span>Nova Nota +</a></li>
                    <!--<li><a href="cadastroNota.php">Criar uma Nota</a></li>-->
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cadastro.php"><span class="glyphicon glyphicon-user"></span> Cadastrar-se</a></li>
                    <!--<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                </ul>
            </div>
        </nav>
        
              <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               	<p>Bem-Vindo Galo Cego!</p><!--Nome do usuario-->
                  <div id="imgUsu">
                  		<!--Imagem de login do usuario-->
                  </div>
                  
                  <div id="nomeCategoria">
					<a href="#" data-toggle="tooltip" data-placement="top" title="Cada categoria tem sua cor específica e uma duração">Categoria:</a>
                  </div>
                  
                  <div id="categoriaSide">
                  		<p align="justify" class="notaSidenav">
                    	Acadêmico <br />
                    	</p>
                  </div>
                  
                  <div id="categoriaSide">
                  		<p align="justify" class="notaSidenav1">
                    	Festas <br />
                    	</p>
                  </div>
                  
                  <div id="categoriaSide">
                  		<p align="justify" class="notaSidenav2">
                    	Carona <br />
                    	</p>
                  </div>
                  
                   <div id="categoriaSide">
                  		<p align="justify" class="notaSidenav3">
                    	Outros <br />
                    	</p>
                  </div>
                  
                  <div id="categoriaSide">
                  		<p align="justify" class="notaSidenavSair">
                    	<button class="btn btn-default btn-primary">Sair</button>
                    	</p>
                  </div>
                  
                  
              </div>
            
            <!-- Use any element to open the sidenav -->
            <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
	  <div id="main"><!--tudo oq vai ficar a direita do sidenav tem q ficar dentro da main-->
        <!--Corpo da pagina-->
        <div id="painel">
            <div class="row">
                <div class="col-md-3">
               		<p align="justify" class="nota">
                    	CARONA IFSP-SHOPPING 12:10!<br />(14)98113-5119
                    </p>
                </div>
                
                <div class="col-md-3">
                    <p align="justify" class="nota">
                    	CARONA IFSP-SHOPPING 12:10!<br />(14)98113-5119
                    </p>
                </div>
    
                <div class="col-md-3">
                    <p align="justify" class="nota">
                    	CARONA IFSP-SHOPPING 12:10!<br />(14)98113-5119
                    </p>
                </div>
                
                <div class="col-md-3">
                    <p align="justify" class="nota">
                    	CARONA IFSP-SHOPPING 12:10!<br />(14)98113-5119
                    </p>
                </div>            
            </div>
            
            <div class="row">
                <div class="col-md-3">
               		<p align="justify" class="nota">
                    	CARONA IFSP-SHOPPING 12:10!<br />(14)98113-5119
                    </p>
                </div>
                
                <div class="col-md-3">
                    <p align="justify" class="nota">
                    	CARONA IFSP-SHOPPING 12:10!<br />(14)98113-5119
                    </p>
                </div>
    
                <div class="col-md-3">
                    <p align="justify" class="nota">
                    	CARONA IFSP-SHOPPING 12:10!<br />(14)98113-5119
                    </p>
                </div>
                
                <div class="col-md-3">
                    <p align="justify" class="nota">
                    	CARONA IFSP-SHOPPING 12:10!<br />(14)98113-5119
                    </p>
                </div>            
            </div>
		</div>
     </div>  <!--Fecha a main do Sidenav-->
    
     
     <!-- Espaço-->
            <div class="row">
            <br /><br />
            </div>
            <!-- Espaço--> 
                
        <footer class="footer-distributed">
                    <div class="footer-left">
                        <h3>MAG<span>Notas</span></h3>
                        <p class="footer-company-name">MagNotas &copy; 2017</p>
        
                        <div class="footer-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
        
                    <div class="footer-right">
                        <p>Contato</p>
        
                        <form action="#" method="post">
        
                            <input type="text" name="email" placeholder="Email" />
                            <textarea name="message" placeholder="Mensagem"></textarea>
                            <button>Enviar</button>
        
                        </form>
        
                    </div>
            </footer>
</body>

	<script>
    function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";
	}
	
	/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("main").style.marginLeft = "0";
	} 
	
	$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
	});
    </script>

</html>