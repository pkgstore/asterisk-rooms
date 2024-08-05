const $room = $('.room');
const $roomKick = $('form.room-kick');
const $userKick = $('form.user-kick');

$roomKick.submit(function ($e) {
  const $form = $(this);
  const $btn = $form.find('button');

  $e.preventDefault();
  $btn.prop('disabled', true);
  setTimeout(function () {
    $btn.prop('disabled', false);
  }, 5000);

  $.ajax({
    type: 'post',
    url: 'room.kick.php',
    data: $form.serialize()
  });

  return false;
});

$userKick.submit(function ($e) {
  const $form = $(this);
  const $btn = $form.find('button');

  $e.preventDefault();
  $btn.prop('disabled', true);
  setTimeout(function () {
    $btn.prop('disabled', false);
  }, 5000);

  $.ajax({
    type: 'post',
    url: 'user.kick.php',
    data: $form.serialize()
  });

  return false;
});

$room.each(function () {
  const $id = $(this).data('room');
  const $card = `#room-${$id} .card-body`;
  const $users = `user.list.php?room=${$id}`;

  setInterval(function () {
    $($card).load($users);
  }, 1000);
});
