<?php

include "../config/koneksi.php";

$nama_orang = @$_POST['nama_orang'];
$kelas = @$_POST['kelas'];
$rangking = @$_POST['rangking'];

$data = [];

$query = mysqli_query($kon, "INSERT INTO  `rangking_sekolah`
  ( `nama_orang`,`kelas`,
    `rangking`)
   VALUES
   ('". $nama_orang ."','". $kelas ."',
    '". $rangking ."')");

    if($query){
       $status = true;
       $pesan = "request success";
       $data[]= $query;
    }else{
        $status = false;
        $pesan = "request failed";
    }

    $json = [
       "status" => $status,
       "pesan" => $pesan,
       "data" => $data,
    ];

    header("Content-Type: application/json");
    echo json_encode($json);

    ?>