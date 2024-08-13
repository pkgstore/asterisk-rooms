<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <?php echo $i18n['asterisk']; ?> <code><?php echo $srvIp; ?></code> / <?php echo $i18n['conferences']; ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navTopBar"
            aria-controls="navTopBar" aria-expanded="false" aria-label="Переключить навигацию">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navTopBar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" title=""
             href="#" role="button" data-bs-toggle="dropdown"
             aria-expanded="false" aria-label="">
            <i class="fas fa-power-off fa-fw"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow">
            <li>
              <a class="dropdown-item" href="#">
                <i class="fas fa-rotate fa-fw"></i>
                <span>Reload</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="fas fa-rotate-left fa-fw"></i>
                <span>Restart</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="fas fa-power-off fa-fw"></i>
                <span>Stop</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
