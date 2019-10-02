<div class="container mt-2 border-2">
<div class="card">
	<h3 class="card-header text-white bg-info">
	Funcionários
	</h3>
	<div class="card-body">
	 <!--tabela-->
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Nome:</th>
            <th scope="col">Sobrenome:</th>
			<th scope="col">Telefone:</th>
			<th scope="col">Data do Processo:</th>
			<th scope="col">Status:</th>
            <th scope="col">Opções:</th>
          </tr>
        </thead>
		<?php foreach($pessoas as $pessoa){?>
        <tbody>
          <tr>
            <td><?=$pessoa->nome;?></td>
            <td><?=$pessoa->sobrenome;?></td>
			<td><?=$pessoa->telefone;?></td>
            <td><?=$pessoa->dt_processo;?></td>
			<td><?=$pessoa->status;?></td>
            <td align="center">
              <button type="button" class="btn btn-success btn-sm" onclick="buscarFuncionarioID('<?=$pessoa->id_funcionario;?>')" data-toggle="modal"
                data-target="#finalizaProcesso">Visualizar</button>
				
			<?php if(!file_exists('./uploads/'.$pessoa->id_funcionario.'.pdf')){ ; ?>
			<form class="btn">
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" onclick="buscarFuncionarioID('<?=$pessoa->id_funcionario;?>')"
                data-target="#visualizaCandidatoCV"><i class="fas fa-upload"></i> Enviar CV</button>	
			</form>
			<?php }else{ ;?>
			<form method="post" class="btn" action="<?=base_url('supervisor/baixarcurriculo');?>">
			<input type="hidden" name="id_funcionario_download" value="<?=$pessoa->id_funcionario;?>">	
              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-download"></i> Baixar CV</button>
			</form>  
			<?php }; ?>				
            </td>
          </tr>
        </tbody>
		<?php }; ?>
      </table>
	  <!--tabela-->
	</div>	
</div>
</div>

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
  								<input type="text" class="form-control" id="finaliza_nome" name="nome" placeholder="Nome">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="sobrenome">Sobrenome</label>
  								<input type="text" class="form-control" id="finaliza_sobrenome" name="sobrenome" placeholder="Sobrenome">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="email">Email</label>
  								<input type="email" class="form-control" id="finaliza_email" name="email" placeholder="Email">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="inputCurriculo">Canal de Seleção</label>
  								<select class="form-control" id="finaliza_curriculo" name="curriculo">
  									<?php foreach($curriculo as $cv){; ?>
  									<option value="<?=$cv->id_curriculo;?>"><?=$cv->canal;?></option>
  									<?php };?>
  								</select>
  							</div>
  							<div class="form-group col-md-6">
  								<label for="inputNumero">Telefone</label>
  								<input type="text" class="form-control" id="finaliza_num" name="telefone"
  									data-mask="(00) 00000-0000">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="inputName">Cargo</label>
  								<select class="form-control" id="finaliza_cargo" name="cargo">
  									<?php foreach($cargos as $cg){; ?>
  									<option value="<?=$cg->id_cargo;?>"><?=$cg->cargo;?></option>
  									<?php }; ?>
  								</select>
  							</div>
							  
  							<div class="form-group col-md-2">
  								<?php foreach($status as $st){; ?>
  								<div class="custom-control custom-radio">
  									<input type="radio" name="status" class="custom-control-input" onclick="clicou()"
  										id="<?=$st->id_status."_agendado";?>" value="<?=$st->id_status;?>">
  									<label class="custom-control-label" for="<?=$st->id_status."_agendado";?>"><?=$st->status;?></label>
  								</div>
  								<?php };?>
  							</div>
  							<div class="form-group col-md-5">
  								<label for="inputName">Entrevistador</label>
  								<input class="form-control" id="finaliza_entrevistador" type="text"
  									value="<?=$this->session->userdata('nome');?>" disabled></input>
  							</div>
  							<div class="form-group col-md-5">
  								<label for="inputName">Motivo da Reprovação/Blacklist</label>
  								<input class="form-control" id="finaliza_motivo" name="motivo" onclick="clicou()" type="text"
  									placeholder="Selecione..." disabled>
  							</div>
  							<div class="form-group col-md-6">
  								<label for="inputData" class="col-4 col-form-label">Data</label>
  								<input class="form-control" type="text" name="data" id="finaliza_data" data-mask="00/00/0000">
  							</div>
  							<div class="form-group col-md-6">
  								<label for="inputHora" class="col-4 col-form-label">Hora</label>
  								<input class="form-control" type="text" name="hora" id="finaliza_hora" data-mask="00:00">
  							</div>							
  						</div>
  						<div class="form-group">
  							<label for="exampleFormControlTextarea1">Observações:</label>
  							<textarea class="form-control" id="finaliza_observacao" name="observacao" rows="3"></textarea>
  						</div>
						<input type="hidden" id="finaliza_id_funcionario" name="id_funcionario">
  						<button type="submit" class="btn btn-primary">Finalizar</button>
  					</form>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
<?php
	//require 'modal_finalizar_processos.php';
	require 'modal_cadastra_candidato.php';
	require 'modal_visualizar_processos.php';
	require 'modal_adiciona_usuario.php';
	require 'modal_informacoes_candidato.php';
?>	  