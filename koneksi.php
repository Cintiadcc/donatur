<?php
    $koneksi = mysqli_connect('localhost','root','','UTS_NamaMahasiswa');

    if(!$koneksi)
    {
        die ("Koneksi dengan data base gagal: ".mysqli_connect_errno().mysqli_connect_error());
    } 