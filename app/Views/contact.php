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
        <hr class="hr"/>
        <div class="card mx-auto" style="max-width: 54%; margin-top: 70px;">
            <img src="<?php print base_url('img/markus-winkler-AUfSloKnxUw-unsplash.jpg'); ?>" class="card-img-top" alt="contact">
            <div class="card-body">
                <h5 class="card-title">Contact</h5>
                <p class="card-text">Here are some quick ways to get in touch to further discuss the app post, which forms the majority of the content.</p>
            </div>
            <ul class="list-group list-group-flush">
            <form action="" class="form" method="post">
                <li class="list-group-item">
                    <div class="form-group">
                        <!-- <label for="email" s>Email</label> -->
                        <h4 class="h4" style="color: #17202A; margin-top: 20px;">Mail</h4>
                        <input type="email" class="form-control" required>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group">
                        <!-- <label for="name">Nama</label> -->
                        <h4 class="h4" style="color: #17202A; margin-top: 20px;">Name</h4>
                        <input type="text" class="form-control" required>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group">
                        <!-- <label for="phone">No. Telepon</label> -->
                        <h4 class="h4" style="color: #17202A; margin-top: 20px;">Phone Number</h4>
                        <input type="tel" class="form-control" required>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group">
                        <!-- <label for="message">Message</label> -->
                        <h4 class="h4" style="color: #17202A; margin-top: 20px;">Message</h4>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Leave Message" required></textarea>
                    </div>
                </li>
                <li class="list-group-item"></li>
            </form>
            </ul>
            <div class="card-body">
                <div class="form-group">
                    <input type="submit" value="Send" class="btn btn-primary w-100" style="border-radius: 6px;">
                </div>

                <!-- <a href="#" class="card-link">Card link</a> -->
                <!-- <a href="#" class="card-link">Another link</a> -->
                <br>
                <div class="text-justify">
                    <a class="small" href="<?php print base_url(); ?>">&laquo; Back to home</a>
                </div>
            </div>
        </div>
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