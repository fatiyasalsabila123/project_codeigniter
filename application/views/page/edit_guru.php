<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php echo base_url('/asset/Vesperr/')?>assets/css/dashboard.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">  
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<div class="container1">
<?php $this->load->view('component/sidebar'); ?>
<main>
            <h1>Sistem Informasi Sekolah</h1>
<div style="margin-top:30px; border-radius:20px; background:white; box-shadow: 0 2rem 3rem rgba(132, 139, 200, 0.18)" class="p-3">
        <h1>Edit Guru</h1>
        <div class="w-100 m-auto p-3">
            <?php foreach ($edit_guru as $row):?>
        <form method="post" class="row" action="<?php echo base_url('admin/aksi_ubah_guru')?>" enctype="multipart/form-data">
        <input type="hidden" name="id" class="form-control" value="<?php echo $row->id; ?>">
                <div class="mb-3 col-6">
                <label for="nisn" class="form-label">Nama Guru</label>
                <!-- Input field untuk nisn -->
                <input type="text" value="<?php echo $row->nama_guru?>" name="nama_guru" class="form-control" id="nama_guru">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">NIK</label>
                <!-- Input field untuk nisn -->
                <input type="text" value="<?php echo $row->nik?>" name="nik" class="form-control" id="nik">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">Mapel</label>
                <!-- Input field untuk nisn -->
                <input type="text" value="<?php echo $row->mapel?>" name="mapel" class="form-control" id="mapel">
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
            <button type="button" class="btn btn-danger"><a href="<?php echo base_url('admin/guru')?>" style="text-decoration:none; color:white">Cancel</a></button>
        </div>
            </div>
        </form>
        <?php endforeach;?>
        </div>
        </main>
        <div class="right-section">
<?php $this->load->view('component/navbar'); ?>
        <div class="reminders">

<?php foreach ($edit_guru as $row):?>
<div class="notification">
<div class="icon">
<span class="material-icons-sharp">
<i class="fas fa-user-graduate"></i>
</span>
</div>
<div class="content">
<div class="info">
    <h3>Nama Guru</h3>
    <small class="text_muted">
        <?php echo $row->nama_guru?>
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
    <h3>Mapel</h3>
    <small class="text_muted">
        <?php echo $row->mapel?>
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
    <h3>NIK</h3>
    <small class="text_muted">
        <?php echo $row->nik?>
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
    <?php if ($this->session->flashdata('sukses')): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'sukses',
            text: '<?= $this->session->flashdata('sukses') ?>',
        });
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '<?= $this->session->flashdata('error') ?>',
        });
    </script>
<?php endif; ?>
</body>
</html>