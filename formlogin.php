<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&display=swap" rel="stylesheet"> <!-- Menambahkan font -->
    <style>
        body {
            background-color: pink; /* Latar belakang pink */
            height: 100vh; /* Memastikan tinggi halaman penuh */
            display: flex; /* Menggunakan flexbox untuk memusatkan form */
            justify-content: center; /* Memusatkan secara horizontal */
            align-items: center; /* Memusatkan secara vertikal */
        }
        .login-container {
            max-width: 400px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Membuat latar belakang form sedikit transparan */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-family: 'Dancing Script', cursive; /* Mengubah font menjadi italic */
        }
        .login-container img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        label, input, button {
            font-style: italic; /* Menjadikan teks menjadi italic */
        }
    </style>
</head>
<body>

<div class="login-container">
    <img src="abc.jpg" alt="Login Image">
    <form method="POST" action="ceklogin.php">
        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" class="form-control form-control-sm" id="username" placeholder="Masukkan username Anda" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Masukkan password Anda" name="password" required>
        </div>
        <button type="submit" class="btn btn-outline-success">Login</button>
        <button type="button" class="btn btn-warning" onclick="window.location.href='index.php'">Batal</button>
    </form>
</div>

</body>
</html>
