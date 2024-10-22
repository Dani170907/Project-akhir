<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/css/output.css'); ?>" rel="stylesheet">
    <title>Tambah Event</title>
</head>
<body>
<?php if ($this->session->flashdata('success')): ?>
        <p style="color: green;"><?= $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <form action="<?= base_url() ?>Tambah/simpanPendaftaran" method="post">
        <label for="lomba">Lomba:</label>
        <select name="id_lomba" id="lomba">
            <option value="" disabled selected>Pilih Lomba</option>
            <?php foreach($tb_jns_lomba as $lomba) : ?>
                <option value="<?= $lomba['idLomba'] ?>"><?= $lomba['namaLomba'] ?></option>
            <?php endforeach; ?>
        </select>
        <input placeholder="nama pendaftar" type="text" name="nama_pendaftar" id="nama_pendaftar"><br><br>
        <input placeholder="kelas" type="text" name="kelas" id="kelas"><br> <br>
        <input placeholder="no hp" type="text" name="no_hp" id="no_hp"><br> <br>

        <button type="submit">SIMPAN</button>
    </form>

</body>
</html>