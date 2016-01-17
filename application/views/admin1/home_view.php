<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('head');//Chama a view head.html?>
<title>Sistema Monitoria</title>
</head>
<body>
<div id="wrap">
<main class="container">
	<?php /* Chama a View da Barra de navegação*/
	$dados['ativo'] = 1; $this->load->view('admin1/navbar',$dados);?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Monitores</h3>
			</div>
			<div class="panel-body">
			<?php if(isset($monitores) and $monitores): ?>
	    <div class="table-responsive">
			  <table class="table table-striped">
		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Nome</th>
		          <th>Email</th>
		          <th>Descrição</th>
		          <th>Turno</th>
		          <th>Dia da Semana</th>
		          <th></th>
		        </tr>
		      </thead>
		      <tbody>
		      <?php $i = 1; foreach ($monitores as $monitor):?>
		        <tr>
		          <th scope="row"><?php echo $i++; ?></th>
		          <td><?php echo $monitor->nome; ?></td>
		          <td><?php echo $monitor->email; ?></td>
		          <td><?php echo $monitor->descricao ?></td>
		          <td><?php echo $monitor->turno ?></td>
		          <td><?php echo $monitor->dia_semana ?></td>
		          <td>
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
							  Abrir
							</button>
		          </td>
		        </tr>
		      <?php endforeach ?>
		      </tbody>
		    </table>
		  </div>
		  <!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel"><?php echo $monitor->nome ?></h4>
			      </div>
			      <div class="modal-body">
			        <?php echo $monitor->nome ?><br>
			        <?php echo $monitor->email ?><br>
			        <?php echo $monitor->descricao ?><br>
			        <?php echo $monitor->turno ?><br>
			        <?php echo $monitor->dia_semana ?><br>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <a href="<?php echo base_url('admin/Monitores/Solicitar') ?>" class="btn btn-primary">Solicitar Monitor</a>
			      </div>
			    </div>
			  </div>
			</div>

			<?php else: ?>
				<h3>Não Existem monitores disponiveis</h3>
			<?php endif ?>
			</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Monitores</h3>
			</div>
			<div class="panel-body">
			<?php if(isset($monitores) and $monitores): ?>
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
			<?php else: ?>
				<h3>Não Existem monitores disponiveis</h3>
			<?php endif ?>
			</div>
			</div>
		</div>
	</div>
</main>
<?php $this->load->view('footer');//Chama a view footer
/* End of file home_view.php */
/* Location: ./application/views/aluno/home_view.php */
