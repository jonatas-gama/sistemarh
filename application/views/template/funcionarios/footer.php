  <!-- Efeito do menu laretal -->
  
  <script>
	function buscarFuncionario(id){
			$.getJSON("<?=base_url('funcionario/buscarFuncionario/');?>"+id, function(data){
				document.getElementById('funcionario_nome').value = data[0].nome;
				document.getElementById('funcionario_sobrenome').value = data[0].sobrenome;
				document.getElementById('funcionario_email').value = data[0].email;
				document.getElementById('funcionario_senha').value = data[0].dt_nascimento;
				document.getElementById('funcionario_usuario').value = data[0].usuario;
				document.getElementById('funcionario_cargo').value = data[0].cargo;
				console.log(data);
			});
			
			
		}	

		console.log(buscarFuncionario);
  </script>

	<script type="text/javascript">
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