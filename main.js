$('button.room-kick').click(function(e) {
  let $el = $(this);
  let $form = $el.closest('form');

  e.preventDefault();
  $el.prop('disabled', true);
  setTimeout(function() {
    $el.prop('disabled', false);
  }, 2000);
  $.ajax({
    type: 'post',
    url: 'room.kick.sh.php',
    data: $form.serialize()
  });

  return false;
});

$('button.user-kick').click(function(e) {
  let $el = $(this);
  let $form = $el.closest('form');

  e.preventDefault();
  $el.prop('disabled', true);
  setTimeout(function() {
    $el.prop('disabled', false);
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
