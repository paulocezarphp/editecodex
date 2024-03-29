<!DOCTYPE html>
<html>
<head>
	<title>Edite Codex</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="sortcut icon" href="app/images/icon.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="app/css/style.css">
	<link rel="stylesheet" type="text/css" href="app/css/mobile.css">
	<link rel="stylesheet" type="text/css" href="app/css/desktop.css">
	<?php
	include("app/php/files.php");
	$files = new Files();
	?>
</head>
<body>

	<div class="painel">
		<div class="painel-menu">
			<div class="painel-item"></div>
			<div class="painel-item"></div>
			<div class="painel-item"></div>
			<div class="painel-item"></div>
			<div class="painel-item"></div>
			<div class="painel-item"></div>
		</div>
		<div class="painel-group">
			<div class="painel-left theme-background">

				<div class="painel-left-title theme-color-c">OPEN FILES</div>

				<div class="painel-left-group">
					<div class="painel-left-item theme-color-d">Elemento 1</div>
					<div class="painel-left-close">&#10006;</div>
				</div>
				<div class="painel-left-group">
					<div class="painel-left-item theme-color-d">Elemento 2</div>
					<div class="painel-left-close">&#10006;</div>
				</div>
				<div class="painel-left-group">
					<div class="painel-left-item theme-color-d">Elemento 3</div>
					<div class="painel-left-close">&#10006;</div>
				</div>
				<div class="painel-left-group">
					<div class="painel-left-item theme-color-d">Elemento 4</div>
					<div class="painel-left-close">&#10006;</div>
				</div>
				<div class="painel-left-group">
					<div class="painel-left-item theme-color-d">Elemento 5</div>
					<div class="painel-left-close">&#10006;</div>
				</div>


				<div class="painel-left-title theme-color-c">FOLDERS</div>
		        
		        <div id="lista-de-arquivos">
				   <?php $files->List_Directory(); ?>
				</div>
				
			</div>
			<div class="painel-right theme-background-b theme-color-d" contentEditable="true" spellcheck="false" id="edite-code">
				bbbb
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="app/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="app/js/script.js"></script>
</body>
</html>