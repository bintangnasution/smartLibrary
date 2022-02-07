<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registrasi</title>
        <link href="<?= base_url('assets/sb_admin/')?>css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body style="background:#c9c9c9;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Daftar Akun</h3></div>
                                    <div class="card-body">
                                        
                                        <form method="POST" action="RegisterView/registration">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Masukkan nama anda" name="nama_user" />
                                                        <label for="inputFirstName">Nama Lengkap</label>
                                                        <?php if (isset($_GET['error'])){ ?>
                                                        <?="<i style='color:red;'>Nama lengkap mungkin kosong</i>";?>
                                                        <?php };?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <select class="form-control" name="kelas_user">
                                                          <option value="0">Pilih Kelas</option>
                                                          <option value="VII">VII</option>
                                                          <option value="VIII">VIII</option>
                                                          <option value="IX">IX</option>                      
                                                        </select>
                                                        <label for="inputLastName">Kelas</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="nama@example.com" name="email_user"/>
                                                <label for="inputEmail">Email</label>
                                                <?php if (isset($_GET['error'])){ ?>
                                                <?="<i style='color:red;'>Email mungkin kosong atau telah digunakan </i>";?>
                                                <?php };?>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Ketikkan password" name="password_user" />
                                                        <label for="inputPassword">Kata Sandi</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="cpassword" />
                                                        <label for="inputPasswordConfirm">Ulang Kata Sandi</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if (isset($_GET['error'])){ ?>
                                            <?="<i style='color:red;'>Mohon masukkan kembali kata sandi </i>";?>
                                            <?php };?>

                                        
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-secondary btn-block" >Buat Akun</button></div>
                                            </div>
                                        </form>
                                        
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a style="text-decoration: none;color:black;" href="<?= base_url('MainView')?>">Sudah punya akun? Masuk!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/sb_admin/')?>js/scripts.js"></script>
    </body>
</html>
