<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('assets/'); ?>img/sma.png" alt="" width="50px">
        </div>
        <div class="sidebar-brand-text mx-2"><?= $panel; ?></div>
    </a>
    <?php
    $user = $this->db->get_where('admin', array('nip' => $this->session->userdata('nip')))->row_array();
    ?>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <div class="user-panel mt-2 text-center">
        <div class="image">
            <img src="<?= base_url('assets/img/foto/') . $user['foto']; ?>" class="img-circle" width="70px" alt="Foto Profil">
        </div>
        <div class=" info text-white">
            <p><?= $user['nama'] ?></p>
        </div>
    </div>

    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/admin'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Admin</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/guru'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Guru</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/siswa'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Siswa</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/mapel'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Mata Pelajaran</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kelas'); ?>">
            <i class="fas fa-fw fa-school"></i>
            <span>Kelas</span></a>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Jadwal Pelajaran</span></a>
    </li> -->

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/nilai'); ?>">
            <i class="fas fa-fw fa-calculator"></i>
            <span>Nilai</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/psb'); ?>">
            <i class="fas fa-fw fa-graduation-cap"></i>
            <span>PSB</span></a>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/edit_password'); ?>">
            <i class="fas fa-fw fa-lock-open"></i>
            <span>Edit Password</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->