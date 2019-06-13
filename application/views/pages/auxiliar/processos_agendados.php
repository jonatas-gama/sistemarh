<div class="container mt-2 border-2">
<div class="card">
	<h3 class="card-header text-white bg-info">
	Processos Agendados
	</h3>
	<div class="card-body">
	 <!--tabela-->
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Canal de Seleção</th>
			<th scope="col">Telefone</th>
            <th scope="col">Cargo</th>
			<th scope="col">Data</th>
			<th scope="col">Hora</th>
			<th scope="col">Opção</th>
          </tr>
        </thead>
		<?php foreach($agendados as $agendado){?>
        <tbody>
          <tr>
            <td><?=$agendado->nome;?></td>
            <td><?=$agendado->email;?></td>
            <td><?=$agendado->canal;?></td>
            <td><?=$agendado->telefone;?></td>
			<td><?=$agendado->cargo;?></td>
			<td><?=$agendado->data;?></td>
			<td><?=$agendado->hora;?></td>
            <td align="center">
              <button type=" button" class="btn btn-success btn-sm" data-toggle="modal"
                data-target="#finalizaProcesso" onclick="buscaAgendado(<?=$agendado->id;?>)">Visualizar</button>
            </td>
          </tr>
        </tbody>
		<?php }; ?>
      </table>
	<form method="post">
	<button type="submit" class="btn btn-success" name="export" formaction="<?=base_url('auxiliar/extrairAgendados');?>">Download</button>	
	</form>	  
	  <!--tabela-->
	</div>	
</div>
</div>
<?php
	require 'modal_cadastra_candidato.php';
	require 'modal_finalizar_processos.php';
?>