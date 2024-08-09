<?php

function isNumeric($element)
{
  return filter_var($element, FILTER_VALIDATE_INT) !== false;
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
  <?php $user = explode('/', $user); ?>
  <div class="input-group mb-3" id="user-<?php echo (int)$user[1]; ?>"
       data-id="<?php echo (int)$user[0]; ?>" data-user="<?php echo (int)$user[1]; ?>">
    <span class="input-group-text"><code><?php echo (int)$user[0]; ?></code></span>
    <input class="form-control" type="text" name="<?php echo (int)$user[1]; ?>" value="<?php echo (int)$user[1]; ?>"
           aria-label="<?php echo $i18n['user.phone']; ?>" readonly>
  </div>
<?php endforeach; ?>
