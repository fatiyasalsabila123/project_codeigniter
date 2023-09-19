<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container1">
<?php $this->load->view('component/sidebar'); ?>
    <main>
    <div class="recent-orders">
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
                        <?php $no=0; foreach ($guru as $row): $no++?>
                        <tr>
                            <td><?= $row->id?></td>
                            <td><?= $row->nama_guru?></td>
                            <td><?= $row->nik?></td>
                            <td><?= $row->mapel?></td>
                            <td><?= $row->gender?></td>
                            <td><a href="<?php echo base_url('admin/edit_guru/').$row->id?>" class="btn btn-sm btn-primary" style="color:white">edit</a>
                        <button class="btn btn-sm btn-danger" onclick="hapus(<?php echo $row->id?>)">Hapus</button></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- <a href="#">Show All</a> -->
            </div>
    </main>
    </div>
    
<script>
        function hapus(id) { // Fungsi JavaScript untuk mengkonfirmasi dan mengarahkan ke halaman "delete.php" dengan id yang akan dihapus.
            var yes = confirm("Yakin Di Hapus?");
            if (yes == true) {
                window.location.href = "<?php echo base_url('admin/hapus_guru/')?>" + id; // Mengarahkan ke halaman "hapus_siswa.php" dengan mengirimkan id yang akan dihapus sebagai parameter.
            }
        }
    </script>
</body>
</html>