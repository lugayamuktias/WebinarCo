<?php if(in_groups('admin')) :?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
    <!-- Custom styles for this template-->
    <link href="<?= base_url();?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="<?= base_url();?>https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <nav class="navbar">
            <div class="nav-content">
                <div class="logo">
                    <a href="#">WEBINARCO</a>
                </div>
                <ul>
                    <li class="active"><a href="<?= base_url('login/index');?>">HOME</a></li>
                    <li><a href="<?= base_url('admin/webinaradmin');?>">WEBINAR</a></li>
                    <li><a href="<?= base_url('admin/aboutadmin');?>">ABOUT</a></li>
                    <li><a href="<?= base_url('logout');?>">LOGOUT</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- banner -->
    <section class="banner">
        <h2>SELAMAT DATANG DI WEBINARCO, ADMIN!</h2>
    </section>
    <!-- about -->
    <section class="Webinar">
        <div class="container">
        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="container">
            &copy; 2022 | Created & Designed By <a href="#">WebinarCo</a>
        </div>
    </footer>

    <script type="text/javascript">
    $(document).ready(function() {
        $(".bg-loader").hide();
    })
    </script>
</body>

</html>
<?php endif; ?>

<?php if(in_groups('user')) :?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
    <!-- Custom styles for this template-->
    <link href="<?= base_url();?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="<?= base_url();?>https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <nav class="navbar">
            <div class="nav-content">
                <div class="logo">
                    <a href="#">WEBINARCO</a>
                </div>
                <ul>
                    <li class="active"><a href="<?= base_url('login/index');?>">HOME</a></li>
                    <li><a href="<?= base_url('peserta/webinarpeserta');?>">WEBINAR</a></li>
                    <li><a href="<?= base_url('peserta/aboutpeserta');?>">ABOUT</a></li>
                    <li><a href="<?= base_url('logout');?>">LOGOUT</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- banner -->
    <?php if(in_groups('user')) :?>
    <section class="banner">
        <h2>SELAMAT DATANG DI WEBINARCO, USER!</h2>
    </section>
    <?php endif; ?>
    <!-- about -->
    <section class="Webinar">
        <div class="container">
        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="container">
            &copy; 2022 | Created & Designed By <a href="#">WebinarCo</a>
        </div>
    </footer>

    <script type="text/javascript">
    $(document).ready(function() {
        $(".bg-loader").hide();
    })
    </script>
</body>

</html>
<?php endif; ?>