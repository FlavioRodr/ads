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
		div.table-responsive {
			margin-top: 15px;
		}

		table.inner-table {
			border-top: 0;
			margin-bottom: 0;
		}

		table.inner-table tbody tr:nth-child(2) td{
			height: 20px;
		}

		table.table>tbody>tr>td.data {
			padding: 0;
			height: 74px;
			position: relative;
		}

		table.table>tbody>tr>td.data table {
			margin: 0;
			position: absolute;
		}

		table.table>tbody>tr>td.data table>tbody>tr>td {
			border: none;
		}
		
		table.table>tbody>tr>td.data table td {
			text-align: center;
		}

		.table-responsive>.table.table>thead>tr>th {
			min-width: 	110px;
		}

		.table-responsive>.table.table>thead>tr>th:nth-child(1) {
			min-width: 60px;
		}

		#nav-control button#today, #nav-control button#next {
			margin-right: 7px;
		}

		#nav-control button#add-small>span {
			font-weight: bold;
			color: #999999
		}

		#modal-date {
			width: 100px;
			margin-right: 7px;
		}
		
		#modal-edit .panel .address p:nth-child(1) span{
			margin-left: 15px;
		}

		#modal-edit .panel .address p span{
			margin-left: 26px;
		}

		#modal-edit .modal-body .clear-fix {
			margin-bottom: 7px;
		}	

		form .form-group.inline, form .form-group.inline .form-control {
			display: inline-block; */
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
			<div class="modal" role="dialog" tab-index="-1" id="modal-edit">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times</button>		
							<h4 class="modal-title">Agendar Serviço</h4>					
						</div>
						<div class="modal-body">
							<div class="container-fluid">
								<form class="form-horizontal" role="form">
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group ">
												<input id="modal-date" type="text" class="form-control" placeholder="01/01/2000">
											</div>

											<div class="form-group">
												<div class="form-group inline">
												<select class="form-control" >											
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>											
												</select>
											</div>
											<span>:</span>
											<div class="form-group inline">
												<select class="form-control">
													<option value="00">00</option>
													<option value="15">15</option>
													<option value="30">30</option>
													<option value="45">45</option>
												</select>
											</div>
											<div class="form-group inline">
												<span>&nbspAté&nbsp</span>
											</div>											
											<div class="clear-fix visible-xs"></div>
											<div class="form-group inline">
												<select class="form-control" disabled>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
												</select>
											</div>	
											<span>:</span>
											<div class="form-group inline">										
												<select class="form-control" disabled>
													<option value="00">00</option>
													<option value="15">15</option>
													<option value="30">30</option>
													<option value="45">45</option>
												</select>
											</div>
											</div>											
										</div>									
									</div>								

									<div class="row">
										<div class="panel panel-default panel-info">
											<div class="panel-heading">
												<h4 class="panel-title">Endereço</h4>
											</div>
											<div class="panel-body">
												<div class="address">
													<p><input type="radio"><span>Eduardo Frederico</span></p>												
													<p>Av. José Vallim de Melo nº 116</p>
													<p>Apartamento 302 Bloco b</p>
													<p>Vallim de Melo</p>
												</div>	
												<hr>
												<div class="address">
													<p><input type="radio"><span>Eduardo Frederico</span></p>												
													<p>Av. José Vallim de Melo nº 116</p>
													<p>Apartamento 302 Bloco b</p>
													<p>Vallim de Melo</p>
												</div>											
											</div>
										</div>
									</div>

									<div class="row">	
										<div class="col-xs-12">
											<div class="form-group">
												<label class="control-label" for="modal-service-type">Serviço&nbsp</label> 		
												<select id="modal-service-type" class="form-control" name="modal-service-type" type="text" required>
													<option>Reparo de computador</option>
													<option>Busca de equipamento</option>
												</select>
											</div>
											<div class="form-group">
												<label class="control-label" for="modal-other">Outros&nbsp</label>
												<input type="text" id="modal-other" class="form-control" name="modal-other">
											</div>	
											<div class="form-group">
												<label class="control-label" for="modal-description">Descrição</label>
												<textarea type="text" id="modal-description" class="form-control" name="modal-description"></textarea>
											</div>	
										</div>							
									</div>	
								</form>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default">Salvar</button>
							<button type="button" class="btn btn-default" 
							data-dismiss="modal">
							Cancelar
						</button>
					</div>
				</div>				
			</div>	
		</div>

		<div class="container-fluid">
			<div class="row">
				<ol class="breadcrumb">
					<li>Marcar Horários</li>
					<li>Agendar Visitas</li>
				</ol>		
			</div>	

			<div class="row">
				<div id="col-xs-12">
					<div class="container-fluid">
						<div id="nav-control">
							<button id="today" type="button" class="btn btn-default">Hoje</button>
							<button id="prev" type="button" class="btn btn-default"> < </button>
							<button id="next" type="button" class="btn btn-default"> > </button>	
							<span>Nov 03 - 08, 2014</span>
							<button id="add-big" data-toggle="modal" data-target="#modal-edit"  
							type="button" class="btn btn-default pull-right hidden-xs">
							Agendar
						</button>
						<button id="add-small" data-toggle="modal" data-target="#modal-edit"  
						type="button" class="btn btn-default pull-right visible-xs">
						<span>+</span>
					</button>
				</div>							
			</div>											
		</div>
	</div>	

	<div class="row">
		<div class="container-fluid">
			<div class="table-responsive hidden-xs">
				<table id="schedule" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th></th>
							<th>Se 03/11</th>
							<th>Te 04/11</th>
							<th>Qa 05/11</th>
							<th>Qi 06/11</th>
							<th>Sx 07/11</th>
							<th>Sab 08/11</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><table class="inner-table"><tr><td>08:00</td></tr><tr><td></td></tr></table>							
							<td class="data"><table class="table"><tr class="info"><td>08:00 às 09:00</td></tr></table></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td><table class="inner-table"><tr><td>09:00</td></tr><tr><td></td></tr></table>							
							<td class="data">
								<table class="table" style="margin-top:55.5px;">
									<tr class="info"><td>09:45 às 10:15</td></tr>
								</table></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td><table class="inner-table"><tr><td>10:00</td></tr><tr><td></td></tr></table>							
								<td class="data"></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td><table class="inner-table"><tr><td>11:00</td></tr><tr><td></td></tr></table>							
								<td class="data"></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>		
							<tr>
								<td><table class="inner-table"><tr><td>12:00</td></tr><tr><td></td></tr></table>							
								<td class="data"></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>	
							<tr>
								<td><table class="inner-table"><tr><td>13:00</td></tr><tr><td></td></tr></table>							
								<td class="data"></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>	
							<tr>
								<td><table class="inner-table"><tr><td>14:00</td></tr><tr><td></td></tr></table>							
								<td class="data"></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>	
							<tr>
								<td><table class="inner-table"><tr><td>15:00</td></tr><tr><td></td></tr></table>							
								<td class="data"></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>	
							<tr>
								<td><table class="inner-table"><tr><td>16:00</td></tr><tr><td></td></tr></table>							
								<td class="data"></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>	
							<tr>
								<td><table class="inner-table"><tr><td>17:00</td></tr><tr><td></td></tr></table>							
								<td class="data"></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>	
							<tr>
								<td><table class="inner-table"><tr><td>18:00</td></tr><tr><td></td></tr></table>							
								<td class="data"></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>					
						</tbody>
					</table>
				</div>
			</div>										
		</div>			

	</div>
</div>
</div>

<script type="text/javascript">

</script>

</body>

</html>