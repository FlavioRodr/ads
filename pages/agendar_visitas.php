<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/flatly/bootstrap.min.css">

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
			cursor: pointer;
			position: relative;
			z-index: 10;
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

		.modal-dialog {
			z-index: 20;
		}

		.modal-backdrop {
			z-index: 15;
		}

		
		#mobile-events {
			margin-top: 15px;
		}

		#mobile-events>.row>div.col-xs-1 h4 {
			margin-bottom: 0;
		}

		#mobile-events>.row>div.col-xs-1 h5 {
			margin-top: 0;
		}

		#mobile-events div.event{
			position: relative;
			float: left;
			margin: 0 10px 10px 0;
			cursor: pointer;
		}

		#mobile-events div.event>span {
			padding: 16px 21px 16px 21px;
			display: inline-block;
		}

		#mobile-events hr { margin-top: 10px; }

	</style>

</head>
<body>
	
	<?php include("header.php"); ?>
	
	<div role="main">
	<div class="container">
		<?php include("main_tabs.php"); ?>

		<div id="load">	
			<?php include("dialog_servico.php"); ?>

			<div class="row">
				<ol class="breadcrumb">
					<li>Marcar Horários</li>
					<li>Agendar Visitas</li>
				</ol>		
			</div>	

			<div class="row">
				<div class="col-xs-12">
						<div id="nav-control">
							<button id="today" type="button" class="btn btn-default">Hoje</button>
							<button id="prev" type="button" class="btn btn-default"> < </button>
							<button id="next" type="button" class="btn btn-default"> > </button>	
							<span>Nov 03 - 08, 2014</span>
							<button id="add-big" data-toggle="modal" data-target="#modal-edit-event"  
								type="button" class="btn btn-default pull-right hidden-xs">
								Agendar
							</button>
							<button id="add-small" data-toggle="modal" data-target="#modal-edit-event"  
								type="button" class="btn btn-default pull-right visible-xs">
								<span>+</span>
							</button>
						</div>										
				</div>
			</div>	

			<div class="row hidden-xs">
				<div class="col-xs-12">
					<div class="table-responsive">
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
									<td class="data"><table class="table"><tr class="info"><td data-toggle="modal" data-target="#modal-edit-event">08:00 às 09:00</td></tr></table></td>
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
										<tr class="info"><td data-toggle="modal" data-target="#modal-edit-event">09:45 às 10:15</td></tr>
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

			<div class="row visible-xs-block">
				<div id="mobile-events" class="container-fluid">
					<div class="row">
						<div class="col-xs-1">
							<h4>03</h4>
							<h5>Seg</h5>
						</div>
						<div class="col-xs-11">
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>08:00 às 09:00</span>
							</div>
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>10:00 às 10:45</span>
							</div>
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>11:00 às 11:45</span>
							</div>
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>12:00 às 12:45</span>
							</div>
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>14:00 às 15:00</span>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-1">
							<h4>04</h4>
							<h5>Seg</h5>
						</div>
						<div class="col-xs-11">
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>08:00 às 09:00</span>
							</div>
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>10:00 às 10:45</span>
							</div>
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>11:00 às 11:45</span>
							</div>
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>12:00 às 12:45</span>
							</div>
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>14:00 às 15:00</span>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-1">
							<h4>05</h4>
							<h5>Seg</h5>
						</div>
						<div class="col-xs-11">
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>08:00 às 09:00</span>
							</div>
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>10:00 às 10:45</span>
							</div>
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>11:00 às 11:45</span>
							</div>
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>12:00 às 12:45</span>
							</div>
							<div class="event bg-info" data-toggle="modal" data-target="#modal-edit-event">
								<span>14:00 às 15:00</span>
							</div>
						</div>
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