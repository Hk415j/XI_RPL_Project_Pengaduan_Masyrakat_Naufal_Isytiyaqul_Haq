<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="tanggapan.css">
  <body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark d-flex justify-content-center"style="border: 1px solid rgba(65, 53, 67, 0.40);
    background: #481616;">
      <div class="container-fluid">
        <div class="navbar-brand mb-0 ">Pengaduan Masyarakat</div>
      </div>
    </nav>
       
        <div class="d-flex align-items-start" style="width: 120px;
        height: 90vh;
        border-right: 1px solid #5f195f;
    background: rgba(131, 0, 0, 0.85); opacity:50%;">
            <div class="nav flex-column nav-pills me-3 text" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link" href="../Halaman_utama/Tampil.php">Home</a>
              <a class="nav-link" href="../pengaduan/Pengaduan.php">Pengaduan</a>
              <a class="nav-link" href="../Tanggapan/tanggapan.php">Laporan</a>
              <a class="nav-link" href="../Login/login_tampil.php">Log out</a>
            </div>
            <div class="container">
              <table class="table" style="color: #fff;">
                <thead>
                  <tr>
                    <th scope="col">id_tanggapan</th>
                    <th scope="col">id_pengaduan</th>
                    <th scope="col">tgl_tanggapan</th>
                    <th scope="col">tanggapan</th>
                    <th scope="col">id_petugas</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>123</td>
                    <td>
                      <a href="#">Edit</a>
                      <a href="#">Hapus</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
         
         <script src="./bootstrap.min.js"></script>
    </body>
</html>