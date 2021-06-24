<div class="panel panel-default">
    <div class="panel-body">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-plus"></i>
                Tambah Assigned Tasks / Instruction(s)
            </h4>
        </div>

        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

            <div class="modal-body">
                <div class="messages"></div>


                <div class="form-group">
                    <!--/here teh addclass has-error will appear -->
                    <label for="name" class="col-sm-2 control-label">Assigned Tasks / Instruction(s)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="name" name="assigned_tasks" placeholder="Masukan Assigned Tasks / Instruction(s) " required>
                        <!-- here the text will apper  -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">From</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="from1" placeholder="Masukan From" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="submit" name="simpan" class="btn btn-success" value="Simpan">
                    <button type="reset" onclick="window.history.back();" class="btn btn-danger">Batal</button>
                </div>
        </form>
    </div>
</div><!-- /.modal-content -->

<?php

include "inc/config.php";


@$assigned_tasks   = $_POST['assigned_tasks'];

@$from1  = $_POST['from1'];

@$simpan         = $_POST['simpan'];

if ($simpan) {

    $sql = mysqli_query($connect, "INSERT INTO ass_tasks VALUES ('$id_assigned_tasks', '$assigned_tasks', '$from1')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Di Simpan");
            window.location.href = "?page=assigned_tasks&alert=2";
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Data Gagal Di Simpan");
        </script>
<?php
    }
}
?>