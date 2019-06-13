    <!--Modal de Cadastro de funcionários-->
    <div class="modal fade" id="adcionaUsuario" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge"
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
            <h4>Adicionar Usuário:</h4>
            <br>
            <form action="<?=base_url('supervisor/cadastrarusuario');?>" method="post">
              <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="inputtext4">Usuário</label>
                  <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usúario">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputtext4">Senha</label>
                  <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputtext4">Nome</label>
                  <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputtext4">Sobrenome</label>
                  <input type="text" name="sobrenome" class="form-control" id="sobrenome" placeholder="Sobrenome">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputName">Cargo exercido pelo funcionário</label>
                  <select name="cargo" id="input" class="form-control">
						          <option >Selecione...</option>
                      <option value="2">Supervisor</option>
                      <option value="4">Auxiliar</option>
					  <option value="1">Consultor</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="Email" name="email" class="form-control" id="inputEmail" placeholder="Email do funcionário">
                </div>
                <div class="form-group row">
                  <label for="example-date-input" class="col-6 col-form-label">Data de nascimento</label>
                  <div class="col-11">
                    <input class="form-control" name="dt_nascimento" data-mask="00/00/0000" type="text" placeholder="DD/MM/AAAA" id="example-date-input">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
	<!--modal-->