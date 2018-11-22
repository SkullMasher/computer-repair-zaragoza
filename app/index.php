<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Si tu ordenador va muy lento, crees que puede estar roto, o estás pensando en instalar o conseguir algún programa ¡Llámame! Arreglaré tu ordenador, sea lo sea lo que le pase, por un módico precio.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reparación de ordenadores en Zaragoza - Skullmasher.io</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="background--gray100">
    <header class="page-head">
      <div class="page-head__layout page-head__layout--large">
        <picture class="page-head__logo">
          <?php echo file_get_contents('img/logo.svg') ?>
        </picture>
        <div class="item-fluid">
          <h1 class="page-head__title">¡Reparación de ordenadores!</h1>
          <p class="page-head__tagline page-head__tagline--smaller">Si tu ordenador va muy lento, crees que puede estar roto, o estás pensando en instalar o conseguir algún programa <strong class="color--success">¡Llámame!</strong> Arreglaré tu ordenador, por un <strong class="color--success">módico precio</strong>.</p>
        </div>
      </div>
      <div class="page-head__action">
        <a class="page-head__button btn--success" href="tel:+34645397709">
          <?php echo file_get_contents('img/phone.svg') ?>
          <span>645 397 709</span>
        </a>
        <a class="page-head__button btn--ghost" href="mailto:florian@skullmasher.io">
          <?php echo file_get_contents('img/email.svg') ?>
          <span>florian@skullmasher.io</span>
        </a>
      </div>
      <canvas class="canvas" id="canvas"></canvas>
    </header>
  </div>
  <main class="background--gray100">
    <section class="services">
      <div class="service main-services">
        <picture class="services__picture">
          <?php echo file_get_contents('img/speedometer.svg') ?>
        </picture>
        <div class="">
          <h2>Fix a slow computer</h2>
          <p>Hello There c'est Skull</p>
        </div>
      </div>
    </section>
    <section>
      <div class="wrapper">
        <div>
          <h3>Service Information</h3>
          <p></p>
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
            <h3 class="about__title">Sobre mí</h3>
            <!-- <p class="about__text"><strong>I'm Florian</strong>. I'm a 26 years old <a href="https://skullmasher.io">freelance programmer</a> from France. I have been repairing and assembling computer since 2008. I did computer repair in a major european corporation and in my neighboohod for 2 years. I'm here in Zaragoza to do computer repair or small website until <strong>november 30th</strong>.</p> -->
            <p class="about__text"><strong>Me llamo Florian</strong>. Soy un <a href="https://skullmasher.io">programador freelance</a> de 26 años. LLevo programando, reparando y construyendo ordenadores desde 2008. He trabajado durante más dos años para empresas como Allianz, además de montar ordenadores por encargo. Normalmente resido en París, no obstante residiré en Zaragoza hasta el próximo 30 de noviembre para reparar ordenadores y hacer webs.</p>
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
        <p>This website is <a href="https://github.com/SkullMasher/computer-repair-zaragoza">open source</a>.</p>
      </div>
    </section>
  </footer>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
