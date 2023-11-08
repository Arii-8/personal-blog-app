<?php print $this->extend('admin_templates/index'); ?>

<?php print $this->section('page-content'); ?> 

<div class="container">
    <h1 class="h1">Post admin view</h1>
    <hr class="hr"/>

    <div class="card" style="max-width: 100%;">
        <img src="<?php print base_url('img/' . $postses['picture']); ?>" class="card-img-top" alt="content_view">
            <div class="card-body">
                <h1 class="card-text" style="color: #17202A;"><b><?php print $postses['title']; ?></b></h1>
                <p class="card-text"><small class="text-body-secondary" style="font-size: 1.6em;"><?php print $postses['author']; ?></small></p>
                <p class="card-text">Status [<?php print $postses['status']; ?>]</p>
                <p class="card-text" style="font-size: 1.2em;"><?php print $postses['content']; ?></p>
            </div>
        </div>
    </div>

<?php print $this->endSection(); ?>