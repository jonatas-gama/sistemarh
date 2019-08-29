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

<?php
	if($this->session->flashdata('msg-sucesso-curriculo')){ ?>
		<div class="mt-2 alert alert-success alert-dismissible fade show text-center">
			<?=$this->session->flashdata('msg-sucesso-curriculo');?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>			
		</div>
<?php } ; ?>

<div class="card">
	<h3 class="card-header text-white bg-info">
	Relatórios
	</h3>
	<div class="card-body">
		<div class="row chart-container">
		

			<div class="col-6 bar-chart-container">
				<h5 class="card-header text-white bg-info">
					Entrevistas Agendadas
				</h5>			
			<canvas id="agendadoSemana"></canvas>
			</div>
		
			<div class="col-6 bar-chart-container">
				<h5 class="card-header text-white bg-info">
					Entrevistas Realizadas
				</h5>			
			  <canvas id="realizadoSemana"></canvas>
			</div>			
		</div>
	</div>	
</div>
</div>
<?php
	require 'modal_finalizar_processos.php';
	require 'modal_cadastra_candidato.php';
	require 'modal_visualizar_processos.php';
	require 'modal_adiciona_usuario.php';
	require 'modal_informacoes_candidato.php';
?>

<script>
  $(function(){
      //get the bar chart canvas
      var cData = JSON.parse('<?php echo $agendadoSemana; ?>');
      var ctx = $("#agendadoSemana");
 
      //bar chart data
      var data = {
        labels: cData.dia,
        datasets: [
          {
            label: cData.dia,
            data: cData.contagem,
            backgroundColor: [
              "#1E90FF",
              "#905a89",
              "#e67d05",
              "#027311",
              "#6023fb",
              "#1E90FF",
              "#1E90FF"
            ]
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Entrevistas Agendadas",
          fontSize: 18,
          fontColor: "#111"
        },
		scales: {
			xAxes: [{
				barThickness: 70,
				minBarLength: 50,
				categoryPercentage: 1.0,
                ticks: {
                    beginAtZero: true
                },				
				gridLines: {
					offsetGridLines: true
				}
			}],
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
		},		
        legend: {
          display: false,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create bar Chart class object
      var chart1 = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options
      });
 
  });
</script>

<script>
  $(function(){
      //get the bar chart canvas
      var cData = JSON.parse('<?php echo $realizadoSemana; ?>');
      var ctx = $("#realizadoSemana");
 
      //bar chart data
      var data = {
        labels: cData.dia,
        datasets: [
          {
            label: cData.dia,
            data: cData.contagem,
            backgroundColor: [
              "#1E90FF",
              "#905a89",
              "#e67d05",
              "#027311",
              "#6023fb",
              "#1E90FF",
              "#1E90FF"
            ]
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Entrevistas Realizadas",
          fontSize: 18,
          fontColor: "#111"
        },
		scales: {
			xAxes: [{
				barThickness: 70,
				minBarLength: 50,
				categoryPercentage: 1.0,
                ticks: {
                    beginAtZero: true
                },				
				gridLines: {
					offsetGridLines: true
				}
			}],
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
		},		
        legend: {
          display: false,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create bar Chart class object
      var chart1 = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options
      });
 
  });
</script>