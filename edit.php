<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $query = "SELECT * FROM youtube_list_db WHERE id_video = $id";
    $result = $conn->query($query);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $oldName = $row['title_video'];
            $oldCategory = $row['desc_video'];
        }
    }

    if(isset($_POST['update'])){
        $title_video = $_POST['nama'];
        $desc_video = $_POST['kategori'];

        $updateQuery = "UPDATE youtube_list_db SET title_video='$title_video', desc_video='$desc_video' WHERE id_video=$id";
        if($conn->query($updateQuery)){
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
                            <h2 class="text-center">Edit Video</h2>
                        </div>
                        <br>

                        <form action="" method="POST">
                            <input type="text" name="nama" placeholder="Name" id="nama" value="<?php echo $oldName?>"
                                class="form-control">
                            <br>
                            <input type="text" name="kategori" placeholder="Category" id="kategori"
                                value="<?php echo $oldCategory?>" class="form-control">
                            <br>
                            <input type="submit" name="update" value="Update" class="btn btn-primary btn-block">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>