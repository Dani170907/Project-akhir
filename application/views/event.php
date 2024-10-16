<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/css/output.css'); ?>" rel="stylesheet">
    <title>Data Event</title>
</head>
<body>
    <!-- Heading Tabel -->
    <h1 class="text-center text-5xl font-bold mb-8 mt-8">Data Event</h1>

    <!-- Container Tombol dan Heading -->
<div class="container mx-auto mt-8">
    <div class="flex justify-between items-center mb-4">
        <!-- Tombol Tambah Data di Kiri dengan Jeda -->
        <a href="<?= base_url() ?>Tambah/event" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded ml-4">
            Tambah Data
        </a>
    </div>

    <!-- Tabel Data di Tengah dengan Jeda di Kiri -->
    <div class="flex justify-center">
        <div class="w-full ml-4">
            <div class="border-b border-gray-200 shadow">
                <table class="min-w-full divide-y divide-green-400">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">No</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Nama Lomba</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Penyelenggara</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Edit</th>
                            <th class="px-6 py-2 text-xs text-gray-500">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                    <?php foreach ($tb_jns_lomba as $key => $event) : ?>
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-500"><?= $key + 1 ?></td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900"><?= $event['namaLomba'] ?></div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500"><?= $event['penyelenggara'] ?></div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-blue-400"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 
                                            2.828L11.828 15H9v-2.828l8.586-8.586z"
                                        />
                                    </svg>
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="<?= base_url() ?>Admin/hapus/<?= $event['id'] ?>" 
                                onclick="return confirm('Yakin ingin menghapus?');">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-red-400"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 
                                            4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                        />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</body>
</html>
