  <!-- Efeito do menu laretal -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });	
  </script>
  
  <script>
	function buscarFuncionario(id){
		//let id = "<?=$this->session->userdata('funcionario')[0]->id;?>";
		$.getJSON("<?=base_url('funcionarios/buscarFuncionario/');?>"+id, function(data){	
			document.getElementById('nome').value = data[0].nome;
			document.getElementById('sobrenome').value = data[0].sobrenome;
			document.getElementById('email').value = data[0].email;
			document.getElementById('usuario').value = data[0].usuario;
			document.getElementById('senha').value = data[0].senha;
			document.getElementById('cargo').value = data[0].cargo;
			document.getElementById('saudacao').innerHTML = data[0].nome;
			console.log(data);
		});		
	}
  </script>

<!-- Bootstrap e JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="<?=base_url('vendor/dist/js/bootstrap.bundle.min.js');?>"></script>
	<script src="<?=base_url('vendor/dist/js/main.js');?>"></script>
	<script src="<?=base_url('vendor/dist/js/jquery.mask.js');?>"></script>

</body>

</html>