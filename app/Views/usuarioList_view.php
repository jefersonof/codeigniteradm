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
					<div class="form-group col-md-4">
					  <label for="inputEmail4">Id</label>
					  <input type="text" name="id" class="form-control" id="inputEmail4">
					</div>
					<div class="form-group col-md-8">
					  <label for="inputPassword4">Nome</label>
					  <input type="text" name="nome" class="form-control" id="inputPassword4" placeholder="Senha">
					</div>
				</div>
			</div><!-- panel-body -->

			<div class="panel-footer">
				<button type="button" class="btn btn-primary" aria-label="Alinhar na esquerda">
					<span class="glyphicon glyphicon-search glyphicon" aria-hidden="true"></span> Buscar
				</button>
				<a href = "<?php echo base_url('/public/usuarios/save/') ?>"><button type="submit"  class="btn btn-success">Novo</button></a>
			</div><!--panel-footer-->
			
		</div><!--panel panel-default-->

		<?php
			var_dump( session('userid') );
		?>
		
		<div class="panel panel-default">
		    <div class="panel-heading"><b>Lista de Programas</b></div>
			<hr/>
				<div class="panel-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
							    <th scope="col">Alterar</th>								
							    <th scope="col">Deletar</th>								
								<th scope="col">Nome</th>								
							    <th scope="col">Login</th>								
							    <th scope="col">E-mail</th>
							    <th scope="col">Status</th>
							    <th scope="col">Perfíl</th>
							</tr>
						</thead>
						
						<tbody>						
							<?php foreach ($listar_usuarios as $item ) 
							{
							?>
							<tr>
								<th scope="row"><a href="<?php echo base_url('/public/Usuarios/editarUsuario/'.$item['id'])?> "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
							<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg></a></th>

							<th scope="row"><a href="<?php echo base_url('/public/Usuarios/delUsuario/'.$item['id'])?> "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></th>
								<th scope="row"><?php echo $item['nome'] ;?></th> 
								<th scope="row"><?php echo $item['login'] ;?></th>
								<th scope="row"><?php echo $item['email'] ;?></th>

								<?php 
									switch ($item['status']){
										case 'A':
											$item['status'] = 'Ativo';
											break;
										case 'I':
											$item['status'] = 'Inativo';
											break;
											case 'D':
												$item['status'] = 'Deletado';
												break;		
									}
								?>
								<th scope="row"><?php echo $item['status'] ;?></th>
								<th scope="row"><?php echo $item['tipo_usuario'] ;?></th>
							</tr>
							
								
								
							

							<?php
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