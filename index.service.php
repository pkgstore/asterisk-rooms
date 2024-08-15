<?php
if ($_SERVER['PHP_AUTH_USER'] !== 'admin') {
  return;
}
?>

<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" title="<?php echo $i18n['core.service']; ?>"
     href="#" role="button" data-bs-toggle="dropdown"
     aria-expanded="false" aria-label="<?php echo $i18n['core.service']; ?>">
    <i class="fas fa-power-off fa-fw"></i>
  </a>
  <ul class="dropdown-menu dropdown-menu-end shadow">
    <li>
      <a class="dropdown-item core-power" href="core.service.php?action=reload">
        <i class="fas fa-rotate fa-fw"></i>
        <span><?php echo $i18n['core.reload']; ?></span>
      </a>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>
    <li>
      <a class="dropdown-item core-power" href="core.service.php?action=restart">
        <i class="fas fa-rotate-left fa-fw"></i>
        <span><?php echo $i18n['core.restart']; ?></span>
      </a>
    </li>
    <li>
      <a class="dropdown-item core-power" href="core.service.php?action=stop">
        <i class="fas fa-power-off fa-fw"></i>
        <span><?php echo $i18n['core.stop']; ?></span>
      </a>
    </li>
  </ul>
</li>
