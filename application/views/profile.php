

</body>
</html>

<h2>Profile</h2>

<p>Nama: <?= isset($tb_user['nama']) ? $tb_user['nama'] : 'Tidak tersedia'; ?></p>
<p>Username: <?= isset($tb_user['username']) ? $tb_user['username'] : 'Tidak tersedia'; ?></p>


<a href="<?=base_url() ?>Edit/editUser">EDIT PROFIL</a>

