<div class="container-fluid">
          <div class="modal fade" id="visualizaFunc" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <img src="<?=base_url("vendor/dist/img/rs.png");?>" style="width: 15rem" class="rounded" alt="imagem-responsiva">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h4>Visualizar Funcionário</h4>
                  <br>
                  <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="funcionario_nome" name="nome" disabled/>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="funcionario_sobrenome" name="sobrenome" disabled/>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="funcionario_email" name="email" disabled/>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="dt_nascimento">Nascimento</label>
                        <input type="email" class="form-control" id="funcionario_nascimento" name="dt_nascimento" disabled/>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="usuario">Usu&aacute;rio</label>
                        <input type="email" class="form-control" id="funcionario_usuario" name="usuario" disabled/>
                      </div>					  
                      <div class="form-group col-md-6">
                        <label for="inputName">Cargo</label>
                       <input type="texte" id="funcionario_cargo" class="form-control" disabled/>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>