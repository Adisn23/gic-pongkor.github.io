<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-block" href="<?php echo base_url() ?>Home">
    <div class="sidebar-brand-icon rotate-n-15">
        <!-- <i class="fas fa-laugh-wink"></i> -->
    </div>
    <span>DASHBOARD</span>
    <div class="mx-3">GIC-Bogor Halimun Salak</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url() ?>dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<!-- <div class="sidebar-heading">
    User
</div> -->

<!-- Nav Item - Pages Collapse Menu -->
<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Manajemen User</span>
    </a>
    <div id="collapseUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url() ?>admin/beranda/Banner">Manajemen Banner</a>
            <a class="collapse-item" href="<?php echo base_url() ?>admin/beranda/Home">Manajemen Beranda</a>
            <a class="collapse-item" href="<?php echo base_url() ?>admin/beranda/Berita">Manajemen Informasi</a>
        </div>
    </div>
</li> -->

<!-- Heading -->
<div class="sidebar-heading">
    Admin
</div>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContent"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Manajemen Konten</span>
    </a>
    <div id="collapseContent" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url() ?>admin/beranda/Banner">Manajemen Banner</a>
            <a class="collapse-item" href="<?php echo base_url() ?>admin/beranda/Home">Manajemen Beranda</a>
            <a class="collapse-item" href="<?php echo base_url() ?>admin/beranda/Informasi">Manajemen Informasi</a>
            <a class="collapse-item" href="<?php echo base_url() ?>admin/beranda/visi_misi">Manajemen Visi & Misi</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <a href="<?php echo base_url() ?>" class="rounded-circle border-0 btn btn-primary" ><</a>
</div>

</ul>
<!-- End of Sidebar -->