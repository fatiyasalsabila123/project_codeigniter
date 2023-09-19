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
</head>
<body>
<div class="container1">
<?php $this->load->view('component/sidebar'); ?>
<main style="margin-top:80px;">
<div class="card p-3">
        <h1>Tambah guru</h1>
        <div class="w-100 m-auto p-3">
        <form method="post" class="row" action="<?php echo base_url('Admin/aksi_tambah_guru')?>" enctype="multipart/form-data">
                <!-- <input type="hidden" name="id" class="form-control"> -->
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Guru</label>
                <!-- Input field untuk nama sekolah -->
                <input type="text" name="nama_guru" class="form-control" id="nama_guru">
            </div>
            <div class="mb-3 col-6">
                <label for="nik" class="form-label">NIK</label>
                <!-- Input field untuk nik -->
                <input type="text" name="nik" class="form-control" id="nik">
            </div>
            <div class="mb-3 col-6">
                <label for="mapel" class="form-label">Mapel</label>
                <!-- Input field untuk mapel -->
                <input type="text" name="mapel" class="form-control" id="mapel">
            </div>
            <div class="mb-3 col-6">
                <label for="gender" class="form-label">Gender</label>
                <!-- Input field untuk gender -->
                <select name="gender" id="gender" class="form-select">
                    <option selected> Pilih Gender
                </option>
                    <option value="laki_laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <!-- Tombol "Submit" untuk mengirim data ke server -->
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
        </div>
        </main>
        <div class="right-section">
            
<?php $this->load->view('component/navbar'); ?>
        </div> 
    </div>
</body>
</html>