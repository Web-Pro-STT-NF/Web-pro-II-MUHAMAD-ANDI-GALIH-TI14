<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form nilai GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<body>
    <div class="container card">
        <div class="row">
            <div class="col-12 bg-primary pt-3 mt-3">
                <p class="text-light"> <b> SISTEM PENILAIAN </b></p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 pt-2 ">
                <p> <b>FORM NILAI SISWA</b> </p>
                <hr>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <form method="GET">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" placeholder="masukkan nama lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                        <div class="col-8">
                        <select name="matkul" id="matkul">
                            <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                            <option value="Basis Data">Basis Data</option>
                            <option value="Pemrograman WEB1">Pemrograman Web</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-8">
                        <input id="nilai_uts" name="nilai_uts" placeholder="masukkan nilai uts" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-8">
                        <input id="nilai_uas" name="nilai_uas" placeholder="masukkan nilai uas" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                        <div class="col-8">
                        <input id="nilai_tugas" name="nilai_tugas" placeholder="masukkan nilai tugas" type="number" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-primary"><b>KIRIM</b></button>
                        </div>
                    </div>
                </form>
                
                <?php
                    $proses = isset($_GET['proses']) ? $_GET['proses'] : '-' ;
                    $nama = isset($_GET['nama']) ? $_GET['nama'] : '-' ;
                    $mata_kuliah = isset($_GET['matkul']) ? $_GET['matkul'] : '-' ;
                    $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '-' ;
                    $nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '-' ;
                    $nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : '-' ;

                    echo " <b> Nama Lengkap  : $nama";
                    echo "<br/>Mata Kuliah : $mata_kuliah";
                    echo "<br/>Nilai UTS : $nilai_uts";
                    echo "<br/>Nilai UAS : $nilai_uas";
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