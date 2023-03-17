<?php include ('index.php') ?>

<link rel="stylesheet" href="<?= CSS_PATH ?>style.css">

<section>

<h1>Registrese</h1>

<div>
<form action="basedatos.php" method="post">
   <input type="text" name="nombre" class="form_nombre"> 
   <input type="text" name="apellido" class="form_nombre">
   <input type="text" name="email" class="form_nombre">

   <input type="submit" value="enviar registro" class="form_nombre">


   <?php 
   if(isset($_GET['ok']))
   echo "<h3>Su mensaje ha sido enviado con exito</h3>"
   ?>
</form>
</div>

</section>