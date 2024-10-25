<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/css/output.css'); ?>" rel="stylesheet">
    <title>Tambah Event</title>
</head>
<body>`
    
    <div class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="relative z-10 bg-white p-8 rounded-md shadow-lg w-full max-w-sm lg:max-w-lg">
        <h1 class="text-xl font-bold mb-4">Tambah Pendaftar</h1>
        <form action="<?= base_url() ?>Tambah/simpanPendaftaran" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="nama_lomba">Pilih Lomba</label>
                <select name="id_lomba" id="lomba">
                <option value="" disabled selected>Pilih Lomba</option>
                    <?php foreach($tb_jns_lomba as $lomba) : ?>
                        <option value="<?= $lomba['idLomba'] ?>"><?= $lomba['namaLomba'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="nama_pendaftar">Nama Pendaftar</label>
                <input
                    class="appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    name="nama_pendaftar" id="nama_pendaftar" type="text" placeholder="Input nama pendaftar">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="kelas">Kelas</label>
                <input
                    class="appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    name="kelas" id="kelas" type="text" placeholder="Input Kelas">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="no_hp">Nomor Handphone</label>
                <input
                    class="appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    name="no_hp" id="no_hp" type="text" placeholder="Input nomor Handphone">
            </div>
            
            <div class="flex items-center justify-center gap-8">
                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md"
                    type="submit">
                    Tambah
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>