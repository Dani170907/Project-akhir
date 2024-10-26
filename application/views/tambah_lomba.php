<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="relative z-10 bg-white p-8 rounded-md shadow-lg w-full max-w-sm lg:max-w-lg">
        <h1 class="text-xl font-bold mb-4">Tambah Event</h1>
        <form action="<?= base_url() ?>Tambah/simpanEvent" method="POST" onsubmit="return handleSubmit()">            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="nama_lomba">Nama Lomba</label>
                <input
                    class="appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    name="nama_lomba" id="nama_lomba" type="text" placeholder="Input nama lomba" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="penyelenggara">Penyelenggara</label>
                <input
                    class="appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    name="penyelenggara" id="penyelenggara" type="text" placeholder="Input penyelenggara" required>
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

<script>
    function showAlert(title, text, icon, callback) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
            confirmButtonText: 'OK'
        }).then(callback);
    }

    function handleSubmit() {
        showAlert('Berhasil!', 'Data berhasil ditambahkan!', 'success', () => {
            document.querySelector('form').submit();
        });

        return false;
    }
</script>

</body>
</html>