<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Library</title>
        <link href="<?= base_url('assets/sb_admin/');?>css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body style="background:#c9c9c9;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Masuk</h3></div>
                                    <div class="card-body">
        <?= $this->session->flashdata('message');?>
        <?php if (isset($_GET['sessionEnd'])) {
           echo'<div class ="alert alert-success" role="alert">Anda telah logout!</div>';
        } ?>
        <form method="POST" action="MainView/login">
            <div class="form-floating mb-3">
                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email_user" />
                <label for="inputEmail">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="myInput" type="password" placeholder="Kata Sandi" name="password_user" />
                <label for="inputPassword">Kata Sandi</label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" id="inputRememberPassword" type="checkbox" onclick="myFunction()" />
                <label class="form-check-label" for="inputRememberPassword">Tampilkan Kata Sandi</label>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                <button class=" form-control btn btn-secondary">Masuk</button>
            </div>
        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a style="text-decoration: none;color:black;" href="<?= base_url('RegisterView')?>">Belum punya akun? Daftar!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/sb_admin/');?>js/scripts.js"></script>

        <script type="text/javascript">
          function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>

    </body>
</html>

