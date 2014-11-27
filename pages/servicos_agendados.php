<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../css/common.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script src="../js/bootstrap.min.js"></script>

	<script type="text/javascript"></script>

	<style type="text/css">
		#load span:before {
			font-size: 15px;
		}	

		#load button {
			margin-right: 5px;
		}

		#nav-control{
			margin-bottom: 15px;
		}

		#nav-control #today {
			margin-right: 15px;
		}

		#nav-control form label{
			margin-right: 7px;
		}
		
		#nav-control form input#search {
			
		}		

		form .form-group.inline .form-control {
			display: inline-block;
			width: auto;
			vertical-align: middle;
			margin-right: 0;
			margin-left: 0;
			margin-bottom: 0;
		}

	</style>

</head>
<body>
	
	<?php include("header.php"); ?>
	
	<div role="main">
		<?php include("main_tabs.php"); ?>

		<div id="load">		

			<?php include("dialog_servico.php"); ?>

			<div class="container-fluid">
				<div class="row">
					<ol class="breadcrumb">
						<li>Serviços Agendados</li>
					</ol>		
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div id="nav-control">							
							<form class="form-inline">
								<div class="form-group inline">
									<button id="today" type="button" class="btn btn-default">Hoje</button>
								</div>
								
								<div class="form-group inline">
									<label for="search">Filtrar</label>
									<input type="search" class="form-control" name="search" id="search" placeholder="Ex.: bairro, 01/01/2014">
									<button type="submit" class="btn btn-default">
										<span class="glyphicon glyphicon-search	"></span>
									</button>	
								</div>								
							</form>									
						</div>
					</div>	
				</div>

				<div class="row" id="scheduledEvents">
					<div class="col-xs-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Data</th>
										<th>Horário</th>
										<th>Nome</th>
										<th>Endereço</th>
										<th>Bairro</th>
										<th>Telefone</th>
										<th>Status</th>
										<th>Ações</th>	
									</tr>									
								</thead>
								<tbody>
									<tr>
										<td>30/06/2014</td>
										<td>15:00 às 16:00</td>
										<td>Joao Augusto de Freitas</td>
										<td>Rua dos Andradas nº 1650</td>
										<td>Abadia</td>
										<td>034 9219-0615</td>
										<td><span class="text-warning">Aberto</span></td>
										<td>
											<button class="btn btn-success btn-sm" title="Pronto"><span class="glyphicon glyphicon-ok"></span></button>
											<button class="btn btn-danger btn-sm" title="Cancelar"><span class="glyphicon glyphicon-remove"></span></button>
											<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit-event" title="Visualizar">
												<span class="glyphicon glyphicon-zoom-in"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>29/06/2014</td>
										<td>08:00 às 08:45</td>
										<td>Pedro Geraldo de Souza</td>
										<td>Rua Cascavel º 345</td>
										<td>Gameleira</td>
										<td>034 9956-3905</td>
										<td><span class="text-success">Pronto</span></td>
										<td>
											<button class="btn btn-warning btn-sm" title="Reabrir"><span class="glyphicon glyphicon-repeat"></span></button>
											<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit-event" title="Visualizar">
												<span class="glyphicon glyphicon-zoom-in"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>29/06/2014</td>
										<td>08:00 às 08:45</td>
										<td>Pedro Geraldo de Souza</td>
										<td>Rua Dom Pedro I nº 105</td>
										<td>Gameleira</td>
										<td>034 9894-1469</td>
										<td><span class="text-danger">Cancelado</span></td>
										<td>
											<button class="btn btn-warning btn-sm" title="Reabrir"><span class="glyphicon glyphicon-repeat"></span></button>
											<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit-event" title="Visualizar">
												<span class="glyphicon glyphicon-zoom-in"></span>
											</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</body>

</html>