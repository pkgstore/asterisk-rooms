$(document).ready(function() {
  $('button.room-kick').click(function(e) {
    e.preventDefault();
    let $form = $(this).closest('form');
    $.ajax({
      type: 'post',
      url: 'room.kick.sh.php',
      data: $form.serialize()
    });
    return false;
  });

  $('.room').each(function() {
    let $id = $(this).data('room');
    let $room = `#room-${$id} .card-body`;
    let $users = `room.users.php .room-${$id}`;

    setInterval(function(){
      $($room).load($users, function() {
        $('button.user-kick').click(function(e) {
          e.preventDefault();
          $(this).prop('disabled', true);
          let $form = $(this).closest('form');
          $.ajax({
            type: 'post',
            url: 'user.kick.sh.php',
            data: $form.serialize()
          });
          return false;
        });
      });
    }, 1000);
  });
});
