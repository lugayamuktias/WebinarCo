<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="stylewebinar.css">
    <title>WebinarCo</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="inner-widht">
            <a href="#home" class="webinarco">WEBINARCO</a>
            <div class="navbar-menu">
                <a href="#home">HOME</a>
                <a href="#webinar">WEBINAR</a>
                <a href="#about">ABOUT</a>
                <a href="#logout">LOGOUT</a>
            </div>
        </div>
    </nav>

    <form action="">
        <div class="formWebinar">
            <h1>Tambah Webinar</h1>
            <div class="txtb">
                <label>Nama Webinar :</label>
                <input type="text" name="" value="" placeholder="Nama Webinar">
            </div>

            <div class="txtb">
                <label>Pembicara :</label>
                <input type="text" name="" value="" placeholder="Pembicara">
            </div>

            <div class="txtb">
                <label>Topik :</label>
                <input type="text" name="" value="" placeholder="Topik Webinar">
            </div>

            <div class="column">
                <div class="txtb">
                    <label>Tanggal Mulai :</label>
                    <input type="date" name="tanggalMulai" value="" placeholder="Enter Your Phone Number">
                </div>

                <div class="txtb">
                    <label>Waktu Mulai :</label>
                    <input type="time" name="waktuMulai" value="" placeholder="Enter Your Phone Number">
                </div>

                <div class="txtb">
                    <label>Durasi (Menit) :</label>
                    <input type="number" max="1440" step="1" min="1" value="1">
                </div>

                <div class="txtb">
                    <label>Batas Peserta (Orang) :</label>
                    <input type="number" max="2000" step="1" min="1" value="1">
                </div>
            </div>

            <div class="txtb">
                <label>Type Event :</label>
                <div class="type-event">
                    <input type="radio" id="gratis" name="type-event" value="Gratis (tanpa sertifikat)" required="" />
                    <label for="gratis">Gratis (tanpa sertifikat)</label>
                </div>
                <div class="type-event">
                    <input type="radio" id="gratis-sert" name="type-event" value="Gratis + sertifikat" required="" />
                    <label for="gratis-sert">Gratis + sertifikat</label>
                </div>
            </div>

            <div class="txtb">
                <label>Poster Webinar :</label>
                <input type="file" class="custom-file-input" id="customFile" name="filename">
            </div>

            <div class="btn">
                <a href="webinarAdmin.php"><strong>Back</strong></a>
                <a href="#"><strong>Submit Webinar</strong></a>
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