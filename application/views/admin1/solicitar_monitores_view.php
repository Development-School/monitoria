<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('head');//Chama a view head.html?>
<title>Sistema Monitoria</title>
<style type="text/css">
  .user{
    display: table;
    width: 15rem;
    margin-left: auto;
    margin-right: auto;
    border: .1rem solid #666;
    border-radius: 50%;
    margin-bottom: 2rem;
  }
</style>
</head>
<body>
<div id="wrap">
<main class="container">
	<?php /* Chama a View da Barra de navegação*/
	$dados['ativo'] = 0; $this->load->view('admin1/navbar',$dados);?>
	<div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default">
      <div class="panel-body">
        <img class="user" src="<?php echo base_url('assets/imgs/default-user.png') ?>">
        <dl class="dl-horizontal pull-left">
          <dt>Nome</dt>
          <dd><?php echo $monitor->nome ?></dd>
          <dt>Email</dt>
          <dd><?php echo $monitor->email ?></dd>
          <dt>Descrição</dt>
          <dd><?php echo $monitor->descricao ?></dd>
          <dt>Turno</dt>
          <dd><?php echo $monitor->turno ?></dd>
          <dt>Dias Disponiveis</dt>
          <dd><?php echo $monitor->dia_semana ?></dd>
        </dl>
      </div>
      </div>
    </div>
		<div class="col-xs-12 col-sm-8">
			<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Solicitar o Monitor <?php echo $monitor->nome ?></h3>
			</div>
			<div class="panel-body">
      <div class="form-group">
        <label>Escreva uma Mensagem para o monitor</label>
        <textarea rows="5" class="form-control"></textarea>
      </div>
      <a href="#" class="btn btn-primary">Enviar Solicitação</a>
			</div>
			</div>
		</div>
	</div>
</main>
<?php $this->load->view('footer');//Chama a view footer
/* End of file home.php */
/* Location: ./application/views/admin/home.php */
