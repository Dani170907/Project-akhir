<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?= base_url('assets/css/output.css'); ?>" rel="stylesheet"> <!-- Import file CSS yang dihasilkan -->
</head>
<body>

    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
        <img src="https://picsum.photos/1920/1080" alt=""
            class="w-full h-full object-cover filter blur-lg brightness-50">
    </div>

    <!-- Login Form -->
    <div class="relative z-10 bg-white p-8 rounded-md shadow-lg">
        <h1 class="text-xl font-bold mb-4">Login</h1>
        <form action="<?= base_url() ?>Login/verifikasi" method="POST">
            <div class="mb-4">
                <label for=""></label>
            </div>
        </form>
    </div>
    

        <input type="text" placeholder="masukan username" name="username"> <br><br>
        <input type="password" placeholder="masukan password" name="password"> <br><br>
        
        <button type="submit">Log In</button>
    </form>
    
    <br>
    <p>Don't have account? <a href="<?= base_url() ?>Registrasi">Sign Up</a></p>
</body>
</html>