<header class="bg">
<div class="logo-nav__container nav__programma container">
  <img class="logo" src="././assets/img/logo.png" alt="">
  <nav class="navigation">
    <ul class="navigation__list">
      <li class="navigation__list__item">
        <a href="index.php">Home</a>
      </li>
      <li class="navigation__list__item">
        <a href="index.php?page=programma">Programma</a>
      </li>
      <li class="navigation__list__item">
        <a href="">Praktisch</a>
      </li>
      <li class="navigation__list__item">
        <a href="">Contact</a>
      </li>
    </ul>
  </nav>
  </div>
  </header>
  <section class="programma">
    <h2 class="hidden">Programma</h2>
      <form action="">
        <fieldset>
        <div class="radio-toolbar">
          <div class="radio-toolbar__container">
            <input type="radio" id="alle" name="dag" value="alle" checked>
            <label for="alle">Alle dagen</label>
          </div>
          <div class="radio-toolbar__container">
            <input type="radio" id="vrijdag" name="dag" value="vrijdag">
            <label for="vrijdag">Vrijdag 24/08</label>
          </div>
          <div class="radio-toolbar__container">
            <input type="radio" id="zaterdag" name="dag" value="zaterdag">
            <label for="zaterdag">Zaterdag 25/08</label>
          </div>
          <div class="radio-toolbar__container">
            <input type="radio" id="zondag" name="dag" value="zondag">
            <label for="zondag">Zondag 26/08</label>
          </div>
            </div>
          <div class="filter__search__container">
          <input class="filter__search" type="search" placeholder="Naam voorstelling...">
          <div class="filter__button__container">
          <input class="button filter__button" type="submit">
          </div>
        </div>
        </fieldset>
      </form>
      <form action="">
        <fieldset>
          <div class="filter-checkbox container">
          <legend class="filter-checkbox__titel">Filter</legend>
          <label class="filter-checkbox__label" for="">Type</label>
            <div class="test"">
              <input type="checkbox" name="type1" value="voorstelling"><span>Voorstelling</span>
            </div>
            <div class="test">
              <input type="checkbox" name="type2" value="straatact"><span>Straatact</span>
            </div>
            <div class="test">
              <input type="checkbox" name="type1" value="famielie-act"><span>Familie-act</span>
            </div>
          <label class="filter-checkbox__label" for="">Locatie</label>
            <div class="test">
          <input type="checkbox" name="locatie1" value="speelplkabsdebever"><span>Speelpl. KA/BS de Bever</span>
            </div>
            <div class="test">
          <input type="checkbox" name="locatie2" value="oudatletiekplein"><span>Oud Atletiekplein</span>
            </div>
            <div class="test">
          <input type="checkbox" name="locatie3" value="locatie3">Locatie 3
            </div>
            <div class="test">
          <input type="checkbox" name="locatie4" value="diedrikvanbevenlaan">Diedrik Van Beverenlaan
            </div>
            <div class="test">
          <input type="checkbox" name="locatie5" value="yzerhand">Yzerhand
            </div>
            <div class="test">
          <input type="checkbox" name="locatie6" value="vrasenstraat">vrasenstraat
            </div>
            <div class="test">
          <input type="checkbox" name="locatie7" value="warande">Warande
            </div>
            <div class="test">
          <input type="checkbox" name="locatie8" value="grotemarkt">Grote Markt
            </div>
            <div class="test">
          <input type="checkbox" name="locatie9" value="locatie9">Locatie 9
            </div>
            <div class="test">
          <input type="checkbox" name="locatie10" value="kloosterstraat">Kloosterstraat
            </div>
            <div class="test">
          <input type="checkbox" name="locatie11" value="olympischzwembad">Olympisch zwembad
            </div>
            <div class="test">
          <input type="checkbox" name="locatie12" value="opdestraat">Op de straat
            </div>
          <input class="button filter-checkbox__button" type="submit" value="Filter">
          </div>
        </fieldset>
      </form>
      <!-- <ul class="programma-grid container">
        <li class="programma-grid__item"">
          <article class="act">
            <img class="act__picture" src="https://source.unsplash.com/random/500x163" alt="">
            <h3 class="act__title">Dit is een test</h3>
            <p class="act__date">ZA 24 - 08</p>
            <p class="act__time"></p>
          </article>
        </li>
      </ul> -->
  </section>
