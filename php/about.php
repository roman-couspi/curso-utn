<?php include ('index.php') ?>

    <?php
    $pagina = "";
    $dio = "";
    $info = "";

    if (isset($_GET['nom'])) {
      switch ($_GET['nom']) {
        case 'hd':
          $pagina = "frontendmentor";
          $dio = "un amigo me dio la pagina";
          $info = "Sirve para hacer practicas de paginas web";
          break;

        case 'hp':
          $pagina = "tarde 30 dias en hacer la pagina";
          $dio = " lo mas dificil fue hacer el DROPDOWN";
          $info = "todavia me falta hacer el dropdown en responsive chiquito, pero lleva mucho tiempo";
          break;

        case 'hg':
          $pagina = "Amigos ";
          $dio = "Personas de una comunidad";
          $info = "Y algunos videos de youtube";
          break;
      }
    }
    ?>

      <section>
        <div class="about">
            <div>
            <a href="http://localhost/php/about.php?nom=hd">
              <li>¿Como me inspire para hacer la pagina?</li>
            </a>
            </div>
            
            <div>
            <a href="http://localhost/php/about.php?nom=hp">
              <li>¿Cuanto tiempo tarde en hacer la pagina?</li>
            </a>
            </div>

            <div>
            <a href="http://localhost/php/about.php?nom=hg">
              <li>¿Quienes me ayudaron a hacer la pagina?</li>
            </a>
            </div>
        </div>

        <div class="about_info">
          <h2><?= $pagina ?></h2>

          <h3><?= $dio ?></h3>

          <p><?= $info ?></p>
        </div>

      </section>
      <script src="app.js"></script>
    </body>