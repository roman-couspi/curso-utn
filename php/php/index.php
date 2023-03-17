<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <title>Frontend Mentor | Intro section with dropdown navigation</title>
  <?php 
  define("CSS_PATH", 'http://localhost/php/css/');
  ?>
  <link rel="stylesheet" href ="<?=CSS_PATH?>style.css">
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

  <div class="grid">

    <div class="img_principal">
      <img src="images/image-hero-mobile.png" alt="" class="imagen_principal">
      <img src="images/image-hero-desktop.png" alt="" class="img_escritorio">
    </div>

    <section>
      <article>

        <div class="titulodiv">
          <h1 class="titulo">Make <br id="br"> remote work</h1>
        </div>

        <div class="textodiv">
          <p class="texto">Get your team in sync, no matter your location. Streamline processes,
            create team rituals, and watch productivity soar.
          </p>
        </div>

        <div class="enla">
          <a href="#" class="enlace">Learn more</a>
        </div>
      </article>
    </section>

    <section class="clients">
      <img src="images/client-databiz.svg" alt="" class="clientes">

      <img src="images/client-audiophile.svg" alt="" class="clientes">

      <img src="images/client-meet.svg" alt="" class="clientes">

      <img src="images/client-maker.svg" alt="" class="clientes">
    </section>

  </div>

  <script src="app.js"></script>
</body>

</html>