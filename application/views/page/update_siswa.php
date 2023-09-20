<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php echo base_url('/asset/Vesperr/')?>assets/css/dashboard.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
</head>
<body>
    <div class="container1">
<?php $this->load->view('component/sidebar'); ?>
<main>
            <h1>Sistem Informasi Sekolah</h1>
<div style="margin-top:20px; border-radius:20px; background:white; box-shadow: 0 2rem 3rem rgba(132, 139, 200, 0.18)" class=" p-3">
        <h1>Edit Siswa</h1>
        <div class="w-100 m-auto p-3">
            <?php foreach ($edit_siswa as $row):?>
        <form method="post" class="row" action="<?php echo base_url('admin/aksi_ubah_siswa')?>" enctype="multipart/form-data">
        <input type="hidden" name="id" class="form-control" value="<?php echo $row->id; ?>">
                <div class="mb-3 col-6">
                <label for="nisn" class="form-label">Nama Siswa</label>
                <!-- Input field untuk nisn -->
                <input type="text" value="<?php echo $row->username?>" name="username" class="form-control" id="username">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">NISN</label>
                <!-- Input field untuk nisn -->
                <input type="text" value="<?php echo $row->nisn?>" name="nisn" class="form-control" id="nisn">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">Tempat lahir</label>
                <!-- Input field untuk nisn -->
                <input type="text" value="<?php echo $row->tempat_lahir?>" name="tempat_lahir" class="form-control" id="tempat_lahir">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">Tanggal lahir</label>
                <!-- Input field untuk nisn -->
                <input type="text" value="<?php echo $row->tanggal_lahir?>" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">Kelas</label>
                <!-- Input field untuk nisn -->
                <input type="text" value="<?php echo $row->kelas?>" name="kelas" class="form-control" id="kelas">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">Jurusan</label>
                <!-- Input field untuk nisn -->
                <input type="text" value="<?php echo $row->jurusan?>" name="jurusan" class="form-control" id="jurusan">
            </div>
            <div class="mb-3 col-6">
                <label for="gender" class="form-label">Gender</label>
                <!-- Input field untuk gender -->
                <select name="gender" id="gender" class="form-select">
                    <option selected value="<?php echo $row->gender?>">
                    <?php echo $row->gender?>
                </option>
                    <option value="laki_laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <!-- Tombol "Submit" untuk mengirim data ke server -->
            <div class="d-flex" style="gap:10px">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="button" class="btn btn-danger"><a href="<?php echo base_url('admin/siswa')?>" style="text-decoration:none; color:white">Cancel</a></button>
        </div>
            </div>
        </form>
        <?php endforeach;?>
        </div>
        
        </main>
        <div class="right-section">
<?php $this->load->view('component/navbar'); ?>
        <div class="reminders">

<?php foreach ($edit_siswa as $row):?>
<div class="notification">
<div class="icon">
<span class="material-icons-sharp">
<i class="fas fa-user-graduate"></i>
</span>
</div>
<div class="content">
<div class="info">
    <h3>Username</h3>
    <small class="text_muted">
        <?php echo $row->username?>
    </small>
</div>
</div>
</div>
<div class="notification">
<div class="icon">
<span class="material-icons-sharp">
<i class="fas fa-user-graduate"></i>
</span>
</div>
<div class="content">
<div class="info">
    <h3>kelas</h3>
    <small class="text_muted">
        <?php echo $row->kelas. ' ' .$row->jurusan?>
    </small>
</div>
</div>
</div>
<div class="notification">
<div class="icon">
<span class="material-icons-sharp">
<i class="fas fa-user-graduate"></i>
</span>
</div>
<div class="content">
<div class="info">
    <h3>NISN</h3>
    <small class="text_muted">
        <?php echo $row->nisn?>
    </small>
</div>
</div>
</div>
<div class="notification">
<div class="icon">
<span class="material-icons-sharp">
<i class="fas fa-user-graduate"></i>
</span>
</div>
<div class="content">
<div class="info">
    <h3>Tempat Tanggal Lahir</h3>
    <small class="text_muted">
        <?php echo $row->tempat_lahir. ' ' .$row->tanggal_lahir?>
    </small>
</div>
</div>
</div>
<div class="notification">
<div class="icon">
<span class="material-icons-sharp">
<i class="fas fa-user-graduate"></i>
</span>
</div>
<div class="content">
<div class="info">
    <h3>Gender</h3>
    <small class="text_muted">
        <?php echo $row->gender?>
    </small>
</div>
</div>
</div>
<?php endforeach;?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php if ($this->session->flashdata('berhasil_ubah_siswa')): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: '<?= $this->session->flashdata('berhasil_ubah_siswa') ?>',
        });
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('errorr_ubah_siswa')): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '<?= $this->session->flashdata('errorr_ubah_siswa') ?>',
        });
    </script>
<?php endif; ?>

</body>
</html>
