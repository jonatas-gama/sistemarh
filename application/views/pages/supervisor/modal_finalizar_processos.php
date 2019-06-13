  <!--Processos Finalizados-->
  <div class="container-fluid">
  	<div class="modal fade" id="finalizaProcesso" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge"
  		aria-hidden="true">
  		<div class="modal-dialog modal-lg">
  			<div class="modal-content">
  				<div class="modal-header">
  					<img src="<?=base_url('vendor/dist/img/rs.png');?>" style="width: 15rem" class="rounded"
  						alt="imagem-responsiva">
  					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  						<span aria-hidden="true">&times;</span>
  					</button>
  				</div>
  				<div class="modal-body">
  					<h4>Finalizar Processo:</h4>
  					<br>
  					<form action="<?=base_url('supervisor/atualizarcandidato');?>" method="post">
  						<div class="form-row">
  							<div class="form-group col-md-6">
  								<label for="nome">Nome</label>
  								<input type="text" class="form-control" value="" id="inputNome" name="nome" placeholder="Nome">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="sobrenome">Sobrenome</label>
  								<input type="text" class="form-control" id="inputSobre" name="sobrenome" placeholder="Sobrenome">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="email">Email</label>
  								<input type="email" class="form-control" value="" id="inputEmail1" name="email" placeholder="Email">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="inputCurriculo">Canal de Seleção</label>
  								<select class="form-control" id="inputCurriculo" name="curriculo">
  									<?php foreach($curriculo as $cv){; ?>
  									<option value="<?=$cv->id_curriculo;?>"><?=$cv->canal;?></option>
  									<?php };?>
  								</select>
  							</div>
  							<div class="form-group col-md-6">
  								<label for="inputNumero">Telefone</label>
  								<input type="text" class="form-control" value="" id="inputNum" name="telefone"
  									data-mask="(00) 00000-0000">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="inputName">Cargo</label>
  								<select class="form-control" id="inputCargo" name="cargo">
  									<?php foreach($cargos as $cg){; ?>
  									<option value="<?=$cg->id_cargo;?>"><?=$cg->cargo;?></option>
  									<?php }; ?>
  								</select>
  							</div>
							  
  							<div class="form-group col-md-2">
  								<?php foreach($status as $st){; ?>
  								<div class="custom-control custom-radio">
  									<input type="radio" name="status" class="custom-control-input" onclick="clicou()"
  										id="<?=$st->id_status;?>" value="<?=$st->id_status;?>">
  									<label class="custom-control-label" for="<?=$st->id_status;?>"><?=$st->status;?></label>
  								</div>
  								<?php };?>
  							</div>
  							<div class="form-group col-md-5">
  								<label for="inputName">Entrevistador</label>
  								<input class="form-control" id="disabledInpu1" type="text"
  									value="<?=$this->session->userdata('nome');?>" disabled></input>
  							</div>
  							<div class="form-group col-md-5">
  								<label for="inputName">Motivo da Reprovação/Blacklist</label>
  								<input class="form-control" id="motivo" name="motivo" onclick="clicou()" type="text"
  									placeholder="Selecione..." disabled>
  							</div>
  							<div class="form-group col-md-6">
  								<label for="inputData" class="col-4 col-form-label">Data</label>
  								<input class="form-control" type="text" name="data" id="inputData" data-mask="00/00/0000">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="inputHora" class="col-4 col-form-label">Hora</label>
  								<input class="form-control" type="text" name="hora" id="inputHora" data-mask="00:00">
  							</div>							
  						</div>
  						<div class="form-group">
  							<label for="exampleFormControlTextarea1">Observações:</label>
  							<textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
  						</div>
						<input type="hidden" id="id_funcionario" name="id_funcionario">
  						<button type="submit" class="btn btn-primary">Finalizar</button>
  					</form>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>