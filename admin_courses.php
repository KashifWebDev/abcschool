<?php
require 'parts/app.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
$title = "Course Management";
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
                                <strong>Success! </strong> Course added Successfully!
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registered Courses Record</h6>
                        </div>
                        <div class="card-body">

                            <div class="row my-2">
                                <div class="col-md-6 mx-auto d-flex justify-content-around">
                                    <form class="form-inline" action="" method="POST">
                                        <div class="form-group mx-sm-3 mb-2">
                                            <input type="text" class="form-control" name="course_name" placeholder="Add new course">
                                        </div>
                                        <button type="submit" name="add_course" class="btn btn-primary mb-2">Add Course</button>
                                    </form>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Course Name</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Course Name</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $sql = "SELECT * FROM courses";
                                    $res = mysqli_query($con, $sql);
                                    if(mysqli_num_rows($res)){
                                        while($row = mysqli_fetch_array($res)){
                                            ?>
                                            <tr>
                                                <td><?php echo $row["id"]; ?></td>
                                                <td><?php echo $row["course_name"]; ?></td>
                                                <td>
                                                    <a href="admin_courses.php?del_course=<?php echo $row["id"]; ?>" class="btn btn-danger btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                        <span class="text">Delete</span>
                                                    </a>
                                                    <button class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#myModal">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-info-circle"></i>
                                                        </span>
                                                        <span class="text">Link Instructor</span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- Link Instructor Modal -->
                                            <div class="modal" id="myModal">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Link Instructor</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form action="" method="POST">
                                                                <input type="hidden" name="course_id" value="<?php echo $row["id"]; ?>">
                                                                <div class="form-group">
                                                                    <label for="sel1">Select Instructor:</label>
                                                                    <select class="form-control" name="instructor_id">
                                                                        <option>-- SELECT --</option>
                                                                        <?php
                                                                        $s = "SELECT * FROM instructors";
                                                                        $r = mysqli_query($con, $s);
                                                                        if(mysqli_num_rows($r)){
                                                                            while($roww = mysqli_fetch_array($r)){
                                                                                ?>
                                                                                <option value="<?php echo $roww["id"]; ?>"><?php echo $roww["name"]; ?></option>
                                                                        <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="sel1">Select Month:</label>
                                                                    <select class="form-control" name="month">
                                                                        <option>-- SELECT --</option>
                                                                        <option value="January">January</option>
                                                                        <option value="February">February</option>
                                                                        <option value="March">March</option>
                                                                        <option value="April">April</option>
                                                                        <option value="May">May</option>
                                                                        <option value="June">June</option>
                                                                        <option value="July">July</option>
                                                                        <option value="August">August</option>
                                                                        <option value="September">September</option>
                                                                        <option value="October">October</option>
                                                                        <option value="November">November</option>
                                                                        <option value="December">December</option>
                                                                    </select>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <button type="submit" name="link" class="btn-info w-100 btn">
                                                                            Link
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    if(isset($_POST["link"])){
                                        $instructor_id = $_POST["instructor_id"];
                                        $course_id = $_POST["course_id"];
                                        $month = $_POST["month"];
                                        $sql = "INSERT INTO courses_and_instructors (instructor, course, month) VALUES ($instructor_id, $course_id, '$month')";

                                        if(phpRunSingleQuery($sql)){
                                            js_redirect("admin_linked_courses.php?success=1");
                                        }else{
                                            echo mysqli_error($con);
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
                <?php
                if(isset($_POST["add_course"])){
                    require 'parts/db.php';
                    $course_name = $_POST["course_name"];

                    $sql = "INSERT INTO courses (course_name) VALUES ('$course_name')";

                    if(phpRunSingleQuery($sql)){
                        js_redirect("admin_courses.php?success=1");
                    }else{
                        echo mysqli_error($con);
                    }
                }
                if(isset($_GET["del_course"])){
                    require 'parts/db.php';
                    $id = $_GET["del_course"];

                    $sql = "DELETE FROM  courses WHERE id = $id";

                    if(phpRunSingleQuery($sql)){
                        js_redirect("admin_courses.php");
                    }else{
                        echo mysqli_error($con);
                    }
                }
                ?>

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