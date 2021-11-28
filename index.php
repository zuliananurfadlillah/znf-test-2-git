<?php 
// array
// variabel yang dapat memiliki banayak nilai
// elemen pada array boleh memiliki elemen yang berbeda
// array adalah pasangan antara key dan value
// key nya adalah index, yang dimulai dari 0




// untuk membut array ada cara lama dan cara baru
// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// //cara baru
$bulan = ["Januari","Februari","Maret"];
$arr1 = [123,"Tulisan","False"]; 

// // menampilkan array
// // var_dump() / print_r()

// var_dump($hari);
// echo"<br>";
// print_r($bulan);

// // menampilkan 1 elemen
// echo "<br>";
// echo $arr1[0];

// echo "<br>";
// echo $bulan[2];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[]="kamis";
echo "<br>";
var_dump($hari);


?> 