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

	<?php 
		
		/*if($teste['tipo_usuario'] == 1)
		{
			echo var_dump($teste['tipo_usuario']);
		}*/
		

		/*foreach($cargoSuper as $item_meta)
		{
			if($item_meta['meta_key'] === 'Nome')
			{
				$nome    = $item_meta['meta_value'];
				$id_nome = $item_meta['id'];
			}

			if($item_meta['meta_key'] === 'E-mail')
			{
				$email    = $item_meta['meta_value'];
				$id_email = $item_meta['id'];
			}

			if($item_meta['meta_key'] === 'Cargo')
			{
				$cargo    = $item_meta['meta_value'];
				$id_cargo = $item_meta['id'];
			}
		}*/

		//var_dump($cargoSuper);
		//var_dump($id_cargo);
	
	?>
    <!--<form  method="post">
        <input type="text" name="nome">
        <input type="text" name="login">
        <button type="submit">Save</button>
		<*?php ?>
		
    </form>-->
	
	<div class="container">
	<nav class="navbar .navbar-default">
		<div class="container-fluid">
			
			<!--**** MENU ****-->
			<?php
			  include 'menu.php';
			  $usuarioMeta = session('usuarioMeta');
			  //echo var_dump($usuarioMeta);
			 ?>
			<!--**** MENU ****-->
		</div>
    </nav>
		
		<div class="panel panel-default">
		    <div class="panel-heading">Cadastro de Usuário</div>
			
			<!--<*?php echo var_dump($testeMeta) ?>-->
			<form  method="post" action="<?php echo base_url('/public/Usuarios/editarUsuario/'.$id) ?>" >
				<div class="panel-body">
				<form  method="post" >
				<div class="panel-body">
					<div class="form-row">
						<div class="form-group col-md-5">
						  <label for="inputEmail4">Nome</label>
						  <input type="text" name="nome" value="<?php echo $nome ;?>"  class="form-control" id="inputEmail4">
						</div>
						<div class="form-group col-md-3">
						  <label for="inputPassword4">Login</label>
						  <input type="text" name="login" value="<?php echo $login;?>"  class="form-control" id="inputPassword4">
						</div>
						<div class="form-group col-md-4">
						  <label for="inputPassword4">E-mail</label>
						  <input type="text" name="email" value="<?php echo $email;?>"  class="form-control" id="inputPassword4">
						</div>
					</div><!-- form-row -->

					<div class="form-row">

						<div class="form-group col-md-4">
						  <label for="inputEmail4">Status</label>
						  <select class="form-control" name="status">							
							
						  	<?php
								$selecionadoA ='';
								$selecionadoI ='';
								$selecionadoD ='';
								if($status == 'A')
								{
									$selecionadoA = " selected='selected' " ;
								}
								elseif($status == 'I')
								{
									$selecionadoI = " selected='selected' ";
								}
								elseif($status == 'D')
								{
									$selecionadoD = " selected='selected' ";
								}
								
							 ?>
							<option value="A" <?php echo $selecionadoA ?>  >Ativo</option>
							<option value="I" <?php echo $selecionadoI ?> >Inativo</option>
							<option value="D" <?php echo $selecionadoD ?>  >Deletado</option>
						  </select>
						</div>
						<!-- selected="selected" -->

						<div class="form-group col-md-4">
						  <label for="inputPassword4">Senha</label>
						  <input type="text" name="senha" value="<?php echo $senha;?>"  class="form-control" id="inputPassword4">
						</div>
						
						<div class="form-group col-md-4">
						  <label for="inputPassword4">Confirma Senha</label>
						  <input type="text" name="senha2" value="<?php echo $senha;?>" class="form-control" id="inputPassword4">
						</div>

						<!--<div class="form-group col-md-12">
						  <label for="inputPassword4">Cargo</label>
						  <input type="text" name="cargoSuper" value="<*?php echo $cargoSuper;?>" class="form-control" id="inputPassword4">
						</div>-->
						<?php 		
							
							switch ($tipo_usuario) {
							case 1://adm super
								$radioAdmSupe = 'checked';
								$radioAdmSupo  = '';
								$radiodistribuidor = '';
								$radioempresa = '';
								$radioprofissional = '';
								$radioexaminando = '';
								break;
							case 2:
								$radioAdmSupe = '';
								$radioAdmSupo  = 'checked';
								$radiodistribuidor = '';
								$radioempresa = '';
								$radioprofissional = '';
								$radioexaminando = '';
								break;
							case 3:
								$radioAdmSupe = '';
								$radioAdmSupo  = '';
								$radiodistribuidor = 'checked';
								$radioempresa = '';
								$radioprofissional = '';
								$radioexaminando = '';
								break;
							case 4:
								$radioAdmSupe = '';
								$radioAdmSupo  = '';
								$radiodistribuidor = '';
								$radioempresa = 'checked';
								$radioprofissional = '';
								$radioexaminando = '';
								break;
							case 5:
								$radioAdmSupe = '';
								$radioAdmSupo  = '';
								$radiodistribuidor = '';
								$radioempresa = '';
								$radioprofissional = 'checked';
								$radioexaminando = '';
								break;
							case 6:
								$radioAdmSupe = '';
								$radioAdmSupo  = '';
								$radiodistribuidor = '';
								$radioempresa = '';
								$radioprofissional = '';
								$radioexaminando = 'checked';
								break;		
								
						}

						?>

						<!--ADMIN SUPERVISOR(1)-->	
					<div class="form-row">
						<hr>
						<input class="form-check-input" type="radio" name="tipo_usuario" value="1" <?php echo $radioAdmSupe ?> id="1"> <b><font color="#23527C"> Administrador Supervisor (1)</font></b>
						<hr>
						<div class="form-group col-md-12">
						  <label for="inputPassword4">Cargo </label>
						  <input type="text" name="cargoSuper" value="<?php echo $usuarioMeta['cargoSuper'];?>"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<!--ADMIN SUPORTE(2)-->
					<div class="form-row">
						<hr>
						<input class="form-check-input" type="radio" name="tipo_usuario" value="2" <?php echo $radioAdmSupo ?> id="2"> <b><font color="#23527C">Administrador Suporte (2)</font></b>
						<hr>
						<div class="form-group col-md-12">
						  <label for="inputPassword4">Cargo </label>
						  <input type="text" name="cargoSupor" value="<?php echo $usuarioMeta['cargoSupor'];?>"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<!--DISTRIBUIDOR(3)-->
					<div class="form-row">
						<hr>
						<input class="form-check-input" type="radio" name="tipo_usuario" value="3" <?php echo $radiodistribuidor;?> id="3"> <b><font color="#23527C">Distribuidor (3)</font></b>
						<hr>
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Nome </label>
						  <input type="text" name="nomeDist" value="<?php echo $usuarioMeta['nomeDist'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">CNPJ </label>
						  <input type="text" name="cnpjDist" value="<?php echo $usuarioMeta['cnpjDist'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">Telefone </label>
						  <input type="text" name="telDist" value="<?php echo $usuarioMeta['telDist'];?>"  class="form-control" id="inputPassword4">
						</div>

					</div><!-- form-row -->

					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Responsável 1 </label>
						  <input type="text" name="resp1Dist" value="<?php echo $usuarioMeta['resp1Dist'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">Cargo </label>
						  <input type="text" name="cargo1Dist" value="<?php echo $usuarioMeta['cargo1Dist'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">E-mail </label>
						  <input type="text" name="emailcargo1Dist" value="<?php echo $usuarioMeta['emailcargo1Dist'];?>"  class="form-control" id="inputPassword4">
						</div>
					</div><!--form-row-->

					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Responsável 2</label>
						  <input type="text" name="resp2Dist" value="<?php echo $usuarioMeta['resp2Dist'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">Cargo</label>
						  <input type="text" name="cargo2Dist" value="<?php echo $usuarioMeta['cargo2Dist'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">E-mail </label>
						  <input type="text" name="emailcargo2Dist" value="<?php echo $usuarioMeta['emailcargo2Dist'];?>"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
						  <label for="inputPassword4">Obervação</label>
						  <input type="text" name="observacaoDist" value="<?php echo $usuarioMeta['observacaoDist'];?>"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<!-- EMPRESA(4)-->
					<div class="form-row">
						<hr>
						<input class="form-check-input" type="radio" name="tipo_usuario" <?php echo $radioempresa;?> value="4" id="4"> <b><font color="#23527C">Empresa (4)</font></b>
						<hr>

						<div class="form-group col-md-6">
						  <label for="inputPassword4">Nome </label>
						  <input type="text" name="nomeEmpre" value="<?php echo $usuarioMeta['nomeEmpre'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">CNPJ </label>
						  <input type="text" name="cnpjEmpre" value="<?php echo $usuarioMeta['cnpjEmpre'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">Telefone </label>
						  <input type="text" name="telEmpre" value="<?php echo $usuarioMeta['telEmpre'];?>"  class="form-control" id="inputPassword4">
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Endereço </label>
						  <input type="text" name="endEmpre" value="<?php echo $usuarioMeta['endEmpre'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-6">
						  <label for="inputPassword4">Área de atuação </label>
						  <input type="text" name="areaEmpre" value="<?php echo $usuarioMeta['areaEmpre'];?>"  class="form-control" id="inputPassword4">
						</div>
					</div>	

					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Responsável</label>
						  <input type="text" name="responEmpre" value="<?php echo $usuarioMeta['responEmpre'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">Cargo</label>
						  <input type="text" name="cargoEmpre" value="<?php echo $usuarioMeta['cargoEmpre'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">E-mail</label>
						  <input type="text" name="emailEmpre" value="<?php echo $usuarioMeta['emailEmpre'];?>"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
						  <label for="inputPassword4">Obervação</label>
						  <input type="text" name="observacaoEmpre" value="<?php echo $usuarioMeta['observacaoEmpre'];?>"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<!-- PROFISSIONAIS(5)-->
					<div class="form-row">
						<hr>
						<input class="form-check-input" type="radio" name="tipo_usuario" <?php echo $radioprofissional;?> value="5" id="5"> <b><font color="#23527C">Profissional (5)</font></b>
						<hr>
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Nome </label>
						  <input type="text" name="nomeProf" value="<?php echo $usuarioMeta['nomeProf'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">CPF </label>
						  <input type="text" name="cpfProf" value="<?php echo $usuarioMeta['cpfProf'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">CRP </label>
						  <input type="text" name="crpProf" value="<?php echo $usuarioMeta['crpProf'];?>"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-2">
						  <label for="inputPassword4">Telefone</label>
						  <input type="text" name="telProf" value="<?php echo $usuarioMeta['telProf'];?>"  class="form-control" id="inputPassword4">
						</div>	
					
						<div class="form-group col-md-5">
						  <label for="inputPassword4">Endereço </label>
						  <input type="text" name="endProf" value="<?php echo $usuarioMeta['endProf'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-5">
						  <label for="inputPassword4">E-mail</label>
						  <input type="text" name="emailProf" value="<?php echo $usuarioMeta['emailProf'];?>"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
						  <label for="inputPassword4">Obervação</label>
						  <input type="text" name="observacaoProf" value="<?php echo $usuarioMeta['observacaoProf'];?>" class="form-control" id="inputPassword4">
						</div>
					</div>

					<!-- EXAMINANDO(6)-->
					<div class="form-row">
						<hr>
						<input class="form-check-input" type="radio" name="tipo_usuario" value="6" <?php echo $radioexaminando;?> id="6"> <b><font color="#23527C">Examinando (6)</font></b>
						<hr>
						<div class="form-group col-md-4">
						  <label for="inputPassword4">Nome </label>
						  <input type="text" name="nomeExam" value="<?php echo $usuarioMeta['nomeExam'];?>"   class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">CPF </label>
						  <input type="text" name="cpfExam" value="<?php echo $usuarioMeta['cpfExam'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-3">
						  <label for="inputPassword4">Data de nasmimento </label>
						  <input type="text" name="dataNasceExam" value="<?php echo $usuarioMeta['dataNasceExam'];?>"  class="form-control" id="inputPassword4">
						</div>

						<div class="form-group col-md-2">
						  <label for="inputPassword4">Sexo</label>
						  <input type="text" name="sexoExam" value="<?php echo $usuarioMeta['sexoExam'];?>"  class="form-control" id="inputPassword4">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-3">
						  <label for="inputPassword4">Escolaridade</label>
						  <input type="text" name="escolarExam" value="<?php echo $usuarioMeta['escolarExam'];?>" class="form-control" id="inputPassword4">
						</div>	
					
						<div class="form-group col-md-9">
						  <label for="inputPassword4">Informações Adicionais</label>
						  <input type="text" name="infoadcExam" value="<?php echo $usuarioMeta['infoadcExam'];?>"  class="form-control" id="inputPassword4">
						</div>

					</div>

					<div class="form-row">
						<div class="form-group col-md-12">
						  <label for="inputPassword4">Obervação</label>
						  <input type="text" name="observacaoExam" value="<?php echo $usuarioMeta['observacaoExam'];?>"  class="form-control" id="inputPassword4">
						</div>
					</div>

										
				</div><!-- panel-body -->
				
			
				
				</div><!-- panel-body -->
				
				<div class="panel-footer">
					<button type="submit"  class="btn btn-primary">
						<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Salvar
					</button>

					<a href="<?php echo base_url('/public/usuarios/') ?>"> 
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