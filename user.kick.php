<?php

function isNumeric($data)
{
  return filter_var($data, FILTER_VALIDATE_INT) !== false;
}

if (!isNumeric($_POST['room']) || !isNumeric($_POST['user'])) {
  echo 'Room or user number is not correct!';
  exit(1);
}

$room = (int)$_POST['room'];
$user = str_pad((int)$_POST['user'], 2, '0', STR_PAD_LEFT);

shell_exec(getcwd() . '/user.kick.sh ' . escapeshellarg($room) . ' ' . escapeshellarg($user));
