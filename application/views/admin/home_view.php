<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('head');//Chama a view head.html?>
<title>Sistema Monitoria</title>
</head>
<body>
<div id="wrap">
<main class="container">
	<?php /* Chama a View da Barra de navegação*/
	$dados['ativo'] = 1; $this->load->view('admin/navbar',$dados);?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Monitores</h3>
			</div>
			<div class="panel-body">
			<?php if(isset($monitores)): ?>
	    <div class="table-responsive">
			  <table class="table table-striped">
		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Nome</th>
		          <th>Email</th>
		          <th>Descrição</th>
		        </tr>
		      </thead>
		      <tbody>
		      <?php $i = 1; foreach ($monitores as $monitor):?>
		        <tr>
		          <th scope="row"><?php echo $i++; ?></th>
		          <td><?php echo $monitor->nome; ?></td>
		          <td><?php echo $monitor->email; ?></td>
		          <td><?php echo $monitor->descricao ?></td>
		        </tr>
		      <?php endforeach ?>
		      </tbody>
		    </table>
		  </div>
			<?php endif ?>
			</div>
			</div>
		</div>

	</div>
</main>
<?php $this->load->view('footer');//Chama a view footer
/* End of file home.php */
/* Location: ./application/views/admin/home.php */
