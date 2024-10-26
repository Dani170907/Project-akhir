<a class="block rounded-lg bg-gradient-to-r from-orange-500 to-rose-500 p-2" href="#">
    <div class="flex items-center rounded-md border border-gray-100 bg-white px-4 py-3 shadow-lg"> 
        <!-- <img class="h-10 w-10 rounded-full object-cover" src="<?= base_url('assets/images/SA.png') ?>" alt="Simon Lewis" /> -->
        <div class="ml-4 w-56">
            <p class="text-xl font-medium">Nama: <strong><?= isset($tb_user['nama']) ? $tb_user['nama'] : 'Tidak tersedia'; ?></strong></p>
            <div class="ml-4 mb-4">
                <p class="text-lg text-gray-400">Username:    <?= isset($tb_user['username']) ? $tb_user['username'] : 'Tidak tersedia'; ?></p> 
            </div>
            
            <div class="mt-4">
                <a class="text-xs bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md" href="<?=base_url() ?>Edit/editUser">Edit profile</a>
            </div>
        </div>
    </div>
</a>
