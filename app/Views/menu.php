			<!-- ABRE PERFÍL #ADMINISTRADOR 1 -->	
			<?php
			$dadosUsuario = session('dadosUsuario');
			if($dadosUsuario['tipo_usuario'] == 1)
			{
			?>
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url('/public/dashboard/') ?>">Painel Adm</a>
				</div>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Usuário <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('/public/usuarios/') ?>">Listar</a></li>
							<li><a href="<?php echo base_url('/public/usuarios/save/') ?>">Cadastrar</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						instrumentos <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="<?php echo base_url('/public/usuarios/') ?>">Meus Instrumentos</a></li>
						<li><a href="<?php echo base_url('/public/instrumntos/') ?>">Todos Instrumentos</a></li>
						<li><a href="<?php echo base_url('/public/Catalogo_Testes/') ?>">Catálago</a></li>
						
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Associados <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('/public/Usuario_Meta/') ?>">Cadastrar</a></li>
							<li><a href="<?php echo base_url('/public/Usuario_Meta/') ?>">Buscar</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li>
						<a class="dropdown-toggle"  href="<?php echo base_url('/public/Login/Logout/') ?>">Logout</a>
					</li>
				</ul>
			<?php
			}
			?>
			
			<!-- ABRE PERFÍL #PSICOLOGO 2 -->	
			<?php
			$dadosUsuario = session('dadosUsuario');
			if($dadosUsuario['tipo_usuario'] == 2)
			{
			?>
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url('/public/dashboard/') ?>">Painel Adm</a>
				</div>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Menu Admin Suporte <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Listar</a></li>
							<li><a href="#">Cadastrar</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Usuário <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('/public/usuarios/') ?>">Listar</a></li>
							<li><a href="<?php echo base_url('/public/usuarios/save/') ?>">Cadastrar</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li>
						<a class="dropdown-toggle"  href="<?php echo base_url('/public/Login/Logout/') ?>">Logout</a>
					</li>
				</ul>
			<?php
			}
			?>
			
			<!-- ABRE PERFÍL #DISTRIBUIDOR 3 -->	
			<?php
			$dadosUsuario = session('dadosUsuario');
			if($dadosUsuario['tipo_usuario'] == 3)
			{
			?>
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url('/public/dashboard/') ?>">Painel Adm</a>
				</div>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Menu Distribuidor <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Listar</a></li>
							<li><a href="#">Cadastrar</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li>
						<a class="dropdown-toggle"  href="<?php echo base_url('/public/Login/Logout/') ?>">Logout</a>
					</li>
				</ul>
			<?php
			}
			?>

			<!-- ABRE PERFÍL #EMPRESA 4 -->	
			<?php
			$dadosUsuario = session('dadosUsuario');
			if($dadosUsuario['tipo_usuario'] == 4)
			{
			?>
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url('/public/dashboard/') ?>">Painel Adm</a>
				</div>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Menu Empresa<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Listar</a></li>
							<li><a href="#">Cadastrar</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Associados <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('/public/Usuario_Meta/') ?>">Cadastrar</a></li>
							<li><a href="<?php echo base_url('/public/Usuario_Meta/') ?>">Buscar</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li>
						<a class="dropdown-toggle"  href="<?php echo base_url('/public/Login/Logout/') ?>">Logout</a>
					</li>
				</ul>
			<?php
			}
			?>


			<!-- ABRE PERFÍL #PROFISSIONAL 5 -->	
			<?php
			$dadosUsuario = session('dadosUsuario');
			if($dadosUsuario['tipo_usuario'] == 5)
			{
			?>
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url('/public/dashboard/') ?>">Painel Adm</a>
				</div>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Menu Profissional<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Listar</a></li>
							<li><a href="#">Cadastrar</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Trocar de Perfíl<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo 1?>">Empresa 1</a></li>
							<li><a href="<?php echo 2?>">Empresa 2</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li>
						<a class="dropdown-toggle"  href="<?php echo base_url('/public/Login/Logout/') ?>">Logout</a>
					</li>
				</ul>
			<?php
			}
			?>

			<!-- ABRE PERFÍL #EXAMINANDO 6 -->	
			<?php
			$dadosUsuario = session('dadosUsuario');
			if($dadosUsuario['tipo_usuario'] == 6)
			{
			?>
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url('/public/dashboard/') ?>">Painel Adm</a>
				</div>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Menu Examinando <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('/public/usuarios/') ?>">Listar</a></li>
							<li><a href="<?php echo base_url('/public/usuarios/save/') ?>">Cadastrar</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li>
						<a class="dropdown-toggle"  href="<?php echo base_url('/public/Login/Logout/') ?>">Logout</a>
					</li>
				</ul>
			<?php
			}
			?>



