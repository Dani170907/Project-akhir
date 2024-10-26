<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    
    <div class="relative z-10 bg-white p-8 rounded-md shadow-lg w-full max-w-sm lg:max-w-lg">
        <h1 class="text-xl font-bold mb-4">Edit Profile</h1>
    <?php if (isset($tb_user)) : ?>
    <form action="<?= base_url() ?>Edit/updateUser/<?= $tb_user['idUser'] ?>" method="post">
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="nama">Nama</label>
            <input value="<?= $tb_user['nama'] ?>"
            class="appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
            name="nama" id="nama" type="text" placeholder="Edit nama">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="username">Username</label>
            <input value="<?= $tb_user['username'] ?>"
            class="appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
            name="username" id="username" type="text" placeholder="Edit username">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="password">Password</label>
            <input value="<?= $tb_user['password'] ?>"
            class="appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
            name="password" id="password" type="text" placeholder="Edit password">
        </div>
        <div class="flex items-center justify-center gap-8">
            <button
            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md"
            type="submit">
            Edit
        </button>
    </div>
</form>
<?php else : ?>
    <p>Data pengguna tidak ditemukan.</p>
<?php endif; ?>
</div>
</div>

</body>
</html>