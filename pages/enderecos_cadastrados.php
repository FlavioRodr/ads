<!DOCTYPE html>
<html>
<head>
	<title>Endereços cadastrados</title>
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
						<li>Endereços cadastrados</li>
					</ol>		
				</div>

				<div class="row content">				

					<div class="col-xs-12">
						<p class="text-left">
							<a id="add-address" data-toggle="modal" data-target="#modal-edit" class="btn btn-default btn-sm" href="#">Adicionar endereço</a>
						</p>
					</div>						

					<div class="col-xs-12 col-md-6">
						<div class="panel panel-default address">
							<div class="panel-heading vcenter">
								<span>Eduardo Frederico</span>		
								<button type="button" class="delete pull-right btn btn-default btn-sm" 
									data-toggle="modal" data-target="#modal-delete">
									Excluir
								</button>
								
								<button type="button" class="edit pull-right btn btn-default btn-sm" 
									data-toggle="modal" data-target="#modal-edit">
									Editar
								</button>
							</div>

							<div class="panel-body">
								<p>Av. José Vallim de Melo nº 116</p>
								<p>Apartamento 302 Bloco b</p>
								<p>Bairro Gameleira</p>
							</div>
						</div>						
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="panel panel-default address">
							<div class="panel-heading vcenter">
								<span>Eduardo Frederico</span>		
								<button type="button" class="delete pull-right btn btn-default btn-sm" 
									data-toggle="modal" data-target="#modal-delete">
									Excluir
								</button>
								
								<button type="button" class="edit pull-right btn btn-default btn-sm" 
									data-toggle="modal" data-target="#modal-edit">
									Editar
								</button>
							</div>

							<div class="panel-body">
								<p>Av. José Vallim de Melo nº 116</p>
								<p>Apartamento 302 Bloco b</p>
								<p>Bairro Gameleira</p>
							</div>
						</div>						
					</div>					
				</div>
			</div>

			<!-- Edit Modal Window -->
			<div class="modal" id="modal-edit" tab-index="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times</button>
							<h4 id="add-address-title" class="modal-title">Adicionar Endereço</h4>
							<h4 id="edit-address-title" class="modal-title">Editar Endereço</h4>
						</div>
						<div class="modal-body">
							<form class="form-horizontal" role="form">
								<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
										<label class="control-label" for="name">Nome</label> 		
										<input id="email" class="form-control" name="name" type="text" required>
									</div>
									<div class="form-group">
										<label class="control-label" for="address">Endereço</label> 		
										<input id="address" class="form-control" name="address" type="text" required>
									</div>
									<div class="form-group">
										<label class="control-label" for="complement">Complemento</label> 		
										<input id="complement" class="form-control" name="complement" type="text">
									</div>
									<div class="form-group">
										<label class="control-label" for="address">Bairro</label> 		
										<input id="neighborhood" class="form-control" name="address" type="text" required>
									</div>										
									</div>									
									<div class="col-xs-12 col-sm-5">
										<div class="form-group">
											<label class="control-label" for="phone1">Telefone 1</label> 		
											<input id="phone1" class="form-control" name="phone1" type="text" required>
										</div>
									</div>
									<div class="col-xs-12 col-sm-5 col-sm-offset-1">
										<div class="form-group">
											<label class="control-label" for="phone2">Telefone 2</label> 		
											<input id="phone2" class="form-control" name="phone2 " type="text">
										</div>
									</div>
								</div>
									
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default">Salvar</button>
							<button type="button" class="btn btn-default" 
								data-dismiss="modal" data-target="#modal-edit">
								Cancelar
							</button>
						</div>
					</div>
				</div>	
			</div>

			<!-- Delete Modal Window -->
			<div class="modal" role="dialog" tab-index="-1" id="modal-delete">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times</button>
							<h4 class="modal-title">Excluir Endereço</h4>
						</div>
						<div class="modal-body">
							Tem certeza que deseja excluir esse endereço?
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<script type="text/javascript">
		
		$("#add-address").click(function(){
			$("#add-address-title").show();
			$("#edit-address-title").hide();
		});

		$("#load").find(".panel").find(".edit").click(function(){
			$("#add-address-title").hide();
			$("#edit-address-title").show();
		});
		
	</script>

</body>
</html>