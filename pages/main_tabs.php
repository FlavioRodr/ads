<div id="main-tabs" class="hidden-xs">
	<div class="row">
		<ul class="nav nav-pills nav-left">
		<li class="active">
			<div class="dropdown">
				<button id="dd-tab1" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				<span class="glyphicon glyphicon-user"></span>
				Minha Conta <span class="caret"></span></button>

				<ul class="dropdown-menu" role="menu">
					<li role="presentation">
						<a href="dados_pessoais.php" role="menu-item" tabindex="-1">						
						Dados Pessoais
						</a>
						<a href="enderecos_cadastrados.php" role="menu-item">
						Endereços cadastrados</a>
						<a href="#" role="menu-item">Sair</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="">
			<div class="dropdown">
				<button id="dd-tab2" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				<span class="glyphicon glyphicon-time"></span>
				Marcar Horários <span class="caret"></span></button>

				<ul class="dropdown-menu" role="menu">
					<li role="presentation">
						<a href="agendar_visitas.php" role="menu-item" tabindex="-1">Agendar Visitas</a>
						<a href="carga_horaria.php" role="menu-item">Carga Horária</a>
					</li>
				</ul>
			</div>
		<li>
			<button type="button" class="btn btn-primary dropdown-toggle" onclick="window.location.href='servicos_agendados.php'">
			<span class="glyphicon glyphicon-wrench"></span>
			<span>Serviços Agendados</span>			
			</button>
		</li>
	</ul>
	</div>
</div>