<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <!-- google family -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- css -->
    <link href="<?php echo base_url('/asset/Vesperr/')?>assets/css/dashboard.css" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container1">
<?php $this->load->view('component/sidebar'); ?>
    <main>
    <h1>Analytics</h1>
    <div class="recent-orders" style="margin-top: 60px">
                <table class="table" style="width:145%;" >
    <div class="d-flex justify-content-between">
                <h2>Siswa</h2>
                <button class="btn btn-sm btn-primary" style="margin-left:400px">Tambah Data</button>
            </div>
                    <thead>
                        <!-- <tr> -->
                            <th>No</th>
                            <th>Username</th>
                            <th>Nisn</th>
                            <th>TTL</th>
                            <th>Kelas</th>
                            <th>Gender</th>
                            <th>Action</th>
                            <th></th>
                        <!-- </tr> -->
                    </thead>
                    <tbody>
                        <?php $no=0; foreach($murid as $row): $no++?>
                        <tr>
                            <td><?= $row->id?></td>
                            <td><?= $row->username?></td>
                            <td><?= $row->nisn?></td>
                            <td><?= $row->tempat_lahir. ' ' . $row->tanggal_lahir?></td>
                            <td><?= $row->kelas. ' ' . $row->jurusan?></td>
                            <td><?= $row->gender?></td>
                            <td>
                            <a href="<?php echo base_url('admin/update_siswa/').$row->id?>">Edit<button></button></a>
                                <button class="btn btn-sm btn-danger" onclick="hapus(<?php echo $row->id?>)">Hapus</button>
                            </td>
                       </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <!-- <a href="#">Show All</a> -->
            </div>
            
    </main>
    <!-- <div class="right-section">
<?php $this->load->view('component/navbar'); ?> -->

<script>
        function hapus(id) { // Fungsi JavaScript untuk mengkonfirmasi dan mengarahkan ke halaman "delete.php" dengan id yang akan dihapus.
            var yes = confirm("Yakin Di Hapus?");
            if (yes == true) {
                window.location.href = "<?php echo base_url('admin/hapus_siswa/')?>" + id; // Mengarahkan ke halaman "hapus_siswa.php" dengan mengirimkan id yang akan dihapus sebagai parameter.
            }
        }
    </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>