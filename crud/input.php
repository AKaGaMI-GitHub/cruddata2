<?php
    include "koneksi.php";
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $feedback = $_POST['saran'];

    mysqli_query("INSERT INTO feedback VALUES('$nama','$email','$feedback')");
    header("location:index.php?pesan=input");
?>