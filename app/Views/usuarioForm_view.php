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
	<div class="container">
	<nav class="navbar .navbar-default">
		<div class="container-fluid">

			<!--**** MENU ****-->
			<?php  include 'menu.php' ?>

		</div>
    </nav>
		
		<div class="panel panel-default">
		    <div class="panel-heading">Cadastro de Usuário</div>
			
			<?php echo $msg;?>

			<?php
				 if($dadosPost)
				 {
				 	echo var_dump($dadosPost);
				 }	
			   ?>
			<form  method="post" action="<?php echo base_url('/public/Usuarios/save') ?>" >
				<div class="panel-body">
				<form  method="post" >
				<div class="panel-body">
					<div class="form-row">
						<div class="form-group col-md-5">
						  <label for="inputEmail4">Nome</label>
						  <input type="text" name="nome"  class="form-control" id="inputEmail4">
						</div>
						<div class="form-group col-md-4">
						  <label for="inputPassword4">Login</label>
						  <input type="text" name="login"  class="form-control" id="inputPassword4">
						</div>
						<div class="form-group col-md-3">
						<label for="inputEmail4">Status</label>
						  <select class="form-control" name="status">							
							<option value="A">Ativo</option>
							<option value="I">Inativo</option>
						  </select>
						</div>

					</div><!-- form-row -->

					<div class="form-row">
						<!--<div class="form-group col-md-4">
						  <label for="inputEmail4">Perfil</label>
						  <select class="form-control" name="tipo_usuario">	
						  	<option value="1">Admin Supervisor</option>
							<option value="2">Admin Suporte</option>
							<option value="3">Distribuidor</option>
							<option value="4">Empresas</option>
							<option value="5">Profissionais</option>
							<option value="6">Examinando</option>
						  </select>	

						</div>-->

						<div class="form-group col-md-6">
						  <label for="inputPassword4">E-mail</label>
						  <input type="text" name="email"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">Senha</label>
						  <input type="text" name="senha"  class="form-control" id="inputPassword4">
						</div>
						
						<div class="form-group col-md-3">
						  <label for="inputPassword4">Confirma Senha</label>
						  <input type="text" name="senha2"  class="form-control" id="inputPassword4">
						</div>
						
						<!--<p><del>This line of text is meant to be treated as deleted text.</del></p>-->
					</div><!-- form-row -->
					

					<!--ADMIN SUPERVISOR(1)-->	
					<div class="form-row">
						<hr>
						<input class="form-check-input" type="radio" name="tipo_usuario" value="1" id="1"> <b><font color="#23527C"> Administrador Supervisor (1)</font></b>
						<hr>
						<div class="form-group col-md-12">
						  <label for="inputPassword4">Cargo </label>
						  <input type="text" name="cargoSuper"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<!--ADMIN SUPORTE(2)-->
					<div class="form-row">
						<hr>
						<input class="form-check-input" type="radio" name="tipo_usuario" value="2" id="2"> <b><font color="#23527C">Administrador Suporte (2)</font></b>
						<hr>
						<div class="form-group col-md-12">
						  <label for="inputPassword4">Cargo </label>
						  <input type="text" name="cargoSuper"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<!--DISTRIBUIDOR(3)-->
					<div class="form-row">
						<hr>
						<input class="form-check-input" type="radio" name="tipo_usuario" value="3" id="3"> <b><font color="#23527C">Distribuidor (3)</font></b>
						<hr>
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Nome </label>
						  <input type="text" name="nomeDist"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">CNPJ </label>
						  <input type="text" name="cnpjDist"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">Telefone </label>
						  <input type="text" name="telDist"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Responsável 1 </label>
						  <input type="text" name="resp1Dist"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">Cargo </label>
						  <input type="text" name="cargo1Dist"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">E-mail </label>
						  <input type="text" name="emailcargo1Dist"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Responsável 2</label>
						  <input type="text" name="resp2Dist"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">Cargo</label>
						  <input type="text" name="cargo2Dist"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">E-mail </label>
						  <input type="text" name="emailcargo2Dist"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
						  <label for="inputPassword4">Obervação</label>
						  <input type="text" name="observacaoDist"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<!-- EMPRESA(4)-->
					<div class="form-row">
						<hr>
						<input class="form-check-input" type="radio" name="tipo_usuario" value="4" id="4"> <b><font color="#23527C">Empresa (4)</font></b>
						<hr>
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Nome </label>
						  <input type="text" name="nomeEmpre"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">CNPJ </label>
						  <input type="text" name="cnpjEmpre"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">Telefone </label>
						  <input type="text" name="telEmpre"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Endereço </label>
						  <input type="text" name="endEmpre"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-6">
						  <label for="inputPassword4">Área de atuação</label>
						  <input type="text" name="areaEmpre"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Responsável</label>
						  <input type="text" name="responEmpre"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">Cargo</label>
						  <input type="text" name="cargoEmpre"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">E-mail</label>
						  <input type="text" name="emailEmpre"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
						  <label for="inputPassword4">Obervação</label>
						  <input type="text" name="observacaoEmpre"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<!-- PROFISSIONAIS(5)-->
					<div class="form-row">
						<hr>
						<input class="form-check-input" type="radio" name="tipo_usuario" value="5" id="5"> <b><font color="#23527C">Profissional (5)</font></b>
						<hr>
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Nome </label>
						  <input type="text" name="nomeProf"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">CPF </label>
						  <input type="text" name="cpfProf"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">CRP </label>
						  <input type="text" name="crpProf"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-2">
						  <label for="inputPassword4">Telefone</label>
						  <input type="text" name="telProf"  class="form-control" id="inputPassword4">
						</div>	
					
						<div class="form-group col-md-5">
						  <label for="inputPassword4">Endereço </label>
						  <input type="text" name="endProf"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-5">
						  <label for="inputPassword4">E-mail</label>
						  <input type="text" name="emailProf"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
						  <label for="inputPassword4">Obervação</label>
						  <input type="text" name="observacaoProf"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<!-- EXAMINANDO(6)-->
					<div class="form-row">
						<hr>
						<input class="form-check-input" type="radio" name="tipo_usuario" value="6" id="6"> <b><font color="#23527C">Examinando (6)</font></b>
						<hr>
						<div class="form-group col-md-4">
						  <label for="inputPassword4">Nome </label>
						  <input type="text" name="nomeExam"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">CPF </label>
						  <input type="text" name="cpfExam"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">Data de nasmimento </label>
						  <input type="text" name="nataNasceExam"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-2">
						  <label for="inputPassword4">Sexo</label>
						  <input type="text" name="sexoExam"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-3">
						  <label for="inputPassword4">Escolaridade</label>
						  <input type="text" name="escolarExam"  class="form-control" id="inputPassword4">
						</div>	
					
						<div class="form-group col-md-9">
						  <label for="inputPassword4">Informações Adicionais</label>
						  <input type="text" name="infoadcExam"  class="form-control" id="inputPassword4">
						</div>

					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
						  <label for="inputPassword4">Obervação</label>
						  <input type="text" name="observacaoExam"  class="form-control" id="inputPassword4">
						</div>
					</div>

					
										
				</div><!-- panel-body -->
				
			
				
				</div><!-- panel-body -->
				
				<div class="panel-footer">
					<button type="submit"  class="btn btn-primary">
						<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Salvar
					</button>

					<a href="#"> 
						<button type="button" class="btn btn-success" aria-label="Alinhar na esquerda">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Voltar
						</button>
					</a>
				</div><!-- panel-footer -->
			</form>
		</div><!--panel panel-default-->
		
	</div><!-- container-->
</body>
</html>