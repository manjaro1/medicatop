<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta charset="utf-8">
   <title><?= $title ?></title>
   <?= $_scripts ?>
   <?= $_styles ?>
   

</head>

<body>
  
     
	<div class="contenedor">
	<div id="logo"><img src="/assets/img/logo.png"/> </div>
		<div id="botonesheader"> <a href="#" >Acceder</a> | <a href="#" >Registrarse</a> </div>
 </div>

	</div>
	<div class="contenedor">
	
		<div class="fila1"> 
			<div class="alert">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<h2>¡Bienvenido! </h2>
			<p>Detectamos tu ubicación automáticamente </p>
			<p>Estos son los médicos cerca de tí.Utiliza el buscador para mejores resultados. </p>
		</div>
		<div id="tfheader">
			<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120">
			<input type="submit" value="search" class="tfbutton">
			</form>
			<div class="tfclear"></div>
		</div>	
		</div>
		<div class="fila2">
			<h2>fila2 columna2</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
      <?php print $content ?>
  
   
   
</body>
</html>
