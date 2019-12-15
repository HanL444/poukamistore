<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poukamistore</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/style.css" type="text/css">
    <link href='../assets/assets/img/poukami.png' rel='shortcut icon'>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.html"><img src="<?php echo base_url('assets/assets/');?>img/poukami.png" height="65px" alt=""></a>
                </div>
                <div class="header-right">
                    <img src="<?php echo base_url('assets/assets/');?>img/icons/search.png" alt="" class="search-trigger">
                </div>
                <div class="user-access">
                    <a href="<?= base_url('auth/registration'); ?>">Register</a>
                    <a href="<?= base_url('auth'); ?>" class="in">Sign in</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="<?php echo base_url().'welcome/index'; ?>">Home</a></li>
                        <li><a>Shop</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url().'welcome/data_barang';?>">Product Page</a></li>
                                <li><a href="<?php echo base_url().'welcome/baju'; ?>">Check out</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url().'welcome/about'; ?>">About</a></li>
                        <li><a href="<?php echo base_url().'welcome/contact'; ?>">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Info Begin -->