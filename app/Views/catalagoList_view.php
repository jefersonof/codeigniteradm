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

			<!--**** MENU ****-->
			<?php  include 'menu.php' ?>

		</div>
    </nav>
		
		<div class="panel panel-default">
		    <div class="panel-heading">Programa</div>
			
			<form  method="post" >
				<div class="panel-body">
					
                    <div class="form-row">

						<?php
							
							foreach($todos_catalogo_testes as $item)
							{

						?>
							<div class="form-group col-md-6" style="border-right:Solid 1px #D3D3D3; border-bottom:Solid 1px #D3D3D3;">

								<div class="card">
									<img class="card-img-top" src="../<?php echo  $item['img'];?>" alt="Card image cap" style="width:100px; height:120px">
									<div class="card-body">
										<h5 class="card-title"><b><?php echo $item['nome'];?></b></h5>
										<p class="card-text"><?php echo $item['descricao'];?></p>
										<a href="#" class="btn btn-primary" style="border:1px solid #000; color:red; background-color:#ebf2c4">Compre aqui!</a>
										<!--<a href="<*?php echo base_url('/public/Catalogo_Testes_Precos/'.$item['id'])?>">-->
										
										<a href="#">
										<button type="button"  data-toggle="modal" data-target="#tabelaPrecoModal" class="btn btn-warning" style="border:1px solid #000; color:red; background-color:#ebf2c4">
											Tabela de preços
										</button>
										</a></br>
										<a href="#" class="btn btn-primary" style="border:1px solid #000; color:red; background-color:#ebf2c4; margin:5px 0 0 20px">Baixe os modelos de relatório</a>
									</div>
									<h5 style="color:red"> Atenção! </h5>
									<p>Prazo para liberação das licenças de 2 dias úteis após o processamento do pedido.</p>
								</div>

							</div><!-- form-group col-md-6 -->
						<?php
							}
						
						?>

	
					</div><!-- form-row -->

					<!--***** MODAL *****-->
					<!-- Modal -->
					<form  method="post" action="<?php echo base_url('/public/Usuarios_testes/resgate/') ?>" >
						<div class="modal fade" id="tabelaPrecoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Tabela de preço</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div><!-- modal-header -->

									<div class="modal-body">
										<div class="form-row">
											<div class="form-group col-md-12" style="background-color:#BEEFEB">
												<label for="inputEmail4">Teste</label>
											</div>
										</div><!-- form-row -->

										<div class="form-row">
											<div class="form-group col-md-6" style="background-color:#E5F9F7; border-right:1px solid #FFF; border-botton:2px solid #FFF">
												<label for="inputEmail4">Unitário</label>
											</div>
											<div class="form-group col-md-6" style="background-color:#E5F9F7">
												<label for="inputEmail4">R$ 16,00</label>
											</div>
										</div><!-- form-row -->

										<div class="form-row">
											<div class="form-group col-md-6" style="background-color:#E5F9F7; border-right:2px solid #FFF;">
												<label for="inputEmail4">2-9 Licenças</label>
											</div>
											<div class="form-group col-md-6" style="background-color:#E5F9F7">
												<label for="inputEmail4">R$ 8,00</label>
											</div>
										</div><!-- form-row -->

									</div><!-- modal-body-->

									<div class="modal-footer">
										<button type="button" class="btn btn btn-danger" style="border:1px solid #000">Acessar o site</button>
										<button type="submit" class="btn btn btn-danger" style="border:1px solid #000">solicitar orçamento</button>
										<button type="submit" class="btn btn btn-danger" style="border:1px solid #000" data-dismiss="modal">Fechar</button>
									</div><!-- modal-footer -->
								</div><!-- modal-content -->
							</div><!--modal-dialog-->
						</div><!-- modal fade-->
						</form><!-- fecha o form -->

					<!--***** FECHA MODAL *****-->

				</div><!-- panel-body -->
				
			</form>

			<div class="panel-footer">
				<br>
			</div><!-- panel-footer -->
		</div><!--panel panel-default-->
		
	</div><!-- container-->
</body>
</html>