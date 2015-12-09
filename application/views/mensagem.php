<?php $this->load->view('head'); ?>
<title>Sistema Monitoria</title>
	<script type="text/javascript">
	/* Este codigo javascript redireciona a pagina para a home do site apos 3 segundos*/
	setTimeout(function(){
	  window.location.href = "<?php echo base_url($local)?>";
	},<?php isset($tempo) and print($tempo) or print ("4000"); ?>)
	</script>
	<style type="text/css">
		.mensagem{
			letter-spacing: 1px;
			text-align: center;
			font-size: 3em;
		}
		.fa-lg{
			line-height:inherit;
		}
	</style>
</head>
<body>
<div id="wrap">
<main class="container">
	<div class="row">
		<div class="jumbotron">
		<?php if (isset($erro)): ?>
			<div class="mensagem">
				<i class="fa fa-exclamation-triangle fa-lg"></i>&nbsp;&nbsp;
				<span class="label label-danger"><?php echo $mensagem; ?></span>
			</div>
		<?php else: ?>
			<div class="mensagem">
				<i class="fa fa-check fa-lg"></i>&nbsp;&nbsp;
				<span class="label label-success"><?php echo $mensagem; ?></span>
			</div>
		<?php endif; ?>
		</div>
	</div>
</main>
<?php $this->load->view('footer');//Chama a view footer?>