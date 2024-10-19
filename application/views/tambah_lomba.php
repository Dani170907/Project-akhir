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

    <form action="<?= base_url() ?>Tambah/simpan" method="post">
        <input type="text" name="nama_lomba" id="nama_lomba"><br>
        <input type="text" name="penyelenggara" id="penyelenggara"><br> <br>

        <button type="submit">SIMPAN</button>
    </form>

</body>
</html>