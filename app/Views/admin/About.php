<?php if(in_groups('admin')) :?>
<!DOCTYPE html>
<html>

<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="Stylesheet" type="text/css" href="<?= base_url();?>/css/About.css">

<body>
    <section>
        <nav class="navbar">
            <div class="nav-content">
                <div class="logo">
                    <a href="<?= base_url();?>/#">WEBINARCO</a>
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

    <section class="container">

        <h1>OUR WEBINARCO TEAM!</h1>

        <div class="photo-about">
            <ul class="photo">
                <li>
                    <img src="/img/default1.jpg">
                    <span>Irfan Maulana C.<br>3411171018</span>
                </li>
                <li>
                    <img src="/img/default1.jpg">
                    <span>Gheral Naza G.<br>3411201003</span>
                </li>
                <li>
                    <img src="/img/default1.jpg">
                    <span>Irgo Satura P.S.<br>3411201010</span>
                </li>
                <li>
                    <img src="/img/default1.jpg">
                    <span>Setyo Arie A.<br>3411201022</span>
                </li>
                <li>
                    <img src="/img/Foto-Lugaya.jpg">
                    <span>Lugaya Mukti A.<br>3411201025</span>
                </li>
                <div class="clear"></div>
            </ul>
        </div>
    </section>

</body>

</html>
<?php endif; ?>