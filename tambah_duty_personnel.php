<div class="panel panel-default">
    <div class="panel-body">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-plus"></i>
                Tambah Duty Personnel
            </h4>
        </div>

        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

            <div class="modal-body">
                <div class="messages"></div>


                <div class="form-group">
                    <!--/here teh addclass has-error will appear -->
                    <label for="name" class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="name" name="designation" placeholder="Masukan Designation " required>
                        <!-- here the text will apper  -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="name1" placeholder="Masukan Name" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Contact No</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="contact_no" placeholder="Masukan Contact No" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Time (hrs)</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="contact" placeholder="Masukan Time" name="time1" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Location of DP</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="location_of_dp" placeholder="Masukan Location of DP" required>
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


@$designation   = $_POST['designation'];
@$name1  = $_POST['name1'];
@$contact_no  = $_POST['contact_no'];
@$time1  = $_POST['time1'];
@$location_of_dp  = $_POST['location_of_dp'];

@$simpan         = $_POST['simpan'];

if ($simpan) {

    $sql = mysqli_query($connect, "INSERT INTO duty_personnel VALUES ('$id_duty_personnel', '$designation', '$name1', '$contact_no', '$time1', '$location_of_dp')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Di Simpan");
            window.location.href = "?page=duty_personnel&alert=2";
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