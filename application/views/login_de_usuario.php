<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('head');//Chama a view head.html?>
  <title>Sistema Monitoria</title>
</head>
<body>
<div id="wrap">
  <main id="home" class="container">
    <div class="row">
     <div class="col-sm-4 col-sm-offset-4">
        <a href="<?php echo base_url() ?>">
        <img class="logo img-responsive center-block" src="<?php echo base_url('assets/imgs/logo1.png') ?>" alt="Sistema de Monitoria">
        </a>
       </div>
       </div>
       <div class="row text-center">
      <h2>Acesso do Aluno</h2>
      </div>
      <div class="row col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <?php echo form_open('home/login','class="form-horizontal"'); ?>
        <div class="form-group">
        <?php
        $attlabel = array(
        'class' => 'col-sm-3 control-label',
        );
        echo form_label('CPF', 'cpf', $attlabel);
        ?>
        <div class="col-sm-7">
        <div class="input-group">
        <?php
        $atributos = array(
            "type" => "text",
            "name" => "cpf",
            "id" => "cpf",
            "value" => set_value('cpf'),
            "class" => "form-control",
            "placeholder" => "Digite seu CPF"
          );
        echo form_input($atributos);
        ?><span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
        </div>
        <?php echo form_error('cpf'); ?>
        </div>
        </div>

        <div class="form-group">
        <?php
        echo form_label('SENHA', 'senha', $attlabel);
        ?>
        <div class="col-sm-7">
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
        <?php echo form_error('senha'); ?>
        </div>
        </div>
        <?php
        //Imprime Mensagens de erro
        if (isset($erro)) {
        echo '<div class="alert alert-danger alert-dismissible text-center" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button><i class="fa fa-exclamation-triangle fa-fw fa-lg"></i> '.$erro.'</div>';
        }?>

        <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <?php
          $atributos3 = array(
            "type" => "submit",
            "name" => "btnSubmit",
            "value" => "ENTRAR",
            "class" => "btn btn_acessar btn-lg col-sm-4"
          );
          echo form_input($atributos3);
          ?>
        </div>
        </div>
        <?php
        echo form_close();
        ?>
        </div>
        <div class="row btn-group inline col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <a class="btn col-sm-4" href="<?php echo base_url('cadastro');?>">Cadastre-se Aqui! </a>
          <a class="btn col-sm-4" href="<?php echo base_url('recuperasenha');?>">Esqueceu sua senha?</a>
          <a class="btn col-sm-4" href="<?php echo base_url('ajuda');?>">Ajuda&nbsp;<i class="fa fa-question fa-lg"></i></a>
        </div>
      </main>
<?php $this->load->view('footer');//Chama a view footer
/* End of file login_de_usuario.php */
/* Location: ./application/views/login_de_usuario.php */
