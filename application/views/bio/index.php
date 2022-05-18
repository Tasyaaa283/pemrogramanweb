<!DOCTYPE html>
<html class="scrollspy" id="home">

<head>
    <link rel="icon" href="<?php echo base_url('assets/image/title.gif'); ?>" type="image/gif" sizes="16x16">
    <title>Company Profile</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css'); ?>" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!-- navbar -->

    <div class="navbar-fixed">
        <!-- 
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
    

    </ul>
     -->
        <nav class="blue darken-2">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="<?= base_url('home'); ?>" class="brand-logo">Pahawang</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="<?= base_url('bio'); ?>">Biodata</a></li>
                        <!-- <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-nav">
        <li><a href="<?= base_url('bio'); ?>">Biodata</a></li>

    </ul>
    <!-- akhir navbar -->


    <div class="slider">
        <ul class="slides">
            <li>
                <img src="<?php echo base_url('assets/image/slider/azz.PNG'); ?>">
                <div class="caption left-align">

                </div>
            </li>
            <li>
                <img src="<?php echo base_url('assets/image/slider/az.PNG'); ?>">
                <div class="caption center-align">

                </div>
            </li>
            <li>
                <img src="<?php echo base_url('assets/image/slider/azzz.PNG'); ?>">
                <div class="caption right-align">

                </div>
            </li>
            <li>
                <img src="<?php echo base_url('assets/image/slider/aa.JPEG'); ?>">
                <div class="caption right-align">

                </div>
            </li>
        </ul>
    </div>
    <!-- akhir slider -->
    <!-- About Us -->
    <section id="about" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center light grey-text text-darken-3">Biodata</h3>
                <div class="col m12" style="text-align: center;">
                    <img src="<?php echo base_url('assets/image/slider/tasya.jpeg'); ?>" width="50%">
                    <h6>Hasil UTS Pemrograman WEB</h6>
                    <h6>Kelas : TK 19 GAB 2</h6>
                    <h6>Fakultas : Fakultas Teknik dan Ilmu Komputer </h6>
                    <h6>Jurusan : Sistem Informasi </h6>
                    <h6>UNIVERSITAS TEKNOKRAT INDONESIA</h6>
                    <br>
                    <h6>NPM : 18311283</h6>
                    <h6>NAMA : Tasya Rinanda Miyana</h6>
                    <h6>No Absensi : 4</h6>
                    <h6>Sosial Media : @tasrinda</h6>
                    <h6>Hobi : Jogging</h6>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Us -->

    <div class="footerfixed"></div>
    <!-- Footer -->
    <footer class="blue darken-2 white-text center">
        <p>&copy; Copyright Tasya Rinanda 2022</p>
    </footer>
    <!-- End Footer -->





    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js'); ?>"></script>
    <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 4000
        });

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 50
        });
        const dropdown = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropdown);
    </script>

</body>

</html>