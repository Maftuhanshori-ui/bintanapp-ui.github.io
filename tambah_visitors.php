<div class="panel panel-default">
    <div class="panel-body">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-plus"></i>
                Tambah VIP Visitors
            </h4>
        </div>

        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

            <div class="modal-body">
                <div class="messages"></div>

                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Name – Designation</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="name_visitors" placeholder="Masukan Name" required>
                    </div>

                </div>

                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Nationality</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="nationality" placeholder="Masukan Nationality" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Arrival</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="contact" name="arrival" placeholder="Masukan Arrival" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Departure</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="contact" name="departure" placeholder="Masukan Departure" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Accommodation</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="accommodation" placeholder="Masukan Accommodation" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Remarks</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="remarks" placeholder="Masukan Remarks">
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


@$name_visitors   = $_POST['name_visitors'];
@$nationality  = $_POST['nationality'];
@$arrival      = $_POST['arrival'];
@$departure  = $_POST['departure'];
@$accommodation  = $_POST['accommodation'];
@$remarks  = $_POST['remarks'];

@$simpan         = $_POST['simpan'];

if ($simpan) {

    $sql = mysqli_query($connect, "INSERT INTO visitors VALUES ('',' $name_visitors', '$nationality', '$arrival', '$departure', '$accommodation', '$remarks')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Di Simpan");
            window.location.href = "?page=visitors&alert=2";
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
?>                                                                                                                                                                                                                                                                  