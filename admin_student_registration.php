<?php
require 'parts/app.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
$title = "Student Registration";
require 'parts/head.php';
?>

<link rel="stylesheet" href="css/bootstrap-select.min.css">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/readable/bootstrap.min.css">-->

<style>
    /*
Make bootstrap-select work with bootstrap 4 see:
https://github.com/silviomoreto/bootstrap-select/issues/1135
*/
    .dropdown-toggle.btn-default {
        color: #292b2c;
        background-color: #fff;
        border-color: #ccc;
    }
    .bootstrap-select.show > .dropdown-menu > .dropdown-menu {
        display: block;
    }
    .bootstrap-select > .dropdown-menu > .dropdown-menu li.hidden {
        display: none;
    }
    .bootstrap-select > .dropdown-menu > .dropdown-menu li a {
        display: block;
        width: 100%;
        padding: 3px 1.5rem;
        clear: both;
        font-weight: 400;
        color: #292b2c;
        text-align: inherit;
        white-space: nowrap;
        background: 0 0;
        border: 0;
        text-decoration: none;
    }
    .bootstrap-select > .dropdown-menu > .dropdown-menu li a:hover {
        background-color: #f4f4f4;
    }
    .bootstrap-select > .dropdown-toggle {
        width: 100%;
    }
    .dropdown-menu > li.active > a {
        color: #fff !important;
        background-color: #337ab7 !important;
    }
    .bootstrap-select .check-mark {
        line-height: 14px;
    }
    .bootstrap-select .check-mark::after {
        font-family: "FontAwesome";
        content: "\f00c";
    }
    .bootstrap-select button {
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Make filled out selects be the same size as empty selects */
    .bootstrap-select.btn-group .dropdown-toggle .filter-option {
        display: inline !important;
    }
</style>

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
                                <strong>Success! </strong> Student Record added Successfully!
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
                            <form action="" method="POST"  enctype="multipart/form-data">
                                <input type="hidden" name="student_id" value="<?php echo rand(10000000, 99999999); ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Registration Date</label>
                                            <input type="date" name="registration_date" class="form-control" placeholder="Registration Date" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Invoice Number:</label>
                                            <input type="text" name="invoice" class="form-control" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Student Name:</label>
                                            <input type="text" name="name" class="form-control" placeholder="Student Name" id="pwd">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Passport #:</label>
                                            <input type="text" name="passport" class="form-control" placeholder="Passport Number" id="pwd">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Date of Birth</label>
                                            <input type="date" name="dob" class="form-control" placeholder="DOB" id="pwd">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Phone Number</label>
                                            <input type="text" name="phone_num" class="form-control" placeholder="Phone Number" id="pwd">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
<!--                                        <div class="form-group">-->
<!--                                            <label for="pwd">Country:</label>-->
<!--                                            <input type="text" name="country" class="form-control" placeholder="Country" id="pwd">-->
<!--                                        </div>-->
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="mr-3">Select Country</label>
                                            <select name="country" class="selectpicker countrypicker form-control" data-live-search="true" data-default="United States" data-flag="true"></select>
<!--                                            <select class="selectpicker countrypicker form-control" data-live-search="true"></select>-->
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Email" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Guardian Contact Number:</label>
                                            <input type="text" name="gardian_contact" class="form-control" placeholder="Contact Number" id="pwd">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Address in South Africa:</label>
                                            <input type="text" name="SA_address" class="form-control" placeholder="Address in South Africa" id="pwd">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Facebook Name:</label>
                                            <input type="text" name="fb" class="form-control" placeholder="Facebook Name/ID" id="pwd">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Instagram Name</label>
                                            <input type="text" name="insta" class="form-control" placeholder="Instagram Name/ID" id="pwd">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload Student Picture</span>
                                            </div>
                                            <div class="custom-file">
                                                <input class="custom-file-input" id="inputGroupFile01" type="file" accept="image/*" name="image">
                                                <label class="custom-file-label" for="inputGroupFile01">Select file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
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
//                        print_r($_POST); exit(); die();
                        require 'parts/db.php';
                        $registration_date = $_POST["registration_date"];
                        $student_id = $_POST["student_id"];
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
                        $email = $_POST["email"];
                        $pic = "default.jpg";

                        if (!empty($_FILES["image"]["name"])) {
                            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt'); // valid extensions
                            $path = 'img/students/'; // upload directory

                            $img = $_FILES['image']['name'];
                            $tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension
                            $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
                            $final_image = rand(1000, 1000000) . $img;
// check's valid format
                            if (in_array($ext, $valid_extensions)) {
                                $path = $path . strtolower($final_image);
                                if (move_uploaded_file($tmp, $path)) {
                                    $pic = $final_image;
                                }
                            } else {
                                echo 'invalid';
                                exit();
                                die();
                            }
                        }
                        $sql = "INSERT INTO master_registration_list (email, student_id, registration_invoice_no, registration_date, student_name,
                                      country, passport_no, dob, phone_no, guardian_contact, address_S_A, facebook, insta, pic) VALUES 
                                ('$email', '$student_id', '$invoice_num', '$registration_date', '$name', '$country', '$passport',
                                 '$dob', '$phone_num', '$gardian_contact', '$SA_address', '$fb', '$insta', '$pic')";


                        if(phpRunSingleQuery($sql)){
                            js_redirect("admin_student_registration.php?success=1");
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

<!--Country dropdown-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="js/countrypicker.js?v=<?php echo rand(); ?>"></script>
</body>

</html>