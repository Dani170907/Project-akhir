<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pendaftaran</title>
</head>
<body>

    <?php if (!empty($tb_pendaftaran)): ?>
        <form action="<?= base_url('Edit/updatePendaftaran/' . $tb_pendaftaran['idPendaftaran']); ?>" method="post">

        <select name="id_lomba" id="lomba">
            <option value="" disabled selected>Pilih Lomba</option>
            <?php foreach($tb_jns_lomba as $lomba) : ?>
                <option value="<?= $lomba['idLomba'] ?>"><?= $lomba['namaLomba'] ?></option>
            <?php endforeach; ?>
        </select>

            <label for="nama_pendaftar">Nama Pendaftar:</label>
            <input type="text" name="nama_pendaftar" value="<?= isset($tb_pendaftaran['namaPendaftar']) ? $tb_pendaftaran['namaPendaftar'] : ''; ?>" required>

            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" value="<?= isset($tb_pendaftaran['kelas']) ? $tb_pendaftaran['kelas'] : ''; ?>" required>

            <label for="no_hp">No HP:</label>
            <input type="text" name="no_hp" value="<?= isset($tb_pendaftaran['noHp']) ? $tb_pendaftaran['noHp'] : ''; ?>" required>

            <button type="submit">Update</button>
        </form>
    <?php else: ?>
        <p>Data pendaftaran tidak ditemukan.</p>
    <?php endif; ?>
</body>
</html>