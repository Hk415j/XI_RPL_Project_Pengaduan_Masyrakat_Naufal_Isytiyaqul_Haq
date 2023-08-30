<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="pengaduan.css">
  <body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark d-flex justify-content-center"style="border: 1px solid rgba(65, 53, 67, 0.40);
    background: #481616;">
      <div class="container-fluid">
        <div class="navbar-brand mb-0 ">Pengaduan Masyarakat</div>
      </div>
    </nav>
       <div class="d-flex">
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
            
            <div class="container" style="width:100%;">
              <form action="" method="post" enctype="multipart/form-data">
              <div class="mb-3" style=" width: 750px;">
                <label for="exampleFormControlInput1" class="form-label" style="color: white;">Keluh kesah anda</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" style="color: white;">Foto</label>
                <input type="file" style="color: white;">
              </div>
              <button type="submit">kirim</button>
              </form>
            </div>
            
          </div>
        </div>
         <script src="./bootstrap.min.js"></script>
    </body>
</html>