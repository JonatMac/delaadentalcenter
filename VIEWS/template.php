<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>

  <meta name="theme-color" content="#F0DB4F">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="shortcut icon" type="image/png" href="./img/ProgramadorFitness.png">
  <link rel="apple-touch-icon" href="./ProgramadorFitness.png">
  <link rel="apple-touch-startup-image" href="./ProgramadorFitness.png">
  <link rel="manifest" href="./manifest.json">

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

	<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
	<img src="./img/consultorio-dental.jpg">
	<h1>Consultorio Dental "De la A Dental Center"</h1>
</header>
<?php
	include "modulos/navegacion.php";
?>
<section>
	<?php
	$mvc = new MvcController();
	$mvc -> enlacesPaginasController();
	?>
</section>
</body>
<footer>
	<p>Posted by: Jonathan Macías & Sebastian Aray</p>
    <p>Contact information: <a href="mailto:someone@example.com">
    someone@example.com</a>.</p>
</footer>
</html>