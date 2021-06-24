<div class="panel panel-default">
    <div class="panel-body">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-pencil"></i>&nbsp;
                Edit BRC vehicles leaving Lagoi
            </h4>
        </div>

        <?php

        if (isset($_GET['id_vehicles'])) {
            $id_vehicles  = $_GET['id_vehicles'];
            $query = mysqli_query($connect, "SELECT * FROM vehicles WHERE id_vehicles='$id_vehicles'") or die('Query Error : ' . mysqli_error($connect));
            while ($data  = mysqli_fetch_assoc($query)) {

                @$date_v    = $data['date_v'];
                @$requested   = $data['requested'];
                @$driver   = $data['driver'];
                @$persons_acc  = $data['persons_acc'];
                @$purpose   = $data['purpose'];
                @$vehicles_no  = $data['vehicles_no'];
                @$author   = $data['author'];
            }
        }
        ?>

        <form class="form-horizontal" action="" method="POST" id="createMemberForm">

            <div class="modal-body">
                <div class="messages"></div>

                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="contact" name="date_v" value="<?php echo $date_v ?>">
                    </div>

                </div>

                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Requested By</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="requested" value="<?php echo $requested ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Driver</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="driver" value="<?php echo $driver ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Persons Accompanying</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="contact" name="persons_acc" value="<?php echo $persons_acc ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Purpose</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="purpose" value="<?php echo $purpose ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Vehicle No</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="vehicles_no" value="<?php echo $vehicles_no ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Authorized by</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="author" value="<?php echo $author ?>">
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="update" class="btn btn-success " value="Update">
                <button type="reset" class="btn btn-danger" onclick="window.history.back();">Batal</button>
            </div>
        </form>
    </div>
</div><!-- /.modal-content -->

<?php

include "inc/config.php";
if (isset($_POST['update'])) {
    if (isset($_POST['update'])) {


        @$date_v   = $_POST['date_v'];
        @$requested  = $_POST['requested'];
        @$driver  = $_POST['driver'];
        @$persons_acc  = $_POST['persons_acc'];
        @$purpose  = $_POST['purpose'];
        @$vehicles_no  = $_POST['vehicles_no'];
        @$author  = $_POST['author'];

        $query = mysqli_query($connect, "UPDATE vehicles SET date_v   		= '$date_v   ',
                                                                requested = '$requested',
                                                                driver = '$driver',
                                                                persons_acc = '$persons_acc',
                                                                purpose = '$purpose',
                                                                vehicles_no = '$vehicles_no',
                                                                author = '$author'
																
												  			WHERE id_vehicles			= '$id_vehicles'");

        if ($query) {
?>
            <script type="text/javascript">
                alert("Data Berhasil Di Ubah");
                window.location.href = "?page=vehicles &alert=3";
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                alert("Data Gagal Di Ubah");
            </script>
<?php
        }
    }
}
?>