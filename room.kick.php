<?php

if (!isset($_POST['room']) && !is_numeric($_POST['room'])) {
  echo 'Room number is not correct!';
  exit(1);
}

$room = escapeshellarg((int)$_POST['room']);

shell_exec(getcwd() . "/room.kick.sh '" . $room . "'");
