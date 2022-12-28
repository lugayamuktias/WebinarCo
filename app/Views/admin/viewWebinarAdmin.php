<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/detailWebinar.css">
    <title>View Webinar Admin</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="inner-widht">
            <a href="#home" class="webinarco">WEBINARCO | ADMIN</a>
            <div class="navbar-menu">
                <a class="active"><a href="<?= base_url('login/index');?>">HOME</a>
                    <a href="<?= base_url('admin/webinaradmin');?>">WEBINAR</a>
                    <a href="<?= base_url('admin/aboutadmin');?>">ABOUT</a>
                    <a href="<?= base_url('logout');?>">LOGOUT</a>
            </div>
        </div>
    </nav>

    <!-- View Webinar -->
    <section id="kelolawebinar">
        <div class="inner-widht">
            <div class="row">
                <div class="viewWebinar">
                    <div class="viewGambar">
                        <img src="/img/webinar2.jpg" alt="Gambar Webinar 1">
                    </div>
                </div>
                <div class="viewDeskripsi">
                    <div class="info">
                        <h3>Judul Webinar</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolore cumque
                            esse consequatur ea ad officia eligendi at quidem, dolores quisquam autem vero quas. Neque
                            atque iusto repellat sint vero. <br>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Fugiat possimus quasi illo
                            vel quas culpa nam labore porro, velit, in laudantium blanditiis maxime quisquam minima
                            totam sapiente? Quidem, minima obcaecati?</p>
                        <ul>
                            <li><span>Nama Webinar : </span>Judul Webinar</li>
                            <li><span>Pembicara : </span>Bpk. Aceng</li>
                            <li><span>Topik : </span>Test Webinar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tabel Peserta -->
    <section id="kelolawebinar">
        <div class="inner-widht">
            <div class="title">
                <h2>TABEL PESERTA</h2>
            </div>
            <div class="table_responsive">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>No. Telp</th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                            <th>Kode Webinar</th>
                            <th>Judul Webinar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($users as $row):
                        ?>
                        <tr>
                            <td><?= $row->id ?></td>
                            <td><?= $row->namapeserta ?></td>
                            <td><?= $row->tgllahir ?></td>
                            <td><?= $row->jeniskelamin ?></td>
                            <td><?= $row->notelp ?></td>
                            <td><?= $row->address ?></td>
                            <td><?= $row->pekerjaan ?></td>
                            <td><?= $row->idwebinar ?></td>
                            <td><?= $row->namawebinar ?></td>
                            <td>
                                <span class="action_btn">
                                    <a href="#">Edit</a>
                                    <a href="#">Remove</a>
                                </span>
                            </td>
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="inner-widht">
            <div class="copyright">
                &copy; 2022 | Created & Designed By <a href="#">WebinarCo</a>
            </div>
        </div>
    </footer>
</body>

</html>