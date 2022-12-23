<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/stylewebinar.css">
    <title>Webinar Admin</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="inner-widht">
            <a href="#home" class="webinarco">WEBINARCO | ADMIN</a>
            <div class="navbar-menu">
				<a href="<?= base_url('login/index');?>">HOME</a>
				<a href="<?= base_url('admin/webinaradmin');?>">WEBINAR</a>
				<a href="<?= base_url('admin/aboutadmin');?>">ABOUT</a>
				<a href="<?= base_url('logout');?>">LOGOUT</a>
            </div>
        </div>
    </nav>

    <!-- Detail Webinar -->
    <section id="kelolawebinar">
        <div class="inner-widht">
            <div class="buttons">
                 <a href="<?= base_url('event/tambahwebinar');?>"><h3>+Tambah Webinar</h3></a>
            </div>
            <div class="detailwebinar">
                <div class="webinars">
                    <a href="/"></a><img src="/img/webinar2.jpg" alt="" class="picwebinar"></a>
                    <h4>Webinar 1</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis incidunt fugit aut? Quod
                        nemo sit quo, numquam aliquam earum odit debitis vel aut, unde animi, consequuntur
                        necessitatibus amet. Alias!</p>

                    <div class="buttons2">
                        <a href="<?= base_url('event/editwebinar');?>"><strong>Edit Webinar</strong></a>
                        <a href="#"><strong>Hapus Webinar</strong></a>
                    </div>
                </div>

                <div class="webinars">
                    <a href="/"><img src="/img/webinar2.jpg" alt="" class="picwebinar"></a>
                    <h4>Webinar 2</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis incidunt fugit aut? Quod
                        nemo sit quo, numquam aliquam earum odit debitis vel aut, unde animi, consequuntur
                        necessitatibus amet. Alias!</p>
                    <div class="buttons2">
                        <a href="formEditWebinar.php"><strong>Edit Webinar</strong></a>
                        <a href="#"><strong>Hapus Webinar</strong></a>
                    </div>
                </div>

                <div class="webinars">
                    <a href="/"><img src="/img/webinar2.jpg" alt="" class="picwebinar"></a>
                    <h4>Webinar 3</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis incidunt fugit aut? Quod
                        nemo sit quo, numquam aliquam earum odit debitis vel aut, unde animi, consequuntur
                        necessitatibus amet. Alias!</p>
                    <div class="buttons2">
                        <a href="formEditWebinar.php"><strong>Edit Webinar</strong></a>
                        <a href="#"><strong>Hapus Webinar</strong></a>
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