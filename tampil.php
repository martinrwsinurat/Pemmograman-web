<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-image: url('g.jpeg'); /* Ganti dengan path gambar latar belakang Anda */
            background-size: cover; /* Sesuaikan ukuran gambar */
            background-position: center; /* Pusatkan gambar */
            padding: 20px; /* Tambahkan padding */
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Latar belakang form transparan */
            padding: 20px;
            border-radius: 8px; /* Sudut membulat */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan */
        }
        table {
            margin-top: 20px; /* Jarak antara form dan tabel */
            background-image: url('uhuy.jpg'); /* Ganti dengan path gambar latar belakang tabel */
            background-size: cover; /* Sesuaikan ukuran gambar */
            color: white; /* Sesuaikan warna teks jika diperlukan */
        }
        .table img {
            width: 50px; /* Sesuaikan lebar gambar */
            height: auto; /* Menjaga rasio aspek gambar */
        }
    </style>
</head>
<body>

<div class="container">
    <form method="POST" action="tambah.php">
        <button type="submit" class="btn btn-outline-primary">Tambah</button>
    </form>
    
    <form>
        <legend>Silakan Di cek datanya:</legend>
        <label>
            <input type="radio" name="theme" class="forced-colors:appearance-auto appearance-none" />
            <p class="forced-colors:block hidden"></p>
            <div class="forced-colors:hidden h-6 w-6 rounded-full bg-cyan-200"></div>
            <div class="forced-colors:hidden h-6 w-6 rounded-full bg-cyan-500"></div>
        </label>
    </form>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>idTas</th>
                <th>Nama Tas</th>
                <th>Kategori</th>
                <th>idUser</th>
                <th>Password</th>
                <th>id_kantor</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM tas");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><img src="uhuy.jpeg" /></td>
                <td><?php echo $d['idTas']; ?></td>
                <td><?php echo $d['nama_tas']; ?></td>
                <td><?php echo $d['kategori']; ?></td>
                <td><?php echo $d['idUser']; ?></td>
                <td><?php echo $d['password']; ?></td>
                <td><?php echo $d['id_kantor']; ?></td>
                <td>
                    <a role="button" class="btn btn-info" href="ubah.php?id=<?php echo $d['idUser']; ?>">UBAH</a>
                    <a role="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['idUser']; ?>">HAPUS</a>
                </td>    
            </tr>
            <?php 
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
