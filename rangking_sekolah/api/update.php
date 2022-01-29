<?php

include "../config/koneksi.php";

$id = @$_POST['id'];
$nama_orang = @$_POST['nama_orang'];
$kelas = @$_POST['kelas'];
$rangking = @$_POST['rangking'];

$data = [];

$query = mysqli_query($kon, "UPDATE `daftar_infak` SET
`id`='". $id."',
`nama_orang` = '". $nama_orang."',
`kelas` = '". $kelas."',
`rangking` = '". $rangking."',
WHERE  `id` = '". $id ."'");

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