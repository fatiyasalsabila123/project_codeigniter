<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo base_url('/asset/Vesperr/')?>assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
    <div class="container1">
        
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/logo.png">
                    <h2><span class="danger">SIS</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar1">
                <a href="dashboard" style="text-decoration:none" <?php echo current_url() == base_url('admin/dashboard') ? 'class="active"' : ''; ?>>
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="siswa" style="text-decoration:none" <?php echo current_url() == base_url('admin/siswa') ? 'class="active"' : ''; ?>>
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Siswa</h3>
                </a>
                <a href="guru" style="text-decoration:none" <?php echo current_url() == base_url('admin/guru') ? 'class="active"' : ''; ?>>
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Guru</h3>
                </a>
                <a style="text-decoration:none" href="<?php echo base_url('auth/logout');?>">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->
    </div>
    <script src="<?php echo base_url('/asset/Vesperr/')?>assets/js/orders.js"></script>
    <script src="<?php echo base_url('/asset/Vesperr/')?>assets/js/index.js"></script>
</body>
</html>