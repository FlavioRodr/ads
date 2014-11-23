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

	</style>

</head>
<body>
	
	<?php include("header.php"); ?>
	
	<div role="main">
		<?php include("main_tabs.php"); ?>

		<div id="load">		

			<div class="container-fluid">
				<div class="row">
					<ol class="breadcrumb">
						<li>Serviços Agendados</li>
					</ol>		
				</div>

				<div class="row">
					<button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span></button>
					<button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span></button>
					<button class="btn btn-info btn-sm"><span class="glyphicon glyphicon-zoom-in"></span></button>
				</div>
			</div>
		</div>
	</div>

</body>

</html>