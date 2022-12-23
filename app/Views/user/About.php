<!DOCTYPE html>
<html>

<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">

    <link rel="Stylesheet" type="text/css" href="/css/About.css">

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
    <?php if(in_groups('user')) :?>
    <section class="container">
        
        <h1>WEBINARCO TEAM!</h1>
    
    <?php endif; ?>
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

    <footer>
        <div class="copyright">
            &copy; 2022 | Created & Designed By <a href="#">WebinarCo</a>
        </div>
    </footer>
</body>

</html>