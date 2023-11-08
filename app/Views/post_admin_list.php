<?php print $this->extend('admin_templates/index'); ?>

<?php print $this->section('page-content'); ?> 


<div class="container-fluid">
    <h1 class="h1">Posting</h1>
    <hr class="hr"/>
    <!-- <p class="p">This page is under construct!</p> -->
    <a href="<?php print base_url('/addPost'); ?>" class="btn btn-primary" style="border-radius: 3px;">Upload Posting</a>
    <br/><br/>

    <div class="table-responsive">
        <table class="table table-bordered table-vecenter card-table table-nowrap text-nowrap table-hover responsive w-100" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Author</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Created at</th>
                        <!-- <th class="text-center">image</th> -->
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

            <tbody>  
                <?php $i = 1; ?>
                <?php foreach($postses as $posts) : ?>
                    <tr>
                        <td><?php print $i++; ?></td>
                        <td><?php print $posts['title']; ?></td>
                        <td><?php print $posts['author']; ?></td>
                        <td><?php print $posts['status']; ?></td>
                        <td><?php print $posts['created_at']; ?></td>
                        <!-- <td><?php // print $posts['picture']; ?></td> -->

                        <td>
                            <a href="<?php print base_url('/edit/' . $posts['id']); ?>" class="btn btn-warning" style="border-radius: 3px;">Edit</a>
                            <a href="<?php print base_url('/delete/' . $posts['id']); ?>" onclick="alert('Data is Delete Forever');" class="btn btn-danger" style="border-radius: 3px;">Delete</a>
                            <a href="<?php print base_url('/detail/' . $posts['slug']); ?>" class="btn btn-info" style="border-radius: 3px;">Detail</a>
                        </td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>

</div>
<?php print $this->endSection(); ?>