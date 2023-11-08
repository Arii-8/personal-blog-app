<?php print $this->extend('auth/templates/index'); ?>

<?php print $this->section('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6" style="margin-top: 70px;">
                <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                    
                    
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?php print lang('Auth.register'); ?></h1>
                                    </div>

                                    <?php print view('Myth\Auth\Views\_message_block'); ?>
                                    <form class="user" action="<?php print url_to('register'); ?>" method="post" autocomplete="off">
                                        <?php print csrf_field(); ?>

                                    <div class="form-group">
                                            <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email"
                                                placeholder="<?php print lang('Auth.email')?>" value="<?php print old('email'); ?>">
                                                <small id="emailHelp" class="form-text text-muted"><?php print lang('Auth.weNeverShare'); ?></small>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username"
                                                placeholder="<?php print lang('Auth.username'); ?>" value="<?php print old('username'); ?>">
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                    name="password" placeholder="<?php print lang('Auth.password'); ?>" autocomplete="off">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                                    placeholder="<?php print lang('Auth.repeatPassword'); ?>" autocomplete="off">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            <?php print lang('Auth.register'); ?>
                                        </button>
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> -->
                                    <div class="text-center">
                                
                                        <p> <a class="small" href="<?php print url_to('login'); ?>"> <?php print lang('Auth.alreadyRegistered'); ?> <?php print lang('Auth.signIn'); ?></a></p>
                                    </div>

                                    <div class="text-justify">
                                        <a class="small" href="<?php print base_url(); ?>">&laquo; Back to home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php print $this->endSection(); ?>