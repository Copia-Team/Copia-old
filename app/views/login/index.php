<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']?></title>
    <link href="<?= BASEURL;?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= BASEURL;?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASEURL;?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/main.css">
</head>
<body>
    <div class="container" style="width: 572px; height: 560px; background: rgba(255, 255, 255, 0.70); border-radius: 50px; margin-top:260px;">
        <form>
        <!-- Username -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Nama Pengguna</label>
            <input type="text" id="form2Example1" class="form-control" />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Kata Sandi</label>
            <input type="password" id="form2Example2" class="form-control" />
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
            <!-- Checkbox -->    
            </div>

        </div>

        <!-- Submit button -->
        <a href="<?=BASEURL?>" class="btn" style="color: white; background-color: #FE7119; padding: 12px 27px; font-weight: 600;" role="button" aria-pressed="true">Login</a>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Belum Memiliki Akun? <a href="#!">Daftar</a></p>
        </div>
    </form>
    </div>

    <script src="<?= BASEURL?>/vendor/aos/aos.js"></script>
    <script src="<?= BASEURL?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL?>/js/main.js"></script>
</body>
