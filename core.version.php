<?php
$version = shell_exec(getcwd() . '/core.version.sh');
?>

<?php echo 'v' . $version; ?>
