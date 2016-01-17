<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('head');//Chama a view head.html?>
<title>Sistema Monitoria</title>
</head>
<body>
<div id="wrap">
<main class="container">
	<?php /* Chama a View da Barra de navegação*/
	$dados['ativo'] = 2; $this->load->view('admin1/navbar',$dados);?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Solicitar Monitor</h3>
			</div>
			<div class="panel-body">
			</div>
		</div>
  </div>
	</div>
</main>
<?php $this->load->view('footer');//Chama a view footer
/* End of file home.php */
/* Location: ./application/views/admin/home.php */
