document.addEventListener('DOMContentLoaded', () => {
  $loadUsers('div.room');
  $roomControl('form.room-kick');
  $roomControl('form.user-kick');
});

const $loadUsers = ($selector) => {
  const $element = document.querySelectorAll($selector);

  $element.forEach($i => {
    const $id = $i.dataset.room;
    const $card = `#room-${$id}-users`;
    const $users = `user.list.php?room=${$id}`;

    setInterval(async function () {
      const $response = await fetch($users, {
        cache: 'no-cache',
        headers: {'Cache-Control': 'no-cache'}
      });
      document.querySelector($card).innerHTML = await $response.text();
    }, 1000);
  });
};

const $roomControl = ($selector) => {
  const $element = document.querySelectorAll($selector);

  $element.forEach($i => {
    $i.addEventListener('submit', function ($e) {
      const $form = this;
      const $action = $form.getAttribute('action');
      const $method = $form.getAttribute('method');
      const $body = new FormData($form);
      const $button = $form.querySelector('button[type="submit"]');

      fetch($action, {
        method: $method,
        body: $body
      }).then($response => $response.text());

      $lockUnlock($button);
      $e.preventDefault();
    });
  });
}

const $lockUnlock = ($button) => {
  const $icon = $button.querySelector('i');
  const $class = $icon.className;

  $button.disabled = true;
  $icon.className = 'fas fa-cog fa-spin fa-fw';
  setTimeout(function () {
    $button.disabled = false;
    $icon.className = $class;
  }, 5000);
}
