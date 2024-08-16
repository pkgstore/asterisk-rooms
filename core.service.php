<?php

if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] !== 'admin') {
  echo 'Authentication required!';
  exit (1);
}

$action = $_GET['action'];
$actions = ['reload', 'restart', 'stop'];

if (!in_array($action, $actions)) {
  echo 'Action is not correct!';
  exit (1);
}

shell_exec(getcwd() . '/core.service.sh ' . escapeshellarg($action));
