<?php
require 'parts/app.php';
$id = $_GET["id"];
$sql = "SELECT * FROM master_registration_list WHERE id=$id";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">

<?php
$title = "Update Student Record";
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
                                <strong>Success! </strong> Student Record Updated Successfully!
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Student Registration</h6>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Registration Date</label>
                                            <input type="date" name="registration_date" class="form-control" placeholder="Registration Date" id="email" value="<?php echo $row["registration_date"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Invoice Number:</label>
                                            <input type="text" name="invoice" class="form-control" value="<?php echo $row["student_id"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Student Name:</label>
                                            <input type="text" name="name" class="form-control" placeholder="Student Name" id="pwd" value="<?php echo $row["registration_invoice_no"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Passport #:</label>
                                            <input type="text" name="passport" class="form-control" placeholder="Passport Number" id="pwd" value="<?php echo $row["passport_no"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Date of Birth</label>
                                            <input type="date" name="dob" class="form-control" placeholder="DOB" id="pwd" value="<?php echo $row["dob"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Phone Number</label>
                                            <input type="text" name="phone_num" class="form-control" placeholder="Phone Number" id="pwd" value="<?php echo $row["phone_no"]; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pwd">Country:</label>
                                            <input type="text" name="country" class="form-control" placeholder="Country" id="pwd" value="<?php echo $row["country"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" placeholder="Email" id="email" value="<?php echo $row["email"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Guardian Contact Number:</label>
                                            <input type="text" name="gardian_contact" class="form-control" placeholder="Contact Number" id="pwd" value="<?php echo $row["guardian_contact"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Address in South Africa:</label>
                                            <input type="text" name="SA_address" class="form-control" placeholder="Address in South Africa" id="pwd" value="<?php echo $row["address_S_A"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Facebook Name:</label>
                                            <input type="text" name="fb" class="form-control" placeholder="Facebook Name/ID" id="pwd" value="<?php echo $row["facebook"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Instagram Name</label>
                                            <input type="text" name="insta" class="form-control" placeholder="Instagram Name/ID" id="pwd" value="<?php echo $row["insta"]; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <button class="btn btn-primary bg-appColor w-100" type="submit" name="add_student">
                                            <span class="fas fa-edit"></span> Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                    if(isset($_POST["add_student"])){
                        $id = $_POST["id"];
                        $registration_date = $_POST["registration_date"];
                        $name = $_POST["name"];
                        $invoice_num = $_POST["invoice"];
                        $country = $_POST["country"];
                        $passport = $_POST["passport"];
                        $dob = $_POST["dob"];
                        $phone_num = $_POST["phone_num"];
                        $gardian_contact = $_POST["gardian_contact"];
                        $SA_address = $_POST["SA_address"];
                        $fb = $_POST["fb"];
                        $insta = $_POST["insta"];


                        $sql = "UPDATE master_registration_list SET registration_date='$registration_date', registration_invoice_no='$invoice_num', student_name='$name', country='$country', passport_no='$passport',
                                dob='$dob', phone_no='$phone_num', guardian_contact='$gardian_contact', address_S_A='$SA_address', facebook='$fb', insta='$insta' WHERE id=$id";

                        if(phpRunSingleQuery($sql)){
                            js_redirect("admin_edit_student_page.php?success=1&id=$id");
                        }else{
                            echo mysqli_error($con);
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