<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $judul; ?> </title>


    <link href="<?php echo base_url() ?>assets/js/sb-admin-2.js">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row col-lg-6 col-md-12 col-sm-12 col-12 login-content">
            <!--navbar-->
            <div class="header-area">
                <!-- site-navbar start -->


            </div>

            <!-- login form -->

            <div class="col-lg-10 offset-lg-2 col-md-10 offset-md-1 col-sm-12 offset-sm-2 col-12 login-form">
                <h4>LOGIN</h4>
                <div class="form-group">
                    <input type="text" class="form-control " id="input" placeholder="Nama Pengguna">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="input" placeholder="Katasandi">
                </div>

                <div class="forgot-password">
                    <a href="">Lupa katasandi?</a>
                </div>

                <div class="form-group col-lg-8 offset-lg-2 col-md-6 offset-md-3 col-sm-6 offset-sm-3 login-btn">
                    <input type="submit" class="btn btn-primary form-control" value="Login">
                </div>

                <div class="create-account">
                    belum punya akun?
                    <a href="<?php echo base_url('page/c_register') ?>">
                        Daftar
                    </a>
                </div>

            </div>

        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/login.js"></script>
</body>

</html>