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

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>