<div class="container mt-2 border-2">
<div class="card">
	<h3 class="card-header text-white bg-info">
	Processos Realizados
	</h3>
	<div class="card-body">
	 <!--tabela-->
      <table class="table table-bordered table-hover">
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
		<?php foreach($realizados as $realizado){?>
        <tbody>
          <tr>
            <td><?=$realizado->nome;?></td>
            <td><?=$realizado->telefone;?></td>
			<td><?=$realizado->cargo;?></td>
			<td><?=$realizado->data;?></td>
			<td><?=$realizado->status;?></td>
			<td><?=$realizado->observacao;?></td>
            <td align="center">
              <button type=" button" class="btn btn-success btn-sm" data-toggle="modal"
                data-target="#visualizarProcessos" onclick="buscaRealizado('<?=$realizado->id;?>')">Visualizar</button>
            </td>
          </tr>
        </tbody>
		<?php }; ?>
      </table>
	  <!--tabela-->
	</div>	
</div>
</div>
<?php
 require 'modal_cadastra_candidato.php';
 require 'modal_visualizar_processos.php';
?>	 