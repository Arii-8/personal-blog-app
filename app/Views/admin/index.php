<?php print $this->extend('admin_templates/index'); ?>
<?php print $this->section('page-content'); ?> 

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php print $title; ?></h1>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-vecenter card-table table-nowrap text-nowrap table-hover responsive w-100"" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Detail View</th>
                    </tr>
                </thead>
                <!-- <tfoot>
                    <tr>
                    <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </tfoot> -->
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($users as $user) : ?>
                        <tr>
                            <th scope="row"><?php print $i++; ?></th>
                            <td><?php print $user['username']; ?></td>
                            <td><?php print $user['email']; ?></td>
                            <!-- <td></td> -->
                            <td>
                                <a href="<?php print base_url('admin/' . $user['id']); ?>" class="btn btn-info" style="border-radius: 3px;"> Detail </a>
                                <!-- <a href="<?php // print base_url("/admin/deleteProfile/{$user['id']}"); ?>" class="btn btn-danger" onclick="alert('Hapus pengguna, akun yang anda delete sudah tidak ada!')" style="border-radius: 3px;">Delete</a> -->
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php print $this->endSection(); ?>