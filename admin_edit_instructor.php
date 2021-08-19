<?php
require 'parts/app.php';

$id = $_GET["id"];
$sql = "SELECT * FROM instructors WHERE id=$id";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_array($res);


?>
<!DOCTYPE html>
<html lang="en">

<?php
$title = "Edit Instructor";
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
                            <strong>Success! </strong> Instructor Record Updated Successfully!
                        </div>
                    </div>
                    <?php
                }
                ?>

                <!-- Page Heading -->
                <div class="card shadow mb-4 container">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Instructor Record Update</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="row">
                                <div class="col-md-8 mx-auto">
                                    <div class="form-group">
                                        <label for="pwd">Full Name:</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name" id="pwd" value="<?php echo $row["name"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Common Name:</label>
                                        <input type="text" name="common_name" class="form-control" placeholder="Name" id="pwd" value="<?php echo $row["common_name"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Email:</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email" id="pwd" value="<?php echo $row["email"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Phone Number</label>
                                        <input type="text" name="phone_num" class="form-control" placeholder="Phone Number" id="pwd" value="<?php echo $row["phone"]; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 mx-auto">
                                    <button class="btn btn-primary bg-appColor w-100" type="submit" name="add_student">
                                        <span class="fas fa-save"></span> Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                if(isset($_POST["add_student"])){
                    require 'parts/db.php';
                    $id = $_POST["id"];
                    $name = $_POST["name"];
                    $common_name = $_POST["common_name"];
                    $email = $_POST["email"];
                    $phone_num = $_POST["phone_num"];

                    $sql = "UPDATE instructors SET name='$name', common_name='$common_name', email='$email', phone='$phone_num'
                            WHERE id=$id";


                    if(phpRunSingleQuery($sql)){
                        js_redirect("admin_edit_instructor.php?success=1&id=$id");
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