<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale = 1" />
	<title>Mural IFSP - PRC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Mural IFSP</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="mural.php">Mural</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cadastro.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>

	<div id="principal" style="padding-top:20px">
    	<div id="indexBox1">
            <div class="row">
            <div class="col-md-12">
            <br/><br/>                    
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div id="indexLogin" class="container">                    
                      <h2>Login</h2>
                      <form action="/action_page.php">
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Senha:</label>
                          <input type="password" class="form-control" id="senha" placeholder="Digite sua Senha" name="senha">
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="lembrar">Lembrar-me</label>
                        </div>
                        <button type="submit" class="btn btn-default">Entrar</button>
                      </form>
                    </div>
                </div>
                
                
                <div class="col-md-6">
                    		<div id="indexLogin" class="container">
                                  <h2>Cadastre-se</h2>
                                  <form action="/action_page.php">
                                  
                                    <div class="form-group">
                                      <label for="email">Email:</label>
                                      <input type="email" class="form-control" id="email" placeholder="Digite um email" name="email">
                                    </div>
                                    
                                    <div class="form-group">
                                      <label for="nome">Nome:</label>
                                      <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" name="nome">
                                    </div>
                                    
                                    <div class="form-group">
                                      <label for="apelido">Apelido</label>
                                      <input type="text" class="form-control" id="apelido" placeholder="Digite um apelido" name="nome">
                                    </div>
                                    
                                    <div id="sexo">
                                      <p> Sexo </p>
                                    </div>
                                    
                                    <div class="radio">
                                      <label><input type="radio" name="optradio">Masculino</label>
                                    </div>
                                    
                                    <div class="radio">
                                      <label><input type="radio" name="optradio">Feminino</label>
                                    </div>
                                    
                                    <div class="form-group">
                                      <label for="senha">Senha:</label>
                                      <input type="password" class="form-control" id="senha" placeholder="Digite uma senha" name="senha">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-default">Cadastrar-se</button>
                                  </form>
                                </div>
                </div>
        </div>
    </div>
    
    
    <div id="principal2" style="padding-top:20px">
    	<div id="indexBox1">
           <div class="row">
            <div class="col-md-12">
                    <br/>
               </div>
                	<div class="row">
                		<div class="col-md-12">
                    		<div class="container">
                    			<div id="myCarousel" class="carousel slide" data-ride="carousel">
                          			<!-- Indicators -->
                                      <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                      </ol>
                        
                                          <!-- Wrapper for slides -->
                                          <div class="carousel-inner">
                                            <div class="item active">
                                              <img src="img/background2.jpg" alt="Chania">
                                              <div class="carousel-caption">
                                                <h3>Los Angeles</h3>
                                                <p>LA is always so much fun!</p>
                                              </div>
                                            </div>
                        
                                            <div class="item">
                                              <img src="img/background2.jpg" alt="Chicago">
                                              <div class="carousel-caption">
                                                <h3>Chicago</h3>
                                                <p>Thank you, Chicago!</p>
                                              </div>
                                            </div>
                        
                                            <div class="item">
                                              <img src="img/background2.jpg" alt="New York">
                                              <div class="carousel-caption">
                                                <h3>New York</h3>
                                                <p>We love the Big Apple!</p>
                                              </div>
                                            </div>
                                          </div>
                        
                                          <!-- Left and right controls -->
                                          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Anterior</span>
                                          </a>
                                          <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Proximo</span>
                                          </a>
                        </div>
 					</div>
        		</div>
            </div>
         </div>  
    </div>
            
            <div class="row">
            <div class="col-md-12">                
                </div>
                </div>

        <div id="principal3">
        
    		<div id="indexBox1">
            <div class="row">
            <div class="col-md-12">
            	<br/>                  
              </div>
          </div>
          
         <div class="row">
            <div class="col-md-6">
           	<p class="indexSegundo"> TESTE </p>
         </div>
            <div class="col-md-6">
            <p class="indexSegundo"> TESTE </p>
         </div>
         
        </div>

    	<br /><br />
    
    </div>
    </div>
    
    <div class="row">
            <div class="col-md-12">
            	<br/>                  
              </div>
     </div>
                
<footer>    
   <div id="footer">
    <div class="row">
           <div class="col-md-3">
            	<button type="button" class="btn btn-link">Sobre</button>    
           </div>
           
           <div class="col-md-3">
             	<button type="button" class="btn btn-link">Contato</button>        	                 
           </div>
           
           <div class="col-md-3">
             	<h3>MAG NOTAS</h3>
				<p>BÃO PA CARAI</p>  	                 
           </div>
           
          <div class="col-md-3">
             	<button type="button" class="btn btn-link">Login</button>        	                 
           </div>
     </div>
 </div> 
     
</footer> 

</body>
</html>
