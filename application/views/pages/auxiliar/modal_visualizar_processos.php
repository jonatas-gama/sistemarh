  <!--Processos Finalizados-->
  <div class="container-fluid">
    <div class="modal fade" id="visualizarProcessos" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge"
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
            <h4>Finalizar Processo:</h4>
            <br>
            <form action="http://10.10.1.56/sistema/auxiliar/cadastrarcandidato" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" value="" id="nome" name="nome" placeholder="Nome" disabled="">
                </div>
                <div class="form-group col-md-6">
                  <label for="sobrenome">Sobrenome</label>
                  <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" disabled="">
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" value="" id="email" name="email" placeholder="Email" disabled="">
                </div>
                    <div class="form-group col-md-6">
                        <label for="inputCurriculo">Canal de Seleção</label>
                        <select class="form-control" id="inputCurriculo" name="curriculo" disabled="">
                                <option value="1">Indeed</option>
                                <option value="2">Facebook</option>
                                <option value="3">Vagas.com</option>
                                <option value="4">InfoJobs</option>                      
                        </select>
                    </div>
                <div class="form-group col-md-6">
                  <label for="inputNumero">Telefone</label>
                  <input type="text" class="form-control" id="inputNumero" name="telefone" placeholder="(DDD) + Número" disabled="">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputName">Cargo</label>
                        <select class="form-control" id="inputCargo" name="cargo" disabled="">
                                <option value="1">Consultor</option>                         
                        </select>
                </div>
                <div class="form-group col-md-2">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" onclick="clicou()" id="customCheck1" value="option1">
                  <label class="custom-control-label" for="customCheck1">Aprovado</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" onclick="clicou()" id="customCheck2"  value="option2">
                  <label class="custom-control-label" for="customCheck2">Reprovado</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" onclick="clicou()" id="customCheck3"  value="option2">
                  <label class="custom-control-label" for="customCheck3">Stand-Bie</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" onclick="clicou()" id="customCheck4"  value="option2">
                  <label class="custom-control-label" for="customCheck4">Black-List</label>
                </div>
                </div>
                <div class="form-group col-md-5">
                  <label for="inputName">Entrevistador</label>
                  <input class="form-control" id="disabledInput" type="text" placeholder="Selecione..." disabled>
                </div>
                <div class="form-group col-md-5">
                  <label for="inputName">Motivo da Reprovação</label>
                  <input class="form-control" id="disabledInput" type="text" placeholder="Selecione..." disabled>
                </div>
                <div class="form-group col-md-7">
                  <label for="example-datetime-local-input" class="col-4 col-form-label">Data</label>
                    <input class="form-control" type="datetime-local" name="data"
                      id="example-datetime-local-input" placeholder="--/--/----" disabled="">
                </div>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Observações:</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="observacao" rows="3" disabled=""></textarea>
                </div>
              <button type="submit" class="btn btn-primary">Finalizar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
		function clicou(){
			//pega o radio button que será verificado
			var x = document.getElementById('customCheck1').checked;
			//pega a input text que será habilitado ou desabilitado
			var t = document.getElementById('disabledInput');
			//se o radio button estiver desmarcado o input text fica desabilitado
			if(x == false){
				t.setAttribute('disabled', '');
				t.value = '';
			//se o radio button esiver marcado o input text fica habilitado	
			}else{
				t.removeAttribute('disabled');
			}
			//imprime no console(tecla F12)
			console.log(x,t);
		}
	</script>