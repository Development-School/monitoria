<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic|Ubuntu:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
</head>
<body style="
	font-family: Ubuntu, sans-serif;
	font-size: 16px;
	background-color: #EEEEF1;
	word-wrap: break-word;
">
	<h2 style="
  	max-width: 550px;
		margin: 45px auto;
		text-align: center;
	">Sistema de Monitoria</h2>
	<div class="contente" style="
		max-width: 550px;
		margin: 0 auto;
		background-color: #fff;
		padding: 15px;
		margin-botton: 35px;
	">
		<p>Prezado(a) <?php echo $nome; ?>,</p>
		<p>Recentemente você iniciou um recuperação de senha para sua conta no
		nosso Sistema de Monitoria Pitágoras. Para concluir o processo, clique no link abaixo.<p>
		<a href="<?php echo base_url('Recuperasenha/novasenha/'.$reset_senha) ?>" style="
			margin: 0 auto;
			vertical-align: middle;
			border-radius: 3px;
			display: inline-block;
			font-size: 17px;
			line-height: 24px;
			padding: 13px 35px 12px 35px;
			text-align: center;
			text-decoration: none !important;
			transition: opacity 0.2s ease-in;
			background-color: #FFA700;
			color: #fff;
		">Redefinir Agora!</a>
		<p>ou insira esta url em seu navegador:</p>
		<p><?php echo base_url('Recuperasenha/novasenha/'.$reset_senha) ?></p>
		<p>Atenciosamente: <br> Sistema de Monitoria Pitágoras</p>
	</div>
	<div style="
		max-width: 550px;
		margin: 25px auto;
	" ><?php echo date('Y') ?> - Sistema de Monitoria Pitágoras </div>
</body>
</html>