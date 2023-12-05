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

			<?php
			
			$user = session('testeUser');
			echo "<pre>";
				echo $user;
				echo 'Teste';
			echo "</pre>";

			foreach($menu as $item)
			{
				if($item['acesso'] == 1 )
				{
			?>
			<ul class="nav navbar-nav">
				<li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $item['menu'] ?>
				    <span class="caret"></span></a>
				    <ul class="dropdown-menu">
						<?php $controller = 'Sistema_Usuario' ;?>
					    <li><a href="<?php echo base_url('/public/' .$item['controller']. '/') ?>">Listar</a></li>
					    <li><a href="<?php echo base_url('/public/' .$item['controller']. '/save') ?>">Cadastrar</a></li>
					</ul>
			    </li>
			</ul>
			<?php
				}
			}
			?>

			<?php
			foreach($menuUnico as $item)
			{
				if($item['acesso'] == 1 )
				{
			?>
			<ul class="nav navbar-nav">
				<li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $item['menu'] ?>
				    <span class="caret"></span></a>
				    <ul class="dropdown-menu">
						<?php $controller = 'Sistema_Usuario' ;?>
					    <li><a href="<?php echo base_url('/public/' .$item['controller']. '/') ?>">Listar</a></li>
					    <li><a href="<?php echo base_url('/public/' .$item['controller']. '/save') ?>">Cadastrar</a></li>
					</ul>
			    </li>
			</ul>
			<?php
				}
			}
			?>

			<ul class="nav navbar-nav">
				<li>
					<a class="dropdown-toggle"  href="<?php echo base_url('/public/Sistema_Login/') ?>">Logout</a>
				</li>
			</ul>

			
		</div>
    </nav>
		
		<div class="panel panel-default">
		    <div class="panel-heading">Programa</div>
			
			<form  method="post" >
				<div class="panel-body">

				PAGINA PADRÃO
				
				</div><!-- panel-body -->
				
				<div class="panel-footer"> <button type="submit"  class="btn btn-primary">Salvar</button></div>
			</form>
		</div><!--panel panel-default-->
		
	</div><!-- container-->
</body>
</html>