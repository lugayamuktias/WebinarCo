<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/css/stylewebinar.css">
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
            <h1>Daftar Peserta</h1>
            <div class="txtb">
                <label>Nama :</label>
                <input type="text" name="" value="" placeholder="Your Name">
            </div>

            <div class="txtb">
                <label>Alamat:</label>
                <input type="text" name="" value="" placeholder="Your Address">
            </div>

            <div class="txtb">
                <label>Pekerjaan:</label>
                <input type="text" name="" value="" placeholder="Your Job">
            </div>

            <div class="column">
                <div class="txtb">
                    <label>Tanggal Lahir :</label>
                    <input type="date" name="tanggalMulai" value="" placeholder="">
                </div>

                <div class="txtb">
                    <label>Nomer Handphone :</label>
                    <input type="tel" name="noTelp" maxlength="13" size="13" placeholder="1234-5678-9101"
                        pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                </div>

                <div class="txtb">
                    <label>Jenis Kelamin : </label>
                    <div class="type-event">
                        <input type="radio" id="male" name="gender" value="Laki - Laki" required="" />
                        <label for="male">Laki - Laki</label>
                    </div>
                    <div class="type-event">
                        <input type="radio" id="female" name="gender" value="Perempuan" required="" />
                        <label for="female">Perempuan</label>
                    </div>
                </div>
            </div>

            <div class="txtb">
                <label>Kode Webinar :</label>
                <input type="text" name="" value="" maxlength="5" size="5" placeholder="Code Webinar">
            </div>

            <div class="txtb">
                <label>Judul Webinar :</label>
                <input list="daftarWebinar">
                <datalist id="daftarWebinar">
                    <option value="Webinar 1">
                    <option value="Webinar 2">
                    <option value="Webinar 3">
                    <option value="Webinar 4">
                    <option value="Webinar 5">
                </datalist>
            </div>

            <div class="btn">
                <a href="webinarUser.php"><strong>Back</strong></a>
                <a href="#"><strong>Daftar Webinar</strong></a>
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