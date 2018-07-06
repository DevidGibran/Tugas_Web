<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Data dengan PHP</title>

    <!-- Load File bootstrap.min.css yang ada difolder css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Style untuk Loading -->
    <style>
        #loading{
      background: whitesmoke;
      position: absolute;
      top: 140px;
      left: 82px;
      padding: 5px 10px;
      border: 1px solid #ccc;
    }
    </style>
  </head>
  <body>
    <!-- Membuat Menu Header / Navbar -->
    
    <!-- Content -->
    <div style="padding: 0 15px;">
      <a href="form.php" class="btn btn-success pull-right">
        <span class="glyphicon glyphicon-upload"></span> Import Data
      </a>
      
      <h3>Data Hasil Import</h3>
      
      <hr>
      
        <table border = "1">
          <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
          </tr>
          <?php
          // Load file koneksi.php
          include "koneksi.php";
          
          // Buat query untuk menampilkan semua data siswa
          $sql = $pdo->prepare("SELECT * FROM siswa");
          $sql->execute(); // Eksekusi querynya
          
          $no = 1; // Untuk penomoran tabel, di awal set dengan 1
          while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$data['nis']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['jenis_kelamin']."</td>";
            echo "<td>".$data['telp']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "</tr>";
            
            $no++; // Tambah 1 setiap kali looping
          }
          ?>
        </table>
      </div>
    </div>
  </body>
</html>