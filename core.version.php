<?php
$version = shell_exec(getcwd() . '/core.version.sh');
echo 'v' . $version;
