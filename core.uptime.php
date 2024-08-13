<?php
$uptime = shell_exec(getcwd() . '/core.uptime.sh');
$uptime = explode(' ', $uptime);
function isTime($data)
{
  return str_pad((int)$data, 2, '0', STR_PAD_LEFT);
}

?>

<?php echo isTime($uptime[0]) . ':' . isTime($uptime[1]) . ':' . isTime($uptime[2]); ?>
