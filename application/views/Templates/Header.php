<?php
    $file = $this->session->userdata('alamat');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/') ?>img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/') ?>img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Poukamistore</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet" />
    
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url('assets/') ?>css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/') ?>css/demo.css" rel="stylesheet" />
    
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="s tylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="<?php echo base_url('assets/') ?>img/sidebar-1.jpg">
            
            <!-- Anda dapat mengubah warna dari sidebar menggunakan: data-color="purple | blue | green | orange | red"

        Anda dapat juga menambahkan gambar menggunakan data-image tag -->
            <div class="logo">
                <a href="#" class="simple-text">
                    Poukamistore
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li <?php if($file == 'member') {?> class="active" <?php } ?>>
                        <a href="<?php echo site_url('member'); ?>">
                            <i class="fa fa-users nav_icon"></i>
                            <p>Data Member</p>
                        </a>
                    </li>

                    <li <?php if($file == 'barang') {?> class="active" <?php } ?>>                    
                        <a href="<?php echo site_url('barang'); ?>">
                            <i class="fa fa-book nav_icon"></i>
                            <p>Data Barang</p>
                        </a>
                    </li>

                    <li<?php if($file == 'pengirim') {?> class="active" <?php } ?>>
                        <a href="<?php echo site_url('pengirim'); ?>">
                            <i class="fa fa-plane nav_icon"></i>
                            <p>Pengiriman</p>
                        </a>
                    </li>

                    <li <?php if($file == 'lokasi') {?> class="active" <?php } ?>>
                        <a href="<?php echo site_url('lokasi'); ?>">
                            <i class="fa fa-road nav_icon"></i>
                            <p>Lokasi</p>
                        </a>
                    </li>
                    <li <?php if($file == 'pembelian') {?> class="active" <?php } ?>>
                        <a href="<?php echo site_url('pembelian'); ?>">
                            <i class="fa fa-dollar nav_icon"></i>
                            <p>Pembelian</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Hi <?php echo $this->session->userdata('username'); ?>!</a> 
                    </div>
                    <div class="collapse navbar-collapse">

                         <ul class="nav navbar-nav navbar-right">
                           
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php echo tanggal(); ?>                                </a>
                            </li>

                            <li class="dropdown">


                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user"></i>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo site_url('login/logout') ?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
           
                    </div>
                </div>
            </nav>