<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $title; ?></title>
    <link rel="stylesheet" href="<?php print base_url('styles/index_style.css'); ?>">
    <link rel="stylesheet" href="<?php print base_url('css/bootstrap.min.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body>

    <nav class="top-bar">
        <ul class="d-flex justify-content-end">
            
            <?php if(logged_in()) : ?>
              <li><a href="<?php print base_url('/admin'); ?>" class="btn btn-light"> Admin Dashboard </a></li>
              <li><a href="<?php print base_url('logout'); ?>" class="btn btn-secondary"> Logout </a></li>
              <?php else : ?>
                <li><a href="<?php print base_url('login'); ?>" class="btn btn-light"> Login </a></li>
            <?php endif ?>

            <!-- <li><a href="" class="btn" style="background-color: #4717F6; color: white;"> Post </a></li> -->
            <li><a href="<?php print base_url('/posting'); ?>" class="btn btn-primary"> Post </a></li>
        </ul>
    </nav>

    <div class="container">
        <h1 class="h1">Post view detail</h1>
        <hr class="hr"/>

        <!-- <div class="card" style="max-width: 100%;"> -->
            <img src="<?php print base_url('img/' . $postses['picture']); ?>" class="card-img-top" alt="content_view">
            <!-- <div class="card-body"> -->
                    <br class="br"/>
                    <h1 class="card-text" style="color: #17202A;"><b><?php print $postses['title']; ?></b></h1>
                    <p class="card-text"><small class="text-body-secondary" style="font-size: 1.6em;"><?php print $postses['author']; ?></small></p>
                    <p class="card-text">Status [<?php print $postses['status']; ?>]</p>
                <!-- </div> -->
                <br class="br"/>

                <div class="content-text">
                    <p class="card-text" style="font-size: 1.2em;"><?php print $postses['content']; ?></p>
                </div>
            <!-- </div> -->

            <br class="br"/>
            <div class="text-justify">
                <a class="small" href="<?php print base_url('/posting'); ?>">&laquo; Back to Post</a>
            </div>
        </div>

        <br>
            <hr class="hr"/>
        </div>

    <!-- Footer (Manual) -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <h3 class="h3 text-center">Hunger Foolish</h3>
        </div>
      </div>
    </footer>

    <footer class="footer-2">
      <div class="container">
        <p>&copy; <?php print date('Y'); ?> Arizal Sabila Nurhikam</p>
      </div>
    </footer>
    
    <script src="<?php print base_url('js/bootstrap.min.js'); ?>"></script>
</body>
</html>