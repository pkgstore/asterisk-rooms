<div class="section py-3 bg-body-secondary">
  <div class="container">
    <div class="row row-cols-1 row-cols-lg-2 align-items-center text-body-secondary text-center small">
      <div class="col text-lg-start">
        <ul class="list-inline mb-0">
          <li class="list-inline-item">
            <div>
              <?php
              $cr = 'PGEgaHJlZj0iaHR0cHM6Ly9kdW5hZXYuZGV2LyIgdGFyZ2V0PSJfYmxhbmsiPll1cmkgRHVuYWV2PC9hPg==';
              $heart = '<i class="fas fa-heart text-danger"></i>';
              printf("%s %s %s %s", $i18n['made_with'], $heart, $i18n['by'], base64_decode($cr));
              ?>
            </div>
            <div>
              &copy; <?php echo date('Y'); ?>
              <?php
              $cr = 'PGEgaHJlZj0iaHR0cHM6Ly9mZG4uaW0vIiB0YXJnZXQ9Il9ibGFuayI+Rm91bmRhdGlvbiBJTTwvYT4=';
              $version = file_get_contents(__DIR__ . '/VERSION');
              echo base64_decode($cr) . ' | v' . $version;
              ?>
            </div>
          </li>
        </ul>
      </div>
      <div class="col text-lg-end">
        <ul class="list-inline mb-0">
          <li class="list-inline-item dropup">
            <button class="btn btn-sm dropdown-toggle ui-theme" type="button"
                    title="<?php echo $i18n['theme.theme']; ?>" data-bs-toggle="dropdown"
                    aria-expanded="false" aria-label="<?php echo $i18n['theme.switch']; ?>">
              <i class="fas fa-circle-half-stroke fa-fw"></i>
            </button>
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
          <li class="list-inline-item dropup">
            <button class="btn btn-sm dropdown-toggle" type="button"
                    title="<?php echo $i18n['languages']; ?>" data-bs-toggle="dropdown"
                    aria-expanded="false" aria-label="<?php echo $i18n['languages']; ?>">
              <i class="fas fa-language fa-fw"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow">
              <li><a class="dropdown-item" href="?lang=ru" hreflang="ru"><?php echo $i18n['languages.ru']; ?></a></li>
              <li><a class="dropdown-item" href="?lang=en" hreflang="en"><?php echo $i18n['languages.en']; ?></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
