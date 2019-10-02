      <!--Modal de Cadatro de CV-->
      <div class="container-fluid">
        <div class="modal fade" id="visualizaCandidatoCV" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge"
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
                <h4>Carregar Currículo</h4>
				
                <form method="post" action="<?=base_url('supervisor/uploadCurriculo');?>" enctype="multipart/form-data">

					
                  <div class="form-group">
                    <label for="curriculo">Adicionar currículo </label>
                    <input type="file" class="form-control-file" name="curriculo">
					<input type="hidden" id="id_funcionario_busca" name="id_funcionario_busca">
                  </div>
				  
				  <button type="submit" class="btn btn-primary">Salvar</button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <!--Modal-->
	  
	  
      <!--Modal de Visualização -->
      <div class="container-fluid">
        <div class="modal fade" id="visualizaCandidato" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge"
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
                <h4>Visualizar</h4>
				
                <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="nome">Nome</label>
                      <input type="text" class="form-control" id="nome_busca" name="nome" disabled>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="sobrenome">Sobrenome</label>
                      <input type="text" class="form-control" id="sobrenome_busca" name="sobrenome" disabled>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email_busca" name="email" disabled>
                    </div>
						<div class="form-group col-md-6">
							<label for="inputCurriculo">Canal de Seleção</label>
							<input type="text" class="form-control" id="curriculo_busca" name="curriculo" disabled>
						</div>
                    <div class="form-group col-md-6">
                      <label for="telefone">Telefone</label>
                      <input type="text" class="form-control" id="telefone_busca" name="telefone" disabled>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="cargo">Cargo</label>
						<input type="text" class="form-control" id="cargo_busca" name="cargo" disabled>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="data" class="col-form-label">Data</label>
                      <div>
                        <input class="form-control" type="text" name="data" id="data_busca" disabled>
                      </div>
                    </div>
					
                    <div class="form-group col-md-6">
                      <label for="hora" class="col-form-label">Hora</label>
                      <div>
                        <input class="form-control" type="text" name="hora" id="hora_busca" disabled>
                      </div>
                    </div>
					
                  </div>
                  <div class="form-group">
                      <label for="obs">Observações:</label>
                      <textarea class="form-control" id="obs_busca" name="observacao" rows="3" disabled></textarea>
                   </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <!--Modal-->	  