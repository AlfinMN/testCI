<!doctype html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> <?php echo $judul; ?> </title>

<head>

    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/js/sb-admin-2.js">
</head>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">

            <!-- Bootstrap -->

            <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <!-- Navbar Brand -->
            <!-- <a href="#" class="navbar-brand">
                <img src="<?php echo base_url() ?>assets/img/logosma1kendari.png" alt="logo" width="400">
            </a>
        </div>
    </nav> -->
</header>

<body>
    <div class="container">
        <div class="row py-5 mt-0 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="<?php echo base_url() ?>assets/img/registrasi.PNG" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1>Buat Akun Anda </h1>

            </div>

            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="#">
                    <div class="row">

                        <!-- First Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="NamaDepan" type="text" name="NamaDepan" placeholder="Nama Depan" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Last Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="NamaBelakang" type="text" name="NamaBelakang" placeholder="Nama Belakang" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Username -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fas fa-user-plus"></i>
                                </span>
                            </div>
                            <input id="NamaPengguna" type="username" name="username" placeholder="Nama Pengguna" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Alamat Email" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Phone Number -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fas fa-phone"></i>

                                </span>
                            </div>
                            <input type="text" readonly class="form-control bg-white border-md border-left-0 pl-3" style="max-height: 50px;max-width: 80px " id="staticEmail" value="+62">
                            <input id="NoTlp" type="tel" name="phone" placeholder="Nomor Telepon" class="form-control bg-white border-md border-left-0 pl-3">
                        </div>

                        <!-- Gender -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fas fa-venus-mars"></i>
                                </span>
                            </div>
                            <select id="angkatan" name="angkatan" class="form-control custom-select bg-white border-left-0 border-md">
                                <option value="">Jenis Kelamin</option>
                                <option value="">Laki-Laki</option>
                                <option value="">Perempuan</option>


                            </select>
                        </div>
                        <!-- graduated -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fas fa-graduation-cap"></i>
                                </span>
                            </div>
                            <select id="angkatan" name="angkatan" class="form-control custom-select bg-white border-left-0 border-md">
                                <option value="">Pilih Tahun Angkatan</option>
                                <option value="">1990</option>
                                <option value="">1991</option>
                                <option value="">1992</option>
                                <option value="">1993</option>
                                <option value="">1994</option>
                                <option value="">1995</option>
                                <option value="">1996</option>
                                <option value="">1997</option>
                                <option value="">1998</option>
                                <option value="">1999</option>
                                <option value="">2000</option>

                            </select>
                        </div>

                        <!-- Password -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Password Confirmation -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="passwordConfirmation" type="text" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-2">
                            <a href="<?php echo base_url('admin/dashboard') ?>" id="btn-grad" class="btn btn-success btn-block py-2">
                                <span class="font-weight-bold" class="">Daftar</span>

                            </a>
                        </div>



                        <!-- Already Registered -->
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Sudah Punya Akun? <a href="<?php echo base_url('page/c_login') ?>" class="text-primary ml-2">Login</a></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>