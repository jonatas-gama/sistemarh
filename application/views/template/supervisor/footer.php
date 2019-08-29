<script type="text/javascript">
		function buscaAgendado(id){
			$.getJSON("<?=base_url('supervisor/buscarProcessoAgendado/');?>"+id, function(data){				
				document.getElementById('finaliza_nome').value = data[0].nome;
				document.getElementById('finaliza_sobrenome').value = data[0].sobrenome;
				document.getElementById('finaliza_email').value = data[0].email;
				document.getElementById('finaliza_curriculo').value = data[0].canal;
				document.getElementById('finaliza_num').value = data[0].telefone;
				document.getElementById('finaliza_cargo').value = data[0].cargo;
				document.getElementById('finaliza_data').value = data[0].data;
				document.getElementById('finaliza_observacao').value = data[0].observacao;
				document.getElementById('finaliza_hora').value = data[0].hora;
				document.getElementById('finaliza_id_funcionario').value = data[0].id;
				document.getElementById('finaliza_motivo').value = data[0].motivo;	
				document.getElementById(data[0].status+'_agendado').checked = true;					
				console.log(data);
			});
		}
		
		function buscaRealizado(id){
			$.getJSON("<?=base_url('supervisor/buscarProcessoRealizado/');?>"+id, function(data){
				document.getElementById('realizado_nome').value = data[0].nome;
				document.getElementById('realizado_sobrenome').value = data[0].sobrenome;	
				document.getElementById('realizado_email').value = data[0].email;
				document.getElementById('realizado_curriculo').value = data[0].canal;
				document.getElementById('realizado_num').value = data[0].telefone;
				document.getElementById('realizado_cargo').value = data[0].cargo;
				document.getElementById('realizado_curriculo').value = data[0].curriculo;
				document.getElementById('realizado_data').value = data[0].data;		
				document.getElementById('realizado_observacao').value = data[0].observacao;
				document.getElementById('realizado_motivo').value = data[0].motivo;
				document.getElementById('realizado_entrevistador').value = data[0].entrevistador;	
				document.getElementById(data[0].status+'_status').checked = true;
				console.log(data);
			});
			
			
		}		
		
		function buscarFuncionario(id){
			$.getJSON("<?=base_url('supervisor/buscarFuncionario/');?>"+id, function(data){
				document.getElementById('funcionario_nome').value = data[0].nome;
				document.getElementById('funcionario_sobrenome').value = data[0].sobrenome;
				document.getElementById('funcionario_email').value = data[0].email;
				document.getElementById('funcionario_nascimento').value = data[0].dt_nascimento;
				document.getElementById('funcionario_usuario').value = data[0].usuario;
				document.getElementById('funcionario_cargo').value = data[0].cargo;
				console.log(data);
			});
			
			
		}	

		function buscarFuncionarioID(id){
			$.getJSON("<?=base_url('supervisor/buscarFuncionarioID/');?>"+id, function(data){
				/*
				document.getElementById('nome_busca').value = data[0].nome;
				document.getElementById('sobrenome_busca').value = data[0].sobrenome;
				document.getElementById('email_busca').value = data[0].email;
				document.getElementById('data_busca').value = data[0].dt_processo;
				document.getElementById('cargo_busca').value = data[0].cargo;
				document.getElementById('curriculo_busca').value = data[0].canal;
				document.getElementById('telefone_busca').value = data[0].telefone;
				document.getElementById('cargo_busca').value = data[0].cargo;
				document.getElementById('hora_busca').value = data[0].hora;
				document.getElementById('obs_busca').value = data[0].observacao;
				document.getElementById('id_funcionario_busca').value = data[0].id_funcionario;
				*/
				
				document.getElementById('finaliza_nome').value = data[0].nome;
				document.getElementById('finaliza_sobrenome').value = data[0].sobrenome;
				document.getElementById('finaliza_email').value = data[0].email;
				document.getElementById('finaliza_curriculo').value = data[0].canal;
				document.getElementById('finaliza_num').value = data[0].telefone;
				document.getElementById('finaliza_cargo').value = data[0].cargo;
				document.getElementById('finaliza_data').value = data[0].data;
				document.getElementById('finaliza_observacao').value = data[0].observacao;
				document.getElementById('finaliza_hora').value = data[0].hora;
				document.getElementById('finaliza_id_funcionario').value = data[0].id;
				document.getElementById('finaliza_motivo').value = data[0].motivo;	
				document.getElementById(data[0].status+'_agendado').checked = true;					
				console.log(data);
			});			
			
		}		

		
	</script>


	<script>
	
  	function clicou() {
  		//pega o radio button que será verificado
  		var x = document.getElementById('2_agendado').checked;
		var y = document.getElementById('3_agendado').checked;
  		//pega a input text que será habilitado ou desabilitado
  		var t = document.getElementById('finaliza_motivo');
  		//se o radio button estiver desmarcado o input text fica desabilitado
  		if ((x || y) == false) {
  			t.setAttribute('disabled', '');
  			t.value = '';
  			//se o radio button esiver marcado o input text fica habilitado	
  		} else {
  			t.removeAttribute('disabled');
			t.setAttribute('required', true);
  		}
  		//imprime no console(tecla F12)
  		console.log(x, t);
  	}

	</script>

    <!-- Efeito do menu laretal -->
		<script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>	
	
	


<!-- Bootstrap e JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="<?=base_url('vendor/dist/js/bootstrap.bundle.min.js');?>"></script>
	<script src="<?=base_url('vendor/dist/js/jquery.mask.js');?>"></script>	
	<script src="<?=base_url('vendor/dist/js/Chart.bundle.js');?>"></script>


</body>

</html>