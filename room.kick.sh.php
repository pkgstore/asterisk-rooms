<?php

if (isset($_POST['room'])) {
  shell_exec(getcwd() . '/room.kick.sh ' . $_POST['room']);
}
