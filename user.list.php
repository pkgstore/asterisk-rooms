<?php
if (!isset($_GET['room']) && !is_numeric($_GET['room'])) {
  echo 'Room number is not correct!';
  exit(1);
}

$room = (int)$_GET['room'];
$users = shell_exec(getcwd() . '/user.list.sh ' . escapeshellarg($room));
$users = array_filter(explode("\n", $users));
?>

<?php foreach ($users as $user): ?>
  <?php $user = explode('/', $user); ?>
  <div class="input-group mb-3">
    <span class="input-group-text"><code><?php echo (int)$user[0]; ?></code></span>
    <input class="form-control" type="text" name="<?php echo (int)$user[1]; ?>" value="<?php echo (int)$user[1]; ?>"
           aria-label="<?php echo $i18n['user.phone']; ?>" readonly>
  </div>
<?php endforeach; ?>
