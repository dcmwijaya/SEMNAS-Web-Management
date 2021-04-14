<?= $this->extend($config->viewLayout) ?>

<?= $this->section('main') ?>
<link rel="stylesheet" href="<?= base_url('css/loginstyle.css') ?>">

<div class="container">
    <div class="row">
        <div class="col">
            <div class="info">
                <center>
                    <h2><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Kelola Data Peserta Semnas Roboco 2021</h2>
                </center>
                <hr style="border: 1px grey solid;">
            </div><br>

            <div class="login">
                <div class="avatar">
                    <i class="ico fa fa-user"></i>
                </div>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= route_to('login') ?>" method="post">
                        <?= csrf_field() ?>

                        <?php if ($config->validFields === ['email']) : ?>
                            <div class="form-group">
                                <label for="login"><?= lang('Auth.email') ?></label>
                                <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="form-group">
                                <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="password"><?= lang('Auth.password') ?></label>
                            <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>

                        <?php if ($config->allowRemembering) : ?>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                    <?= lang('Auth.rememberMe') ?>
                                </label>
                            </div>
                        <?php endif; ?>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;<?= lang('Auth.loginAction') ?></button>
                    </form>

                    <hr>

                    <?php if ($config->allowRegistration) : ?>
                        <p><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                    <?php endif; ?>
                    <?php if ($config->activeResetter) : ?>
                        <p><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                    <?php endif; ?>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>

<?= $this->endSection() ?>