<div class="panel panel-default">
    <div class="panel-body">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-plus"></i>
                Tambah Inspections & Spot Checks
            </h4>
        </div>

        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

            <div class="modal-body">
                <div class="messages"></div>


                <div class="form-group">
                    <!--/here teh addclass has-error will appear -->
                    <label for="name" class="col-sm-2 control-label">Location</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="name" name="location_in" placeholder="Masukan Location " required>
                        <!-- here the text will apper  -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="contact" name="date_in" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Time (hrs)</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="contact" name="time_in" placeholder="Masukan Time" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label"> Person In-Charge</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" placeholder="Masukan Person In-Charge" name="person_in" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Check On</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="check_on" placeholder="Masukan Check On" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Comments and Observation</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="comment_in" placeholder="Masukan Comments and Observation" required></input>
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


@$location_in   = $_POST['location_in'];
@$date_in  = $_POST['date_in'];
@$time_in  = $_POST['time_in'];
@$person_in  = $_POST['person_in'];
@$check_on  = $_POST['check_on'];
@$comment_in  = $_POST['comment_in'];

@$simpan         = $_POST['simpan'];

if ($simpan) {

    $sql = mysqli_query($connect, "INSERT INTO inspections VALUES ('', '$location_in', '$date_in', '$time_in', '$person_in', '$check_on', '$comment_in')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Di Simpan");
            window.location.href = "?page=inspections&alert=2";
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