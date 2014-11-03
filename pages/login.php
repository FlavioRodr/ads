<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- Optional: Include the jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="../js/bootstrap.min.js"></script>

<script type="text/javascript">

var setFocusOn = function($elem) {
	document.getElementById($elem).focus();
};

</script>

<style type="text/css">
	#logo {
		width: 100%;
		min-width: 32px;
		max-width: 132px;
	}	
</style>

</head>
<body>
<header>
	<div class="container">
	 	<div class="row">	
	 		 <div class="col-xs-2 col-xs-offset-5">	 		
	 		 	<img id="logo" class="center-block" src="../images/logo.svg"> 
	 		 </div>	
	 	</div>

	 	<div class="row">
	 		<h3 class="text-center hidden-xs">Agenda de Serviços</h3>
	 		<h4 class="text-center visible-xs-block">Agenda de Serviços</h4>	
	 	</div>

	 	<div class="row">	
		 	<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
		 		<p class="text-center">Faça o <a href="javascript:;" onclick="setFocusOn('email');">login</a> ou <a href="javascript:;" onclick="setFocusOn('name');">cadastra-se</a>.</p>
		 	</div>	 		
	 	</div>
	</div>
</header>

<div role="main">
	<div class="container">
		<div class="row">
	 		<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
	 			<form class="form-horizontal" role="form">
	 				<div class="form-group">
	 					<label class="control-label" for="email">Email</label>	 		
	 					<input id="email" class="form-control" name="email" type="email" required>
	 							
	 				</div>	

					<div class="form-group">
						<label class="control-label" for="password">Senha</label>	
						<input id="password" class="form-control" name="password" type="password" required>					
					</div>	
					<div class="row">
						<div class="col-xs-4 col-xs-offset-4">
							<div class="form-group">
								<button type="submit" class="btn btn-success btn-block">Entrar</button> 
							</div>						
						</div>	
					</div>									
	 			</form>
	 		</div>
	 	</div>	
	</div>	
	 
	<div class="container">
		<div class="row">
		 	<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
		 		<form class="form-horizontal" role="form">
	 											
					<div class="form-group">
			 			<label class="control-label" for="name">Nome</label>
			 			<input id="name" name="name" class="form-control" type="text" maxlength="255"> 					
			 		</div>

		 			<div class="form-group">
		 				<label class="control-label" for="surname">Sobrenome</label>
		 				<input id="surname" name="surname" class="form-control" type="text" maxlength="255"> 					
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

					<div class="form-group">
						<label class="control-label" for="passwordFirst">Senha</label>
						<input id="passwordFirst" name="passwordFirst" class="form-control" type="password"> 					
					</div>

					<div class="form-group">
						<label class="control-label" for="passwordSecond">Repita a senha</label>
						<input id="passwordSecond" name="passwordSecond" class="form-control" type="password">
					</div>

					<div class="row">
						<div class="col-xs-4 col-xs-offset-4">
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Cadastrar</button> 
							</div>						
						</div>	
					</div>
	 			
				</form>	 	
		 	</div>
	 	</div>		
	</div>

</div>		

</body>
</html>