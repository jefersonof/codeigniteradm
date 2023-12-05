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

  <title>Painel Administrativo</title>
</head>
<body>
  	<div class="container">
	  <nav class="navbar .navbar-default">
		<div class="container-fluid">

			<!--**** MENU ****-->
			<?php  include 'menu.php' ?>
			<!--**** MENU ****-->

		</div>
   		</nav>
		
		<div class="panel panel-default">
		    <div class="panel-heading">Grupos</div>
			
		    <div class="panel-body">
				<div class="form-row">
					<div class="form-group col-md-12">
					  <label for="inputPassword4">Nome</label>
					  <input type="text" name="nome" class="form-control" id="inputPassword4" placeholder="Senha">
					</div>
				</div>
			</div><!-- panel-body -->

			<div class="panel-footer">
				<button type="button" class="btn btn-primary" aria-label="Alinhar na esquerda">
					<span class="glyphicon glyphicon-search glyphicon" aria-hidden="true"></span> Buscar
				</button>
			</div><!--panel-footer-->
			
		</div><!--panel panel-default-->

		<?php
			
			//echo var_dump($usuario_nao_associado);
		?>
		
		<div class="panel panel-default">
		    <div class="panel-heading"><b>Lista de Programas</b></div>
			<hr/>
				<div class="panel-body">				
					<table class="table table-striped table-hover">
						<thead>
							<tr>								
								<th scope="col">Nome</th>								
							    <th scope="col">Perfíl</th>
							    <th scope="col">Associar / Desassociar</th>
							</tr>
						</thead>
						
						<tbody>						
							<?php
							 if($usuario_associado)
							 {
								foreach ($usuario_associado as $item_associado ) 
								{
							?>
							<tr>
								<th scope="row"><?php echo $item_associado['nome'];?></th>
								<th scope="row"><?php echo $item_associado['email'];?></th>
								<th scope="row">
									<a href=" <?php echo base_url('/public/Usuario_Meta/DesassociarUsuario/'.$item_associado['id_meta'])?>"><button type="submit" class="btn btn-warning" aria-label="Alinhar na esquerda">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Desassociar
									</button></a></th>
							</tr>
							<?php 
								}
							}	
							?>

<?php
							if($usuario_nao_associado)
							{
								foreach ($usuario_nao_associado as $item_nao_associado ) 
								{
								
							?>
							<tr>
								<th scope="row"><?php echo $item_nao_associado['nome'];?></th>
								<th scope="row"><?php echo $item_nao_associado['email']?></th>
								<th scope="row">
									<a href="<?php echo base_url('/public/Usuario_Meta/AssociarUsuario/'.$item_nao_associado['id'])?>"><button type="submit" class="btn btn-success" aria-label="Alinhar na esquerda">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Associar
									</button></a></th>
							</tr>
							<?php 
								}
							}	
							?>
														
						</tbody>
					</table>
				</div>
			
			<div class="panel-footer">Panel Footer</div>
		  
		</div><!--panel panel-default-->
		
	</div><!-- container-->
</body>
</html>