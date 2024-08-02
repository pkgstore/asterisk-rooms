<!doctype html>
<?php
  $srvIp = getHostByName(getHostName());
?>
<html class="h-100" lang="en" data-bs-theme="auto">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Конференции (<?php echo $srvIp; ?>)</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="fonts.min.css">
  <link rel="stylesheet" href="main.css">
</head>
<body class="d-flex flex-column h-100 bg-body-secondary">
<header>
  <nav class="navbar bg-light border-bottom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Конференции (<?php echo $srvIp; ?>)</a>
    </div>
  </nav>
</header>
<main class="container py-5">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
    <?php
    $count = shell_exec(getcwd() . '/room.count.sh');
    $l = 0;
    for ($i = 0; $i < $count; $i++):
      $l = $l + 1;
      $room[$i] = (int)shell_exec(getcwd() . "/room.name.sh $l");
      ?>
      <div class="col">
        <div id="room-<?php echo $room[$i]; ?>" class="card room" data-room="<?php echo $room[$i]; ?>">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <div class="flex-grow-1 ext-name">
                <h5><?php echo $room[$i]; ?></h5>
              </div>
              <form class="room-kick" action="room.kick.sh.php" method="post">
                <input type="hidden" name="room" value="<?php echo $room[$i]; ?>">
                <button title="Удалить ВСЕХ участников" type="submit" class="btn btn-danger btn-sm">
                  <i class="fas fa-xmark fa-fw"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="card-body"></div>
          <div class="card-footer">
            <form class="user-kick" action="user.kick.sh.php" method="post">
              <input type="hidden" name="room" value="<?php echo $room[$i]; ?>">
              <div class="input-group">
                <input type="number" class="form-control" name="user" min="0" step="1" placeholder="Введите ID участника..." required>
                <button title="Удалить участника" type="submit" class="btn btn-outline-danger">
                  <i class="fas fa-user-xmark fa-fw"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</main>
<footer class="mt-auto border-top bg-body-tertiary">
  <div class="section py-3 bg-body">
    <div class="container">
      <div class="row row-cols-1 row-cols-lg-2 small text-body-secondary align-items-center">
        <div class="col text-center text-lg-start">
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <div>Yuri Dunaev &copy; <?php echo date('Y'); ?></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="jquery.min.js" defer></script>
<script src="main.js" defer></script>
</body>
</html>
