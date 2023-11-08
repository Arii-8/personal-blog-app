<?php print $this->extend('admin_templates/index'); ?>

<?php print $this->section('page-content'); ?> 

<div class="container-fluid">
    <!-- <p class="p">This page is under construct!</p> -->

    <h4 class="h4">Tabel file gambar</h4>
    <hr class="hr"/>
    <br>
    
    <div class="table-responsive">
        <table class="table table-bordered table-vecenter card-table table-nowrap text-nowrap table-hover responsive w-100" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">image</th>
                </tr>
            </thead>

        <tbody>  
            <?php $i = 1; ?>
            <?php foreach($postses as $posts) : ?>
                <tr>
                    <td><?php print $i++; ?></td>
                    <td><?php print $posts['title']; ?></td>
                    <td><?php print $posts['picture']; ?></td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
    </div>

</div>

<?php print $this->endSection(); ?>