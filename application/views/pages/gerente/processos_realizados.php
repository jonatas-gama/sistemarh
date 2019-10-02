<div class="container mt-2 border-2">
<div class="card">
	<h3 class="card-header text-white bg-info">
	Processos Realizados
	</h3>
	<div class="card-body">
	 <!--tabela-->
      <table class="table table-bordered table-hover" id='postsList'>
        <thead>
          <tr>
            <th scope="col">Nome</th>
			<th scope="col">Telefone</th>
            <th scope="col">Cargo</th>
			<th scope="col">Data</th>
			<th scope="col">Status</th>
			<th scope="col">Observação</th>
			<th scope="col">Opção</th>
          </tr>
        </thead>
        <tbody></tbody>

      </table>
	  <!--tabela-->
	   <!-- Paginate -->
	   <div id='pagination'></div>		  
	</div>	
</div>
</div>
<?php
 require 'modal_cadastra_candidato.php';
 require 'modal_visualizar_processos.php';
 require 'modal_adiciona_usuario.php';
?>	 