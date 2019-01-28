require('./style.css');
{
  // --------------- Hamburger + FilterOverlay ---------------

  const $openNav = document.querySelector('.testje');
  const $closeNav = document.querySelector('.closebtn');
  const $openFilter = document.querySelector('.button-responsive');
  const $closeFilterEen = document.querySelector('.filter-overlay-exit');
  const $closeFilterTwee = document.querySelector('.filter-checkbox__button');

  const handleOpenNav = () => {
    document.getElementById('myNav').style.width = '100%';
  };

  const handleCloseNav = () => {
    document.getElementById('myNav').style.width = '0';
  };

  const handleOpenFilter = () => {
    document.getElementById('myFilter').style.width = '32rem';
  };

  const handleCloseFilter = () => {
    document.getElementById('myFilter').style.width = '0';
  };

  // --------------- Timer ---------------
  const second = 1000;
  const minute = second * 60;
  const hour = minute * 60;
  const day = hour * 24;

  const timeRemaining = new Date('Aug 24, 2019 00:00:00').getTime();

  const remainDays = () => {
    if (document.querySelector('.remaining-days')) {
      setInterval(() => {
        const present = new Date().getTime(),
          gap = timeRemaining - present;

        (document.querySelector('.remaining-days').innerText = Math.floor(
          gap / day
        )),
        (document.querySelector('.remaining-hours').innerText = Math.floor(
          (gap % day) / hour
        )),
        (document.querySelector('.remaining-minutes').innerText = Math.floor(
          (gap % hour) / minute
        ));
      }, 100);
    }
  };

  // --------------- Filter ---------------

  const $filterForm = document.querySelector(`.filter__form`),
    $programmas = document.querySelector(`.programma-grid-container`);

  const init = () => {
    remainDays();
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
    }
    const $forms = document.querySelectorAll(`.footer-form`);
    $forms.forEach($form => {
      $form.noValidate = true;
      $form.addEventListener(`submit`, handeSubmitForm);

      addValidationListeners(Array.from($form.elements));
    });
    $openNav.addEventListener(`click`, handleOpenNav);
    $closeNav.addEventListener(`click`, handleCloseNav);
    if (document.querySelector('.button-responsive')) {
      $openFilter.addEventListener(`click`, handleOpenFilter);
      $closeFilterEen.addEventListener(`click`, handleCloseFilter);
      $closeFilterTwee.addEventListener(`click`, handleCloseFilter);
    }
  };

  const handleLoadPlayers = data => {
    $programmas.innerHTML = data
      .map(programma => createPlayerListItem(programma))
      .join(``);
  };

  const createPlayerListItem = programma => {
    return `
      <a href="index.php?page=detail&amp;id=${programma['id']}">
      <article class="act-grid-container">
      <h3 class="hidden">${programma['show_name']}</h3>
      <div class="act-foto">
      <img class="foto" src="././assets/img/${programma['pic']}" alt="">
      </div>
      <div class="act-tekst">
        <p class="act-titel">${programma['show_name']}</p>
        <div class="act-para programma-para">
        <p>${programma['date']}</p>
        <p class="act-para__uur">${programma['hour']}</p>
      </div>
      </div>
      </article>
      </a>
  `;
  };

  const handleSubmitFilterForm = e => {
    e.preventDefault();
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: 'get'
    })
      .then(r => r.json())
      .then(data => handleLoadPlayers(data));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };

  // --------------- Validatie ---------------

  const handeSubmitForm = e => {
    const $form = e.target;
    if (!$form.checkValidity()) {
      e.preventDefault();
      $form.querySelector(
        `.error`
      ).textContent = `Gelieve onderstaande velden correct in te vullen`;

      Array.from($form.elements).forEach(showValidationInfo);
    }
  };

  const handleInputField = e => {
    const $field = e.currentTarget;
    if ($field.checkValidity()) {
      $field.parentElement.querySelector(`.error`).textContent = ``;
    }
  };

  const showValidationInfo = $field => {
    let message;

    if ($field.validity.valueMissing) {
      message = `Verplicht`;
    }

    if (message) {
      $field.parentElement.querySelector(`.error`).textContent = message;
    }
  };

  const handleBlurField = e => {
    const $field = e.currentTarget;
    showValidationInfo($field);
  };

  const addValidationListeners = fields => {
    fields.forEach($field => {
      $field.addEventListener(`blur`, handleBlurField);
      $field.addEventListener(`input`, handleInputField);
    });
  };

  init();
}
