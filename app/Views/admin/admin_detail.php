<?php print $this->extend('admin_templates/index'); ?>

<?php print $this->section('page-content'); ?> 

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php print $title; ?></h1>
    
    <div class="row">
        <div class="col-lg-8">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <!-- <img src="<?php // print base_url('/img/' . $user->user_image); ?>" class="img-fluid rounded-start" alt="<?php // print $user->username; ?>"> -->
                    <img src="<?php print base_url('img/undraw_rocket.svg'); ?>" class="img-fluid rounded-start" alt="profile">
                </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?php print $user['username']; ?></h4>
                                </li>

                                <!-- <?php // if($user->fullname) : ?> -->
                                    <!-- <li class="list-group-item"><?php // print $user->fullname; ?></li> -->
                                <!-- <?php // endif; ?> -->

                                <li class="list-group-item"><?php print $user['email']; ?></li>
                                <!-- <li class="list-group-item"> -->
                                    <!-- <span class="badge badge-<?php // print ($user->name == 'admin') ? 'success' : 'warning'; ?>"><?php // print $user->name; ?></span> -->
                                    <!-- <span><?php // print $user->name; ?></span> -->
                                <!-- </li> -->
                                <li class="list-group-item">
                                    <small><a href="<?php print base_url('admin'); ?>"> &laquo; back to user list </a></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php print $this->endSection(); ?>