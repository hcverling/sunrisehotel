<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunrise Hotel - Staycations & Resort</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <script>

    </script>
</head>
<body>
    <div class="popup" id="popup">
        <span class="close">&times;</span>
        <h2>Test Popup</h2>
        <ul id="warning-message">

        </ul>
    </div>

    <header class="header">
        <div class="container-fluid">
            <div class="row vertical-center">
                <div class="col-lg-9">
                    <div class="logo">
                        <img src="<?php echo base_url('assets/images/sunrise-logo.png'); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <form action="" method="get">
                        <input type="text" name="src" id="src" placeholder="Cari di Sunsrise Hotel">
                    </form>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navigation">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link <?php if($page == ''){ echo 'active'; } ?>" aria-current="page" href="<?php echo base_url() ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if($page == 'about'){ echo 'active'; } ?>" href="<?php echo base_url('about') ?>">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if($page == 'rooms'){ echo 'active'; } ?>" href="<?php echo base_url('rooms') ?>">Our Rooms</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if($page == 'blog'){ echo 'active'; } ?>" href="<?php echo base_url('blog') ?>">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if($page == 'reservation'){ echo 'active'; } ?>" href="<?php echo base_url('reservation') ?>">Reservation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if($page == 'navigation'){ echo 'active'; } ?>" href="<?php echo base_url('navigation') ?>">Navigation Management</a>
                  </li>  
                </ul>
                
              </div>
            </div>
        </nav>    
    </header>

    <?php echo $this->renderSection('content'); ?>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row vertical-center">
                <div class="col-lg-2">
                    <div class="logo">
                        <img src="<?php echo base_url('assets/images/sunrise-logo.png'); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-10">
                    Sunrise Hotel is Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum ex omnis a ipsam facilis, in nesciunt ducimus. Quasi neque sed, saepe omnis quidem, sunt necessitatibus eaque molestiae magni amet vitae numquam labore soluta itaque minima esse suscipit. Eius iure corrupti ipsa animi quasi, saepe esse? Ex nesciunt soluta doloremque. Ipsa.
                </div>
            </div>
            
            <div class="text-center p-20">
                &copy; 2024 Sunrise Hotel
            </div>
        </div>

           
        
        
    </footer>

    <script src="<?php echo base_url('assets/js/jquery-3.7.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js'); ?>"></script>
    <!--script src="<?php //echo base_url('assets/js/script.js'); ?>"></script-->
    <script>
        $(document).ready(function(){
            <?php if(isset($_GET['status']) && $_GET['status'] == 'berhasil'){ ?>
                $("<div class='alert alert-success'>Selamat, proses reservasi berhasil</div>").insertAfter($("#warning-message"));
                $("#popup").fadeIn();
            <?php } ?>
        });
    </script>
</body>
</html>