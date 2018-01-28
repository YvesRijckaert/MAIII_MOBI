<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='X-UA-Compatible' content='IE=Edge'>
    <meta name="description" content="Week van de mobiliteit 2018"/>
    <meta name="author" content="Yves Rijckaert"/>
    <meta name="keywords" content="mobiliteit hernieuwbaar transport activiteiten festival"/>
    <script type="text/javascript">
      WebFontConfig = {
        google: { families: ['Rubik:400,500,700'] }
      };

      (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>
    <title>Week van de mobiliteit</title>
    <?php echo $css;?>
  </head>
  <body>
      <?php if (!empty($_SESSION['info'])): ?>
        <p>
          <?php echo $_SESSION['info'];?>
        </p>
      <?php endif; ?>

      <?php if (!empty($_SESSION['error'])): ?>
        <p>
          <?php echo $_SESSION['error'];?>
        </p>
      <?php endif; ?>
      <header class="header">
        <div class="header-content wrap">
          <h1 class="title"><a href="index.php?page=home">Week van de mobiliteit</a></h1>
          <nav>
            <ul class="nav-list">
              <li><a class="nav-link <?php if ($_GET['page'] === 'home') {echo 'active';}?>" href="index.php?page=home">Home</a></li>
              <li><a class="nav-link <?php if ($_GET['page'] === 'events') {echo 'active';}?>" href="index.php?page=events">Activiteiten</a></li>
              <li><a class="nav-link" href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
      </header>
    <?php echo $content; ?>
  </main>
  <section class="sponsors">
    <div class="wrap">
      <header>
        <h2 class="hide">Sponsors</h2>
      </header>
      <div class="sponsors-content">
        <p class="sponsors-text">De week van de mobiliteit krijgt de steun van:</p>
        <div class="sponsors-images">
          <img src="assets/img/nmbs-logo.jpg" alt="Nmbs logo" width="95" height="64" />
          <img src="assets/img/vlaanderen-logo.jpg" alt="Vlaanderen logo" width="71" height="98" />
          <img src="assets/img/delijn-logo.jpg" alt="Delijn logo" width="81" height="80" />    <img src="assets/img/european-logo.jpg" alt="European mobility week logo" width="106" height="73" />
        </div>
      </div>
    </div>
  </section>
    <footer>
      <div class="wrap">
        <p class="footer-text">Copyright Week Van De Mobiliteit</p>
        <div class="social">
          <a target="_blank" href="https://www.instagram.com/weekvandemobiliteit/">
            <img src="./assets/img/instagram.svg" title="instagram" alt="instagram icon" width="40" height="40"/>
          </a>
          <a target="_blank" href="https://twitter.com/week_mobiliteit">
            <img src="./assets/img/twitter.svg" title="twitter" alt="twitter icon" width="40" height="40"/>
          </a>
          <a target="_blank" href="https://www.facebook.com/Weekvandemobiliteit/">
            <img src="./assets/img/facebook.svg" title="facebook" alt="facebook icon" width="40" heyight="40"/>
          </a>
        </div>
        <p class="footer-text">Major 3 Yves Rijckaert</p>
      </div>
    </footer>
    <?php echo $js;?>
  </body>
</html>
