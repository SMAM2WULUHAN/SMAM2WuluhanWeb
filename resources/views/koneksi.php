<?php
$koneksi = mysqli_connect("localhost", "root", "", "smam2wuluhan");

//.cek koneksi
if(mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_errno();
}