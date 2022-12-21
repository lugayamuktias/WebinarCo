<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/css/stylewebinar.css">
    <title>Test</title>
</head>

<body>
    <!-- Navbar -->
    <!-- <nav class="navbar">
        <div class="inner-widht">
            <a href="#home" class="webinarco">WEBINARCO</a>
            <div class="navbar-menu">
                <a href="#home">HOME</a>
                <a href="#webinar">WEBINAR</a>
                <a href="#about">ABOUT</a>
                <a href="#logout">LOGOUT</a>
            </div>
        </div>
    </nav> -->

    <?php 
        $user = "root";
        $password  = "";
        $db  = "kp";
        $host = "localhost";
        
        $kon=mysqli_connect($host, $user, $password);
        $hasil=mysqli_select_db($kon,$db);

        $gambar = $POST['gambar'];
        $namaevent = $POST['nama_event'];
        $tipeevent = $POST['tipe_event'];
        $mulai = date('Y-m-d H:i:s');
        $durasi = $POST['durasi'];
        $pemateri = $POST['pemateri'];
        $topik = $POST['topik'];
        $waktumulai = $POST['waktu_mulai'];

        $dir = "Gambar/Webminar/";
        $sql="insert into detailevent (gambar, nama_event, tipe_event, mulai, durasi, pemateri, topik, waktu_mulai) values
                ('$gambar','$namaevent','$tipeevent', '$mulai', '$durasi', '$pemateri', '$topik', '$waktumulai')";

                $hasil=mysqli_query($kon,$sql);

            if($hasil) {
            echo "Data berhasil disimpan";
            header('Location: formTambahWebinar.php');
            exit;

            } else {
            echo "Data gagal disimpan";
            exit;
        }
    ?>
</body>

</html>