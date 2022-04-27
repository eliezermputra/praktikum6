<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
include "waktu.php";

    if(empty($_POST['nama']) || empty($_POST['email']) ) {
        header("Location:datatidaklengkap.php");
    } else {
        echo "<h1><center>FORM LOGIN</center></h1>";
        echo "<center>Nama :$nama"."</center><br>";
        echo "<center>Email : $email"."</center><br>";
        echo "<center>Tanggal Login : $waktu"."</center>";    
    }
    ?>