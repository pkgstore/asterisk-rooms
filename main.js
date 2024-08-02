$('form.room-kick').submit(function($e) {
  let $form = $(this);
  let $btn = $form.find('button');

  $e.preventDefault();
  $btn.prop('disabled', true);
  setTimeout(function() {
    $btn.prop('disabled', false);
  }, 2000);

  $.ajax({
    type: 'post',
    url: 'room.kick.sh.php',
    data: $form.serialize()
  });

  return false;
});

$('form.user-kick').submit(function($e) {
  let $form = $(this);
  let $btn = $form.find('button');

  $e.preventDefault();
  $btn.prop('disabled', true);
  setTimeout(function() {
    $btn.prop('disabled', false);
  }, 5000);

  $.ajax({
    type: 'post',
    url: 'user.kick.sh.php',
    data: $form.serialize()
  });

  return false;
});

$('.room').each(function() {
  let $id = $(this).data('room');
  let $room = `#room-${$id} .card-body`;
  let $users = `room.${$id}.php`;

  setInterval(function() {
    $($room).load($users);
  }, 1000);
});
