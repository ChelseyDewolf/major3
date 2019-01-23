<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Major III - <?php echo $title; ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
  WebFont.load({
    custom: {
          families: ["Glacial Indifference"],
          urls: ["assets/fonts/fonts.css"]
        }
  });
</script>
    <?php echo $css;?>
  </head>
  <body>
        <?php echo $content;?>

           <footer class="footer">
              <div class="footer__container container">
                <div class="footer__form">
                  <form action="">
                    <div class="footer__form__container">
                      <label class="footer__label" for="">Schrijf je nu in om extra nieuws te <br>
                        ontvangen over ons event.</label>
                      <span class="error"></span>
                      <input class="footer__email" type="email" placeholder="E-mail" required>
                      <input class="button footer__button" type="submit" value="Verstuur">
                    </div>
                  </form>
                </div>
              <div class="social-media">
                <a href=""><img src="././assets/img/facebook.png" alt=""></a>
                <a href=""><img src="././assets/img/twitter.png" alt=""></a>
                <a href=""><img src="././assets/img/instagram.png" alt=""></a>
              </div>
              </div>
              <div class="footer__after">
                <p class="footer__after__text">© Major 3</p>
               </div>
          </footer>

    <?php echo $js; ?>
  </body>
</html>
