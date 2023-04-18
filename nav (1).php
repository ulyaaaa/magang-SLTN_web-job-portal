<!DOCTYPE html>
<html lang=”en”>
  <head>
    <meta charset=”utf-8″>
    <meta http-equiv=”X-UA-Compatible” content=”IE=edge”>
    <meta name=”viewport” content=”width=device-width, initial-scale=1″>
    <title>Navbar</title>

    <link href=”css/bootstrap.min.css” rel=”stylesheet”>

  </head>
  <body>
    
    <div class=”container”>
        <div class=”navbar navbar-default”>
            <div class=”container-fluid”>

                <div class=”navbar-header”>
                    <button type=”button” class=”navbar-toggle” data-toggle=”collapse” data-target=”#mynavbar-content”>
                        <span class=”icon-bar”></span>
                        <span class=”icon-bar”></span>
                        <span class=”icon-bar”></span>
                    </button>
                    <a class=”navbar-brand” href=”#”>Proweb</a>
                </div><!– /navbar-header –>
                    
                <div class=”collapse navbar-collapse” id=”mynavbar-content”>
                    <ul class=”nav navbar-nav”>
                        <li class=”active”><a href=”#”>Home</a></li>
                        <li><a href=”#”>About</a></li>
                        <li><a href=”#”>Product</a></li>
                        <li><a href=”#”>Contact</a></li>
                    </ul>
                </div><!– /collapse navbar-collapse –>

            </div><!– /container-fluid –>
        </div><!– /navbar navbar-default –>
    </div> <!– /container –>

    <script src=”https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js”></script>
    <script src=”js/bootstrap.min.js”></script>
  </body>
</html>
<header class="header w-100 z-100 <?php echo is_singular('job') ? 'shadow-sm' : ''; ?>" id="header">
    <div class="nav-bar w-100 h-5rem <?php echo is_front_page() ? 'position-absolute' : ''; ?> container-fluid d-flex align-items-center">
        <div class="container">
            <nav class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="<?php echo site_url() ?>">
                    <img src="<?= get_theme_file_uri('./assets/images/logo.png') ?>" alt="logo" width="180" height="40"></a>
                </div>
                <ul class="nav-links d-flex align-items-center list-unstyled w-35 justify-content-between h-100">
                    <li><a href="<?php echo site_url() ?>" class="text-decoration-none fw-bold text-secondary <?php echo is_front_page() ? 'active' : ''; ?>">Beranda</a></li>
                    <li><a href="<?php echo get_post_type_archive_link( 'job' ); ?>" class="text-decoration-none fw-bold text-secondary <?php echo is_archive('job') ? 'active' : ''; ?>">Cari Lowongan</a></li>
                    <li><a href="<?php echo site_url('/kontak'); ?>" class="text-decoration-none fw-bold text-secondary <?php echo is_page('kontak') ? 'active' : ''; ?>">Kontak</a></li>
                    <li><a href="<?php echo site_url('/bantuan'); ?>" class="text-decoration-none fw-bold text-secondary <?php echo is_page('bantuan') ? 'active' : ''; ?>">Bantuan</a></li>
                </ul>
                <div class="join d-flex align-items-center">
                    <a href="<?php echo site_url('/signup'); ?>">
                        <button class="btn btn-primary pe-auto">Daftar</button>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
