<?php

if (!isset($_POST['room']) && !isset($_POST['user'])) {
  if (!is_numeric($_POST['room']) && !is_numeric($_POST['user'])) {
    echo 'Room or user number is not correct!';
    exit(1);
  }
}

$room = (int)$_POST['room'];
$user = (int)str_pad($_POST['user'], 2, '0', STR_PAD_LEFT);

shell_exec(getcwd() . '/user.kick.sh ' . escapeshellarg($room) . ' ' . escapeshellarg($user));
