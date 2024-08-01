<?php
$count = shell_exec(getcwd() . '/room.count.sh');
$l = 0;
for ($i = 0; $i < $count; $i++):
  $l = $l + 1;
  $room[$i] = (int)shell_exec(getcwd() . "/room.name.sh $l");
  $users[$i] = shell_exec(getcwd() . "/room.users.sh $room[$i]");
  $users = array_filter(explode("\n", $users[$i]));
?>

<div class="users room-<?php echo $room[$i]; ?>" data-room="<?php echo $room[$i]; ?>">
  <?php foreach ($users as $k => $v): ?>
    <?php $k = str_pad($k + 1, 2, '0', STR_PAD_LEFT); ?>
    <div class="mb-3">
      <form action="user.kick.sh.php" method="post">
        <input type="hidden" name="room" value="<?php echo $room[$i]; ?>"/>
        <input type="hidden" name="user" value="<?php echo $k; ?>"/>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-phone fa-fw"></i></span>
          <input type="text" class="form-control" value="<?php echo $v; ?>" readonly/>
          <button title="Удалить участника" type="submit" class="btn btn-outline-danger user-kick">
            <i class="fas fa-user-xmark fa-fw"></i>
          </button>
        </div>
      </form>
    </div>
  <?php endforeach; ?>
</div>
<?php endfor; ?>
