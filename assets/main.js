document.addEventListener('DOMContentLoaded', () => {
  $loadUsers('div.room');
  $roomControl('form.room-kick');
  $roomControl('form.user-kick');
});

const $loadUsers = ($selector) => {
  const $element = document.querySelectorAll($selector);

  $element.forEach($i => {
    const $id = $i.dataset.room;
    const $card = `#room-${$id} .card-body`;
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
      const $button = $form.querySelector('button[type="submit"]');
      const $icon = $button.querySelector('i');
      const $iconName = $icon.className;

      $e.preventDefault();

      fetch($form.getAttribute('action'), {
        method: $form.getAttribute('method'),
        body: new FormData($form)
      }).then($response=>$response.text());

      $button.disabled = true;
      $icon.className = 'fas fa-cog fa-spin fa-fw';
      setTimeout(function () {
        $button.disabled = false;
        $icon.className = $iconName;
      }, 5000);
    });
  });
}
