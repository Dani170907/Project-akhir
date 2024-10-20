<!-- Konten Halaman Event -->
<div class="container mx-auto px-6 py-4">
    <!-- Isi konten -->
    <!-- Heading Tabel -->
    <h1 class="text-xl text-center font-bold text-gray-800 mb-2">Data Event</h1>

    <div class="py-2"></div>

    <!-- Tombol Tambah Data -->
    <a href="<?= base_url() ?>Tambah/event" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md">
        Tambah Data
    </a>

    <div class="py-4"></div>

    <!-- Tabel Data -->
    <div class="w-full">
        <div class="border-b border-gray-200">
            <table class="min-w-full divide-y divide-green-400 shadow-lg">
                <thead class="bg-blue-500">
                    <tr>
                        <th class="px-6 py-4 text-md text-white">No</th>
                        <th class="px-6 py-4 text-md text-white">Nama Lomba</th>
                        <th class="px-6 py-4 text-md text-white">Penyelenggara</th>
                        <th class="px-6 py-4 text-md text-white">Edit</th>
                        <th class="px-6 py-4 text-md text-white">Delete</th>
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
                            <a href="<?= base_url() ?>Admin/editLomba/<?= $event['id'] ?>">
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
                            <a href="#" onclick="confirmDelete('<?= base_url() ?>Admin/hapus/<?= $event['id'] ?>')" class="text-red-400">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6"
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

<!-- Script SweetAlert2 -->
<script>

function confirmDelete(url) {
    Swal.fire({
        title: "Apakah kamu yakin?",
        text: "Data yang dihapus tidak bisa dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, hapus data!"
    }).then((result) => {
        if (result.isConfirmed) {
            // Tampilkan alert sukses terlebih dahulu
            Swal.fire({
                title: "Deleted!",
                text: "Data berhasil dihapus.",
                icon: "success"
            });
            // Tunggu selama 2 detik sebelum redirect
            setTimeout(() => {
                window.location.href = url;
            }, 2000);  // Delay 2 detik
        }
    });
}
</script>