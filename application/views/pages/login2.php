
    <section class="container-fluid bg">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form class="form-cantainer" method="post" action="login/login">
                    <img src="<?=base_url('vendor/dist/img/rs.png');?>" style="width: 16rem;" class="rounded" alt="Imagem responsiva">
					<?php
						if($this->session->flashdata('msg-danger')){ ?>
							<div class="mt-2 alert alert-danger text-center">
								<?=$this->session->flashdata('msg-danger');?>
							</div>
					<?php } ;?>

					<?php
						if($this->session->flashdata('msg-success')){ ?>
							<div class="mt-2 alert alert-success text-center">
								<?=$this->session->flashdata('msg-success');?>
							</div>
					<?php } ; ?>

					<?php
						if($this->session->flashdata('msg-warning')){ ?>
							<div class="mt-2 alert alert-warning text-center">
								<?=$this->session->flashdata('msg-warning');?>
							</div>
					<?php } ; ?>					
                    <div class="form-group">
                        <br>
                        <label for="exampleInputUser">Usuário</label>
                        <input type="text" class="form-control" name="login" id="exampleInputUser" placeholder="Nome completo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                    <!--<div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label1">Salvar senha</label>
                    </div>-->
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                </form>
            </section>
        </section>
    </section>
</body>
</html>