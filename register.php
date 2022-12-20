<?php

require_once("config.php");

if(isset($_POST['register'])){

    // menyiapkan query
    $sql = "INSERT INTO users (name, email, password, tanggal_lahir, jenis_kelamin, no_whatsapp, alamat, pekerjaan) 
            VALUES (:name, :email, :password, :tanggal_lahir, :jenis_kelamin. :no_whatsapp, :alamat, :pekerjaan )";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":email" => $email,
		":password" => $password,
		":tanggal_lahir"=>$tanggal_lahir,
		":jenis_kelamin"=>$jenis_kelamin,
		":no_whatsapp"=>$no_whatsapp,
		":alamat"=>$alamat,
		":pekerjaan"=>$pekerjaan,
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER AKUN</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>
		
        <form action="" method="POST">

            <div class="form-group">
                <label for="name">Nama </label>
                <input class="form-control" type="text" name="name" placeholder="Nama kamu" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>
			
            <div class="form-group">
                <label for="email">Tanggal Lahir</label>
                <input class="datepicker" type="text" name="Tanggal_Lahir" placeholder="Tanggal Lahir" />
            </div>
			
			<div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin </label>
                <p><input class="radio" type="radio" name="jenis_kelamin" value="Peria" placeholder="Jenis Kelamin" /></p>
				<p><input class="radio" type="radio" name="jenis_kelamin" value="Perempuan" placeholder="Jenis Kelamin" /></p>
            </div>
			
			<div class="form-group">
                <label for="nomer_whatsapp">Nomer Whatsapp</label>
                <input class="form-control" type="text" name="nomer_whatsapp" placeholder="Nomer_Whatsapp" />
            </div>
			
			<div class="form-group">
                <label for="alamat">Alamat</label>
                <input class="form-control" type="text" name="alamat" placeholder="Alamat" />
            </div>
			
			<div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input class="form-control" type="text" name="pekerjaan" placeholder="Pekerjaan" />
            </div>
			
			
            <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="C:\xampp\htdocs\IMPL\arsip/ok.PGN />
        </div>

    </div>
</div>

</body>
</html>
