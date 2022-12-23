<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/stylewebinar.css">
    <title>WebinarCo</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="inner-widht">
            <a href="#home" class="webinarco">WEBINARCO</a>
            <div class="navbar-menu">
				<a href="<?= base_url('login/index');?>">HOME</a>
				<a href="<?= base_url('admin/webinaradmin');?>">WEBINAR</a>
				<a href="<?= base_url('admin/aboutadmin');?>">ABOUT</a>
				<a href="<?= base_url('logout');?>">LOGOUT</a>
            </div>
        </div>
    </nav>

    <form action href="inputWebinar.php" method="POST" enctype="multipart/form-data">
        <div class="formWebinar">
            <h1>Tambah Webinar</h1>
            <div class="txtb">
                <label>Nama Webinar :</label>
                <input type="text" name="nama_webinar" placeholder="Nama Webinar">
            </div>

            <div class="txtb">
                <label>Pembicara :</label>
                <input type="text" name="pembicara" placeholder="Pembicara">
            </div>

            <div class="txtb">
                <label>Topik :</label>
                <input type="text" name="topik_webinar" placeholder="Topik Webinar">
            </div>

            <div class="column">
                <div class="txtb">
                    <label>Tanggal Mulai :</label>
                    <input type="date" name="tanggal_mulai" placeholder="Enter Your Phone Number">
                </div>

                <div class="txtb">
                    <label>Waktu Mulai :</label>
                    <input type="time" name="waktu_mulai" placeholder="Enter Your Phone Number">
                </div>

                <div class="txtb">
                    <label>Durasi (Menit) :</label>
                    <input type="number" name="durasi" max="1440" step="1" min="1" value="1">
                </div>

                <div class="txtb">
                    <label>Batas Peserta (Orang) :</label>
                    <input type="number" name="batas_peserta" max="2000" step="1" min="1" value="1">
                </div>
            </div>

            <div class="txtb">
                <label>Type Event :</label>
                <div class="type-event">
                    <input type="radio" id="gratis" name="type_event" value="Gratis (tanpa sertifikat)" required="" />
                    <label for="gratis">Gratis (tanpa sertifikat)</label>
                </div>
                <div class="type-event">
                    <input type="radio" id="gratis-sert" name="type_event" value="Gratis + sertifikat" required="" />
                    <label for="gratis-sert">Gratis + sertifikat</label>
                </div>
            </div>

            <div class="txtb">
                <label>Poster Webinar :</label>
                <input type="file" class="custom-file-input" id="customFile" name="gambar">
            </div>

            <div class="btn">
                <a href="<?= base_url('admin/webinaradmin');?>"><strong>Back</strong></a>
                <button type="submit" name="Simpan"><strong>Submit Webinar</strong></button>
            </div>
        </div>
    </form>

    <!-- Footer -->
    <!-- <footer>
        <div class="inner-widht">
            <div class="copyright">
                &copy; 2022 | Created & Designed By <a href="#">WebinarCo</a>
            </div>
        </div>
    </footer> -->

</body>

</html>