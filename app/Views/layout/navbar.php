<?php
	$session = session();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light text-center">
    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="<?= base_url('assets/img/logo.png') ?>" width="35" height="35" alt="">
            P A M I T R A N               
        </a>

        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" 
            aria-controls="navbarNav" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php if($session->role=='admin') : ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/admin">Kelola User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/layanan-publikasi">Layanan Publikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/logout">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Tentang Kami</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/visi-misi">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="/tim-pamitran">Tim Pamitran</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galeri">Galeri</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Layanan</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Endoskopi-Training-Center">Endoskopi Training Center</a></li>
                            <li><a class="dropdown-item" href="/Dental-Training-Center">Dental Training Center</a></li>
                            <li><a class="dropdown-item" href="/OSCE-Training-Center">OSCE Training Center</a></li>
                            <li><a class="dropdown-item" href="/Pamitran-Publication-Services">Pamitran Publication Services</a></li>
                            <li><a class="dropdown-item" href="/Kerjasama-Penelitian">Kerjasama Penelitian</a></li>
                            <li><a class="dropdown-item" href="/Apotik-Pendidikan">Apotik Pendidikan</a></li>
                            <li><a class="dropdown-item" href="/Puspa-Day-Care">Puspa Daycare</a></li>
                            <li><a class="dropdown-item" href="/Kemoterapi">Kemoterapi</a></li>
                            <li><a class="dropdown-item" href="/Perawatan-Covid">Perawatan Covid</a></li>
                            <li><a class="dropdown-item" href="/Palliative-Care">Palliative Care</a></li>
                            <li><a class="dropdown-item" href="/Poliklinik-Infeksi">Poliklinik Infeksi</a></li>
                            <li><a class="dropdown-item" href="/Pojok-Lansia">Pojok Lansia</a></li>
                            <li><a class="dropdown-item" href="/Cafe-dan-Restoran">Cafe dan Restoran</a></li>
                            <li><a class="dropdown-item" href="/ATM-Center">ATM Center</a></li>
                            <li><a class="dropdown-item" href="/Laboratorium">Laboratorium</a></li>
                            <li><a class="dropdown-item" href="/Conference-Rooms">Conference Rooms</a></li>
                        </ul>
                    </li>
                    <?php if(!$session->isLoggedIn): ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/login">Login</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/register">Register</a> 
                        </li>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">My Account</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/user">Data Pribadi</a></li>
                                <li><a class="dropdown-item" href="/edit">Ubah Profil</a></li>
                                <li><a class="dropdown-item" href="/change-password">Ubah Kata Sandi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item-sm">
                            <a class="nav-link" href="/logout">Logout</a>
                        </li>
                    <?php endif ?>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>