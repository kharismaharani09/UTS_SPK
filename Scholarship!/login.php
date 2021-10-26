<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style/pass.css">
    <link href="assets/img/logo2.png" rel="shortcut icon">
    <script src="https://kit.fontawesome.com/ff3a2a3758.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <div class="container" style="margin-top: 10px">
        <a href="index.php" style="color:#035397; font-size:17px;"><i class="fas fa-hand-point-left"></i> <b>Kembali</b></a>
    </div>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>
    <div class="login-form" style="margin-top: 85px;">
        <form method="post" action="ceklogin.php">
            <h2 class="text-center" style="color: #035397;">Login</h2>
            <div class="form-group ">
                <div class="form-group has-error">
                    <div class="title-menu" style="color:#035397;"><i class="fas fa-envelope" style="color:#035397;"></i> Username : </div>
                    <input type="text" class="form-control" name="username" placeholder="masukkan username anda" required="required">
                </div>
                <div class="form-group has-error">
                    <div class="title-menu" style="color:#035397;"><i class="fas fa-key" style="color:#035397; margin-top:20px"></i> Password : </div>
                    <input type="password" class="form-control" name="password" placeholder="masukkan password" required="required">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Kirim" style="background-color:#035397; margin-top:20px; width: 100%;">
                </div>
        </form>
    </div>
</body>

</html>