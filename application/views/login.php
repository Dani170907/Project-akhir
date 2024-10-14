<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?= base_url('assets/css/output.css'); ?>" rel="stylesheet">
</head>
<body>

<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://picsum.photos/1920/920" alt=""
            class="w-full h-full object-cover filter blur-lg brightness-50">
    </div>

    <div class="relative z-10 bg-white p-8 rounded-md shadow-lg">
        <h1 class="text-xl font-bold mb-4">Login</h1>
        <form action="<?= base_url() ?>Login/verifikasi" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="username">Username</label>
                <input
                    class="appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    name="username" id="username" type="text" placeholder="Masukkan Username">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password">Password</label>
                <input
                    class="appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    name="password" id="password" type="password" placeholder="Password">
            </div>
            <div class="flex items-center justify-between gap-8">
                <button
                    class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-cyan-500 hover:text-cyan-800"
                    href="<?= base_url() ?>Registrasi">
                    Belum memiliki akun?
                </a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
