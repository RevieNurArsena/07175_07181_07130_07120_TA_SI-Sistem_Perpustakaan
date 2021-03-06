<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <style>
        body {
            
            background: url("assets/image/bg2.png");
            background-size: cover;
        }
        .btn {
            color: #fff;
            font-size: 14px;
            margin-right: 5px; 
        }

        .container .card {
            background: transparent;
            outline-width: 0px;
            outline: transparent;
            color: #ff6435;  
        }
        .label{
            color: #ff6435; 
        }

        .nav{
            font-size: 20px;
            margin-left: 10px;
            color: #ff6435; 
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-red bg-dark">
        <a class="navbar-brand nav" href="#">Perpustakaan | </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link label" href="index.php?page=admin&aksi=tambahpenerbit">Tambah Penerbit</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link label" href="index.php?page=admin&aksi=daftarpeminjam">kembali</a>
                </li>
            </ul>  
        </div>   
        <div class="form-inline">
            <a class=" btn btn-danger" href="index.php?page=auth&aksi=logout">Logout</a>
        </div>
        
    </nav>

    <center>
        <div class="container">
            <div class="card mt-5">
                <div class=" card-header">
                    <h2>Daftar Penerbit</h2>
                </div>
                
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td class="label">ID</td>
                                <td class="label">Nama Penerbit</td>
                                <td class="label">Tahun Terbit</td>
                                <td class="label">Pilih</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no=1;
                        foreach($data as $row) :?>
                            <tr>
                                <td class="label"><?=$row['id_penerbit'] ?></td>
                                <td class="label"><?=$row['nama_penerbit'] ?></td>
                                <td class="label"><?=$row['tahun_terbit'] ?></td>
                                <td>
                                    
                                    <a class=" btn btn-success" href="index.php?page=admin&aksi=editPenerbit&id_penerbit=<?=$row['id_penerbit'] ?>">Edit</a>
                                    <a class=" btn btn-danger btn-lg btn-block" href="index.php?page=admin&aksi=deletePenerbit&id=<?=$row['id_penerbit'] ?>">Hapus</a>
                                    
                                </td>
                                
                            </tr>
                        <?php $no++;
                        endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.css"></script>
</body>
</html>