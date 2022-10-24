<?php
    session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laundry - About Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="logo" href="assets/img/logo.png">
    <link rel="logo" type="image/x-icon" href="assets/img/logo.png">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="home.php">
                <i class='bx bx-buildings bx-sm text-dark'></i>
                <span class="text-dark h4">Laundry</span> <span class="text-primary h4">Kilau</span>
            </a>
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="home.php">Home</a>
                        </li>
                        <?php 
                        if($_SESSION['role'] != 'owner'){
                            ?>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="member.php">Member</a>
                        </li>
                        <?php 
                        if($_SESSION['role'] != 'kasir'){
                            ?>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="user.php">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="paket.php">Price List</a>
                        </li>
                        <?php
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="pesan.php">Pesan Laundry</a>
                        </li>
                        <?php
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="transaksi.php">Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" aria-current="page" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>