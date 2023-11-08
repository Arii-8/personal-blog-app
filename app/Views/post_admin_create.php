<?php print $this->extend('admin_templates/index'); ?>

<?php print $this->section('page-content'); ?> 


<div class="container">
<h1 class="h1">Add Posting</h1>
<hr class="hr"/>

    <form action="" method="post" id="text-editor" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Post title" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" placeholder="Post author" required>
        </div>
        <div class="form-group">
            <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Write a great post!" required></textarea>
        </div>
        <div class="form-group">
            <label for="picture">Image</label>
            <input type="file" name="picture" id="picture" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
            <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
        </div>
    </form>
</div>


<?php print $this->endSection(); ?>