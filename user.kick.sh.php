<?php

if (isset($_POST['room']) && isset($_POST['user'])) {
  shell_exec(getcwd() . '/user.kick.sh ' . $_POST['room'] . ' ' . $_POST['user']);
}
