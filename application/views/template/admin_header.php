<!DOCTYPE html>
<html>
    <head>
        <title>RS Soluções</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <?php echo link_tag('vendor/twbs/bootstrap/dist/css/bootstrap.css');?>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <?php echo link_tag('vendor/twbs/bootstrap/dist/css/gijgo.css');?>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f2f2f2">
            <a class="navbar-brand" href="#">RS Soluções |</a><span class="navbar-brand">Gabriella</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user-circle"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?=base_url('login/logout');?>">Deslogar</a>
                            <a class="dropdown-item" href="<?=base_url('cadastro/form_funcionario');?>">Cadastrar Usuário</a>
                            <a class="dropdown-item" href="#">
                                Notificações <i class="far fa-envelope"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>            
        </nav>