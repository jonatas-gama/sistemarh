      <!--Modal de Cadatro de Candidatos-->
      <div class="container-fluid">
        <div class="modal fade" id="largeShoes1" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <img src="<?=base_url('vendor/dist/img/rs.png');?>" style="width: 15rem" class="rounded" alt="imagem-responsiva">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h4>Cadastrar Candidatos:</h4>
                <br>
                <form action="<?=base_url('gerente/cadastrarcandidato');?>" method="post">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputtext4">Nome</label>
                      <input type="text" class="form-control" id="inputEmail4" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputtext4">Sobrenome</label>
                      <input type="text" class="form-control" id="inputEmail4" name="sobrenome" placeholder="Sobrenome">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                    </div>
						<div class="form-group col-md-6">
							<label for="inputCurriculo">Canal de Seleção</label>
							<select class="form-control" id="inputCurriculo" name="curriculo">
							<?php foreach($curriculo as $cv){; ?> 
									<option value="<?=$cv->id_curriculo;?>"><?=$cv->canal;?></option>
							<?php }; ?>
								
							</select>
						</div>
                    <div class="form-group col-md-6">
                      <label for="inputNumero">Telefone</label>
                      <input type="text" class="form-control" id="inputNumero" name="telefone" data-mask="(00) 00000-0000" placeholder="(DDD) + Número">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputName">Cargo</label>
							<select class="form-control" id="inputCargo" name="cargo">
							<?php foreach($cargos as $cg){; ?> 
									<option value="<?=$cg->id_cargo;?>"><?=$cg->cargo;?></option>
							<?php }; ?>
								
							</select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="example-datetime-local-input" class="col-form-label">Data</label>
                      <div>
                        <input class="form-control" type="text" name="data" data-mask="00/00/0000" 
                          id="example-datetime-local-input" placeholder="DD/MM/AAAA">
                      </div>
                    </div>
					
                    <div class="form-group col-md-6">
                      <label for="example-datetime-local-input" class="col-form-label">Hora</label>
                      <div>
                        <input class="form-control" type="text" name="hora" data-mask="00:00" 
                          id="example-datetime-local-input" placeholder="HH:MM">
                      </div>
                    </div>
					
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Observações:</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" name="observacao" rows="3" placeholder="Digite..."></textarea>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Adicionar currículo</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Selecione o Currículo do
                      candidato.</small>
                  </div>
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <!--Modal-->