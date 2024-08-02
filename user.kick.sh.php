<?php

if (isset($_POST['room']) && isset($_POST['user'])) {
  if (is_numeric($_POST['room']) && is_numeric($_POST['user'])) {
    shell_exec(getcwd() . '/user.kick.sh ' . $_POST['room'] . ' ' . str_pad($_POST['user'], 2, '0', STR_PAD_LEFT));
  }
}
