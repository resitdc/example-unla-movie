<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style/resit-style.css') ?>">
  <title><?= isset($title) ? $title : "THIS IS TITLE" ?></title>
</head>
<body>
  <div id="resit-fixed-menu">
    <ul class="resit-list-menu">
      <li>
        <a href="<?= site_url("home"); ?>">Home</a>
      </li>
      <li>
        <a href="<?= site_url("add"); ?>">Add Movie</a>
      </li>
      <li>
        <a href="">List Movie</a>
      </li>
      <li>
        <a href="">Web Info</a>
      </li>
    </ul>
  </div>
  <nav id="resit-navbar">
    <div class="resit-container">
      <div class="resit-navbar-row">
        <div class="resit-navbar-brand">
          <a href="<?= site_url() ?>">
            <img src="<?= base_url('assets/brand.png') ?>" class="resit-brand-image" />
          </a>
        </div>
        <div class="resit-navbar-menu">
          <div class="resit-navbar-search">
            <form method="GET" action="" autocomplete="off">
              <input type="text" placeholder="Search movies here..." name="s" class="resit-navbar-search-input" autocomplete="false" required/>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="resit-home">
    <?= $contents; ?>
  </div>
  <footer id="resit-footer">
    <a href="https://instagram.com/resitdc" class="resit-credits">Powered by Restu D. Cahyo</a>
  </footer>
</body>
</html>