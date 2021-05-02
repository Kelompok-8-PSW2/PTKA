<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="col-md-4" style="background-color:cyan ;">
        <center>
            <img src="gambar/logo.png" alt="" width="150" height="150">
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
            <input type="number" class="form-control"><br><br><br>



            <center><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Pesan</button></center>

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
    <div id="form" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <div class="modal-konten"></div>
    </div>
    </div>

    <div class="container-{breakpoint}">
            <div class="row">
                <div class="col-md-6">
                    <img src="gambar/keluarga.jpg" alt="" width="350" height="200" class="thumbnail" usemap="#imagemap">
                    <map name="imagemap">
                    <area shape="rect" coords="30,300,500,35" alt="">
                    </map>
                    <h5>Promo Keluarga Diskon 20%</h5>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Pesan</button>
                </div>
                <br>
                <div class="col-md-6">
                    <img src="gambar/libur.jpeg" alt="" width="350" height="200" class="thumbnail" usemap="#imagemap">
                    <map name="imagemap">
                    <area shape="rect" coords="30,300,500,35"  alt="" data-toggle="modal" data-target="#myModal">
                    </map>
                    <h5>Promo Libur Nasional Diskon 25%</h5>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Pesan</button>
                </div>
                <br>
                <div class="col-md-6">
                    <img src="gambar/lebaran.jpg" alt="" width="350" height="200" class="thumbnail" usemap="#imagemap">
                    <map name="imagemap">
                    <area shape="rect" coords="30,300,500,35"  alt="">
                    </map>
                    <h5>Promo Lebaran Diskon 30%</h5>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Pesan</button>
                </div>
                <br><br>
                <div class="col-md-6">
                    <img src="gambar/ultah.jpeg" alt="" width="350" height="200" class="thumbnail" usemap="#imagemap">
                    <map name="imagemap">
                    <area shape="rect" coords="30,300,500,35"  alt="">
                    </map>
                    <h5>Promo Ulang Tahun Diskon 15%</h5>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Pesan</button>
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
                        <form>
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
                            <center><button type="submit" class="btn btn-primary btn-lg" data-dismiss="modal">Kirim</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       </div>
            </div>
        </div>
    <br><br>
    
    <div class="col-md-8">
    <p class= "tulisan_satu">AMAN,NYAMAN,TERPERCAYA</p>
    
</body>
</html>