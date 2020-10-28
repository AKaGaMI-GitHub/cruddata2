<?php
    include "koneksi.php";
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $feedback = $_POST['saran'];

    mysqli_query("DELETE FROM feedback");
    header("location:index.php?pesan=delete");
?>