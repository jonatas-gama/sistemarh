	<script type="text/javascript">
		function buscaAgendado(id){
			$.getJSON("<?=base_url('auxiliar/buscarProcessoAgendado/');?>"+id, function(data){				
				document.getElementById('nome').value = data[0].nome;
				document.getElementById('sobrenome').value = data[0].sobrenome;
				document.getElementById('email').value = data[0].email;
				//document.getElementById('canal').value = data[0].canal;
				document.getElementById('inputNum').value = data[0].telefone;
				document.getElementById('inputCargo').value = data[0].cargo;
				document.getElementById('inputData').value = data[0].data;
				document.getElementById('observacao').value = data[0].observacao;
				var x = document.getElementById(data[0].status).getAttribute('id');		
				document.getElementById(data[0].status).checked = true;					
				console.log(data, x);
			});
		}
		
		function buscaRealizado(id){
			$.getJSON("<?=base_url('auxiliar/buscarProcessoRealizado/');?>"+id, function(data){
				document.getElementById('nome').value = data[0].nome;
				document.getElementById('sobrenome').value = data[0].sobrenome;	
				document.getElementById('email').value = data[0].email;
				//document.getElementById('canal').value = data[0].canal;
				document.getElementById('inputNum').value = data[0].telefone;
				document.getElementById('inputCargo').value = data[0].cargo;
				document.getElementById('inputData').value = data[0].data;		
				document.getElementById('observacao').value = data[0].observacao;
				var x = document.getElementById(data[0].status).getAttribute('id');		
				document.getElementById(data[0].status).checked = true;
				console.log(data);
			});
			
			
		}		
		
		function buscarFuncionario(id){
			$.getJSON("<?=base_url('auxiliar/buscarFuncionario/');?>"+id, function(data){
				document.getElementById('nome').value = data[0].nome;
				document.getElementById('sobrenome').value = data[0].sobrenome;
				document.getElementById('email').value = data[0].email;
				document.getElementById('dt_nascimento').value = data[0].dt_nascimento;
				document.getElementById('usuario').value = data[0].usuario;
				console.log(data);
			});
			
			
		}		

		
	</script>


	<script>
	
  	function clicou() {
  		//pega o radio button que será verificado
  		var x = document.getElementById('2').checked;
		var y = document.getElementById('3').checked;
  		//pega a input text que será habilitado ou desabilitado
  		var t = document.getElementById('disabledInput');
  		//se o radio button estiver desmarcado o input text fica desabilitado
  		if ((x || y) == false) {
  			t.setAttribute('disabled', '');
  			t.value = '';
  			//se o radio button esiver marcado o input text fica habilitado	
  		} else {
  			t.removeAttribute('disabled');
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
	<script src="<?=base_url('vendor/dist/js/main.js');?>"></script>
	<script src="<?=base_url('vendor/dist/js/jquery.mask.js');?>"></script>

</body>

</html>