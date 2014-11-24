<header>
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">			
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
				<span class="sr-only">Toogle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>					
			</button>
			<a href="" class="navbar-brand">
				<h5 class="visible-xs"><strong>AGENDA DE SERVIÇOS</strong></h5>
				<strong class="hidden-xs">AGENDA DE SERVIÇOS</strong>
			</a>
		</div>
		<!-- User picture -->
			<div id="userinfo" class="pull-right hidden-xs">
				<a id="username" href="#">
					<span class="glyphicon glyphicon-user"></span>
					<span id="username">Eduardo</span>
				</a>				
				<a id="log-out" href="#">
					<span class="glyphicon glyphicon-log-out"></span>
					<span>Sair</span>
				</a>	
			</div>	

			<div class="collapse navbar-collapse" id="nav-collapse">
				<ul class="nav navbar-nav visible-xs-block">
					<li class="dropdown">
						<a id="dd-nav1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			                Minha Conta
			                <span class="caret"></span>
			            </a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dd-nav1">
							<li role="presentation">
								<a class="menu-item active" href="dados_pessoais.php">Dados Pessoais</a>
							</li>
							<li role="presentation">
								<a class="menu-item" href="enderecos_cadastrados.php">Endereços Cadastrados</a>
							</li>
							<li role="presentation">
								<a class="menu-item" href="">Sair</a>
							</li>
						</ul>						
					</li>

					<li class="dropdown">
						<a href="" id="dd-nav-2" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Marcar Horário <span class="caret"></span></a>

						<ul class="dropdown-menu" role="menu" aria-labelledby="dd-nav2">							
							<li role="presentation">
								<a class="menu-item" href="agendar_visitas.php">Agendar Visitas</a>
							</li>
							<li class="presentation">
								<a class="menu-item" href="carga_horaria.php">Carga Horária</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="servicos_agendados.php">Serviços Agendados</a>
					</li>								
				</ul>
			</div>
	</nav>
</header>