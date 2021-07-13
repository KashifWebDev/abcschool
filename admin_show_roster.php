<?php
require 'parts/app.php';

$id = $_GET["id"];
$s = "SELECT * FROM roster WHERE id=$id";
$res = mysqli_query($con, $s);
$row = $mainRow = mysqli_fetch_array($res);
$courseID = $mainRow["course_id"];
$month = $row["month"];

$s = "SELECT * FROM courses WHERE id=$courseID";
$res = mysqli_query($con, $s);
$courseRow = mysqli_fetch_array($res);


?>
<!DOCTYPE html>
<html lang="en">

<?php
$title = "Roster - $month";
require 'parts/head.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php require 'parts/side_bar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php require 'parts/top_bar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php
                    if(isset($_GET["success"]) && $_GET["success"]){
                        ?>
                        <div class="card mb-4 py-3 border-left-success">
                            <div class="card-body text-success">
                                <strong>Success! </strong> Instructor linked successfully!
                            </div>
                        </div>
                        <?php
                    }
                    if(isset($_GET["students"]) && $_GET["students"]){
                        ?>
                        <div class="card mb-4 py-3 border-left-success">
                            <div class="card-body text-success">
                                <strong>Success! </strong> Students Added successfully!
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="container-fluid">
                        <div class="card mb-4 py-3 border-left-primary">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-center text-primary" style="font-size: xx-large">
                                    <?php echo $mainRow["month"]; ?> - <?php echo $courseRow["course_name"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Roster</h6>
                        </div>
                        <div class="card-body">

                            <button type="button" name="add_course" class="btn btn-primary mb-2" data-toggle="modal" data-target="#myModal">Add Students</button>
                            <!-- Add New Admin Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add Students to Roster</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="" method="post">
                                                <div class="mb-3">
                                                    <input type="hidden" name="roster" value="<?php echo $_GET["id"]; ?>">
                                                    <label class="form-label">Students</label>
                                                    <select class="songs form-select w-100" name="students[]" multiple>
                                                        <?php
                                                            $s = "SELECT * FROM master_registration_list";
                                                            $qry = mysqli_query($con, $s);
                                                            while($row = mysqli_fetch_array($qry)){
                                                                ?>
                                                                <option value="<?php echo $row["id"]; ?>"><?php echo $row["student_name"]; ?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary w-100 add-dataa" name="add_user">
                                                    <i class="fas fa-save"></i> Add
                                                </button>
                                            </form>
                                        </div>
                                        <?php
                                        if(isset($_POST["add_user"])){
                                            $roster = $_POST["roster"];
                                            $s = "SELECT * FROM roster WHERE id = $roster";
                                            $qry = mysqli_query($con, $s);
                                            $r = mysqli_fetch_array($qry);
                                            $mnt = $r["month"];
                                            $course_id = $r["course_id"];

                                            $ids = implode(', ', $_POST['students']);

                                            $sql = "INSERT INTO roster (month, student_id, course_id) VALUES ('$month', $ids, $course_id)";

                                            foreach ($_POST['students'] as $key => $value) {
                                                $sql = "INSERT INTO roster (month, student_id, course_id) VALUES ('$month', $value, $course_id)";
                                                mysqli_query($con, $sql);
                                            }
                                            js_redirect("admin_show_roster.php?students=1&id=$roster");
                                        }
                                        if(isset($_GET["del_user"])){
                                            $id = $_GET["del_user"];

                                            $sql = "DELETE FROM  admin_users WHERE id = $id";

                                            if(phpRunSingleQuery($sql)){
                                                js_redirect("admin_users.php");
                                            }else{
                                                echo mysqli_error($con);
                                            }
                                        }
                                        ?>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                                <i class="fas fa-times"></i> Cancel
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Student Name</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Student Name</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $sql = "SELECT * FROM roster WHERE month='$month'";
                                    $res = mysqli_query($con, $sql);
                                    if(mysqli_num_rows($res)){
                                        while($row = mysqli_fetch_array($res)){
                                            $mnth = $row["month"];
                                            $student = $row["student_id"];
                                            $s = "SELECT student_id, student_name FROM master_registration_list WHERE id=$student";
                                            $r = mysqli_query($con, $s);
                                            $ro = mysqli_fetch_array($r);
                                            $student_id = $ro["student_id"];
                                            $student_name = $ro["student_name"];
//                                            $s = "SELECT name FROM instructors WHERE id=$iID";
//                                            $r = mysqli_query($con, $s);
//                                            $ro = mysqli_fetch_array($r);
//                                            $instructor_name = $ro["name"];
                                            ?>
                                            <tr>
                                                <td><?php echo $student_id; ?></td>
                                                <td><?php echo $student_name; ?></td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?php require 'parts/footer.php'; ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>-->
    <script src="js/select.js"></script>


    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>



    <script type="text/javascript">
        $(document).ready(function () {
            $('.songs').select2();
        });

        $('body').on('click', '.add-data', function (event) {
            event.preventDefault();
            var name = $('input[name=name]').val();
            var songs = $('.songs').val();
            console.log(songs);
            // $.ajax({
            //     method: 'POST',
            //     url: './database/db.php',
            //     data: {
            //         name: name,
            //         songs: songs,
            //     },
            //     success: function (data) {
            //         console.log(data);
            //         $('.res-msg').css('display', 'block');
            //         $('.alert-success').text(data).show();
            //         $('input[name=name]').val('');
            //         $(".songs").val('').trigger('change');
            //
            //         setTimeout(function () {
            //             $('.alert-success').hide();
            //         }, 3500);
            //     }
            // });
        });

        // $("#myModal > div > div > div.modal-body > form > div > span").addClass("w-100");
        $("#myModal > div > div > div.modal-body > form > div > span").css("width", "100% !important");
        $("#myModal > div > div > div.modal-body > form > div > span").attr('style','width: 100% !important');
        // $("#myModal > div > div > div.modal-body > form > div > span").addClass(".w-100");
    </script>

</body>

</html>