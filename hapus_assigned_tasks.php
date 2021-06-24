<?php
// Panggil koneksi database
include "inc/config.php";

if (isset($_GET['id_assigned_tasks'])) {
    $id_assigned_tasks     = $_GET['id_assigned_tasks'];
    $query         = mysqli_query($connect, "SELECT * FROM ass_tasks WHERE id_assigned_tasks = '$id_assigned_tasks'");
    $data         = mysqli_fetch_assoc($query);
    $file         = $data['file'];

    //jika filenya ada, hapus filenya
    if (file_exists("img/upload/surat_masuk/$file")) {
        unlink("img/upload/surat_masuk/$file");
    }

    $sql         = mysqli_query($connect, "DELETE FROM  ass_tasks WHERE id_assigned_tasks='$id_assigned_tasks'");
    if ($sql) {
        header('location: assigned_tasks.php?page=assigned_tasks&alert=4');
    } else {
?>
        <script type="text/javascript">
            alert("Data Gagal Di hapus");
        </script>
<?php
    }
}
?>