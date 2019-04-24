<?php echo form_open(base_url('login/login'),array('class' => "container", 'style' => "margin-top: 10vh;"));?>
  <div class="form-group col-8 offset-2">
<?php if($this->session->userdata("msg")){?>
    <p class="text-center bg-danger">
    <?=$this->session->userdata("msg");?>
    </p>
<?php }?>
    <?php echo form_label("Login","login").
    form_input(array('type' => "text", 'class' => "form-control form-control-lg", 'id' => "text", 'placeholder' => "Login", 'name' => "login", 'required' => true));?>
  </div>
  <div class="form-group col-8 offset-2">
    <?php echo form_label("Senha","senha").
    form_input(array('type' => "password", 'class' => "form-control form-control-lg", 'id' => "senha", 'placeholder' => "Senha", 'name' => "senha", 'required' => true));?>
  </div>
  <div class="form-group col-8 offset-2">
    <?php echo form_submit(array('type' => 'submit', 'name' => 'btnLogin', 'value' => 'Login','class' => "btn btn-primary")).br().
     anchor(base_url('esqueci-minha-senha'), "Esqueci minha senha",array('class' => 'form-text text-muted'));?>       
  </div>
<?php form_close();
