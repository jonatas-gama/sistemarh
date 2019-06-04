<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?=$title;?></title>

  <!-- Bootstrap com CSS -->
  <link href="<?=base_url('vendor/dist/css/bootstrap.min.css');?>" rel="stylesheet">
  <a href="https://icons8.com/icon/3095/hamburger-menu"></a>
  <!-- CSS-->
  <link href="<?=base_url('vendor/dist/css/estilo1.css');?>" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Menu Lateral -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div style="width: 200px; height:70px;" class="sidebar-heading"><img src="<?=base_url('vendor/dist/img/rs.png');?>" class="rounded" style="width: 10rem;" alt="imagem-responsiva">
      </div>
      <div class="list-group list-group-flush">
        <a href="<?=base_url('supervisor');?>" class="list-group-item list-group-item-action bg-light"><i style="color: Tomato;" class="fas fa-chart-line"></i> Relatórios</a>
        <a href="<?=base_url('supervisor/processosagendados');?>" class="list-group-item list-group-item-action bg-light"><i style="color: Dodgerblue;" class="fas fa-calendar-alt"></i>Processos Agendados</a>
        <a href="<?=base_url('supervisor/processosrealizados');?>" class="list-group-item list-group-item-action bg-light"><i style="color: Mediumslateblue;" class="fas fa-clipboard-check"></i> Processos Realizados</a>
        <a href="<?=base_url('supervisor/visualizafuncionarios');?>" class="list-group-item list-group-item-action bg-light"><i style="color: chocolate;" class="fas fa-users"></i> Funcionários</a>
        <a href="#" data-toggle="modal" data-target="#largeShoes1"
          class="list-group-item list-group-item-action bg-light"><i style="color: #ffa500;" class="fas fa-user-plus"></i>Cadastrar Candidato</a>
        <a href="#" data-toggle="modal" data-target="#adcionaUsuario" class="list-group-item list-group-item-action bg-light"><i style="color: DarkOrchid;" class="fas fa-id-card fa-lg"></i> Adicionar Usuário</a>
      </div>
    </div>

    <!-- Menu Horizontal-->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom col-12">
        <button class="btn btn-light" id="menu-toggle"><img
            src="https://img.icons8.com/metro/26/000000/menu.png"></button>
        <nav class="navbar navbar-light bg-light col-9">
          <form class="form-inline col-12">
            <input class="form-control col-10 mr-sm-2 border-top-0 border-right-0 border-left-0" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </nav>
        <div class="col-2 collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Olá</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?=base_url('login/logout');?>">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    <!-- Bootstrap e JavaScript -->
  
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    </body>