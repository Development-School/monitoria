<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $this->load->view('head'); ?>
<title>Sistema de Monitoria</title>
</head>
<body>
<div id="wrap">
<main class="container">
     <div class="col-sm-4 col-sm-offset-4">
        <a href="<?php echo base_url() ?>">
        <img class="logo img-responsive center-block" src="<?php echo base_url('assets/imgs/logo1.png') ?>" alt="Sistema de Monitoria">
        </a>
      </div>
      <section class="col-xs-12 col-sm-6 col-sm-offset-3">
	  <div class="form-group">
  <h3 class="tittle two">Crie sua nova senha</h3>
  <?php
  echo form_open('Recuperasenha/receber','class="form-horizontal"');
  ?>
  <?php
  $attlabel = array(
  'class' => 'col-sm-3 control-label',
  );
  ?>
  <?php if(isset($codigo)){
    echo $codigo;
  }
  if(isset($id_oculto)){
    echo $id_oculto;
  } ?>
  <div class="form-group">
  <?php
  echo form_label('SENHA', 'senha', $attlabel);
  ?>
  <div class="col-sm-9">
  <div class="input-group">
  <?php
  $atributos = array(
      "type" => "password",
      "name" => "senha",
      "id" => "senha",
      "value" => set_value('senha'),
      "class" => "form-control",
      "placeholder" => "Digite sua senha"
    );
  echo form_password($atributos);
  ?><span class="input-group-addon"><i class="fa fa-key"></i></span>
  </div>
  </div>
  </div>

  <div class="form-group">
  <?php
  echo form_label('CONFIRMA', 'senha2', $attlabel);
  ?>
  <div class="col-sm-9">
  <div class="input-group">
  <?php
  $atributos = array(
      "type" => "password",
      "name" => "senha2",
      "id" => "senha2",
      "value" => set_value('senha2'),
      "class" => "form-control",
      "placeholder" => "Digite sua senha novamete"
    );
  echo form_password($atributos);
  ?><span class="input-group-addon"><i class="fa fa-key"></i></span>
  </div>
  <?php echo form_error('senha'); ?>
  </div>
  </div>
  <?php
  //Imprime Mensagens de erro
  if (isset($erro)) {
  echo '<div class="alert alert-info alert-dismissible text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button><i class="fa fa-exclamation-triangle fa-fw fa-lg"></i> '.$erro.'</div>';
  } ?>

  <div class="form-group">
  <div class="col-sm-offset-3 col-sm-9">
    <?php
    $atributos3 = array(
      "type" => "submit",
      "name" => "btnSubmit",
      "value" => "Alterar Senha",
      "class" => "btn btn_acessar btn-lg col-sm-6"
    );
    echo form_input($atributos3);
    ?>
  </div>
  </div>
  <?php
  echo form_close();
  ?>
  </div>
</section>
<p class="row col-sm-12 text-center">Ainda não esta cadastrado? <a href="<?php echo base_url('cadastro') ?>">Cadastre-se aqui!</a><br>
Ou <a href="<?php echo base_url('Home'); ?>">Faça seu login!</a></p>
</main>
<?php $this->load->view('footer');

/* End of file novasenha_view.php */
/* Location: ./application/views/user/novasenha_view.php */