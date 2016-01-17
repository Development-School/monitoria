<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('head');//Chama a view head.html?>
<title>Sistema Monitoria</title>
</head>
<body>
<div id="wrap">
<main class="container">
	<?php /* Chama a View da Barra de navegação*/
	$dados['ativo'] = 0; $this->load->view('admin/navbar',$dados);?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Solicitar Monitor</h3>
			</div>
			<div class="panel-body">
	    <?php echo form_open('admin/alteracadastro/altera','class="form-horizontal"'); ?>
      <div class="form-group">
      <?php
        //Definição para o Bootstrap
        $attlabel = array('class' => 'col-sm-2 control-label',);
        $formgroup = '<div class="form-group">';
        $taminput = '<div class="col-sm-10">';
        $clss = 'class="form-control"';
        $fimdiv = '</div></div>';

        //Campo de Nome
        echo $formgroup;
        $att = array(
          "type" => "text",
          "name" => "nome",
          "id" => "nome",
          "value" => set_value('nome' ),
          "class" => "form-control",
          "placeholder" => "Digite seu nome",
          "required" => ""
        );
        echo form_label('NOME','nome',$attlabel);
        echo $taminput;
        echo form_input($att);
        echo form_error('nome');
        echo $fimdiv;

        //Campo de Nome
        echo $formgroup;
        $att = array(
          "type" => "text",
          "name" => "nome",
          "id" => "nome",
          "value" => set_value('nome' ),
          "class" => "form-control",
          "placeholder" => "Digite seu nome",
          "required" => ""
        );
        echo form_label('NOME','nome',$attlabel);
        echo $taminput;
        echo form_input($att);
        echo form_error('nome');
        echo $fimdiv;

        //Campo de Nome
        echo $formgroup;
        $att = array(
          "type" => "text",
          "name" => "nome",
          "id" => "nome",
          "value" => set_value('nome' ),
          "class" => "form-control",
          "placeholder" => "Digite seu nome",
          "required" => ""
        );
        echo form_label('NOME','nome',$attlabel);
        echo $taminput;
        echo form_input($att);
        echo form_error('nome');
        echo $fimdiv;


			?>
      </div>
      <?php echo form_close(); ?>
			</div>
			</div>
		</div>

	</div>
</main>
<?php $this->load->view('footer');//Chama a view footer
/* End of file home.php */
/* Location: ./application/views/admin/home.php */
