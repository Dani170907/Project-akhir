<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
</head>
<body>
    <h1>Login Page</h1>
    
    <input type="text" placeholder="masukan username" name="username"> <br><br>
    <input type="password" placeholder="masukan password" name="password"> <br><br>
    
    <button type="submit" value="LOGIN">Log In</button>
    
    <br>
    <p>Don't have account? <a href="<?= base_url() ?>Registrasi">daftar</a></p>
</body>
</html>