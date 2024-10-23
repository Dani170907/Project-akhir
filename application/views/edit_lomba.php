<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lomba</title>
</head>
<body>
        <h1>Edit Lomba: <?= $tb_jns_lomba['namaLomba'] ?></h1>

        <form action="<?= base_url('Edit/updateLomba/' . $tb_jns_lomba['idLomba']) ?>" method="post">
            <input type="hidden" name="id_lomba" value="<?= $tb_jns_lomba['idLomba'] ?>">
            
            <label for="nama_lomba">Nama Lomba</label>
            <input type="text" name="nama_lomba" value="<?= $tb_jns_lomba['namaLomba'] ?>"> <br>

            <label for="penyelenggara">Penyelenggara</label>
            <input type="text" name="penyelenggara" value="<?= $tb_jns_lomba['penyelenggara'] ?>"> <br> <br>

            <button type="submit">EDIT</button>
        </form>

</body>
</html>
