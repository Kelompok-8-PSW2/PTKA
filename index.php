<html lang="en">
<head>
    <title>layanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container-{breakpoint}">
        <div class="row">
            <div class="col-md-3" style="background-color: cyan">
               <br><br>
                <center><img src="gambar/logo.jpeg" width="150px"></center>
                <h5 style="text-align: center; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ; color: azure; stroke: rgba(0, 0, 0, 1); border: black; color: rgba(197, 208, 216, 1);">PTKA<br>STASIUN ABC</h5>
                <hr size="5" style="color:black;box-shadow:box-shadow: 5px 5px 5px cyan;" >
                <br><br>
                <p style="text-align: center;">Pemesanan Tiket</p>
                <label for="stasiun">Tujuan</label><br>
                <select class="form-control">
                    <option>Sipoholon</option>
                    <option>Balige</option>
                    <option>Siborong-borong</option>
                    <option>Laguboti</option>
                    <option>Porsea</option>
                </select><br>

                <label for="tanggal">Tanggal berangkat</label><br>
                <input type="date" class="form-control" value="Tanggal "><br>

                <label for="jumlah">Jumlah tiket</label><br>
                <input type="number" class="form-control">
                <br><br>
                <center><button type="button" class="btn btn-primary">Pesan</a></button></center>                
                <br>
            </div>


            <div class="col-md-9" style="background-color: rgba(204, 221, 222, 1);">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                      <a class="nav-link text-muted " aria-current="page" href="#" ><img src="gambar\profil.jpeg" width="30px"></a>
                    
                    </li>
                   
                </ul>

                <ul class="nav justify-content-end">
                    <li class="nav-item">
                      <a class="nav-link text-muted " aria-current="page" href="#" >BERANDA</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted " href="#">LAYANAN</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted " href="#">LOGIN</a>
                    </li>
                </ul>

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
                </div>
                <br><br><br><br><br><br>
                <p style="text-align: right;background-color: grey;">AMAN,NYAMAN,TERPERCAYA</p>
            </div>
        </div>
    </div>
</body>
</html>