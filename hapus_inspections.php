<?php
// Panggil koneksi database
include "inc/config.php";

if (isset($_GET['id_inspections'])) {
    $id_inspections    = $_GET['id_inspections'];
    $query         = mysqli_query($connect, "SELECT * FROM inspections WHERE id_inspections = '$id_inspections'");
    $data         = mysqli_fetch_assoc($query);
    $file         = $data['file'];

    //jika filenya ada, hapus filenya
    if (file_exists("img/upload/surat_masuk/$file")) {
        unlink("img/upload/surat_masuk/$file");
    }

    $sql         = mysqli_query($connect, "DELETE FROM  inspections WHERE id_inspections='$id_inspections'");
    if ($sql) {
        header('location: inspections.php?page=inspections&alert=4');
    } else {
?>
        <script type="text/javascript">
            alert("Data Gagal Di hapus");
        </script>
<?php
    }
}
?>