<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link href="<?= base_url('assets/css/output.css'); ?>" rel="stylesheet">
    <script src="<?= base_url('assets/js/sweetalert2.all.min.js'); ?>"></script>
    </head>
<body>

<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://picsum.photos/1920/920" alt=""
            class="w-full h-full object-cover filter blur-md brightness-100">
    </div>

    <div class="relative z-10 bg-white p-8 rounded-md shadow-lg w-full max-w-sm lg:max-w-lg">
        <h1 class="text-xl font-bold mb-4">Registrasi</h1>
        <form action="<?= base_url() ?>Registrasi/simpan" method="POST" onsubmit="return validateForm()">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="nama">Nama</label>
                <input
                    class="appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    name="nama" id="nama" type="text" placeholder="Masukkan Nama Lengkap" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="username">Username</label>
                <input
                    class="appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    name="username" id="username" type="text" placeholder="Masukkan Username" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password">Password</label>
                <input
                    class="appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    name="password" id="password" type="password" placeholder="Password" required>
            </div>
            <div class="flex items-center justify-between gap-8">
                <button
                    class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Sign Up
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-cyan-500 hover:text-cyan-800"
                   href="<?= base_url() ?>Login">
                    Sudah memiliki akun?
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    // Fungsi untuk menampilkan SweetAlert2
    function showAlert(title, text, icon) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
            confirmButtonText: 'OK'
        });
    }

    // Validasi dan penanganan form
    function validateForm() {
        const isSuccess = true; // ganti dengan hasil dari server

        if (isSuccess) {
            showAlert('Berhasil!', 'Pendaftaran berhasil!', 'success');
            return true; // lanjutkan pengiriman form
        } else {
            showAlert('Gagal!', 'Pendaftaran gagal. Silakan coba lagi.', 'error');
            return false; // batalkan pengiriman form
        }
    }
</script>

</body>
</html>
