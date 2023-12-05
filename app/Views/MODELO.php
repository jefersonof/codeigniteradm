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


					
					
					


				
				</div><!-- panel-body -->
				
				<div class="panel-footer"> <button type="submit"  class="btn btn-primary">Salvar</button></div>
			</form>
		</div><!--panel panel-default-->
		
	</div><!-- container-->
</body>
</html>