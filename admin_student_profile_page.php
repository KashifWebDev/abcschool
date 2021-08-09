<?php
require 'parts/app.php';

$id = $_GET["id"];
$sql = "SELECT *  FROM master_registration_list WHERE id = $id";
$res = mysqli_query($con, $sql);
$student = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">

<?php
$title = "Student Profile";
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

                    <!-- Page Heading -->
                    <div class="my-4 py-2 px-4 bg-secondary text-white">
                        Personal Information
                    </div>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/students/<?php echo $student["pic"]; ?>" class="img-fluid rounded-pill" alt="" style="max-height: 220px;">
                            </div>
                            <div class="col-md-4">
                                <p>
                                    <span class="mr-2 fas fa-hashtag"></span><b>ID</b>
                                    <?php echo $student["id"]; ?>
                                </p>
                                <p>
                                    <span class="mr-2 fas fa-user-circle"></span><b>Name</b>
                                    <?php echo $student["student_name"]; ?>
                                </p>
                                <p>
                                    <span class="mr-2 fas fa-calendar-alt"></span><b>Registration</b>
                                    <?php echo $student["registration_date"]; ?>
                                </p>
                                <p>
                                    <span class="mr-2 fas fa-flag"></span><b>Country</b>
                                    <?php echo $student["country"]; ?>
                                </p>
                                <p>
                                    <span class="mr-2 fas fa-passport"></span><b>Passport</b>
                                    <?php echo $student["passport_no"]; ?>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p>
                                    <span class="mr-2 fas fa-calendar-day"></span><b>DOB</b>
                                    <?php echo $student["dob"]; ?>
                                </p>
                                <p>
                                    <span class="mr-2 fas fa-phone-square-alt"></span><b>Contact</b>
                                    <?php echo $student["phone_no"]; ?>
                                </p>
                                <p>
                                    <span class="mr-2 fas fa-at"></span><b>Email</b>
                                    <?php echo $student["email"]; ?>
                                </p>
                                <p>
                                    <span class="mr-2 fas fa-map-marker-alt"></span><b>Address</b>
                                    <?php echo $student["address_S_A"]; ?>
                                </p>
                                <p>
                                    <span class="mr-2 fas fa-thumbs-up"></span><b>Facebook / Insta</b>
                                    <?php echo $student["facebook"].' / '.$student["insta"]; ?>
                                </p>
                            </div>
                        </div>

                    <div class="mt-4 py-2 px-4 bg-secondary text-white">
                        Academic History
                    </div>

                    <table class="table table-striped text-center table-bordered">
                        <thead>
                        <tr>
                            <th scope="col"> <i class="fas fa-book"></i> Course</th>
                            <th scope="col"> <i class="fas fa-calendar-week"></i> Month</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql = "SELECT * FROM courses_and_students WHERE student_id=$id";
                            $res = mysqli_query($con, $sql);
                            if(mysqli_num_rows($res)){
                                while($row=mysqli_fetch_array($res)){
                                    $sql = "SELECT * FROM courses_and_students WHERE student_id=$id group by roster_id";
                                    $res = mysqli_query($con, $sql);
                                    $r = mysqli_fetch_array($res);
                                    $roster_id = $r["roster_id"];
                                    $sql = "SELECT * FROM roster WHERE id=$roster_id";
                                    $res = mysqli_query($con, $sql);
                                    $r1 = mysqli_fetch_array($res);
                                    $month = $r1["month"];
                                    $courseID = $r1["course_id"];
                                    $sql = "SELECT * FROM courses WHERE id=$courseID";
                                    $res = mysqli_query($con, $sql);
                                    $r1 = mysqli_fetch_array($res);
                                    $courseName = $r1["course_name"];
                                    ?>
                                    <tr>
                                        <td><?php echo $month; ?></td>
                                        <td><?php echo $courseName; ?></td>
                                    </tr>
                        <?php
                                }
                            }
                        ?>
                        </tbody>
                    </table>

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

</body>

</html>