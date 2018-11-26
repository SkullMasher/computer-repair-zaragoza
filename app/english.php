<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Is your computer running slow, you think it is broken, or you are thinking on installing or getting some new program. Call me ! I'll fix your computer, for a cheap price.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Computer repair in Zaragoza - Skullmasher.io</title>
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
          <h1 class="page-head__title">Computer repair !</h1>
          <p class="page-head__tagline">Is your computer running slow, you think it is broken, or you are thinking on installing or getting some new program. <strong class="color--success">Call me !</strong> I'll fix your computer, for a <strong class="color--success">cheap price</strong>.</p>
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
            <h2>Fix my computer already !</h2>
            <p>Get a diagnostic, to understand what is the best way to fix your computer.</p>
            <p>Virus, malware, adware removal. Free up disk space. Apply industry best known fixes to solve problems on your computer.</p>
          </div>
          <div class="service__price service__price--large">
            <p class="mbn">35&nbsp;€</p>
          </div>
        </div>
      </div>
      <div class="grid-2 has-gutter-xl">
        <div class="service">
          <h2>Install an application</h2>
          <div class="flex-container">
            <div class="item-fluid">
              <p class="mbn">Do you have an unregistered software ? Let's talk about it.</p>
            </div>
            <div class="service__price">
              <div>10&nbsp;€</div>
            </div>
          </div>
        </div>
        <div class="service">
          <h2>I want the same website</h2>
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
          <p class="mbn">Price may vary depending the diagnostic.</p>
        </div>
      </div>
    </section>
    <section>
      <div class="service-info">
        <h3 class="service-info__title">Additional Information</h3>
        <div class="mlm">
          <p>I can pick up and left off your computer <strong>in Zaragoza only</strong>. I will charge 5€ more if you are located outside the city center or the university (I will reconsider this if you offer me trenza, cervesa or local food).</p>
          <p class="mbn">I will provide an invoice with detailed information about what I do on the computer at the end of the service.</p>
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
            <h3 class="about__title">About me</h3>
            <p class="about__text"><strong>I'm Florian</strong>. I'm a 26 years old <a href="https://skullmasher.io">freelance programmer</a> from France. I have been repairing and assembling computer since 2008. I did computer repair in a major European corporation and in my neighborhood for 2 years. I'm here in Zaragoza to do computer repair or small website until <strong>November 30th</strong>.</p>
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
