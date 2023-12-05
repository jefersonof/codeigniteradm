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
		
		<!-- ABRE PERFÍL #ADMINISTRADOR #1 -->	
		<?php
		$dadosUsuario = session('dadosUsuario');
		if($dadosUsuario['tipo_usuario'] == 1)
		{
		?>	
		
		<div class="panel panel-default">
			<?php 
				echo '<pre>';
					//echo var_dump($total_de_testes)  ;
				echo '</pre>';	
			?>
					
		    <div class="panel-heading"><b>Dashboard -  Cadastro Único</b></div>
			
				<div class="panel-body">				
					<div class="row">
						<div class="col-md-6">
						<b>Últimos testes</b>
							<hr>
							<table class="table table-striped table-hover">
						<tbody>						
							
							<tr>
								<th scope="row">Jeferson Oliveira Forte</th> 
								<th scope="row">20/07/2021</th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
							<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg></a></th>

							<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></th>
								
							</tr>

							<tr>
								<th scope="row">Felipe Dossi Lima</th> 
								<th scope="row">10/01/2022</th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
							<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg></a></th>

							<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></th>
								
							</tr>

							<tr>
								<th scope="row">Fabiana Sena</th> 
								<th scope="row">06/10/2019</th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
							<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg></a></th>

							<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></th>
								
							</tr>
														
						</tbody>
					</table>
							
						</div><!-- col-md-6 -->

						<div class="col-md-6">
							<b>Minha Conta</b>
							<hr>

							<div class="card">
								<div class="card-body">
									<b><?php echo $msg_resgate;?></b>
									<blockquote class="blockquote mb-0">
									<?php								
										$primeiroNome = explode(" ", $dadosUsuario['nome']);
									?>	
									<p><?php echo ($primeiroNome[0]); ?></p>
									<h5><?php echo ($dadosUsuario['email']); ?></h5>
									<?php 
									if(isset($total_de_testes))
									{	
									?>
									<h5>Total de teste: <b><?php echo ($total_de_testes[0]['correcao'] + $total_de_testes[0]['aplicacao']); ?></b></h5>
									<h5>Aplicação:<b><?php echo($total_de_testes[0]['aplicacao']);?><b></h5>
									<h5>Correção: <b><?php echo($total_de_testes[0]['correcao']);?></b></h5>
									<?php 
									}
									else
									{		
									?>
									<h5>Total de teste:<b> 0</b></h5>
									<h5>Aplicação:<b> 0 </h5>
									<h5>Correção: <b> 0 </b></h5>
									<?php
									}
									?>

									<a href="#">
									<button type="submit"  class="btn btn-danger" >
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> Cadastrar novo teste
									</button>
									</a>

									<a href="#">
									<button type="button" data-toggle="modal" data-target="#libCreditosModal" class="btn btn-warning">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code-scan" viewBox="0 0 16 16">
  <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0v-3Zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5ZM.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5ZM4 4h1v1H4V4Z"/>
  <path d="M7 2H2v5h5V2ZM3 3h3v3H3V3Zm2 8H4v1h1v-1Z"/>
  <path d="M7 9H2v5h5V9Zm-4 1h3v3H3v-3Zm8-6h1v1h-1V4Z"/>
  <path d="M9 2h5v5H9V2Zm1 1v3h3V3h-3ZM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8H8Zm2 2H9V9h1v1Zm4 2h-1v1h-2v1h3v-2Zm-4 2v-1H8v1h2Z"/>
  <path d="M12 9h2V8h-2v1Z"/>
</svg> Liberação de créditos
									</button>
									</a>
		
									</blockquote>
								</div><!--card-body-->
							</div><!-- card -->
							
						</div><!-- col-md-6 -->
					</div><!-- row -->

					
					<!--***** MODAL *****-->
					<!-- Modal -->
					<form  method="post" action="<?php echo base_url('/public/Usuarios_testes/resgate/') ?>" >
						<div class="modal fade" id="libCreditosModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Resgatar Cupom Promocional de Testes</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<input type="text" name="codigo" style="width:180px; height:50px; margin:0 auto; border:1px solid red"  class="form-control" id="inputPassword4">
							
							
								<label for="inputEmail4" style="margin:10px 5px 0 230px">Tipo de Licença</label>	
							<select class="form-control" name="tipo_licenca" style="width:180px; height:30px; margin:0 auto; border:1px solid blue">
								<option value="vazio">--------------------</option>	
								<option value="correcao">Correção</option>
								<option value="aplicacao">Aplicação</option>
						  	</select>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								<button type="submit" class="btn btn-primary">Confirmar</button>
							</div>
							</div>
						</div>
						</div>
						</form><!-- fecha o form -->

					<!--***** FECHA MODAL *****-->

					<hr>

					<div class="row">
						<div class="col-md-4">
						<b>Gerar Cupons</b>
							<hr>
							<?php echo $msg;?>
							<form  method="post" action="<?php echo base_url('/public/Lote/gerarCupons/') ?>" >

								<div class="form-row">
									<div class="form-group col-md-12">
										Quantidade de Cupons para gerar</b>
										<input type="text" name="quantidade"  class="form-control" id="inputEmail1">
									</div>
								</div><!-- form-row -->

								<div class="form-row">
									<div class="form-group col-md-12">
										<b>Valor de cada cupom (nº de testes)</b>
										<input type="text" name="valor_cupom"  class="form-control" id="inputEmail4">
									</div>
								</div><!-- form-row -->

								
								

								<div class="form-row">
									<div class="form-group col-md-12" style="margin:0 0 0 100px">
									<button type="submit" style="margin:0 auto" class="btn btn-primary">Gerar</button>
									</div>								
								</div><!-- form-row -->
							</form>	

						</div>

						
						<div class="col-md-8">
							<b>Cupons de Testes</b>
							<hr>
							
							<table class="table table-striped table-hover">
						<thead>
							<tr>
							    <th scope="col">Lote</th>								
							    <th scope="col">Gerado por</th>								
								<th scope="col">Quantidade</th>								
							    <th scope="col">Valor</th>								
							    <th scope="col">Data</th>
							    <th scope="col">Ações</th>
							    <th scope="col"></th>
							    <th scope="col"></th>
							    <th scope="col"></th>
							</tr>
						</thead>
						
						<tbody>

							<?php
							
								if($usuarios_testes)
								{
									foreach($usuarios_testes as $item_UserTestes)
									{
										$date_lote = new DateTime($item_UserTestes['data_resgate']);
							?>				
							<tr>
								<th scope="row"><?php echo $item_UserTestes['id_lote'];?></th>
								<th scope="row"><?php echo $item_UserTestes['nome'];?></th>
								<th scope="row"><?php echo $item_UserTestes['quantidade'];?></th>
								<th scope="row"><?php echo $item_UserTestes['valor_cupom'];?></th>
								<th scope="row"><?php echo date_format($date_lote, 'd/m/Y'); ?></th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a></th>
<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
  <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
</svg></a></th>

<th scope="row"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-txt" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-2v-1h2a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.928 15.849v-3.337h1.136v-.662H0v.662h1.134v3.337h.794Zm4.689-3.999h-.894L4.9 13.289h-.035l-.832-1.439h-.932l1.228 1.983-1.24 2.016h.862l.853-1.415h.035l.85 1.415h.907l-1.253-1.992 1.274-2.007Zm1.93.662v3.337h-.794v-3.337H6.619v-.662h3.064v.662H8.546Z"/>
</svg></a></th>

<th scope="row"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-excel" viewBox="0 0 16 16">
  <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg></a></th>
							</tr>

							<?php
								}
							}	
								
							?>

						
						
														
						</tbody>
					</table>
							
						</div><!--col-md-8-->

					</div><!-- row -->
				</div><!-- panel-body -->

				<div class="panel-footer">
					<br>
				</div><!-- panel-footer -->

			
			
		</div><!--panel panel-default-->

		<?php
		}
		?>
		<!-- FECHA PERFÍL #ADMINISTRADOR #1 -->
		
		<!-- ABRE PERFÍL #ADMIN SUPORTE #2 -->
		<?php
		$dadosUsuario = session('dadosUsuario');
		if($dadosUsuario['tipo_usuario'] == 2)
		{
		?>
			<div class="panel panel-default">
		    <div class="panel-heading"><b>Dashboard -  Cadastro Único</b></div>
			
				<div class="panel-body">				
					<div class="row">
						<div class="col-md-6">
						<b>Últimos testes</b>
							<hr>
							<table class="table table-striped table-hover">
						<tbody>						
							
							<tr>
								<th scope="row">Jeferson Oliveira Forte</th> 
								<th scope="row">20/07/2021</th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
							<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg></a></th>

							<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></th>
								
							</tr>

							<tr>
								<th scope="row">Felipe Dossi Lima</th> 
								<th scope="row">10/01/2022</th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
							<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg></a></th>

							<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></th>
								
							</tr>

							<tr>
								<th scope="row">Fabiana Sena</th> 
								<th scope="row">06/10/2019</th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
							<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg></a></th>

							<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></th>
								
							</tr>
														
						</tbody>
					</table>
							
						</div><!-- col-md-6 -->

						<div class="col-md-6">
							<b>Minha Conta</b>
							<hr>

							<div class="card">
								<div class="card-body">
									<b><?php echo $msg_resgate;?></b>
									<blockquote class="blockquote mb-0">
									<?php								
										$primeiroNome = explode(" ", $dadosUsuario['nome']);
									?>	
									<p><?php echo ($primeiroNome[0]); ?></p>
									<h5><?php echo ($dadosUsuario['email']); ?></h5>
									<h5>Total de teste: <b><?php echo ($total_de_testes[0]['correcao'] + $total_de_testes[0]['aplicacao']); ?></b></h5>
									<h5>Aplicação:<b><?php echo($total_de_testes[0]['aplicacao']);?><b></h5>
									<h5>Correção: <b><?php echo($total_de_testes[0]['correcao']);?></b></h5>

									

									<a href="#">
									<button type="button" data-toggle="modal" data-target="#libCreditosModal" class="btn btn-warning">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code-scan" viewBox="0 0 16 16">
  <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0v-3Zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5ZM.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5ZM4 4h1v1H4V4Z"/>
  <path d="M7 2H2v5h5V2ZM3 3h3v3H3V3Zm2 8H4v1h1v-1Z"/>
  <path d="M7 9H2v5h5V9Zm-4 1h3v3H3v-3Zm8-6h1v1h-1V4Z"/>
  <path d="M9 2h5v5H9V2Zm1 1v3h3V3h-3ZM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8H8Zm2 2H9V9h1v1Zm4 2h-1v1h-2v1h3v-2Zm-4 2v-1H8v1h2Z"/>
  <path d="M12 9h2V8h-2v1Z"/>
</svg> Liberação de creditos
									</button>
									</a>
		
									</blockquote>
								</div><!--card-body-->
							</div><!-- card -->
							
						</div><!-- col-md-6 -->
					</div><!-- row -->

					
					<!--***** MODAL *****-->
					<!-- Modal -->
					<form  method="post" action="<?php echo base_url('/public/Usuarios_testes/resgate/') ?>" >
						<div class="modal fade" id="libCreditosModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Resgatar Cupom Promocional de Testes</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<input type="text" name="codigo" style="width:180px; height:50px; margin:0 auto; border:1px solid red"  class="form-control" id="inputPassword4">
							
							
								<label for="inputEmail4" style="margin:10px 5px 0 230px">Tipo de Licença</label>	
							<select class="form-control" name="tipo_licenca" style="width:180px; height:30px; margin:0 auto; border:1px solid blue">
								<option value="vazio">--------------------</option>	
								<option value="correcao">Correção</option>
								<option value="aplicacao">Aplicação</option>
						  	</select>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								<button type="submit" class="btn btn-primary">Confirmar</button>
							</div>
							</div>
						</div>
						</div>
						</form><!-- fecha o form -->

					<!--***** FECHA MODAL *****-->

					<hr>

					<div class="row">
						<div class="col-md-4">
						<b>Gerar Cupons</b>
							<hr>
							<?php echo $msg;?>
							<form  method="post" action="<?php echo base_url('/public/Lote/gerarCupons/') ?>" >

								<div class="form-row">
									<div class="form-group col-md-12">
										Quantidade de Cupons para gerar</b>
										<input type="text" name="quantidade"  class="form-control" id="inputEmail1">
									</div>
								</div><!-- form-row -->

								<div class="form-row">
									<div class="form-group col-md-12">
										<b>Valor de cada cupom (nº de testes)</b>
										<input type="text" name="valor_cupom"  class="form-control" id="inputEmail4">
									</div>
								</div><!-- form-row -->

								<div class="form-row">
									<div class="form-group col-md-12">
										<label for="inputEmail4">Instrumento (Tipo de Testes)</label>
										<select class="form-control" name="id_instrumento">
										<option value="selecione">
										-------
										</option>
											<?php 
											if($todos_instrumentos)
											{
												foreach($todos_instrumentos as $item_instrumento)
												{
											?>
											<option value="<?php echo $item_instrumento['id']?>"><?php echo $item_instrumento['nome'];?></option>
											<?php 
												}
											}
											?>

										</select>	
									</div>
								</div><!-- form-row -->
								

								<div class="form-row">
									<div class="form-group col-md-12" style="margin:0 0 0 100px">
									<button type="submit" style="margin:0 auto" class="btn btn-primary">Gerar</button>
									</div>								
								</div><!-- form-row -->
							</form>	

						</div>

						<div class="col-md-8">
							<b>Cupons de Testes</b>
							<hr>
							
							<table class="table table-striped table-hover">
						<thead>
							<tr>
							    <th scope="col">Lote</th>								
							    <th scope="col">Gerado por</th>								
								<th scope="col">Quantidade</th>								
							    <th scope="col">Valor</th>								
							    <th scope="col">Data</th>
							    <th scope="col">Ações</th>
							    <th scope="col"></th>
							    <th scope="col"></th>
							    <th scope="col"></th>
							</tr>
						</thead>
						
						<tbody>
							
							<?php
							
							foreach($usuarios_testes as $item_UserTestes)
							{
								$date_lote = new DateTime($item_UserTestes['data_resgate']);
						?>				
						<tr>
							<th scope="row"><?php echo $item_UserTestes['id_lote'];?></th>
							<th scope="row"><?php echo $item_UserTestes['nome'];?></th>
							<th scope="row"><?php echo $item_UserTestes['quantidade'];?></th>
							<th scope="row"><?php echo $item_UserTestes['valor_cupom'];?></th>
							<th scope="row"><?php echo date_format($date_lote, 'd/m/Y'); ?></th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a></th>
<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
  <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
</svg></a></th>

<th scope="row"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-txt" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-2v-1h2a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.928 15.849v-3.337h1.136v-.662H0v.662h1.134v3.337h.794Zm4.689-3.999h-.894L4.9 13.289h-.035l-.832-1.439h-.932l1.228 1.983-1.24 2.016h.862l.853-1.415h.035l.85 1.415h.907l-1.253-1.992 1.274-2.007Zm1.93.662v3.337h-.794v-3.337H6.619v-.662h3.064v.662H8.546Z"/>
</svg></a></th>

<th scope="row"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-excel" viewBox="0 0 16 16">
  <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg></a></th>
							</tr>

							<?php
								}
							?>

						
						
														
						</tbody>
					</table>
							
						</div><!--col-md-8-->

					</div><!-- row -->
				</div><!-- panel-body -->

				<div class="panel-footer">
					<br>
				</div><!-- panel-footer -->

			
			
		</div><!--panel panel-default-->

		<?php
		}
		?>		
		<!-- FECHA PERFÍL #ADMIN SUPORTE #2 -->

		<!-- ABRE PERFÍL #DISTRIBUIDOR #3 -->
		<?php
		$dadosUsuario = session('dadosUsuario');
		if($dadosUsuario['tipo_usuario'] == 3)
		{
		?>
			Dashboard Distribuidor
		<?php
		}
		?>		
		<!-- FECHA PERFÍL #DISTRIBUIDOR #3 -->

		<!-- ABRE PERFÍL #EMPRESA #4 -->
		<?php
		$usuarioLogado = session('UserLogado');
		$dadosUsuario = session('dadosUsuario');
		if($dadosUsuario['tipo_usuario'] == 4)
		{
		?>
			<div class="panel panel-default">
		    <div class="panel-heading"><b>Dashboard -  Cadastro Único</b></div>
			
				<div class="panel-body">				
					<div class="row">
						<div class="col-md-6">
						<b>Últimos testes</b>
							<hr>
							<table class="table table-striped table-hover">
						<tbody>						
							
							<tr>
								<th scope="row">Jeferson Oliveira Forte</th> 
								<th scope="row">20/07/2021</th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
							<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg></a></th>

							<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></th>
								
							</tr>

							<tr>
								<th scope="row">Felipe Dossi Lima</th> 
								<th scope="row">10/01/2022</th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
							<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg></a></th>

							<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></th>
								
							</tr>

							<tr>
								<th scope="row">Fabiana Sena</th> 
								<th scope="row">06/10/2019</th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
							<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg></a></th>

							<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></th>
								
							</tr>
														
						</tbody>
					</table>
							
						</div><!-- col-md-6 -->

						<div class="col-md-6">
							<b>Minha Conta</b>
							<hr>
							<?php 
								//echo '<pre>';
								//echo var_dump($empresas_associadas);
								//echo '</pre>';
							?>
							<div class="card">
								<div class="card-body">
									<b><?php echo $msg_resgate;?></b>
									<blockquote class="blockquote mb-0">
									<?php								
										$primeiroNome = explode(" ", $dadosUsuario['nome']);
									?>	
									<p><?php echo ($primeiroNome[0]); ?></p>
									<h5><?php echo ($dadosUsuario['email']); ?></h5>
									<?php 
									if(isset($total_de_testes))
									{	
									?>
									<h5>Total de teste: <b><?php echo ($total_de_testes[0]['correcao'] + $total_de_testes[0]['aplicacao']); ?></b></h5>
									<h5>Aplicação:<b><?php echo($total_de_testes[0]['aplicacao']);?><b></h5>
									<h5>Correção: <b><?php echo($total_de_testes[0]['correcao']);?></b></h5>
									<?php 
									}
									else
									{		
									?>
									<h5>Total de teste:<b> 0</b></h5>
									<h5>Aplicação:<b> 0 </h5>
									<h5>Correção: <b> 0 </b></h5>
									<?php
									}
									?>

									<?php
									if($usuarioLogado != 'Profissional')
									{	
									?>
										<hr>
										<h5></h5>
									<?php
									}
									?>

									<a href="#"><button ttype="button" data-toggle="modal" data-target="#libCreditosModal" class="btn btn-warning">
									<span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> Liberação de créditos
									</button></a>

									
		
									</blockquote>
								</div><!--card-body-->
							</div><!-- card -->
							
						</div><!-- col-md-6 -->
					</div><!-- row -->

					<!--***** MODAL *****-->
					<!-- Modal -->
					<form  method="post" action="<?php echo base_url('/public/Usuarios_testes/resgate/') ?>" >
						<div class="modal fade" id="libCreditosModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Resgatar Cupom Promocional de Testes</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<input type="text" name="codigo" style="width:180px; height:50px; margin:0 auto; border:1px solid red"  class="form-control" id="inputPassword4">
							
							
								<label for="inputEmail4" style="margin:10px 5px 0 230px">Tipo de Licença</label>	
							<select class="form-control" name="tipo_licenca" style="width:180px; height:30px; margin:0 auto; border:1px solid blue">
								<option value="vazio">--------------------</option>	
								<option value="correcao">Correção</option>
								<option value="aplicacao">Aplicação</option>
						  	</select>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								<button type="submit" class="btn btn-primary">Confirmar</button>
							</div>
							</div>
						</div>
						</div>
						</form><!-- fecha o form -->

					<!--***** FECHA MODAL *****-->

					<div class="row">
					<div class="col-md-12">
							<b>Cupons de Testes</b>
							<hr>
							
							<table class="table table-striped table-hover">
						<thead>
							<tr>
							    <th scope="col">Lote</th>								
							    <th scope="col">Gerado por</th>								
								<th scope="col">Quantidade</th>								
							    <th scope="col">Valor</th>								
							    <th scope="col">Data</th>
							    <th scope="col">Ações</th>
							    <th scope="col"></th>
							    <th scope="col"></th>
							    <th scope="col"></th>
							</tr>
						</thead>
						
						<tbody>

							<?php
							
								if($usuarios_testes)
								{
									foreach($usuarios_testes as $item_UserTestes)
									{
										$date_lote = new DateTime($item_UserTestes['data_resgate']);
							?>				
							<tr>
								<th scope="row"><?php echo $item_UserTestes['id_lote'];?></th>
								<th scope="row"><?php echo $item_UserTestes['nome'];?></th>
								<th scope="row"><?php echo $item_UserTestes['quantidade'];?></th>
								<th scope="row"><?php echo $item_UserTestes['valor_cupom'];?></th>
								<th scope="row"><?php echo date_format($date_lote, 'd/m/Y'); ?></th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a></th>
<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
  <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
</svg></a></th>

<th scope="row"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-txt" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-2v-1h2a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.928 15.849v-3.337h1.136v-.662H0v.662h1.134v3.337h.794Zm4.689-3.999h-.894L4.9 13.289h-.035l-.832-1.439h-.932l1.228 1.983-1.24 2.016h.862l.853-1.415h.035l.85 1.415h.907l-1.253-1.992 1.274-2.007Zm1.93.662v3.337h-.794v-3.337H6.619v-.662h3.064v.662H8.546Z"/>
</svg></a></th>

<th scope="row"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-excel" viewBox="0 0 16 16">
  <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg></a></th>
							</tr>

							<?php
								}
							}	
								
							?>

						
						
														
						</tbody>
					</table>
							
						</div><!--col-md-12-->
					</div><!-- Row -->

					
					<hr>

				</div><!-- panel-body -->

				<div class="panel-footer">
					<br>
				</div><!-- panel-footer -->

			
			
		</div><!--panel panel-default-->
		<?php
		}
		?>		
		<!-- FECHA PERFÍL #EMPRESA #4 -->


		<!-- ABRE PERFÍL #PROFISSIONAL #5 -->
		<?php
		$dadosUsuario = session('dadosUsuario');
		$usuarioLogado = session('UserLogado');
		if($dadosUsuario['tipo_usuario'] == 5)
		{
		?> 
			<div class="panel panel-default">
		    <div class="panel-heading"><b>Dashboard -  Cadastro Único</b></div>
			
				<div class="panel-body">				
					<div class="row">
						<div class="col-md-6">
						<b>Últimos testes</b>
							<hr>
							<table class="table table-striped table-hover">
						<tbody>						
							
							<tr>
								<th scope="row">Jeferson Oliveira Forte</th> 
								<th scope="row">20/07/2021</th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
							<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg></a></th>

							<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></th>
								
							</tr>

							<tr>
								<th scope="row">Felipe Dossi Lima</th> 
								<th scope="row">10/01/2022</th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
							<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg></a></th>

							<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></th>
								
							</tr>

							<tr>
								<th scope="row">Fabiana Sena</th> 
								<th scope="row">06/10/2019</th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
							<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg></a></th>

							<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></th>
								
							</tr>
														
						</tbody>
					</table>
							
						</div><!-- col-md-6 -->

						<div class="col-md-6">
							<b>Minha Conta</b>
							<hr>
							<?php 
								//echo '<pre>';
								//echo var_dump($empresas_associadas);
								//echo '</pre>';
							?>
							<div class="card">
								<div class="card-body">
									<b><?php echo $msg_resgate;?></b>
									<blockquote class="blockquote mb-0">
									<?php								
										$primeiroNome = explode(" ", $dadosUsuario['nome']);
									?>	
									<p><?php echo ($primeiroNome[0]); ?></p>
									<h5><?php echo ($dadosUsuario['email']); ?></h5>
									<h5>Total de teste: <b><?php echo ($total_de_testes[0]['correcao'] + $total_de_testes[0]['aplicacao']); ?></b></h5>
									<h5>Aplicação:<b><?php echo($total_de_testes[0]['aplicacao']);?><b></h5>
									<h5>Correção: <b><?php echo($total_de_testes[0]['correcao']);?></b></h5>

									
									<div class="btn-group">
										<button type="button" class="btn btn-success">Trocar de Perfíl</button>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="glyphicon glyphicon-refresh"></span>
											<span class="sr-only">Toggle Dropdown</span>
										</button>
										<ul class="dropdown-menu">
											<li>
											<a href="<?php echo base_url('/public/Perfil/alterarPerfil/'.$dadosUsuario['id'])?>">Minha Conta</a>
											</li>

											<?php
											if($empresas_associadas)
											{	
												foreach($empresas_associadas as $item_empresa_associada)
											 	{
											?>
												<li>
													<a href="<?php echo base_url('/public/Perfil/alterarPerfil/'.$item_empresa_associada['id'])?>"><?php echo $item_empresa_associada['nome'] ?></a>
												</li>
											<?php
												}
											}
											?>	
										</ul>
									</div>

									<a href="#"><button ttype="button" data-toggle="modal" data-target="#libCreditosModal" class="btn btn-warning">
									<span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> Liberação de créditos
									</button></a>

									<?php
									if($usuarioLogado != 'Profissional')
									{	
									?>
										<hr>
										<h5><b><?php echo($teste_nome['nome']);?></b></h5>
										<h5>Total de teste da empresa:<b><?php echo ($total_de_testes_empresa[0]['correcao'] + $total_de_testes_empresa[0]['aplicacao']); ?></b></h5>
										<h5>Aplicação:<b><?php echo($total_de_testes_empresa[0]['aplicacao']);?><b></h5>
									<h5>Correção: <b><?php echo($total_de_testes_empresa[0]['correcao']);?></b></h5>
									<?php
									}
									?>
		
									</blockquote>
								</div><!--card-body-->
							</div><!-- card -->
							
						</div><!-- col-md-6 -->
					</div><!-- row -->

					<!--***** MODAL *****-->
					<!-- Modal -->
					<form  method="post" action="<?php echo base_url('/public/Usuarios_testes/resgate/') ?>" >
						<div class="modal fade" id="libCreditosModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Resgatar Cupom Promocional de Testes</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<input type="text" name="codigo" style="width:180px; height:50px; margin:0 auto; border:1px solid red"  class="form-control" id="inputPassword4">
							
							
								<label for="inputEmail4" style="margin:10px 5px 0 230px">Tipo de Licença</label>	
							<select class="form-control" name="tipo_licenca" style="width:180px; height:30px; margin:0 auto; border:1px solid blue">
								<option value="vazio">--------------------</option>	
								<option value="correcao">Correção</option>
								<option value="aplicacao">Aplicação</option>
						  	</select>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								<button type="submit" class="btn btn-primary">Confirmar</button>
							</div>
							</div>
						</div>
						</div>
						</form><!-- fecha o form -->

					<!--***** FECHA MODAL *****-->

					<div class="row">
					<div class="col-md-12">
							<b>Cupons de Testes</b>
							<hr>
							
							<table class="table table-striped table-hover">
						<thead>
							<tr>
							    <th scope="col">Lote</th>								
							    <th scope="col">Gerado por</th>								
								<th scope="col">Quantidade</th>								
							    <th scope="col">Valor</th>								
							    <th scope="col">Data</th>
							    <th scope="col">Ações</th>
							    <th scope="col"></th>
							    <th scope="col"></th>
							    <th scope="col"></th>
							</tr>
						</thead>
						
						<tbody>

							<?php
							
								if($usuarios_testes)
								{
									foreach($usuarios_testes as $item_UserTestes)
									{
										$date_lote = new DateTime($item_UserTestes['data_resgate']);
							?>				
							<tr>
								<th scope="row"><?php echo $item_UserTestes['id_lote'];?></th>
								<th scope="row"><?php echo $item_UserTestes['nome'];?></th>
								<th scope="row"><?php echo $item_UserTestes['quantidade'];?></th>
								<th scope="row"><?php echo $item_UserTestes['valor_cupom'];?></th>
								<th scope="row"><?php echo date_format($date_lote, 'd/m/Y'); ?></th>
								<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a></th>
<th scope="row"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
  <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
</svg></a></th>

<th scope="row"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-txt" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-2v-1h2a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.928 15.849v-3.337h1.136v-.662H0v.662h1.134v3.337h.794Zm4.689-3.999h-.894L4.9 13.289h-.035l-.832-1.439h-.932l1.228 1.983-1.24 2.016h.862l.853-1.415h.035l.85 1.415h.907l-1.253-1.992 1.274-2.007Zm1.93.662v3.337h-.794v-3.337H6.619v-.662h3.064v.662H8.546Z"/>
</svg></a></th>

<th scope="row"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-excel" viewBox="0 0 16 16">
  <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg></a></th>
							</tr>

							<?php
								}
							}	
								
							?>

						
						
														
						</tbody>
					</table>
							
						</div><!--col-md-12-->
					</div><!-- Row -->

					
					<hr>

				</div><!-- panel-body -->

				<div class="panel-footer">
					<br>
				</div><!-- panel-footer -->

			
			
		</div><!--panel panel-default-->
			
		<?php
		}//if Perfíl do usuário
		?>		
		<!-- FECHA PERFÍL #PROFISSIONAL #5 -->

		<!-- ABRE PERFÍL #EXAMINANDO #6 -->
		<?php
		$dadosUsuario = session('dadosUsuario');
		if($dadosUsuario['tipo_usuario'] == 6)
		{
		?>
			
			Dashboard Examinando
		</div><!--panel panel-default-->
		<?php
		}
		?>		
		<!-- FECHA PERFÍL #EXAMINANDO #6 -->


	</div><!-- container-->
</body>
</html>