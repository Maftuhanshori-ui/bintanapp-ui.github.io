<div class="panel panel-default">
    <div class="panel-body">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-plus"></i>
                Tambah BRC vehicles leaving Lagoi
            </h4>
        </div>

        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

            <div class="modal-body">
                <div class="messages"></div>

                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="contact" name="date_v" required>
                    </div>

                </div>

                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Requested By</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="requested" placeholder="Masukan Requested By" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Driver</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="driver" placeholder="Masukan Driver" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Persons Accompanying</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="contact" name="persons_acc" placeholder="Masukan Persons Accompanying" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Purpose</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="purpose" placeholder="Masukan Purpose" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Vehicle No</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="vehicles_no" placeholder="Masukan Vehicle No" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Authorized by</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="author" placeholder="Masukan Authorized by" required>
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


@$date_v   = $_POST['date_v'];
@$requested  = $_POST['requested'];
@$driver  = $_POST['driver'];
@$persons_acc  = $_POST['persons_acc'];
@$purpose  = $_POST['purpose'];
@$vehicles_no  = $_POST['vehicles_no'];
@$author  = $_POST['author'];

@$simpan         = $_POST['simpan'];

if ($simpan) {

    $sql = mysqli_query($connect, "INSERT INTO vehicles VALUES ('',' $date_v', '$requested', '$driver', '$persons_acc', '$purpose', '$vehicles_no', '$author')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Di Simpan");
            window.location.href = "?page=vehicles&alert=2";
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