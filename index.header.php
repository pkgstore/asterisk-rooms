<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <?php echo $i18n['asterisk']; ?> <code><?php echo $srvIp; ?></code> / <?php echo $i18n['conferences']; ?>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navTopBar"
            aria-controls="navTopBar" aria-expanded="false" aria-label="Переключить навигацию">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navTopBar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-lg-none ui-theme"
             href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-circle-half-stroke fa-fw"></i>
            <span><?php echo $i18n['theme.theme']; ?></span>
          </a>
          <a title="<?php echo $i18n['theme.theme']; ?>" class="nav-link dropdown-toggle d-none d-lg-block ui-theme"
             href="#" role="button" data-bs-toggle="dropdown"
             aria-expanded="false" aria-label="<?php echo $i18n['theme.switch']; ?>">
            <i class="fas fa-circle-half-stroke fa-fw"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow">
            <li>
              <button class="dropdown-item active" type="button" data-bs-theme-value="light" aria-pressed="true">
                <i class="fas fa-sun fa-fw"></i>
                <span><?php echo $i18n['theme.light']; ?></span>
              </button>
            </li>
            <li>
              <button class="dropdown-item" type="button" data-bs-theme-value="dark" aria-pressed="false">
                <i class="fas fa-moon fa-fw"></i>
                <span><?php echo $i18n['theme.dark']; ?></span>
              </button>
            </li>
            <li>
              <button class="dropdown-item" type="button" data-bs-theme-value="auto" aria-pressed="false">
                <i class="fas fa-circle-half-stroke fa-fw"></i>
                <span><?php echo $i18n['theme.auto']; ?></span>
              </button>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a title="<?php echo $i18n['languages']; ?>" class="nav-link dropdown-toggle d-lg-none"
             href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-language fa-fw"></i>
            <span><?php echo $i18n['languages']; ?></span>
          </a>
          <a title="<?php echo $i18n['languages']; ?>" class="nav-link dropdown-toggle d-none d-lg-block ui-theme"
             href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-language fa-fw"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow">
            <li><a class="dropdown-item" href="?lang=ru"><?php echo $i18n['languages.ru']; ?></a></li>
            <li><a class="dropdown-item" href="?lang=en"><?php echo $i18n['languages.en']; ?></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
