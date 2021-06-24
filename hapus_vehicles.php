<?php
// Panggil koneksi database
include "inc/config.php";

if (isset($_GET['id_vehicles'])) {
    $id_vehicles    = $_GET['id_vehicles'];
    $query         = mysqli_query($connect, "SELECT * FROM vehicles WHERE id_vehicles = '$id_vehicles'");
    $data         = mysqli_fetch_assoc($query);
    $file         = $data['file'];

    //jika filenya ada, hapus filenya
    if (file_exists("img/upload/surat_masuk/$file")) {
        unlink("img/upload/surat_masuk/$file");
    }

    $sql         = mysqli_query($connect, "DELETE FROM  vehicles WHERE id_vehicles='$id_vehicles'");
    if ($sql) {
        header('location: vehicles.php?page=vehicles&alert=4');
    } else {
?>
        <script type="text/javascript">
            alert("Data Gagal Di hapus");
        </script>
<?php
    }
}
?>