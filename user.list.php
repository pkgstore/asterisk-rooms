<?php

function isNumeric($data)
{
  return filter_var($data, FILTER_VALIDATE_INT) !== false;
}

if (!isset($_GET['room']) || !isNumeric($_GET['room'])) {
  echo 'Room number is not correct!';
  exit(1);
}

$room = (int)$_GET['room'];
$users = shell_exec(getcwd() . '/user.list.sh ' . escapeshellarg($room));
$users = array_filter(explode("\n", $users));

foreach ($users as $user): ?>

  <?php
  $user = explode('/', $user);
  $id = (int)$user[0];
  $phone = (int)$user[1];
  ?>

  <div class="input-group mb-3" id="user-<?php echo $phone; ?>"
       data-id="<?php echo $id; ?>" data-user="<?php echo $phone; ?>">
    <span class="input-group-text"><code><?php echo $id; ?></code></span>
    <input class="form-control" type="text" name="<?php echo $phone; ?>" value="<?php echo $phone; ?>"
           aria-label="User <?php echo $phone; ?> (<?php echo $id; ?>)" readonly>
  </div>

<?php endforeach; ?>
