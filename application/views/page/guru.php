<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container1">
<?php $this->load->view('component/sidebar'); ?>
    <main>
            <h1>Sistem Informasi Sekolah</h1>
    <div class="recent-orders" style="margin-top:5%">
                <!-- <div class="d-flex justify-content-between"> -->
                <h2>Guru</h2>
                <!-- <button class="btn btn-sm btn-primary mb-2">Tambah Data</button></div> -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>NIK</th>
                            <th>Mapel</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=0; foreach ($guru as $row) : $no++?>
                        <tr>
                            <td><?php echo $no?></td>
                            <td><?= $row->nama_guru?></td>
                            <td><?= $row->nik?></td>
                            <td><?= $row->mapel?></td>
                            <td><?= $row->gender?></td>
                            <td class="d-flex align-items-center justify-content-center"><a href="<?php echo base_url('admin/edit_guru/').$row->id?>" style="color:white"><button class="btn btn-sm btn-primary">edit</button></a>
                        <button class="btn btn-sm btn-danger" onclick="hapus(<?php echo $row->id?>)">Hapus</button></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- <a href="#">Show All</a> -->
            </div>
    </main>
    <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Reza</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/profile-1.jpg">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="reminders">

                        <?php foreach ($guru as $row):?>
                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                        <i class="fas fa-chalkboard-teacher"></i>
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3><?= $row->nama_guru?></h3>
                            <small class="text_muted">
                                <?= $row->mapel ?>
                            </small>
                        </div>
                        <!-- <span class="material-icons-sharp">
                            more_vert
                        </span> -->
                    </div>
                </div>
                    <?php endforeach;?>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <a style="text-decoration:none" href="<?php echo base_url('admin/tambah_guru')?>"><h3>Tambah Guru</h3></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('/asset/Vesperr/')?>assets/js/orders.js"></script>
    <script src="<?php echo base_url('/asset/Vesperr/')?>assets/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <?php if ($this->session->flashdata('success_tambah_guru')): ?>
   <script>
      Swal.fire({
         icon: 'success',
         title: 'Sukses',
         text: '<?= $this->session->flashdata('success_tambah_guru') ?>',
      });
   </script>
<?php elseif ($this->session->flashdata('error')): ?>
   <script>
      Swal.fire({
         icon: 'error',
         title: 'Oops...',
         text: '<?= $this->session->flashdata('error') ?>',
      });
   </script>
<?php endif; ?>

<script>
     function hapus(id) {
    Swal.fire({
        title: 'Yakin Di Hapus?',
        text: "Tindakan ini tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "<?php echo base_url('admin/hapus_siswa/')?>" + id;
        }
    });
}
    </script>
</body>
</html>