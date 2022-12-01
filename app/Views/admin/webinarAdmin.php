<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/stylewebinar.css">
    <title>WebinarCo</title>
    <link rel="stylesheet" href="/css/stylewebinar.css">
    <title>Webinar Admin</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="inner-widht">
            <a href="<?= base_url();?>/#home" class="webinarco">WEBINARCO | ADMIN</a>
            <div class="navbar-menu">
                <a href="<?= base_url();?>/#home">HOME</a>
                <a href="<?= base_url();?>/#webinar">WEBINAR</a>
                <a href="<?= base_url();?>/#about">ABOUT</a>
                <a href="<?= base_url();?>/#logout">LOGOUT</a>
            </div>
        </div>
    </nav>

    <!-- Detail Webinar -->
    <section id="kelolawebinar">
        <div class="inner-widht">
            <div class="buttons">
                <a href="<?= base_url();?>/#addwebianr">
                    <h3>+ADD WEBINAR</h3>
                </a>
            </div>
            <div class="detailwebinar">
                <div class="webinars">
                    <a href="<?= base_url();?>//"></a><img src="/img/webinar2.jpg" alt="" class="picwebinar"></a>
                    <h4>Webinar 1</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis incidunt fugit aut? Quod
                        nemo sit quo, numquam aliquam earum odit debitis vel aut, unde animi, consequuntur
                        necessitatibus amet. Alias!</p>
                    <BUtton><a href="<?= base_url();?>//" class="crudwebinar">Edit Webinar</a></BUtton>
                    <BUtton><a href="<?= base_url();?>//" class="crudwebinar">Hapus Webinar</a></BUtton>
                </div>

                <div class="webinars">
                    <a href="/"><img src="/img/webinar2.jpg" alt="" class="picwebinar"></a>
                    <h4>Webinar 2</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis incidunt fugit aut? Quod
                        nemo sit quo, numquam aliquam earum odit debitis vel aut, unde animi, consequuntur
                        necessitatibus amet. Alias!</p>
                    <BUtton><a href="<?= base_url();?>//" class="crudwebinar">Edit Webinar</a></BUtton>
                    <BUtton><a href="<?= base_url();?>//" class="crudwebinar">Hapus Webinar</a></BUtton>
                </div>

                <div class="webinars">
                    <a href="<?= base_url();?>//"><img src="/img/webinar2.jpg" alt="" class="picwebinar"></a>
                    <h4>Webinar 3</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis incidunt fugit aut? Quod
                        nemo sit quo, numquam aliquam earum odit debitis vel aut, unde animi, consequuntur
                        necessitatibus amet. Alias!</p>
                    <BUtton><a href="<?= base_url();?>//" class="crudwebinar">Edit Webinar</a></BUtton>
                    <BUtton><a href="<?= base_url();?>//" class="crudwebinar">Hapus Webinar</a></BUtton>
                </div>
            </div>
        </div>
    </section>

</body>

</html>