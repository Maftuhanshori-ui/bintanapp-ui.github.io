<?php
// Panggil koneksi database
include "inc/config.php";

if (isset($_GET['id_visitors'])) {
    $id_visitors    = $_GET['id_visitors'];
    $query         = mysqli_query($connect, "SELECT * FROM visitors WHERE id_visitors = '$id_visitors'");
    $data         = mysqli_fetch_assoc($query);
    $file         = $data['file'];

    //jika filenya ada, hapus filenya
    if (file_exists("img/upload/surat_masuk/$file")) {
        unlink("img/upload/surat_masuk/$file");
    }

    $sql         = mysqli_query($connect, "DELETE FROM  visitors WHERE id_visitors='$id_visitors'");
    if ($sql) {
        header('location: visitors.php?page=visitors&alert=4');
    } else {
?>
        <script type="text/javascript">
            alert("Data Gagal Di hapus");
        </script>
<?php
    }
}
?>                                 