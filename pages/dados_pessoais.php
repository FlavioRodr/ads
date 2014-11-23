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
		/*div { border: black solid 1px; }*/
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
						<li>Minha Conta</li>
						<li>Dados Pessoais</li>
					</ol>		
				</div>

				<div class="row content">
					<form class="form-horizontal" role="form">
						<div class="container-fluid">
						<div class="clearfix">
							<div class="col-sm-5 col-lg-3">
							<div class="form-group">
								<label class="control-label" for="name">Nome</label> 		
								<input id="email" class="form-control" name="name" type="text" required>
							</div>	
							<div class="form-group">
								<label class="control-label" for="surname">Sobrenome</label>	 		
								<input id="surname" class="form-control" name="surname" type="text" required>
							</div>	
							<div class="form-group">
								<label class="control-label" for="cpf">CPF</label>						
								<input id="cpf" name="cpf" class="form-control" type="text">

							</div>

							<div class="form-group">
								<label class="control-label" for="cpf">Email</label>
								<input id="email" name="email" class="form-control" type="email" >

							</div>
							<div class="form-group">
								<label class="control-label" for="phone">Telefone</label>
								<input id="telefone" name="phone" class="form-control" type="text">							 					
							</div>
							</div>

							<div class="col-sm-5 col-sm-offset-1 col-lg-3">
							<div class="form-group">
								<label class="control-label" for="passwordFirst">Senha</label>
								<input id="passwordFirst" name="passwordFirst" class="form-control" type="password"> 					
							</div>

							<div class="form-group">
								<label class="control-label" for="passwordSecond">Repita a senha</label>
								<input id="passwordSecond" name="passwordSecond" class="form-control" type="password">
							</div>
							</div>

							</div>
							<div class="row text-center">
								<input type="submit" class="btn btn-default" value="Salvar">
							</div>
						</div>
					</form>					
				</div>

			</div>
		</div>
	</div>

</body>
</html>