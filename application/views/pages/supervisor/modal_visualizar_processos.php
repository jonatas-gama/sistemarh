  <!--Processos Finalizados-->
  <div class="container-fluid">
  	<div class="modal fade" id="visualizarProcessos" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge"
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
  					<h4>Processo Realizado:</h4>
  					<br>
  					<form action="http://10.10.1.56/sistema/auxiliar/cadastrarcandidato" method="post">
  						<div class="form-row">
  							<div class="form-group col-md-6">
  								<label for="nome">Nome</label>
  								<input type="text" class="form-control" value="" id="nome" name="nome"
  									placeholder="Nome" disabled="">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="sobrenome">Sobrenome</label>
  								<input type="text" class="form-control" id="sobrenome" name="sobrenome"
  									placeholder="Sobrenome" disabled="">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="email">Email</label>
  								<input type="email" class="form-control" value="" id="email" name="email"
  									placeholder="Email" disabled="">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="inputCurriculo">Canal de Seleção</label>
  								<select class="form-control" id="inputCurriculo" name="curriculo" disabled>
  									<!--recebe a variável $curriculo do Controller e para cada resultado cria um option-->
  									<?php foreach($curriculo as $cv){; ?>
  									<option value="<?=$cv->id_curriculo;?>"><?=$cv->canal;?></option>
  									<?php }; ?>
  								</select>
  							</div>
  							<div class="form-group col-md-6">
  								<label for="inputNumero">Telefone</label>
  								<input type="text" class="form-control" id="inputNum" name="telefone"
  									placeholder="(DDD) + Número" disabled="">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="inputName">Cargo</label>
  								<select class="form-control" id="inputCargo" name="cargo" disabled>
  									<!--recebe a variável $cargos do Controller e para cada resultado cria um option-->
  									<?php foreach($cargos as $cg){; ?>
  									<option value="<?=$cg->id_cargo;?>"><?=$cg->cargo;?></option>
  									<?php }; ?>
  								</select>

  							</div>
  							<div class="form-group col-md-2">
  								<?php foreach($status as $st){;?>
  								<div class="custom-control custom-radio">
  									<input type="radio" name="status" class="custom-control-input" onclick="clicou()"
  										id="<?=$st->id_status;?>" disabled>
  									<label class="custom-control-label"
  										for="<?=$st->id_status;?>"><?=$st->status;?></label>
  								</div>
  								<?php };?>
  							</div>
  							<div class="form-group col-md-5">
  								<label for="inputName">Entrevistador</label>
  								<input class="form-control" id="disabledInput1" type="text" placeholder="Selecione..."
  									disabled>
  							</div>
  							<div class="form-group col-md-5">
  								<label for="inputName">Motivo da Reprovação</label>
  								<input class="form-control" id="disabledInput" onclick="clicou()" type="text"
  									placeholder="Selecione..." disabled>
  							</div>
  							<div class="form-group col-md-7">
  								<label for="example-datetime-local-input" class="col-4 col-form-label">Data</label>
  								<input class="form-control" type="text" name="data"
  									id="inputData" disabled="">
  							</div>
  						</div>
  						<div class="form-group">
  							<label for="exampleFormControlTextarea1">Observações:</label>
  							<textarea class="form-control" id="observacao" name="observacao" rows="3"
  								disabled=""></textarea>
  						</div>
  						<button type="submit" class="btn btn-primary">Finalizar</button>
  					</form>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
