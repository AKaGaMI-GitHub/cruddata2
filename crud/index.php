<html>
    <head>
        <title>Feedback</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="judul">
        <h2>Testimoni</h2>
        </div>
        </br>

        <?php
            if(isset($_GET['pesan'])){
                $pesan = $_GET['pesan'];
                if($pesan == "input"){
                    echo "Data berhasil di input";
                }else if($pesan == "update"){
                    echo "Data berhasil di update";
                }else if($pesan == "delete"){
                    echo "Data berhasil di hapus";
                }
            }
        ?>
        </br>
        <table border="2" class="table">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Feedback</th>
                <th>Action</th>
            </tr>
        </table>
        <?php
            include "koneksi.php";
            $query_mysqli = mysqli_query($koneksi,"SELECT * FROM feedback"); 
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysqli)){
        ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['saran'] ?></td>
                    <td>
                        <a class="btn btn-outline-dark" href="edit.php?">Edit</a>
                        <a class="btn btn-outline-dark" href="hapus.php?">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
    </body>
</html>