<?php

function isNumeric($data)
{
  return filter_var($data, FILTER_VALIDATE_INT) !== false;
}

if (!isNumeric($_GET['room'])) {
  echo 'Room number is not correct!';
  exit(1);
}

$room = (int)$_GET['room'];
$users = shell_exec(getcwd() . '/user.list.sh ' . escapeshellarg($room));
$users = array_filter(explode("\n", $users));
?>

<?php foreach ($users as $user): ?>

  <?php
  $user = explode('/', $user);
  $id = (int)$user[0];
  $phone = (int)$user[1];
  ?>

  <div class="input-group mb-3" id="user-<?php echo $phone; ?>"
       data-id="<?php echo $id; ?>" data-user="<?php echo $phone; ?>">
    <span class="input-group-text"><code><?php echo $id; ?></code></span>
    <input class="form-control" type="text" name="<?php echo $phone; ?>" value="<?php echo $phone; ?>"
           aria-label="<?php echo $i18n['user.phone']; ?>" readonly>
  </div>

<?php endforeach; ?>
