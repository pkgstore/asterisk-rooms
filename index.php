<!doctype html>

<?php
$srvIp = getHostByName(getHostName());
$i18n = isset($_GET['lang']) ? $_GET['lang'] : 'ru';
$i18n = require __DIR__ . '/i18n/' . $i18n . '.php';
?>

<html class="h-100" lang="en" data-bs-theme="auto">
<head><?php require __DIR__ . '/index.head.php'; ?></head>
<body class="d-flex flex-column h-100">
<header><?php require __DIR__ . '/index.header.php'; ?></header>
<main class="container py-5">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
    <?php require __DIR__ . '/room.list.php' ?>
  </div>
</main>
<footer class="mt-auto border-top bg-body-tertiary"><?php require __DIR__ . '/index.footer.php'; ?></footer>
<script src="assets/js/bootstrap.bundle.min.js" defer></script>
<script src="assets/js/main.min.js" defer></script>
</body>
</html>
