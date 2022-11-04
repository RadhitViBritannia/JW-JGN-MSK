<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORM LOGIN</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-lg-4">
<div class="card shadow mt-5">
<div class="card-body py-5">
        <h2 class="text-primary text-center">PEDULI DIRI</h2>
        <p class="text-center text-secondary small mb-5">CATATAN PERJALANAN</p>
                <?php echo @$alert ?>
                <!-- form login -->
                <form action="proseslogin.php" method="POST">
        <input type="number" name="nik" class="form-control mb-4" placeholder="NIK">
        <input type="text" name="nama" class="form-control mb-4" placeholder="Nama Lengkap">
<div class="form-inline btn-a">
        <button class="btn btn-primary" name="pengguna_baru">Saya Pengguna Baru</button>
        <button class="btn btn-primary btn-b">Masuk</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<script src="jquery/jquery.js"></script>
<script src="bs/js/bootstrap.js"></script>
</body>
</html>