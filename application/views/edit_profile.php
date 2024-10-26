<h2>Edit profile</h2>

<?php if (isset($tb_user)) : ?>

    <form action="<?= base_url() ?>Edit/updateUser/<?= $tb_user['idUser'] ?>" method="post">
            <input type="hidden" name="id" value="<?= $tb_user['idUser'] ?>"> <br>
            <input type="text" name="nama" value="<?= $tb_user['nama'] ?>"> <br>
            <input type="text" name="username" value="<?= $tb_user['username'] ?>"> <br>
            <input type="password" name="password" value="<?= $tb_user['password'] ?>"> <br> <br>
            <button type="submit">Edit</button>
    </form>

<?php else : ?>
    <p>Data pengguna tidak ditemukan.</p>
<?php endif; ?>
