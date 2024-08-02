<?php
preg_match('/(\d+)/', basename(__FILE__), $matches);
$room = $matches[1];
$users = shell_exec(getcwd() . "/room.users.sh $room");
$users = array_filter(explode("\n", $users));
?>

<div class="users room-<?php echo $room; ?>" data-room="<?php echo $room; ?>">
  <?php foreach ($users as $user): ?>
    <?php $user = explode('/', $user); ?>
    <div class="input-group mb-3">
      <span class="input-group-text"><code><?php echo (int)$user[0]; ?></code></span>
      <input type="text" class="form-control" value="<?php echo $user[1]; ?>" readonly>
    </div>
  <?php endforeach; ?>
</div>
