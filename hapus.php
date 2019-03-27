<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $query = "DELETE FROM youtube_list_db WHERE id_video = $id";
    if($conn->query($query)){
        header("location: beranda.php");        
    } else {
        echo "Error : ".$conn->error;
    }
?>