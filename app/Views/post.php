<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $title; ?></title>
    <link rel="stylesheet" href="<?php print base_url('styles/client_style.css'); ?>">
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


    <!-- content -->
    <div class="container">
        <h1 class="h1">Posting</h1>
        <hr class="hr"/>
        <p class="p">"Exploring the Beauty of story: A Journey Beyond Words."</p>

        <div class="main-bg">
            
        </div>
        <div class="text-main text-center">
            <p class="p">Venturing into the heart of the wilderness, we encountered breathtaking landscapes, encountered fascinating wildlife, and immersed ourselves in the serenity of nature – an unforgettable adventure that transcended words.</p>
        </div>
    <br>
    <hr class="hr"/>

    <div class="row justify-content-center">
        <?php foreach($postses as $posts) : ?>
            <div class="card" style="width: 19rem; margin-right: 20px; margin-top: 20px;background-color: white; color: black; box-shadow: -3px 3px 6px rgba(0, 0, 0, 0.4), 3px 3px 6px rgba(0, 0, 0, 0.4), 0 -3px 6px rgba(0, 0, 0, 0.4);">
            <img src="<?php print base_url('img/' . $posts['picture']); ?>" class="card-img-top" alt="posting" style="margin-top: 5px;">
                <div class="card-body">
                    <h5 class="card-title"><?php print $posts['title']; ?></h5>
                    <hr class="hr">
                    <p class="card-title"><?php print $posts['author']; ?></p>
                    <p class="card-title"><?php print $posts['status']; ?></p>
                    <p class="card-text"><?php print substr($posts['content'], 0, 120) ?></p>
                    <hr class="hr"/>
                    <a href="<?php print base_url('/postdetail/' . $posts['slug']); ?>" class="btn btn-primary">View More</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- exit -->
    <div class="text-justify" style="margin-top: 30px;">
        <a href="<?php print base_url(); ?>">&laquo; Back to home</a>
    </div>
    <!-- akhir exit -->

    </div>
    <!-- Akhir content -->

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