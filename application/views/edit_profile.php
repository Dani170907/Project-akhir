<h2>Edit profile</h2>

<form action="<?= base_url() ?>profile/updateProfil" method="post">
    <input type="hidden" name="id" value="<?= $tb_user['id'] ?>"> <br>
    <input type="text" name="nama" value="<?= $tb_user['nama'] ?>"> <br>
    <input type="text" name="username" value="<?= $tb_user['username'] ?>"> <br>
    <input type="password" name="password" value="<?= $tb_user['password'] ?>"> <br> <br>
    
    <input type="button" value="simpan">
</form>