<header class="bg">
<div class="logo-nav__container nav__programma container">
  <a href="index.php"><img class="logo" src="././assets/img/logo.png" alt=""></a>
  <nav class="navigation">
    <ul class="navigation__list">
      <li class="navigation__list__item">
        <a class="navigation__list__item__a" href="index.php">Home</a>
      </li>
      <li class="navigation__list__item">
        <a class="navigation__list__item__a" href="index.php?page=programma">Programma</a>
      </li>
      <li class="navigation__list__item">
        <a class="navigation__list__item__a" href="">Praktisch</a>
      </li>
      <li class="navigation__list__item">
        <a class="navigation__list__item__a" href="">Contact</a>
      </li>
    </ul>
  </nav>
  </div>
  </header>
  <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>
  <section class="programma container">
    <h2 class="hidden">Programma</h2>
      <form action="index.php" class="filter__form">
      <?php
      $checkboxArr=array();
      if(!empty($_GET["genre"]))
      {
          foreach($_GET['genre'] as $eenGenre)
          {
              array_push($checkboxArr,$eenGenre);
          }
      }
    ?>
    <?php
      $checkboxTweeArr=array();
      if(!empty($_GET["locatie"]))
      {
          foreach($_GET['locatie'] as $eenLocatie)
          {
              array_push($checkboxTweeArr,$eenLocatie);
          }
      }
    ?>
        <input type="hidden" name="page" value="programma" />
          <fieldset>
            <div class="radio-toolbar">
              <div class="radio-toolbar__container">
                <input type="radio" id="alle" name="dag" value="" checked>
                <label for="alle">Alle dagen</label>
              </div>
              <div class="radio-toolbar__container">
                <input type="radio" id="vrijdag" name="dag" value="VR 24 - 08" <?php if(!empty($_GET['dag']) && $_GET['dag'] == 'VR 24 - 08') { echo 'checked';}?>>
                <label for="vrijdag">Vrijdag 24/08</label>
              </div>
              <div class="radio-toolbar__container">
                <input type="radio" id="zaterdag" name="dag" value="ZA 25 - 08"  <?php if(!empty($_GET['dag']) && $_GET['dag'] == 'ZA 25 - 08') { echo 'checked';}?>>
                <label for="zaterdag">Zaterdag 25/08</label>
              </div>
              <div class="radio-toolbar__container">
                <input type="radio" id="zondag" name="dag" value="ZO 26 - 08"  <?php if(!empty($_GET['dag']) && $_GET['dag'] == 'ZO 26 - 08') { echo 'checked';}?>>
                <label for="zondag">Zondag 26/08</label>
              </div>
                </div>
              <div class="filter__search__container">
              <input class="filter__search" type="search" placeholder="Naam voorstelling..." name="search" value="<?php if(!empty($_GET['search'])) {echo $_GET['search'];}?>">
              <div class="filter__button__container">
              <input class="button filter__button" type="submit" value="Zoek">
              </div>
            </div>
          </fieldset>
          <div class="filter-acts-container">
          <fieldset class="fieldset">
            <div class="form-width">
            <div class="filter-checkbox container">
            <legend class="filter-checkbox__titel">Filter</legend>
            <label class="filter-checkbox__label" for="">Type</label>
              <div class="checkbox"">
                <input type="checkbox" name="genre[]" value="voorstelling" <?php if(in_array('voorstelling', $checkboxArr)) echo 'checked'; ?>><span>Voorstelling</span>
              </div>
              <div class="checkbox">
                <input type="checkbox" name="genre[]" value="straatact" <?php if(in_array('straatact', $checkboxArr)) echo 'checked'; ?>><span>Straatact</span>
              </div>
              <div class="checkbox">
                <input type="checkbox" name="genre[]" value="familie voorstelling" <?php if(in_array('familie voorstelling', $checkboxArr)) echo 'checked'; ?>><span>Familie-act</span>
              </div>
            <label class="filter-checkbox__label" for="">Locatie</label>
              <div class="checkbox">
            <input type="checkbox" name="locatie[]" value="1" <?php if(in_array('1', $checkboxTweeArr)) echo 'checked'; ?>><span>Speelpl. KA/BS de Bever</span>
              </div>
              <div class="checkbox">
            <input type="checkbox" name="locatie[]" value="2" <?php if(in_array('2', $checkboxTweeArr)) echo 'checked'; ?>><span>Oud Atletiekplein</span>
              </div>
              <div class="checkbox">
            <input type="checkbox" name="locatie[]" value="3" <?php if(in_array('3', $checkboxTweeArr)) echo 'checked'; ?>>Locatie 3
              </div>
              <div class="checkbox">
            <input type="checkbox" name="locatie[]" value="4" <?php if(in_array('4', $checkboxTweeArr)) echo 'checked'; ?>>Diedrik Van Beverenlaan
              </div>
              <div class="checkbox">
            <input type="checkbox" name="locatie[]" value="5" <?php if(in_array('5', $checkboxTweeArr)) echo 'checked'; ?>>Yzerhand
              </div>
              <div class="checkbox">
            <input type="checkbox" name="locatie[]" value="6" <?php if(in_array('6', $checkboxTweeArr)) echo 'checked'; ?>>vrasenstraat
              </div>
              <div class="checkbox">
            <input type="checkbox" name="locatie[]" value="7" <?php if(in_array('7', $checkboxTweeArr)) echo 'checked'; ?>>Warande
              </div>
              <div class="checkbox">
            <input type="checkbox" name="locatie[]" value="8 <?php if(in_array('8', $checkboxTweeArr)) echo 'checked'; ?>">Grote Markt
              </div>
              <div class="checkbox">
            <input type="checkbox" name="locatie[]" value="9" <?php if(in_array('9', $checkboxTweeArr)) echo 'checked'; ?>>Locatie 9
              </div>
              <div class="checkbox">
            <input type="checkbox" name="locatie[]" value="10" <?php if(in_array('10', $checkboxTweeArr)) echo 'checked'; ?>>Kloosterstraat
              </div>
              <div class="checkbox">
            <input type="checkbox" name="locatie[]" value="11" <?php if(in_array('11', $checkboxTweeArr)) echo 'checked'; ?>>Olympisch zwembad
              </div>
              <div class="checkbox">
            <input type="checkbox" name="locatie[]" value="12" <?php if(in_array('12', $checkboxTweeArr)) echo 'checked'; ?>>Op de straat
              </div>
            <input class="button filter-checkbox__button" type="submit" value="Filter">
            <a href="index.php?page=programma" class="button  filter-checkbox__button__verwijder">Verwijder Filter</a>
            </div>
            </div>
          </fieldset>
          <div class="programma-grid-container">
      <?php
          foreach($programmas as $programma){
            ?>
          <a href="index.php?page=detail&amp;id=<?php echo $programma['id'];?>">
          <article class="act-grid-container">
          <h3 class="hidden"><?php echo $programma['show_name'];?></h3>
          <div class="act-foto">
          <img class="foto" src="././assets/img/<?php echo $programma['pic'];?>" alt="">
          </div>
          <div class="act-tekst">
            <p class="act-titel"><?php echo $programma['show_name'];?></p>
            <div class="act-para programma-para">
            <p><?php echo $programma["date"];?></p>
            <p class="act-para__uur"><?php echo $programma["hour"];?></p>
          </div>
          </div>
          </article>
          </a>
          <?php
           }
           ?>
      </div>
          </div>
      </form>

  </section>

