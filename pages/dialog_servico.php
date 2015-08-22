<div class="modal" role="dialog" tab-index="-1" id="modal-edit-event">
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
							<button type="button" class="btn btn-success">Salvar</button>
							<button type="button" class="btn btn-danger" 
							data-dismiss="modal">
							Cancelar
						</button>
					</div>
				</div>				
				</div>	
			</div>