<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/detailWebinar.css">
    <title>WebinarCo</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="inner-widht">
            <a href="<?= base_url('user/index');?>" class="webinarco">WEBINARCO</a>
            <div class="navbar-menu">
                <a class="active"><a href="<?= base_url('login/index');?>">HOME</a>
                    <a href="<?= base_url('peserta/webinarpeserta');?>">WEBINAR</a>
                    <a href="<?= base_url('peserta/aboutpeserta');?>">ABOUT</a>
                    <a href="<?= base_url('logout');?>">LOGOUT</a>
            </div>
        </div>
    </nav>

<?= form_open('Peserta/SimpanPeserta')?>
    <form action="">
        <div class="formWebinar">
            <h1>Daftar Peserta</h1>
            <div class="txtb">
                <label>Nama :</label>
                <input type="text" name="namapeserta" value="" placeholder="Your Name">
            </div>

            <div class="txtb">
                <label>Alamat:</label>
                <input type="text" name="alamat" value="" placeholder="Your Address">
            </div>

            <div class="txtb">
                <label>Pekerjaan:</label>
                <input type="text" name="pekerjaan" value="" placeholder="Your Job">
            </div>

            <div class="column">
                <div class="txtb">
                    <label>Tanggal Lahir :</label>
                    <input type="date" name="tanggalLahir" value="" placeholder="">
                </div>

                <div class="txtb">
                    <label>Nomer Handphone :</label>
                    <input type="tel" name="noTelp" maxlength="13" size="13" placeholder="1234-5678-9101">
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
                <input type="text" name="code" value="" maxlength="5" size="5" placeholder="Code Webinar">
            </div>

            <div class="txtb">
                <label>Judul Webinar :</label>
                <input list="daftarWebinar" name="namawebinar">
                <datalist id="daftarWebinar">
                </datalist>
            </div>

            <div class="btn">
                <a href="<?= base_url('user/webinaruser');?>"><strong>Back</strong></a>
                 <button type="submit" name="Simpan"><strong>Submit</strong></button>
            </div>
        </div>
    </form>
<?= form_close()?>
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