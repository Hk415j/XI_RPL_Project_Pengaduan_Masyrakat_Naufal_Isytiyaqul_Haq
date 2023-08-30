<?php
  $koneksi = mysqli_connect("localhost", "root", "", "zpengaduan_masyarakat");
  $join    = "select * from pengaduan join masyarakat on masyarakat.nik = pengaduan.nik";
  $select  = mysqli_query($koneksi, $join);
?>

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
              <a class="nav-link" href="../Laporan/laporan.php">Laporan</a>
              <a class="nav-link" href="../Login/login_tampil.php">Log out</a>
            </div>
            <div class="container">
              <table class="table" style="color: #fff;">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Laporan</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php while($data = mysqli_fetch_array($select)){ ?>
                    <tr>
                      <th scope="row"><?php echo $data['id_pengaduan']; ?></th>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['isi_laporan']; ?></td>
                      <td><img src="../pengaduan/image/<?= $data['foto']; ?>" alt="" width="150px"></td>
                      <td><button type="button" class="btn btn-info mt-4 text-white" disabled><?php echo $data['status']; ?></button></td>
                      <td style="margin: 20px;"">
                          <a href="edit.php?id=<?php echo $data ["id_pengaduan"]?>"><input type="button" value="edit" class="btn btn-outline-success"></a>
                          <a href="delete_lapora.php?id=<?php echo  $data ["id_pengaduan"]?>"><input type="button" value="hapus" class="btn btn-outline-danger"></a>
                          <a href="lihat.php"><input type="button" value="lihat" class="btn btn-outline-primary"></a>
                      </td>
                    </tr>
                    <?php } ?>
              </tbody>
              </table>
            </div>
          </div>
         
         <script src="./bootstrap.min.js"></script>
    </body>
</html>