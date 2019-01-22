require('./style.css');
{
  const $filterForm = document.querySelector(`.filter__form`),
    $players = document.querySelector(`.players__list`);

  const init = () => {
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
    }
  };

  const handleLoadPlayers = data => {
    $players.innerHTML = data
      .map(player => createPlayerListItem(player))
      .join(``);
  };

  const createPlayerListItem = player => {
    return ` <li class='player'>
    <img src="${player['Photo'].replace('/4/', '/10/')}" alt="Profile picture ${
  player['Name']
}" class="player__pic">
    <span class='player__name'>${player['Name']}</span>
    <span class='player__stat'>${player['Age']} ${player['Nationality']}</span>
    <span class='player__info'>${player['Club']}</span>
    <span class='player__more'>more</span>
</li>`;
  };

  const handleSubmitFilterForm = e => {
    console.log('submit');
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

  init();
}
