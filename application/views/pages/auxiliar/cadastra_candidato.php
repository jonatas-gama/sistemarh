    
	<div class="container-fluid bg">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="text-center">
                    <img src="<?=base_url("vendor/twbs/bootstrap/dist/img/logo.png");?>" style="width: 25rem;" class="rounded" alt="imagem-responsiva">
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Gestão: <b>Funcionários</b></h2>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-primary" data-target="#largeShoes" data-toggle="modal"><i class="fa fa-plus"></i> Adicionar</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>E-mail</th>
                        <th>Funções</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!--<td><img src="..."></td>-->
                        <td>Gabriel Baltar</td>
                        <td>(21) 95345-2134</td>
                        <td>Rua José De Souza Sampaio</td>
                        <td>gabriel.baltar21@hotmail.com</td>
                        <td>
                            <a class="add"  title="Adicionar" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Deletar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <!--<td><img src="..."></td>-->
                        <td>Marcos Delfim</td>
                        <td>(21) 92548-0877</td>
                        <td>Rua Mercúrio</td>
                        <td>marcosdelfim@gmail.com</td>
                        <td>
                            <a class="add" title="Adicionar" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Deletar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <!--<td><img src="..."></td>-->
                        <td>João Roberto</td>
                        <td>(21) 97587-9087</td>
                        <td>Rua Sálazar</td>
                        <td>joaovitorino@outlook.com</td>
                        <td>
                            <a class="add" title="Adicionar" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Deletar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <!--<td><img src="..."></td>-->
                        <td>Ana Moraes</td>
                        <td>(21) 995236-4581</td>
                        <td>Rua: Doutor José Thomás</td>
                        <td>anamoraes.ig.com.br</td>
                        <td>
                            <a class="add" title="Adicionar" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Deletar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <!--<td><img src="..."></td>-->
                        <td>Brenda Carvalho</td>
                        <td>(21) 95472-3819</td>
                        <td>Rua: São João</td>
                        <td>brendacarvalho@hotmail.com</td>
                        <td>
                            <a class="add" title="Adicionar" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Deletar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
		
<!--Modal-->
<form action="candidato/cadastrar" method="post">
    <div class="modal fade" id="largeShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="<?=base_url("vendor/twbs/bootstrap/dist/img/logo.png");?>" style="width: 15rem" class="rounded" alt="imagem-responsiva">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                        <h4>Cadastro de Candidato:</h4>
                    <br>
                    <form action="candidato/cadastra">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNome">Nome</label>
                                <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Nome">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSobreNome">Sobrenome</label>
                                <input type="text" class="form-control" id="inputSobreNome" name="inputSobreNome" placeholder="Sobrenome">
                            </div>							
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputTel">Telefone</label>
                                <input type="text" class="form-control" id="inputTel" name="inputTel" placeholder="(DDD) + Número">
                            </div>
                        </div>
						
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="" for="inputAvaliacao">Avaliação</label>
                                <select class="form-control" id="inputAvaliacao" name="inputAvaliacao">
								<?php foreach($avaliacao as $av){; ?> 
										<option value="<?=$av->id_avaliacao;?>"><?=$av->avaliacao;?></option>
								<?php }; ?>
									
								</select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCurriculo">Fonte do currículo</label>
                                <select class="form-control" id="inputCurriculo" name="inputCurriculo">
								<?php foreach($curriculo as $cv){; ?> 
										<option value="<?=$cv->id_curriculo;?>"><?=$cv->canal;?></option>
								<?php }; ?>
									
								</select>
                            </div>						
                        </div>		
						<div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputStatus">Status</label>
                                <select class="form-control" id="inputStatus" name="inputStatus">
								<?php foreach($status as $st){; ?> 
										<option value="<?=$st->id_status;?>"><?=$st->status;?></option>
								<?php }; ?>
									
								</select>
                            </div>
							
                            <div class="form-group col-md-6">
                                <label for="inputCargo">Cargo</label>
                                <select class="form-control" id="inputCargo" name="cargo">
								<?php foreach($cargos as $cg){; ?> 
										<option value="<?=$cg->id_cargo;?>"><?=$cg->cargo;?></option>
								<?php }; ?>
									
								</select>
                            </div>								
						</div>
						
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</form>
<!--MODAL-->
	
    </div>