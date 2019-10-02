<div class="container mt-2 border-2">
<div class="card">
	<form>
		<h3 class="card-header text-white bg-info">
			Aprovados no Processo
		</h3>
	</form>
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
		<form method="post">
			<button type="submit" class="btn btn-success" name="export" formaction="<?=base_url('auxiliar/extrairAprovados');?>">Download</button>	
		</form>	
			   <!-- Paginate -->
	   <div id='aprovados' class="mt-2"></div>	
   
	</div>	
</div>
</div>
<?php
	require 'modal_finalizar_processos.php';
	require 'modal_cadastra_candidato.php';
	require 'modal_visualizar_processos.php';
	require 'modal_informacoes_candidato.php';
?>	 

   <script type='text/javascript'>
	   $(document).ready(function(){
	 
		 $('#aprovados').on('click','a',function(e){
		   e.preventDefault(); 
		   var pageno = $(this).attr('data-ci-pagination-page');
		   loadPagination(pageno);
		 });
	 
		 loadPagination(0);
	 
		 function loadPagination(pagno){
		   $.ajax({
			 url: '<?=base_url('auxiliar/paginacaoAprovados/');?>'+pagno,
			 type: 'get',
			 dataType: 'json',
			 success: function(response){
				$('#aprovados').html(response.pagination);
				createTable(response.result,response.row);
				//console.log(response);
			 }
		   });
		 }
	 
		 function createTable(result,sno){
		   sno = Number(sno);
		   $('#postsList tbody').empty();
			console.log(result);
		   for(index in result){
			  var nome = result[index].nome;
			  var telefone = result[index].telefone;
			  var cargo = result[index].cargo;
			  var data = result[index].data;
			  var status = result[index].status;
			  var observacao = result[index].observacao;
			  var id = result[index].id;
			  sno+=1;
	 
			  var tr = "<tr>";
			  tr += "<td>"+ nome +"</td>";
			  tr += "<td>"+ telefone +"</td>";
			  tr += "<td>"+ cargo +"</td>";
			  tr += "<td>"+ data +"</td>";
			  tr += "<td>"+ status +"</td>";
			  tr += "<td>"+ observacao +"</td>";
			  tr += "<td><button type='button' class='btn btn-success btn-sm' onclick='buscaRealizado("+result[index].id+")' data-toggle='modal' data-target='#visualizarProcessos'>Visualizar</button></td>";
			  tr += "</tr>";
			  $('#postsList tbody').append(tr);
	  
			}
		  }
		   
		});

	</script>