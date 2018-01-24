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
    <title>Autovrij</title>
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
    <?php echo $content; ?>
    <footer>
    </footer>
    <?php echo $js;?>
  </body>
</html>
