<?php print $this->extend('auth/templates/index'); ?>

<?php print $this->section('content'); ?>

<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6" style="margin-top: 70px;">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><?php print lang('Auth.loginTitle'); ?></h1>
                                    </div>

                                    <?php print view('Myth\Auth\Views\_message_block'); ?>
                                    <form class="user" action="<?php print url_to('login'); ?>" method="post" autocomplete="off">
                                        <?php print csrf_field(); ?>

                                        
                                        <?php if ($config->validFields === ['email']): ?>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                name="login" placeholder="<?php print lang('Auth.email'); ?>" aria-describedby="emailHelp">
                                            <div class="invalid-feedback">
                                                <?php print session('errors.login'); ?>
                                            </div>
                                        </div>

                                        
                                        <?php else: ?>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                    name="login" placeholder="<?php print lang('Auth.emailOrUsername'); ?>">
                                                <div class="invalid-feedback">
                                                    <?php print session('errors.login'); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>


                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user <?php if 
                                            (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?php print lang('Auth.password'); ?>">
                                            <div class="invalid-feedback">
								                <?php print session('errors.password'); ?>
							                </div>
                                        </div>


                                        <!-- <?php // if ($config->allowRemembering): ?> -->
                                        <!-- <div class="form-group"> -->
                                            <!-- <div class="custom-control custom-checkbox small"> -->
                                                <!-- <input type="checkbox" class="custom-control-input" name="remembering" <?php // if (old('remember')) : ?> checked <?php // endif ?>> -->
                                                <!-- <label class="custom-control-label" for="customCheck">Remember -->
                                                    <!-- Me</label> -->
                                            <!-- </div> -->
                                        <!-- </div> -->
                                        <!-- <?php // endif; ?> -->


                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            <?php print lang('Auth.loginAction'); ?>
                                        </button>
                                        <!-- <hr> -->
                                        <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    <hr>

                                    <!-- <?php // if ($config->activeResetter): ?> -->
					                    <!-- <div class="text-center"> -->
                                            <!-- <a class="small" href="<?php // print url_to('forgot'); ?>"><?php // print lang('Auth.forgotYourPassword'); ?></a> -->
                                        <!-- </div> -->
                                    <!-- <?php // endif; ?> -->
                                    

                                    <?php if ($config->allowRegistration) : ?>
					                    <div class="text-center">
                                            <a class="small" href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a>
                                        </div>
                                    <?php endif; ?>

                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> -->
                                    <!-- <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->

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