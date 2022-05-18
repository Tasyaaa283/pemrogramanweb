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
                    <a href="#home" class="brand-logo">Pahawang</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#about">Tentang</a></li>
                        <li><a href="#services">Kelebihan</a></li>
                        <li><a href="#portfolio">Keindahan</a></li>
                        <li><a href="#contact">Berita</a></li>
                        <li><a href="<?= base_url('bio'); ?>">Biodata</a></li>
                        <!-- <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-nav">
        <li><a href="#about">Tentang</a></li>
        <li><a href="#services">Kelebihan</a></li>
        <li><a href="#portfolio">Keindahan</a></li>
        <li><a href="#contact">Berita</a></li>
        <li><a href="<?= base_url('bio'); ?>">Biodata</a></li>

    </ul>
    <!-- akhir navbar -->

    <!-- slider -->

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
                <h3 class="center light grey-text text-darken-3">Tentang Pahawang</h3>
                <div class="col m12">
                    <p style="text-align: center;">Pulau Pahawang terkenal dengan keindahan pantai dan bawah lautnya. Sudah banyak yang mengakui pesonanya, baik wisatawan nusantara maupun wisatawan lokal Lampung, Pulau Pahawang masuk wilayah Kecamatan Punduh Pidada, Kabupaten Pesawaran, Provinsi Lampung. Tepatnya berada di Teluk Lampung. Untuk bisa sampai di pulau, tidak memerlukan waktu berhari-hari. Sebab jaraknya tidak terlalu jauh dari Kota Bandar Lampung. Hanya membutuhkan waktu sekitar 2 jam untuk tiba di pulau.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Us -->

    <!-- Clients -->
    <div id="clients" class="parallax-container scrollspy">
        <div class="parallax  scrollspy"><img src="<?php echo base_url('assets/image/slider/ae.JPEG'); ?>"></div>
    </div>
    <!-- End Clients -->

    <!-- services -->
    <section id="services" class="services grey lighten-3 scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center light grey-text text-darken-3">Kelebihan Pahawang</h3>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">public</i>
                        <h5>Biota Laut</h5>
                        <p>Ada ikan badut bewarna putih dengan corak bewarna oranye. Seperti yang pernah kamu tonton di film “Finding Nemo”. Juga ada clownfish warna dan corak lain di sini.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">camera_alt</i>
                        <h5>Spot Foto Keren</h5>
                        <p>Pahawang juga memilik pemandangan sunrise dan sunset serta yang indah. Hutan mangrove serta flora dan fauna yang ada disekitar pulau Pahawang juga jadi nilai tambah sendiri.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">location_on</i>
                        <h5>Spot Snorkeling Keren</h5>
                        <p>pulau ini memiliki daya tarik utama yang sangat menawan nan indah yaitu keindahan saat snorkeling menikmati jernihnya air, indahnya biota laut, dan terumbu-terumbu karangnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio scrollspy">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Keindahan Pahawang</h3>
            <div class="row">
                <div class="col m3 s12">
                    <img src="<?php echo base_url('assets/image/portfolio/aa.JPEG'); ?>" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="<?php echo base_url('assets/image/portfolio/ad.JPEG'); ?>" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="<?php echo base_url('assets/image/portfolio/ae.JPEG'); ?>" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="<?php echo base_url('assets/image/portfolio/aj.JPEG'); ?>" class="responsive-img materialboxed">
                </div>
            </div>
            <div class="row">
                <div class="col m3 s12">
                    <img src="<?php echo base_url('assets/image/portfolio/ak.JPEG'); ?>" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="<?php echo base_url('assets/image/portfolio/ai.JPEG'); ?>" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="<?php echo base_url('assets/image/portfolio/am.JPEG'); ?>" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="<?php echo base_url('assets/image/portfolio/af.JPEG'); ?>" class="responsive-img materialboxed">
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Portfolio -->


    <!-- Contact Us -->

    <section id="contact" class="contact grey lighten-3 scrollspy">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Berita</h3>
            <div style="text-align: center;">
                <iframe width="400" height="315" src="https://www.youtube.com/embed/a4t_xpXa0_M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-- End Contact Us -->


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

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialboxed = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialboxed);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 50
        });
        const dropdown = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropdown);
    </script>

</body>

</html>