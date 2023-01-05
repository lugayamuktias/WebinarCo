<?php if(in_groups('admin')) :?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/detailWebinar.css">
    <title>WebinarCo</title>
    <title>Webinar Admin</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="inner-widht">

            <a href="<?= base_url();?>/#home" class="webinarco">WEBINARCO | ADMIN</a>
            <div class="navbar-menu">
                <a class="active"><a href="<?= base_url('login/index');?>">HOME</a>
                    <a href="<?= base_url('admin/webinaradmin');?>">WEBINAR</a>
                    <a href="<?= base_url('admin/aboutadmin');?>">ABOUT</a>
                    <a href="<?= base_url('logout');?>">LOGOUT</a>

            </div>
        </div>
    </nav>

    <!-- Detail Webinar -->
    <section id="kelolawebinar">
        <div class="inner-widht">
            <div class="buttons">
                <a href="<?= base_url('event/TambahWebinar');?>">
                    <h3>+ADD WEBINAR</h3>
                </a>
            </div>
            <div class="detailwebinar">
                <div class="webinars">
                    <a href="<?= base_url('admin/LihatWebinarAdmin');?>"><img src="/img/webinar2.jpg" alt=""
                            class="picwebinar"></a>
                    <h4>Webinar 1</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis incidunt fugit aut? Quod
                        nemo sit quo, numquam aliquam earum odit debitis vel aut, unde animi, consequuntur
                        necessitatibus amet. Alias!</p>

                    <div class="buttons2">
                        <a href="<?= base_url('event/EditWebinar');?>">Edit Webinar</strong></a>
                        <a href="<?= base_url('event/HapusWebinar');?>">Hapus Webinar</strong></a>
                    </div>
                </div>

                <div class="webinars">

                    <a href="<?= base_url('admin/LihatWebinarAdmin');?>"><img src="/img/webinar2.jpg" alt=""
                            class="picwebinar"></a>

                    <h4>Webinar 2</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis incidunt fugit aut? Quod
                        nemo sit quo, numquam aliquam earum odit debitis vel aut, unde animi, consequuntur
                        necessitatibus amet. Alias!</p>

                    <div class="buttons2">
                        <a href="<?= base_url('event/EditWebinar');?>">Edit Webinar</strong></a>
                        <a href="<?= base_url('event/HapusWebinar');?>">Hapus Webinar</strong></a>
                    </div>
                </div>

                <div class="webinars">
                    <a href="<?= base_url('admin/LihatWebinarAdmin');?>"><img  src="/img/webinar2.jpg" alt="" class="picwebinar"></a>

                    <h4>Webinar 3</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis incidunt fugit aut? Quod
                        nemo sit quo, numquam aliquam earum odit debitis vel aut, unde animi, consequuntur
                        necessitatibus amet. Alias!</p>

                    <div class="buttons2">
                        <a href="<?= base_url('event/EditWebinar');?>">Edit Webinar</strong></a>
                        <a href="<?= base_url('event/HapusWebinar');?>">Hapus Webinar</strong></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

<!-- Tabel Webinar -->
    <section id="kelolawebinar">
        <div class="inner-widht">
            <div class="title">
                <h2>TABEL WEBINAR</h2>
            </div>
            <div class="table_responsive">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Webinar</th>
                            <th>Tanggal Lahir</th>
                            <th>pembicara</th>
                            <th>topik_webinar</th>
                            <th>tanggal_mulai</th>
                            <th>durasi</th>
                            <th>batas_peserta</th>
                            <th>type_event Webinar</th>
                            <th>gambar</th>
                        </tr>
                    </thead>
                    <tbody>
				
                        <?php 
							$no=1;
							foreach($detailevent as $row){ ?>
                       <tr>
                            <th><?= $row->id ?></th>
                            <td><?= $row->nama_webinar ?></td>
                            <td><?= $row->pembicara ?></td>
                            <td><?= $row->topik_webinar ?></td>
                            <td><?= $row->tanggal_mulai ?></td>
                            <td><?= $row->durasi ?></td>
                            <td><?= $row->batas_peserta ?></td>
                            <td><?= $row->type_event ?></td>
                            <td><?= $row->gambar ?></td>
                            <td>
                                <span class="action_btn">
                                    <button type="button" onclick="window.location='<?= site_url('event/formedit/'.$row->id) ?>'">Edit</button>
                                    <button type="button" onclick="remove('<?= $row->id ?>')">Remove</button>
                                </span>
                            </td>
                        </tr>
                        <?php } ?>
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

    <script>
        function remove(id) {
            pesan = confirm('Apakah anda yakin?');

            if (pesan) {
                window.location.href = ("<?= site_url('event/removeWebinar/') ?>") +id;
            } else {
                return false;
            }
        }
    </script>
</body>

</html>
<?php endif; ?>