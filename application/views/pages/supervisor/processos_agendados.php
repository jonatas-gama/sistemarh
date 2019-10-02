<div class="container mt-2 border-2">

<?php
	if($this->session->flashdata('msg-erro')){ ?>
		<div class="mt-2 alert alert-danger alert-dismissible fade show text-center">
			<?=$this->session->flashdata('msg-erro');?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>	
		</div>
<?php } ;?>

<?php
	if($this->session->flashdata('msg-sucesso')){ ?>
		<div class="mt-2 alert alert-success alert-dismissible fade show text-center">
			<?=$this->session->flashdata('msg-sucesso');?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>			
		</div>
<?php } ; ?>

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