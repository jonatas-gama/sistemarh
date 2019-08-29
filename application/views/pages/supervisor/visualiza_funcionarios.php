<div class="container mt-2 border-2">
<div class="card">
	<h3 class="card-header text-white bg-info">
	Funcionários
	</h3>
	<div class="card-body">
	 <!--tabela-->
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Nome:</th>
            <th scope="col">Email:</th>
			<th scope="col">Usuário:</th>
			<th scope="col">Cargo:</th>
            <th scope="col">Opções:</th>
          </tr>
        </thead>
		<?php foreach($funcionarios as $funcionario){?>
        <tbody>
          <tr>
            <td><?=$funcionario->nome;?></td>
            <td><?=$funcionario->email;?></td>
			<td><?=$funcionario->usuario;?></td>
            <td><?=$funcionario->cargo;?></td>
            <td align="center">
              <button type=" button" class="btn btn-success btn-sm" onclick="buscarFuncionario('<?=$funcionario->id;?>')" data-toggle="modal"
                data-target="#visualizaFunc">Visualizar</button>
              <!--<button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                data-target="#largeShoes1">Editar</button>-->
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
	require 'modal_finalizar_processos.php';
	require 'modal_cadastra_candidato.php';
	require 'modal_visualizar_processos.php';
	require 'modal_adiciona_usuario.php';
	require 'modal_funcionarios.php';
	require 'modal_informacoes_candidato.php';
?>	  