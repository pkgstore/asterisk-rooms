<?php

function isNumeric($data)
{
  return filter_var($data, FILTER_VALIDATE_INT) !== false;
}

if (!isset($_POST['room']) || !isNumeric($_POST['room'])) {
  echo 'Room number is not correct!';
  exit(1);
}

$room = (int)$_POST['room'];

shell_exec(getcwd() . '/room.kick.sh ' . escapeshellarg($room));
