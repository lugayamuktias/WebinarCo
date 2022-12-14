<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url();?>/css/detailWebinar.css">

    <title>Webinar User</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="inner-widht">
            <a href="#home" class="webinarco">WEBINARCO</a>
            <div class="navbar-menu">
                <a class="active"><a href="<?= base_url('login/index');?>">HOME</a>
                    <a href="<?= base_url('peserta/webinarpeserta');?>">WEBINAR</a>
                    <a href="<?= base_url('peserta/aboutpeserta');?>">ABOUT</a>
                    <a href="<?= base_url('logout');?>">LOGOUT</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <section id="kelolawebinar">
        <div class="inner-widht">
            <div class="title">
                <h2>WELCOME USER!</h2>
            </div>
            <div class="detailwebinar">
                <div class="webinars">

                    <a href="<?= base_url('peserta/LihatWebinar');?>"><img src="/img/webinar2.jpg" alt=""
                            class="picwebinar"></a>

                    <h4>Webinar 1</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis incidunt fugit aut? Quod
                        nemo sit quo, numquam aliquam earum odit debitis vel aut, unde animi, consequuntur
                        necessitatibus amet. Alias!</p>

                    <div class="buttons2">
                        <a href="<?= base_url('peserta/TambahPeserta');?>"><strong>Daftar Webinar</strong></a>
                    </div>
                </div>

                <div class="webinars">
                    <a href="<?= base_url();?>//"><img src="/img/webinar2.jpg" alt="" class="picwebinar"></a>

                    <h4>Webinar 2</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis incidunt fugit aut? Quod
                        nemo sit quo, numquam aliquam earum odit debitis vel aut, unde animi, consequuntur
                        necessitatibus amet. Alias!</p>

                    <div class="buttons2">
                        <a href="<?= base_url('peserta/TambahPeserta');?>"><strong>Daftar Webinar</strong></a>
                    </div>
                </div>

                <div class="webinars">
                    <a href="<?= base_url();?>//"><img src="/img/webinar2.jpg" alt="" class="picwebinar"></a>

                    <h4>Webinar 3</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis incidunt fugit aut? Quod
                        nemo sit quo, numquam aliquam earum odit debitis vel aut, unde animi, consequuntur
                        necessitatibus amet. Alias!</p>

                    <div class="buttons2">
                        <a href="<?= base_url('peserta/TambahPeserta');?>"><strong>Daftar Webinar</strong></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="inner-widht">
            <div class="copyright">
                &copy; 2022 | Created & Designed By <a href="#">WebinarCo</a>
            </div>
        </div>
    </footer>

</body>

</html>