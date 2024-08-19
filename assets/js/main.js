document.addEventListener('DOMContentLoaded', () => {
  $getUsers('div.room').catch(console.error);
  $formControl('form.room-kick');
  $formControl('form.user-kick');
  $urlControl('.core-power');
});

// ------------------------------------------------------------------------------------------------------------------ //
// LOADING USERS
// ------------------------------------------------------------------------------------------------------------------ //

const $getUsers = async ($selector) => {
  const $el = document.querySelectorAll($selector);
  const $len = $el.length;

  for (let $i = 0; $i < $len; ++$i) {
    const $id = $el[$i].dataset.room;
    const $card = document.getElementById(`users-${$id}`);
    const $users = `user.list.php?room=${$id}`;

    setInterval(async function () {
      const $response = await fetch($users, {
        cache: 'no-cache', headers: {'Cache-Control': 'no-cache'}
      });
      $card.innerHTML = await $response.text();
    }, 1000);
  }
};

// ------------------------------------------------------------------------------------------------------------------ //
// FORM CONTROL
// ------------------------------------------------------------------------------------------------------------------ //

const $formControl = ($selector) => {
  const $el = document.querySelectorAll($selector);
  const $len = $el.length;

  for (let $i = 0; $i < $len; ++$i) {
    $el[$i].addEventListener('submit', function ($e) {
      const $form = this;
      const $action = $form.getAttribute('action');
      const $method = $form.getAttribute('method');
      const $body = new FormData($form);
      const $button = $form.querySelector('button[type="submit"]');

      fetch($action, {
        method: $method, body: $body
      }).then(($response) => $response.text());

      $_lockUnlock($button);
      $e.preventDefault();
    });
  }
}

// ------------------------------------------------------------------------------------------------------------------ //
// URL CONTROL
// ------------------------------------------------------------------------------------------------------------------ //

const $urlControl = ($selector) => {
  const $el = document.querySelectorAll($selector);
  const $len = $el.length;

  for (let $i = 0; $i < $len; ++$i) {
    $el[$i].addEventListener('click', function ($e) {
      const $url = this;
      const $action = $url.getAttribute('href');

      fetch($action).then(($response) => $response.text());

      $e.preventDefault();
    });
  }
}

// ------------------------------------------------------------------------------------------------------------------ //
// COMMON FUNCTIONS
// ------------------------------------------------------------------------------------------------------------------ //

const $_lockUnlock = ($button) => {
  const $icon = $button.querySelector('i');
  const $class = $icon.className;

  $button.disabled = true;
  $icon.className = 'fas fa-cog fa-spin fa-fw';
  setTimeout(function () {
    $button.disabled = false;
    $icon.className = $class;
  }, 5000);
}
