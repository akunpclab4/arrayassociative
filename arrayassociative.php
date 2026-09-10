<?php

require_once('connection.php');

$queryData = mysqli_query($koneksi, "SELECT * FROM tb_siswa");

$proses = mysqli_fetch_all($queryData, MYSQLI_ASSOC);

foreach ($proses as $rowData) {
    echo "<br/>";
    echo "Tampil Data" . $rowData["id"];
}

$siswa = [[
    "nis" => "1122",
    "nama" => "Rifqi",
    "jurusan" => "PPLG",
    "nilai" => "90" ]
    ,
[
     "nis" => "123",
    "nama" => "asep",
    "jurusan" => "PPLG",
    "nilai" => "90" 
    

]];

foreach($siswa as $dataTampil){
    echo "Nis: ". $dataTampil["nis"]. "<br/>" ;
    echo "Nama: " . $dataTampil["nama"]. "<br/>" ;
    echo "Jurusan: " . $dataTampil["jurusan"]. "<br/>" ;
    echo "Nilai: " . $dataTampil["nilai"]. "<br/>" ;
    echo "<br/>";
}
?>