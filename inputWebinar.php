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
    $db  = "webinarcowebinar";
    $host = "localhost";

    $kon = mysqli_connect($host, $user, $password);
    $hasil = mysqli_select_db($kon, $db);

    /*$gambar = $POST['gambar'];
    $namaevent = $POST['nama_event'];
    $tipeevent = $POST['tipe_event'];
    $mulai = date('Y-m-d H:i:s');
    $durasi = $POST['durasi'];
    $pemateri = $POST['pemateri'];
    $topik = $POST['topik'];
    $waktumulai = $POST['waktu_mulai'];*/

    $nama_webinar = $_POST['nama_webinar'];
    $pembicara = $_POST['pembicara'];
    $topik_webinar = $_POST['topik_webinar'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $waktu_mulai = $_POST['waktu_mulai'];
    $durasi = $_POST['durasi'];
    $batas_peserta = $_POST['batas_peserta'];
    $type_event = $_POST['type_event'];
    $gambar = $_POST['gambar'];

    $dir = "Gambar/Webminar/";
    /*$sql="insert into detailevent (gambar, nama_event, tipe_event, mulai, durasi, pemateri, topik, waktu_mulai) values
                ('$gambar','$namaevent','$tipeevent', '$mulai', '$durasi', '$pemateri', '$topik', '$waktumulai')";*/

    $sql = "INSERT INTO detailevent SET nama_webinar='$nama_webinar',pembicara='$pembicara',topik_webinar='$topik_webinar',tanggal_mulai='$tanggal_mulai',waktu_mulai='$waktu_mulai',durasi='$durasi',batas_peserta='$batas_peserta',type_event='$type_event',gambar='$gambar'";

    if ($hasil = mysqli_query($kon, $sql)) {
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