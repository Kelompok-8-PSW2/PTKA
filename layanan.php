<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="col-md-4" style="background-color:cyan ;">
        <center>
            <img src="gambar/logo.jpeg" alt="">
            <h2>PTKA</h2>
            <H3>Kereta Api ABC</H3>
            <hr>
        </center><br><br><br>
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
            <input type="number" class="form-control"><br>
            <center><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" method="post" action="proses_form.php">Pesan</button></center>

        </center>
    </div>
    <div class="col-md-8 text-center">
        <div class="bg-primary text-center">
    <nav class="navbar navbar-expand-sm bg navbar-dark">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="beranda.php" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item">
                <a href="layanan.php" class="nav-link">Layanan</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
        </ul>
    </nav>
    </div>

    <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="gambar/toilet.jpg" alt="" width="300" height="150" class="thumbnail">
                            <h5>toilet</h5>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <img src="gambar/wifi.jpg" alt="" width="300" height="150" class="thumbnail">
                            <h5>wifi</h5>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <img src="gambar/restoran.jpg" alt="" width="300" height="150" class="thumbnail">
                            <h5>restoran</h5>
                        </div>
                        <br><br>
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <img src="gambar/mushola.jpg" alt="" width="300" height="150" class="thumbnail">
                            <h5>mushola</h5>
                        </div>
                        <div class="col-md-4">
                            <img src="gambar/keamanan.png" alt="" width="300" height="150" class="thumbnail">
                            <h5>keamanan</h5>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content">
                    <!-- heading modal -->
                    <div class="modal-header text-center">
                        <h4 class="modal-title">PEMBAYARAN</h4>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                        <form method="post" action="proses_form.php">
                            <div class="form-group">

                                <input type="text" id="username" class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <input type="number" id="noTelp" class="form-control" placeholder="No.Telp">
                            </div>
                            <div class="form-group">
                                Hari Keberangkatan
                                <input type="date" id="hariKeberangkatan" class="form-control" placeholder="hariKeberangkatan">
                            </div>
                            <div class="form-group">
                                Jam Keberangkatan
                                <input type="time" id="jamKeberangkatan" class="form-control" placeholder="Jam Keberangkatan">
                            </div>
                            <div class="form-group">
                                <select name="pilihPembayaran" id="pilihPembayaran" class="form-control">
                                    <option value="Pilih Pembayaran">Pilih Pembayaran</option>
                                    <option value="OVO">OVO</option>
                                    <option value="GOPAY">GOPAY</option>
                                    <option value="BANK">BANK</option>
                                </select>
                            </div>
                            <center><button type="submit" class="btn btn-primary btn-lg" data-dismiss="modal" >Kirim</button></center>
                            <br><br><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       </div>
        <br><br><br><b><br></b><br><br><br>
    </div>
    <div class="col-md-8">
    <p class= "tulisan_satu">AMAN,NYAMAN,TERPERCAYA</p><br>
    <center><div class="logout"><a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Keluar</a></div></center>
</body>
</html>