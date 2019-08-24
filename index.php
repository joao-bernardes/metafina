<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/metafina/index.css">
		<title>Metafina Shrine</title>
	</head>
	<body style="background-color: grey	">
		<h1 class="section1"> METAFINA </h1>
		<hr>
		<section>
			<h1><u>BEM-VINDO AO ARQUIVO</u></h1>
<!--			<h2>UPLOAD</h2>
			<h4>Fazer upload de músicas:</h4></section>
			<form method="post" enctype="multipart/form-data">
		   		<input type="file" name="files[]" />  
		   		<br>
		   		<br>Nome da Faixa:
				<input type="text" name="nome" value="Nome">
				<br>Data:
				<input type="date" name="data" value="">
				<br>Duração:
				<input type="time" name="duração" value="">
		 		<br>Observações:<br>
				<input class="textarea" type="text" name="observações"value="exemplo: Quem toca qual instrumento? Quantas partes tem a faixa? ...">
				<br><br><br>
				<input type="submit" value="Save & Upload File" name="submit" />
			</form>
			<script src="upload.js"></script>
-->		
		<hr>
		<h2>DOWNLOAD</h2>
		<h4>Ouvir e baixar músicas:</h4>

		<?php
			$path    = './../files/metafina';
			$files = scandir($path);
			$files = array_diff(scandir($path), array('.', '..')); ?>
		
		<?php
			foreach($files as $key  => $item) { ?>
				<a align-text="center" href="/files/metafina/<?php echo $item;?>">	
				<h2><?php echo $key ." - ". $item;?></h2>
				<a align-text="center" href="/files/metafina/<?php echo $item;?>"download="<?php echo $item;?>">
				<p>(Download)</p>	
				<hr>
		<?php } ?>
		<script type="text/javascript" src="https://freehitcounters.org/count/2i87"></script><br>
 <a href='http://www.counter-zaehler.de'>online besucherzähler</a> <script type='text/javascript' src='https://whomania.com/ctr?id=1dd31381e5c92b11401bdcdffa7b333d463db5df'></script>
	</body>
</html>

