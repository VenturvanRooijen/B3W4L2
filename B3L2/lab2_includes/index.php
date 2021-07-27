<style>
<?php
include ("css/style.css")
?>
</style>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>
<body>
<div class="container">
	<!-- laad hier via php je header in (vanuit je includes map) -->
  <?php
  include ('includes/header.php');
  ?>
	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <?php
  if($_GET["subject"] == "Ark") {
    include ("pages/onderwerp1.php");
  }
  elseif($_GET["subject"] == "Battlefield") {
    include ("pages/onderwerp2.php");
  }
  elseif($_GET["subject"] == "COD") {
    include ("pages/onderwerp3.php");
  }
  elseif($_GET["subject"] == "Siege") {
    include ("pages/onderwerp4.php");
  };
  ?>
	
	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <?php
  include ('includes/footer.php');
  ?>
  </div>
</body>
</html>