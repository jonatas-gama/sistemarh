 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<meta name="description" content="">
 	<meta name="author" content="">

 	<title>Funcionário</title>
 	<!-- Bootstrap com CSS -->
 	<link rel="stylesheet" href="<?=base_url("vendor/dist/css/bootstrap.css");?>">
 	<a href="https://icons8.com/icon/3095/hamburger-menu"></a>
 	<!-- CSS-->
 	<link href="<?=base_url("vendor/dist/css/estilo1.css");?>" rel="stylesheet">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
 		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 </head>

 <body>

 	<div class="d-flex" id="wrapper">

 		<!-- Menu Lateral -->
 		<div class="border-right bg-light " id="sidebar-wrapper">
 			<div style="width: 200px; height:70px;" class="sidebar-heading"><img src="<?=base_url("vendor/img/rs.png");?>"
 					class="rounded" style="width: 10rem;" alt="imagem-responsiva">
 			</div>
 			<div class="list-group list-group-flush">
 				<a href="<?=base_url("funcionarios/index");?>" class="list-group-item list-group-item-action bg-light"><i
 						style="color: Tomato;" class="fas fa-users"></i>Perfil</a>
 				<a href="<?=base_url("funcionarios/vagasabertas");?>"
 					class="list-group-item list-group-item-action bg-light"><i style="color: Dodgerblue;"
 						class="fas fa-calendar-alt"></i>Vagas Abertas</a>
 				<a href="<?=base_url("funcionarios/contracheques");?>"
 					class="list-group-item list-group-item-action bg-light"><i style="color: Mediumslateblue;"
 						class="far fa-list-alt fa-lg"></i>Contra cheque</a>
 				<a href="<?=base_url("funcionarios/ferias");?>" class="list-group-item list-group-item-action bg-light"><i
 						style="color: chocolate;" class="fas fa-calendar-check"></i>Férias</a>


 				<a href="#" class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
 					data-target="#collapseExample" role="" aria-expanded="false" aria-controls="collapseExample"><i
 						style="color: #59BF3F;" class="fas fa-bullhorn"></i>Chamados</a>

 				<div class="collapse" id="collapseExample">
 					<a href="<?=base_url("funcionarios/chamado");?>" class="list-group-item list-group-item-action bg-light">
 						<i style="color: #4B787B;" class="fas fa-calendar-minus"></i>Abrir Chamado</a>
 				</div>
 				<div class="collapse" id="collapseExample">
 					<a href="<?=base_url("funcionarios/finalizados");?>" class="list-group-item list-group-item-action bg-light">
 						<i style="color: #320DEC;" class="fas fa-calendar-check"></i>Finalizados</a>
 				</div>
 				<div class="collapse" id="collapseExample">
 					<a href="<?=base_url("funcionarios/andamento");?>" class="list-group-item list-group-item-action bg-light">
 						<i style="color: #7CEC0D;" class="fas fa-exclamation-circle"></i> Em Andamento</a>
 				</div>

 				<!--<a href="#" data-toggle="modal" data-target="#largeShoes7"
          class="list-group-item list-group-item-action bg-light"><i style="color: DarkOrchid;"
            class="fas fa-id-card fa-lg"></i> Adicionar Usuário</a>-->
 			</div>
 		</div>

 		<!--Menu Horizontal-->
 		<div id="page-content-wrapper">
 			<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom col-12">
 				<button class="btn btn-light" id="menu-toggle"><img
 						src="https://img.icons8.com/metro/26/000000/menu.png"></button>
 				<nav class="navbar navbar-light bg-light col-9">
 					<form class="form-inline col-12">
 						<input class="form-control col-10 mr-sm-2 border-top-0 border-right-0 border-left-0" type="search"
 							placeholder="Pesquisar" aria-label="Pesquisar">
 						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
 					</form>
 				</nav>
 				<div class="col-2 collapse navbar-collapse" id="navbarSupportedContent">
 					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
 						<li class="nav-item dropdown">
 							<a href="#" class="nav-link dropdown-toggle text-success" id="navbarDropdown" role="button" data-toggle="dropdown"
 								aria-haspopup="true" aria-expanded="false">Olá <?=$this->session->userdata('funcionario')[0]->nome;?></a>
 							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
 								<a class="dropdown-item" href="<?=base_url('funcionarios/logout');?>">Logout</a>
 							</div>
 						</li>
 					</ul>
 				</div>
 			</nav>
