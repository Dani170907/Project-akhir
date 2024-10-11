<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>

        <form action="<?= base_url() ?>Registrasi/simpan" method="POST">

        <input type="text" name="nama" placeholder="Nama Lengkap">  <br><br>

        <input type="username" name="username" placeholder="Username">  <br><br>

        <input type="password" name="password" placeholder="Password">  <br> <br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>