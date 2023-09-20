<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('/asset/Vesperr/')?>assets/css/dashboard.css" rel="stylesheet">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container1">
<?php $this->load->view('component/sidebar'); ?>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Analytics</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Total Siswa</h3>
                            <h1><i class="fas fa-users"></i> <?php echo $total_siswa?></h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+81%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Total Guru</h3>
                            <h1><i class="fas fa-users"></i> <?php echo $total_guru?></h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>-48%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Total Admin</h3>
                            <h1><i class="fas fa-users"></i> </h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+21%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            <!-- New Users Section -->
            <div class="recent-orders">
                <h2>Siswa</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nisn</th>
                            <th>TTL</th>
                            <th>Kelas</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=0; foreach($siswaa as $row): $no++?>
                        <tr>
                            <td><?= $row->id?></td>
                            <td><?= $row->username?></td>
                            <td><?= $row->nisn?></td>
                            <td><?= $row->tempat_lahir. ' ' . $row->tanggal_lahir?></td>
                            <td><?= $row->kelas. ' ' . $row->jurusan?></td>
                            <td><?= $row->gender?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <!-- <a href="#">Show All</a> -->
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=0; foreach ($gurus as $row): $no++?>
                        <tr>
                            <td><?= $row->id?></td>
                            <td><?= $row->nama_guru?></td>
                            <td><?= $row->nik?></td>
                            <td><?= $row->mapel?></td>
                            <td><?= $row->gender?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- <a href="#">Show All</a> -->
            </div>
            <!-- End of Recent Orders -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
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
<!-- <?php $this->load->view('component/navbar'); ?> -->
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="images/logo.png">
                    <h2>AsmrProg</h2>
                    <p>Fullstack Web Developer</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Reminders</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>

            </div>

        </div>




</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('/asset/Vesperr/')?>assets/js/orders.js"></script>
    <script src="<?php echo base_url('/asset/Vesperr/')?>assets/js/index.js"></script>
</body>

</html>