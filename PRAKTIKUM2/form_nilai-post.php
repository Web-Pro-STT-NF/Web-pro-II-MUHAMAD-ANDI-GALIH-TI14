<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form nilai POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<body>
    <div class="container ">
        <div class="row">
            <div class="col-12 bg-primary pt-3 ">
                <p class="text-light"> <b> Belanja Online </b></p>
            </div>
        </div>
        
        <div class="row d-flex">
            <div class="col-8">
                <form class="mb-4" method="POST">
                    <div class="form-group row mt-4">
                        <label for="nama" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 ">Pilih Produk</label> 
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input id="produk_1" name="produk" placeholder="Silahkan Pilih Produk" type="radio" class="custom-control-inline" value="TV">
                                <label for="produk_1" class="custom-control-label">TV</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input id="produk_2" name="produk" placeholder="Silahkan Pilih Produk" type="radio" class="custom-control-inline" value="Kulkas">
                                <label for="produk_2" class="custom-control-label">Kulkas</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input id="produk_3" name="produk" placeholder="Silahkan Pilih Produk" type="radio" class="custom-control-inline" value="Mesin Cuci">
                                <label for="produk_3" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                  
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah Produk</label> 
                        <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah Belanja" max="10" min="1" type="number" class="form-control">
                        </div>
                    </div>
                     
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-primary"><b>KIRIM</b></button>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card" style="width: 20rem;">
                            <div class="card-header bg-primary">
                                <p class="text-light"><b>Daftar Harga Produk</b></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">TV  : Rp 3.500.000</li>
                                <li class="list-group-item">Kulkas  : Rp 4.200.000</li>
                                <li class="list-group-item">Mesin Cuci  : Rp 7.350.000</li>
                            </ul>
                            <div class="card-footer bg-primary">
                                <p class="text-light">*Nb  : Harga dapat berubah suatu waktu</p>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
                <?php
                    $proses = isset($_POST['proses']) ? $_POST['proses'] : '-' ;
                    $nama = isset($_POST['nama']) ? $_POST['nama'] : '-' ;
                    $produk = isset($_POST['produk']) ? $_POST['produk'] : '-' ;
                    $jumlah_produk = isset($_POST['jumlah']) ? $_POST['jumlah'] : '-' ;
                   
                    echo " <b> Nama Customer  : $nama";
                    echo "<br/>Produk Yang Dipilih : $produk";
                    echo "<br/>Jumlah Produk Yang Dibeli : $jumlah_produk";
                ?>
             <hr>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 bg-primary pt-3">
                <p class="text-light"> <b> Develop by Muhamad Andi Galih | STT-NF </b></p>
            </div>
        </div>
    </div>
</html>