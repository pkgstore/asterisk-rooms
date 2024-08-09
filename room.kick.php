<?php

function isNumeric($element)
{
  return filter_var($element, FILTER_VALIDATE_INT) !== false;
}

if (!isNumeric($_POST['room'])) {
  echo 'Room number is not correct!';
  exit(1);
}

$room = (int)$_POST['room'];

shell_exec(getcwd() . '/room.kick.sh ' . escapeshellarg($room));
