<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #17202A">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <!-- <i class="fas fa-code"></i> -->
        <i class="fas fa-fw fa-cog"></i>
    </div>
    <div class="sidebar-brand-text mx-3">CP-Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Heading -->
<div class="sidebar-heading">
    User List
</div>

<!-- Nav Item - User List -->
<li class="nav-item">
    <a class="nav-link" href="<?php print base_url('admin'); ?>">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <i class="fas fa-fw fa-users"></i>
        <span>User List</span></a>
</li>




<!-- Divider -->
<!-- <hr class="sidebar-divider"> -->

<!-- Heading -->
<div class="sidebar-heading">
    User Profile Interface
</div>


<!-- Nav Item - My Profile -->
<li class="nav-item">
    <a class="nav-link" href="<?php print base_url('user'); ?>">
        <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <i class="fas fa-fw fa-user"></i>
        <span>My Profile</span></a>
</li>

<!-- Nav Item - Post -->
<li class="nav-item">
    <a class="nav-link" href="<?php print base_url('/postList'); ?>">
        <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <!-- <i class="fas fa-fw fa-user"></i> -->
        <i class="fas fa-fw fa-newspaper"></i>
        <span>Post</span></a>
</li>

<!-- Nav Item - Post -->
<li class="nav-item">
    <a class="nav-link" href="<?php print base_url('/listName'); ?>">
        <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <!-- <i class="fas fa-fw fa-user"></i> -->
        <i class="fas fa-fw fa-image"></i>
        <span>Dashboard Image List</span></a>
</li>


<!-- <li class="nav-item"> -->
    <!-- <a class="nav-link" href="<?php // print base_url('/admin/blog'); ?>"> -->
        <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <!-- <i class="fas fa-fw fa-list"></i> -->
        <!-- <span>List Post</span></a> -->
<!-- </li> -->

<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="<?php print base_url(); ?>">
        <i class="fas fa-fw fa-house-user"></i>
        <span>Return Home Page</span></a>
    </a>    
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Logout -->
<li class="nav-item">
    <a class="nav-link" href="<?php print base_url('logout'); ?>">
        <!-- <i class="fas fa-fw fa-table"></i> -->
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->