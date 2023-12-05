<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Bootstrap CSS -->
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	
    <title>Add New Product</title>
</head>
<body>
    <!--<form  method="post">
        <input type="text" name="nome">
        <input type="text" name="login">
        <button type="submit">Save</button>
		<*?php ?>
		
    </form>-->
	
	<div class="container">
	<nav class="navbar .navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Painel Adm</a>
			</div>

			<ul class="nav navbar-nav">
				<li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Teste
				    <span class="caret"></span></a>
				    <ul class="dropdown-menu">
						Usuário
					    <li><a href="#">Listar</a></li>
					    <li><a href="#">Cadastrar</a></li>
					</ul>
			    </li>
			</ul>
			
			<ul class="nav navbar-nav">
				<li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Teste
				    <span class="caret"></span></a>
				    <ul class="dropdown-menu">
						<?php $controller = 'Sistema_Usuario' ;?>
					    <li><a href="#">Listar</a></li>
					    <li><a href="#">Cadastrar</a></li>
					</ul>
			    </li>
			</ul>
			

			<ul class="nav navbar-nav">
				<li>
					<a class="dropdown-toggle"  href="<?php echo base_url('/public/Login/') ?>">Logout</a>
				</li>
			</ul>

		</div>
    </nav>
		
		<div class="panel panel-default">
		    <div class="panel-heading">Programa</div>
			
			<form  method="post" >
				<div class="panel-body">
                    
                    <div class="form-row">

						<div class="form-group col-md-6">

                            <div class="card" >
                                <img class="card-img-top" src="../public/img/instrumentos/D2-R.png" alt="Card image cap" style="width:100px; height:120px">
                                <div class="card-body">
                                    <h5 class="card-title"><b>D2-R</b></h5>
                                    <p class="card-text">O D2 – Revisado (D2-R) é um instrumento que avalia a habilidade de atenção concentrada e sustentada. A tarefa consiste em selecionar símbolos alvo dentre símbolos similares, sob pressão do tempo. O teste se destaca pela sua precisão de medida e existem várias evidências que asseguram que ele mede os construtos de atenção e concentração. .</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                    <a href="#" class="btn btn-primary">Go somewhere2</a>
                                    <a href="#" class="btn btn-primary">Go somewhere3</a>
                                </div>
                            </div>

						</div><!-- form-group col-md-4 -->

                        <div class="form-group col-md-6">

                            <div class="card" >
                                <img class="card-img-top" src="../public/img/instrumentos/tena.png" alt="Card image cap" style="width:100px; height:120px">
                                <div class="card-body">
                                    <h5 class="card-title"><b>TENA</b></h5>
                                    <p class="card-text">O D2 – Revisado (D2-R) é um instrumento que avalia a habilidade de atenção concentrada e sustentada. A tarefa consiste em selecionar símbolos alvo dentre símbolos similares, sob pressão do tempo. O teste se destaca pela sua precisão de medida e existem várias evidências que asseguram que ele mede os construtos de atenção e concentração. .</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                    <a href="#" class="btn btn-primary">Go somewhere2</a>
                                    <a href="#" class="btn btn-primary">Go somewhere3</a>
                                </div>
                            </div>

						</div><!-- form-group col-md-4 -->

                        

						
					</div><!-- form-row -->


				</div><!-- panel-body -->
				
				<div class="panel-footer"> <button type="submit"  class="btn btn-primary">Salvar</button></div>
			</form>
		</div><!--panel panel-default-->
		
	</div><!-- container-->
</body>
</html>