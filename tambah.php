<?php
    include "koneksi.php";

    if(isset($_POST['tambah'])){
        $title_video = $_POST['nama'];
        $desc_video = $_POST['kategori'];

        $query = "INSERT INTO youtube_list_db(title_video, desc_video) VALUES ('$nama', '$kategory')";
        if($conn->query($query)){
            header("location: beranda.php");
        } else {
            echo "Error : ".$conn->error;
        }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid as-full">
        <div class="row as-full d-flex justify-content-center">
            <div class="col-md-4 align-self-center">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2 class="text-center">Tambah Video</h2>
                        </div>
                        <br>

                        <form action="" method="POST">
                            <input type="text" name="nama" placeholder="Name" id="nama" class="form-control">
                            <br>
                            <input type="text" name="kategori" placeholder="Category" id="kategori"
                                class="form-control">
                            <br>
                            <input type="submit" name="tambah" value="Tambah" class="btn btn-primary btn-block">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>