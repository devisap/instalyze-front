<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register - Instalyze</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="<?= site_url('assets/logos/logo-simple.svg')?>" />
    <link rel="stylesheet" href="<?= site_url('assets')?>/font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="<?= site_url('assets')?>/font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="<?= site_url('assets')?>/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= site_url('assets')?>/css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="<?= site_url('assets')?>/css/vendor/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="<?= site_url('assets')?>/css/main.css" />
</head>

<body class="background show-spinner no-footer">
    <!-- <div class="fixed-background"></div> -->
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side">
                        </div>
                        <div class="form-side">
                            <div class="mb-2 text-center">
                                <img src="<?= site_url('assets/logos/black.png')?>" style="max-width: 125px;" alt="">
                            </div>
                            <h6 class="mb-4">Register</h6>
                            <form action="<?= site_url('register')?>" method="POST">
                                <label class="form-group has-float-label mb-4">
                                    <input type="text" class="form-control" name="email" />
                                    <span>E-mail</span>
                                </label>

                                <label class="form-group has-float-label mb-4">
                                    <input type="text" class="form-control" name="username" />
                                    <span>Username</span>
                                </label>

                                <label class="form-group has-float-label mb-4">
                                    <input type="text" class="form-control" name="name" />
                                    <span>Name</span>
                                </label>

                                <label class="form-group has-float-label mb-4">
                                    <input type="password" class="form-control" type="password" placeholder="" name="password" />
                                    <span>Password</span>
                                </label>
                                <a href="<?= site_url('')?>">Login?</a>
                                <div class="">
                                    <!-- <a href="#">Forget password?</a> -->
                                    <button type="submit" class="btn btn-primary btn-sm btn-shadow" style="float: right;">REGISTER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="<?= site_url('assets')?>/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?= site_url('assets')?>/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?= site_url('assets')?>/js/dore.script.js"></script>
    <script src="<?= site_url('assets')?>/js/scripts.js"></script>
</body>

</html>