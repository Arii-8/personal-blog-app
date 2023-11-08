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
    
    <div class="container-fluid">
      <p class="dummy text-center"><span style="color: #0DCAF0;">Publish your passions</span>, your way</p>
      <h4 class="text-center" style="color: #F2F2F2;">Create a unique and beautiful blog easily.</h1>
      <!-- style="color: #17202A;" -->
      <br/><br/>
      <a href="<?php print base_url('/addPost'); ?>" class="get-started">Posting Your BLog</a>
    </div>

    <hr class="hr">

    <!-- content -->
    <div class="content" style="box-shadow: -3px 3px 6px rgba(0, 0, 0, 0.4), 3px 3px 6px rgba(0, 0, 0, 0.4), 0 -3px 6px rgba(0, 0, 0, 0.4);">
    
    <div class="row">
        <div class="col-lg-6">
            <h2 class="h2">Post</h2>
            <p>
                Blog artikel pribadi saya menjadi tempat berarti untuk mengekspresikan ide-ide kreatif, pandangan pribadi, dan pengalaman hidup. 
                Setiap kata mencerminkan proses pemikiran mendalam dan keinginan untuk menginspirasi pembaca.
                <br/><br/>
                Blog ini juga tempat belajar dan berkembang sebagai penulis. Saya senang mengeksplorasi berbagai topik dan mengembangkan 
                keterampilan komunikasi serta gaya penulisan. 
                <br/><br/>
                Interaksi dengan pembaca berarti bagi saya. Umpan balik dan komentar 
                memotivasi saya untuk terus berkarya dan memberikan konten bermanfaat. 
                <br/><br/>
                Dalam mengelola blog ini, saya berusaha memberikan 
                pengalaman membaca yang nyaman dan menarik. Visi saya adalah mengembangkan blog dengan artikel bermanfaat dan fitur interaktif.
                <br/><br/>
                Meskipun blog masih tahap awal, saya berkomitmen untuk tumbuh dan mengasah kualitas tulisan dengan sikap positif.
                Blog ini mencerminkan hasrat dan dedikasi terhadap dunia tulisan, serta harapan untuk berkontribusi dan menciptakan 
                komunitas yang saling mendukung.
                <br/><br/>
                Terima kasih telah membaca deskripsi singkat tentang blog saya. Kunjungi [URL Blog Anda] untuk lebih banyak informasi.
                <br/><br/>
                Salam hangat,
                <b>Arizal Sabila Nurhikam</b>
                    
                </p>
                <br/><br/>

            </div>
            <div class="col-lg-6">
                <img src="<?php print base_url('img/thom-milkovic-FTNGfpYCpGM-unsplash.jpg'); ?>" alt="profile">
            </div>
        </div>
    </div>
    <!-- Akhir content -->

    <!-- image kontent contact -->
    <div class="card mx-auto mb-3" style="max-width: 93%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?php print base_url('img/3372216.jpg'); ?>" class="img-fluid rounded-start" alt="contact"/>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h1 class="card-title">INFO <span style="color: #0DCAF0;">POST</span></h1>
          <p class="card-text" style="font-size: 1.4em;">
            "Selalu siap dan tersedia untuk berkomunikasi dan berbagi pandangan. 
            Hubungi saya jika Anda ingin mendiskusikan proyek, ide, atau sekadar mengobrol. 
            Dengan latar belakang dalam teknologi, saya siap untuk menjalin kolaborasi yang produktif. 
            Jangan ragu untuk mengirim pesan, email, atau menghubungi saya melalui saluran 
            media sosial di bawah ini. Saya sangat menantikan pembicaraan yang bermanfaat dan 
            peluang untuk terhubung dengan berbagai individu dari berbagai latar belakang. 
            Terima kasih!"
          </p>
          
          <br>
            <a href="<?php print base_url('/contact'); ?>" class="btn btn-primary" style=" padding: 15px 60px; font-size: 1.3em;">Get Contact</a>
          <br><br>
          <p class="card-text"><small class="text-body-secondary" style="font-size: 1.6em;"> Last post <?php print date('Y'); ?> </small></p>
        </div>
      </div>
    </div>
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