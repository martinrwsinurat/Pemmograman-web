<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body>
 
    <h2>Update Data</h2>
    <br/>
    <a href="tampil.php">KEMBALI</a>
    
    <h3>Data User</h3>
 
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM tas WHERE idTas='$id'");
    while ($d = mysqli_fetch_array($data)) {
        ?>
        <form method="post" action="update.php">
            <table>
                <tr>            
                    <td>idTas</td>
                    <td>
                        <input type="hidden" name="idTas" value="<?php echo $d['idTas']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama_tas']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>nama_tas</td>
                    <td><input type="text" name="nama_tas" value="<?php echo $d['nama_tas']; ?>"></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td><input type="text" name="kategori" value="<?php echo $d['kategori']; ?>"></td>
                </tr>
                <tr>
                    <td>idUser</td>
                    <td><input type="text" name="idUser" value="<?php echo $d['idUser']; ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td>
                </tr>
                <tr>
                    <td>id_kantor</td>
                    <td><input type="text" name="id_kantor" value="<?php echo $d['id_kantor']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>        
            </table>
        </form>
        <?php 
    }
    ?>
 
</body>
</html>
