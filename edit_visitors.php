<div class="panel panel-default">
    <div class="panel-body">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-pencil"></i>&nbsp;
                Edit VIP Visitors
            </h4>
        </div>

        <?php

        if (isset($_GET['id_visitors'])) {
            $id_visitors  = $_GET['id_visitors'];
            $query = mysqli_query($connect, "SELECT * FROM visitors WHERE id_visitors='$id_visitors'") or die('Query Error : ' . mysqli_error($connect));
            while ($data  = mysqli_fetch_assoc($query)) {

                @$name_visitors    = $data['name_visitors'];
                @$nationality   = $data['nationality'];
                @$arrival   = $data['arrival'];
                @$departure  = $data['departure'];
                @$accommodation   = $data['accommodation'];
                @$remarks   = $data['remarks'];
            }
        }
        ?>

        <form class="form-horizontal" action="" method="POST" id="createMemberForm">

            <div class="modal-body">
                <div class="messages"></div>

                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Name – Designation</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="name_visitors" value="<?php echo $name_visitors ?>">
                    </div>

                </div>

                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Nationality</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="nationality" value="<?php echo $nationality ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Arrival</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="contact" name="arrival" value="<?php echo $arrival ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Departure</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="contact" name="departure" value="<?php echo $departure ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Accommodation</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="accommodation" value="<?php echo $accommodation ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Remarks</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="remarks" value="<?php echo $remarks ?>">
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



        @$name_visitors   = $_POST['name_visitors'];
        @$nationality  = $_POST['nationality'];
        @$arrival      = $_POST['arrival'];
        @$departure  = $_POST['departure'];
        @$accommodation  = $_POST['accommodation'];
        @$remarks  = $_POST['remarks'];


        $query = mysqli_query($connect, "UPDATE visitors SET name_visitors   		= '$name_visitors   ',
                                                                nationality  = '$nationality',
                                                                arrival  = '$arrival',
                                                                departure = '$departure',
                                                                accommodation = '$accommodation',
                                                                remarks = '$remarks'
																
												  			WHERE id_visitors			= '$id_visitors'");

        if ($query) {
?>
            <script type="text/javascript">
                alert("Data Berhasil Di Ubah");
                window.location.href = "?page=visitors &alert=3";
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