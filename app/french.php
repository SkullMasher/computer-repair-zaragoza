<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Ton ordinateur est lent ? Besoin d'un programme ? Appelle moi ! je peux le répare pour un prix modeste.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Réparation d'ordinateur à Zaragoza - Skullmasher.io</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="nav-langage">
    <a class="nav-langage__link nav-langage__gb" href="index.php"><img src="img/es.svg"></a>
    <a class="nav-langage__link nav-langage__fr" href="english.php"><?php echo file_get_contents('img/gb.svg') ?></a>
  </nav>
  <div class="background--gray100">
    <header class="page-head">
      <div class="page-head__layout page-head__layout--large">
        <picture class="page-head__logo">
          <?php echo file_get_contents('img/logo.svg') ?>
        </picture>
        <div class="item-fluid">
          <h1 class="page-head__title">Réparation d'ordinateur !</h1>
          <p class="page-head__tagline">Ton ordinateur est lent ? Besoin d'une application ? <strong class="color--success">Appelle moi</strong> je peux le réparer pour un <strong class="color--success">prix modeste</strong>.</p>
        </div>
      </div>
      <div class="page-head__action">
        <a class="page-head__button btn--success" href="tel:+34645397709">
          <?php echo file_get_contents('img/phone.svg') ?>
          <span>+336 25 97 05 61</span>
        </a>
        <a class="page-head__button btn--ghost" href="mailto:skullm4sher@gmail.com?subject=Computer repair in Zaragoza">
          <?php echo file_get_contents('img/email.svg') ?>
          <span>skullm4sher@gmail.com</span>
        </a>
      </div>
      <canvas class="canvas" id="canvas"></canvas>
    </header>
  </div>
  <main class="background--gray100">
    <section class="services wrapper">
      <div class="service service--large">
        <div class="flex-container">
          <picture class="services__picture">
            <?php echo file_get_contents('img/speedometer.svg') ?>
          </picture>
          <div class="item-fluid">
            <h2>Répare mon ordinateur !</h2>
            <p>Effectuons un diagnotique, pour comprendre quel est le meilleur moyen de réparer ton ordinateur.</p>
            <p>Suppression des Virus, malware et adware. Libération de l'éspace dique. Apppliquer les meilleurs trucs et astuces de l'industrie pour réparer votre ordinateur.</p>
          </div>
          <div class="service__price service__price--large">
            <p class="mbn">35&nbsp;€</p>
          </div>
        </div>
      </div>
      <div class="grid-2 has-gutter-xl">
        <div class="service">
          <h2>Installer une application</h2>
          <div class="flex-container">
            <div class="item-fluid">
              <p class="mbn">Vous avez un proggramme non enregistré ? Parlons-en.</p>
            </div>
            <div class="service__price">
              <div>10&nbsp;€</div>
            </div>
          </div>
        </div>
        <div class="service">
          <h2>Il est cool ton site !</h2>
          <div class="flex-container">
            <div class="item-fluid">
              <p>Do you find this website cool ?</p>
              <p class="mbn">I can make one for you just like it.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex-container">
        <div class="service__warn center">
          <?php echo file_get_contents('img/info.svg') ?>
          <p class="mbn">Le prix final varie en fonction du diagnotique.</p>
        </div>
      </div>
    </section>
    <section>
      <div class="service-info">
        <h3 class="service-info__title">Information supplémentaire</h3>
        <div class="mlm">
          <p>Je peux emporter et ramenner votre ordinateur à <strong>in Zaragoza uniquement</strong>. Je commisionerais 5€ supplémentaire si vous etes situer en dehors du centre-ville ou de la zone universitaire (Je suis pret à reconsidérer ce choix si vous m'offrez de la trenza, une bière, ou de la nourriture local).</p>
          <p class="mbn">Je delivre une facture détaillé à chaque fin de prestation pour que vous puissiez avoir une trace des changement dans vote ordinateur sans surprise.</p>
        </div>
      </div>
    </section>
    <section>
      <div class="about">
        <div class="wrapper wrapper--small flex-container">
          <div class="about__photo">
            <img alt="Photo of Florian the computer repair guy at 26 years old" src="img/florian-ledru-26.jpg">
          </div>
          <div class="item-fluid">
            <h3 class="about__title">A propos</h3>
            <p class="about__text"><strong>Je m'appelle FLorian</strong>. J'ai 26ans et je suis <a href="https://skullmasher.io">programmeur freelance</a> en France. Je répare et assemble des ordinateur depuis 2008. J'ai pratiquer la réparation d'ordinateur en entreprise et dans mon quartier pendant 2 ans. Je suis à Zaragoza pour réparer des ordinateurs et créer des petits site web vitrine jusqu'au <strong>30 novembre</strong>.</p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <section class="background--gray900 ptl pbl color--inverse">
      <div class="wrapper">
        <div class="mbs">
          <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
          <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
        </div>
      </div>
      <div class="wrapper">
        <p>Ce site est <a href="https://github.com/SkullMasher/computer-repair-zaragoza">open source</a>.</p>
      </div>
    </section>
  </footer>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
