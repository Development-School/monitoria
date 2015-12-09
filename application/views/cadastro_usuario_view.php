<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('head');//Chama a view head.html?>
<title>Cadastro</title>
</head>
<body>
<div id="wrap">
  <main class="container">
    <div class="row col-sm-12">
    <h1>Cadastro de Usuarios</h1>
    <?php echo form_open('cadastro/receber','class="form-horizontal"'); ?>
    <div class="col-xs-12 col-sm-12 col-md-6">
      <div class="form-group">
        <?php
        //Definição para o Bootstrap
        $attlabel = array('class' => 'col-sm-2 control-label',);
        $formgroup = '<div class="form-group">';
        $taminput = '<div class="col-sm-10">';
        $clss = 'class="form-control"';
        $fimdiv = '</div></div>';

        echo form_fieldset('Efetuar Cadastro');

        //Campo de Nome
        echo $formgroup;
        $att = array(
          "type" => "text",
          "name" => "nome",
          "id" => "nome",
          "value" => set_value('nome'),
          "class" => "form-control",
          "placeholder" => "Digite seu nome",
          "required" => ""
        );
        echo form_label('NOME','nome',$attlabel);
        echo $taminput;
        echo form_input($att);
        echo form_error('nome');
        echo $fimdiv;

        //Campo de CPF
        echo $formgroup;
        $att = array(
          "type" => "text",
          "name" => "cpf",
          "id" => "cpf",
          "value" => set_value('cpf'),
          "class" => "form-control",
          "placeholder" => "Digite seu cpf",
          "required" => ""
        );
        echo form_label('CPF','cpf',$attlabel);
        echo $taminput;
        echo form_input($att);
        echo form_error('cpf');
        echo $fimdiv;

        //Campo de email
        echo $formgroup;
        $att = array(
          "type" => "email",
          "name" => "email",
          "id" => "email",
          "value" => set_value('email'),
          "class" => "form-control",
          "placeholder" => "Digite o email",
          "required" => ""
        );
        echo form_label('EMAIL','email',$attlabel);
        echo $taminput;
        echo form_input($att);
        echo form_error('email');
        echo $fimdiv;

        //Campo de Curso
        echo $formgroup;
        $options = array('' => 'Escolha o Curso',);
        foreach($cursos as $curso) {
          $options += array( $curso->id => $curso->descricao );
        }
        echo form_label('CURSO','curso',$attlabel);
        echo $taminput;
        echo form_dropdown('curso',$options,'','class="form-control"');
        echo form_error('curso');
        echo $fimdiv;

        //Campo de Telefone
        echo $formgroup;
        $att = array(
          "type" => "text",
          "name" => "telefone",
          "id" => "telefone",
          "value" => set_value('telefone'),
          "class" => "form-control",
          "placeholder" => "Digite seu Telefone"
        );
        echo form_label('TELEFONE','telefone',$attlabel);
        echo $taminput;
        echo form_input($att);
        echo form_error('telefone');
        echo $fimdiv;

        //Campo de celular
        echo $formgroup;
        $att = array(
          "type" => "text",
          "name" => "celular",
          "id" => "celular",
          "value" => set_value('celular'),
          "class" => "form-control",
          "placeholder" => "Digite seu celular"
        );
        echo form_label('CELULAR','celular',$attlabel);
        echo $taminput;
        echo form_input($att);
        echo form_error('celular');
        echo $fimdiv;

    		echo form_fieldset_close(); ?>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
      <div class="form-group">
      <?php echo form_fieldset('Criar Senha');

      //Campo de senha
      echo $formgroup;
      $att = array(
        "type" => "password",
        "name" => "senha",
        "id" => "senha",
        "value" => set_value('senha'),
        "class" => "form-control",
        "placeholder" => "Digite sua nova senha",
        "required" => ""
      );
      echo form_label('SENHA','senha',$attlabel);
      echo $taminput;
      echo form_input($att);
      echo form_error('senha');
      echo $fimdiv;

      //Campo de senha2
      echo $formgroup;
      $att = array(
        "type" => "password",
        "name" => "senha2",
        "id" => "senha2",
        "value" => set_value('senha2'),
        "class" => "form-control",
        "placeholder" => "Digite novamente a senha",
        "required" => ""
      );
      echo form_label('SENHA','senha2',$attlabel);
      echo $taminput;
      echo form_input($att);
      echo $fimdiv;

      echo $formgroup.'<div class="col-sm-offset-2 col-sm-10">';
      $atributosbtn = array(
        "type" => "submit",
        "name" => "btnSubmit",
        "value" => "Cadastrar",
        "class" => "btn btn-primary btn-lg col-sm-5"
      );
      echo form_input($atributosbtn);
      echo $fimdiv;
      //Imprime Mensagens de erro
      if (isset($erro)) {
      echo '<div class="alert alert-danger alert-dismissible text-center col-sm-10 col-sm-offset-2" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button><i class="fa fa-exclamation-triangle fa-fw fa-lg"></i> '.$erro.'</div>';
      }
      ?>
      </div>
    </div>
     <?php echo form_close(); ?>
  </div>
</main>
<?php $this->load->view('footer');//Chama a view footer
/* End of file cadastro_usuario_view.php */
/* Location: ./application/views/cadastro_usuario_view.php */
