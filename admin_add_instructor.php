<?php
require 'parts/app.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
$title = "Add Instructor";
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
                            <strong>Success! </strong> Instructor Record added Successfully!
                        </div>
                    </div>
                    <?php
                }
                ?>

                <!-- Page Heading -->
                <div class="card shadow mb-4 container">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Instructor Registration</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-8 mx-auto">
                                    <div class="form-group">
                                        <label for="email">Hire Date:</label>
                                        <input type="text" name="registration_date" class="form-control" placeholder="Registration Date" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Instructor ID:</label>
                                        <input type="text" name="instructor_id" class="form-control" placeholder="Registration Date" id="email" value="<?php echo random_int(100000, 999999); ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Name:</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name" id="pwd">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Email:</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email" id="pwd">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Phone Number</label>
                                        <input type="text" name="phone_num" class="form-control" placeholder="Phone Number" id="pwd">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 mx-auto">
                                    <button class="btn btn-primary bg-appColor w-100" type="submit" name="add_student">
                                        <span class="fas fa-save"></span> Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                if(isset($_POST["add_student"])){
                    require 'parts/db.php';
                    $registration_date = $_POST["registration_date"];
                    $name = $_POST["name"];
                    $instructor_id = $_POST["instructor_id"];
                    $email = $_POST["email"];
                    $phone_num = $_POST["phone_num"];

                    $sql = "INSERT INTO instructors (instructor_id, name, hire_date, phone, email) VALUES 
                                ('$instructor_id', '$name', '$registration_date', '$phone_num', '$email')";

                    if(phpRunSingleQuery($sql)){
                        js_redirect("admin_add_instructor.php?success=1");
                    }else{
//
                    }

                }
                ?>
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