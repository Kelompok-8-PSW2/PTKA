<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/task_11420063.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="col-md-4" style="background-color:cyan ;">
        <center>
            <img src="gambar/logo.png" alt="" width="150">
            <h2>PTKA</h2>
            <H3>Kereta Api ABC</H3>
            <hr>
        </center><br><br>
        <h5><center>
            PEMESANAN TIKET <br><br></h5>
            <label for="stasiun">STASIUN TUJUAN</label><br>
            <select class="form-control">
                <option>Sipoholon</option>
                <option>Balige</option>
                <option>Siborong-borong</option>
                <option>Laguboti</option>
                <option>Porsea</option>
            </select><br>

            <label for="tanggal">TANGGAL BERANGKAT</label><br>
            <input type="date" class="form-control" value="Tanggal "><br>

            <label for="jumlah">JUMLAH TIKET</label><br>
            <input type="number" class="form-control"><br><br><br>



            <center><button type="button" class="btn btn-primary">Pesan</a></button></center>

        </center>
    </div>
    <div class="col-md-8 text-center">
        <div class="bg-primary text-center">
    <nav class="navbar navbar-expand-sm bg navbar-dark">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#tampilan1" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item">
                <a href="#tampilan2" class="nav-link">Layanan</a>
            </li>
            <li class="nav-item">
                <a href="#tampilan3" class="nav-link">Login</a>
            </li>
        </ul>
    </nav>
    </div>
    </div>

    <br><br><br>
    <div class="container-{breakpoint}">
            <div class="row">
                <div class="col-md-6">
                    <img src="gambar/keluarga.jpg" alt="" width="350" height="200" class="thumbnail">
                    <h5>Promo Keluarga Diskon 20%</h5>
                </div>
                <br>
                <div class="col-md-6">
                    <img src="gambar/libur.jpeg" alt="" width="350" height="200" class="thumbnail">
                    <h5>Promo Libur Nasional Diskon 25%</h5>
                </div>
                <br>
                <div class="col-md-6">
                    <img src="gambar/lebaran.jpg" alt="" width="350" height="200" class="thumbnail">
                    <h5>Promo Lebaran Diskon 30%</h5>
                </div>
                <br><br>
                <div class="col-md-6">
                    <img src="gambar/ultah.jpeg" alt="" width="350" height="200" class="thumbnail">
                    <h5>Promo Ulang Tahun Diskon 15%</h5>
                </div>
            </div>
        </div>
    
    <br><br><br>


</body>
</html>