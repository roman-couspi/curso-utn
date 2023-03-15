<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="stylesheet" href ="<?=CSS_PATH?>styles.css">
  <title>Frontend Mentor | Intro section with dropdown navigation</title>

</head>

<body>
  <header>

    <div class="divlogos">
      <img src="images/logo.svg" alt="" class="logo">
      <img src="images/icon-menu.svg" alt="" class="puntitos">
    </div>


    <nav>
      <div class="parte1">
          <div class="dropdown" id="dropdown">
            <span class="features" id="features">Features</span>
            <img src="images/icon-arrow-up.svg" alt="" class="flechita" id="flechita">
              <ul class="visi" id="visi">
                <li><a href="#">Todo list</a></li>
                <li><a href="#">Calendar</a></li>
                <li><a href="#">Reminders</a></li>
                <li><a href="#">Planning</a></li>
              </ul>
          </div>
          <div class="dropdown" id="dropdown2">
            <span class="company" id="company">Company</span>
            <img src="images/icon-arrow-up.svg" alt="" class="flechita" id="flechita2">
             <ul class="visi" id="visi2">
               <li>History</li>
               <li>Our Team</li>
               <li>Blog</li>
             </ul>
          </div>

          <a href="#" title="Careers">Careers</a>
          <a href="about.php" title="About">About</a>
      </div>

      <div class="parte2">
        <a href="#" class="log" title="login">login</a>
        <a href="#" class="reg" title="register">register</a>
      </div>

    </nav>

  </header>
<section>
  <div>
    <ul class="about_ul">
        <li><a href=<?php href='http://localhost/php/about.php/nom=hd'>¿Como me inspire para hacer la pagina?</a></li>

        <li><a href=<?php href='http://localhost/php/about.php/nom=hp'>¿Cuanto tiempo tarde en hacer la pagina?</a></li>

        <li><a href=<?php href='http://localhost/php/about.php/nom=hg'>¿Quienes me ayudaron a hacer la pagina?</a></li>
    </ul>
  </div>

  <?php 
  if (isset($_GET['nom'])){
    switch(($_GET['nom']){
      case 'hd':
        $pagina = "frontendmentor"
        $dio = "un amigo me dio la pagina"
        $info = "Sirve para hacer practicas de paginas web"
      break;

      case 'hp':
        $pagina = "tarde 30 dias en hacer la pagina"
        $dio = " lo mas dificil fue hacer el DROPDOWN"
        $info = "todavia me falta hacer el dropdown en responsive chiquito, pero lleva mucho tiempo"
        break;

        case 'hg':
          $pagina = "Amigos "
          $dio = "Personas de una comunidad"
          $info = "Y algunos videos de youtube"
          break;

    })
  }
  ?>

  <div class="about_info">
    <h2><?php echo  $pagina?></h2>

    <h3><?php echo  $dio?></h3>

    <p><?php echo  $info?></p>
  </div>
</section>
</body>