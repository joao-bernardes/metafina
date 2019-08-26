<!DOCTYPE html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="./index.css" />
		<title>Download</title>
	</head>
	<body style="background-color: grey">
		<h1 class="section1"> DOWNLOAD </h1>
		<div class="scrollmenu">
			<a href=".">HOME</a>
		</div>
		<hr>
		<h4>Ouvir e baixar músicas:</h4>
		<p>Nesta página web é possivel ver informação listada e relativamente organizada sobre as jam/músicas de Metafina.Para consulta dos ficheiros clica o teu caminho por aí. Para fazer upload de novo material, clica no botão UPLOAD e autentica-te.</p>

		<?php
			$path    = './media';
			$files = scandir($path);
			$files = array_diff(scandir($path), array('.DS_Store','.', '..')); ?>
		
		<?php
			foreach($files as $key  => $item) { ?>
				<a align-text="center" href="./media/<?php echo $item;?>">	
				<h2><?php echo $item;?></h2>
				<a align-text="center" href="./media/<?php echo $item;?>"download="<?php echo $item;?>">
				<p>(Download)</p>	
				<hr>
		<?php } ?>
		<section>
			<p align="center"><b>Powered by <a href="https://pichu.zapto.org" target="_blank">Pichu</b></p>
		</section>
	</body>
</html>

