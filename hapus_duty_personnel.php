<?php
// Panggil koneksi database
include "inc/config.php";

if (isset($_GET['id_duty_personnel'])) {
    $id_duty_personnel    = $_GET['id_duty_personnel'];
    $query         = mysqli_query($connect, "SELECT * FROM duty_personnel WHERE id_duty_personnel = '$id_duty_personnel'");
    $data         = mysqli_fetch_assoc($query);
    $file         = $data['file'];

    //jika filenya ada, hapus filenya
    if (file_exists("img/upload/surat_masuk/$file")) {
        unlink("img/upload/surat_masuk/$file");
    }

    $sql         = mysqli_query($connect, "DELETE FROM  duty_personnel WHERE id_duty_personnel='$id_duty_personnel'");
    if ($sql) {
        header('location: duty_personnel.php?page=duty_personnel&alert=4');
    } else {
?>
        <script type="text/javascript">
            alert("Data Gagal Di hapus");
        </script>
<?php
    }
}
?>