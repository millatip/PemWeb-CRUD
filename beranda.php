<?php
    session_start();
    include "koneksi.php";
    if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
        $username = $_SESSION["username"];
    }else{
        header("location: index.php");
    }
?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h2>welcome <?= $username?></h2>
<a href="keluar.php">Keluar</a>
<a href="tambah.php">Tambah Kategori</a>
<table>
    <thead>
        <tr>
            <th>judul</th>
            <th>desc</th>
            <th>edit</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM youtube_list_db";
            $result = $conn->query($query);
            if($result->num_rows > 0){
                while($row = $result-> fetch_assoc()){ ?>
                    <tr>
                        <td><?= $row["title_video"]; ?></td>
                        <td><?= $row["desc_video"]; ?></td>
                        <td>
                            <a href="hapus.php?id=<?= $row['id_video'];?>">hapus</a>
                            <a href="edit.php?id=<?= $row['id_video'];?>">edit</a>
                        </td>
                    </tr>
            <?php }
            }
            ?>
    </tbody>
</table>
    
</body>
</html>