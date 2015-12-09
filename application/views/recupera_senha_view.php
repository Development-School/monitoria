<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('head');//Chama a view head.html?>
<title>Recuperar Senha</title>
</head>
<body>
<div id="wrap">
<main class="container">
  <div class="row">
     <div class="col-sm-4 col-sm-offset-4">
        <a href="<?php echo base_url() ?>">
        <img class="img-responsive center-block" src="<?php echo base_url('assets/imgs/logo1.png') ?>" alt="Sistema de Monitoria">
        </a>
      </div>
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
    <?php echo form_open('recuperasenha/recupera', 'class="form-horizontal"'); ?>
      <h2 class="text-center">Esqueceu sua Senha?</h2>
      <h4 class="text-center">
        Digite o email que você cadastrou no sistema para recuperar sua senha.
      </h4>
      <div class="form-group form-group-lg">
      <?php $attlabel = array('class' => 'col-sm-2 control-label'); ?>
      <?php
      echo form_label('EMAIL', 'email', $attlabel );
      ?>
      <div class="col-sm-10">
      <div class="input-group">
      <?php
      $att = array(
          "type" => "email",
          "name" => "email",
          "id" => "email",
          "value" => set_value('email'),
          "class" => "form-control",
          "placeholder" => "Digite sua email"
        );
      echo form_input($att);
      ?><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
      </div>
      <?php echo form_error('email'); ?>
      </div>
      </div>

      <div class="form-group form-group-lg">
      <div class="col-sm-offset-2">
      <div class="col-sm-6">
        <button class="btn btn-warning btn-lg" type="submit">Recuperar Senha</button>
      </div>
      <div class="col-sm-6">
        <a class="btn btn-warning btn-lg pull-right" href="<?php echo base_url(); ?>" role="button">Página Inicial</a>
      </div>
      </div>
      </div>
      <div>
        <?php if($msg = null){
        echo '<div class="alert alert-danger valida" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button><i class="fa fa-exclamation-triangle"></i> '.$msg.'</div>';}
        ?>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
</main>
<?php $this->load->view('footer');//Chama a view footer
/* End of file recupera_senha_view.php */
/* Location: ./application/views/recupera_senha_view.php */
