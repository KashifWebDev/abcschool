<?php
require 'parts/app.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
$title = "Payment Entry";
require 'parts/head.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    #hidden{
        display: none;
    }
    #visible{
        display: block;
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
                            <h6 class="m-0 font-weight-bold text-primary">Payment Entry</h6>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST"  enctype="multipart/form-data">
                                <input type="hidden" name="student_id" value="<?php echo rand(10000000, 99999999); ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Date</label>
                                            <input type="date" name="registration_date" class="form-control" placeholder="Registration Date" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Course:</label>
                                            <input type="text" name="invoice" class="form-control" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Name:</label>
                                            <input type="text" name="invoice" class="form-control" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">ABC Receipt #:</label>
                                            <input type="text" name="passport" class="form-control" placeholder="Passport Number" id="pwd">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Payment Method:</label>
                                            <span class="ml-2">
                                                <div class="form-check form-check-inline" id="registraion_check">
                                                    <input class="form-check-input" type="checkbox" id="Registration_input_check" value="option1" name="pay">
                                                    <label class="form-check-label" for="Registration">Registration</label>
                                                </div>
                                                <div class="form-check form-check-inline" id="book_check">
                                                    <input class="form-check-input" type="checkbox" id="Books" value="option2">
                                                    <label class="form-check-label" for="Books">Books</label>
                                                </div>
                                                <div class="form-check form-check-inline" id="lang_check">
                                                    <input class="form-check-input" type="checkbox" id="Translation" value="option2">
                                                    <label class="form-check-label" for="Translation">Translation</label>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="font-weight-bold">Select Services</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="registration_check">
                                            <input class="form-check-input" type="checkbox" id="RegistrationInputCheck" name="userSelection">
                                            <label class="form-check-label" for="Registration">Registration</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="book_check">
                                            <input class="form-check-input" type="checkbox" id="BooksInput" name="userSelection">
                                            <label class="form-check-label" for="Books">Books</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="lang_check">
                                            <input class="form-check-input" type="checkbox" id="TranslationInput" name="userSelection">
                                            <label class="form-check-label" for="Translation">Translation</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="rewrite_check">
                                            <input class="form-check-input" type="checkbox" id="ReWrite" name="userSelection">
                                            <label class="form-check-label" for="ReWrite">Exam Re-write</label>
                                        </div>
                                        <div class="form-group mt-2" id="mnthBox">
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
                                        <div class="form-group mt-2" id="bookBox">
                                            <label for="sel1">Select Book:</label>
                                            <select class="form-control" name="month">
                                                <option>-- SELECT --</option>
                                                <option value="January">Foundation</option>
                                                <option value="February">Basic</option>
                                                <option value="March">Intermediate</option>
                                                <option value="April">Reader</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-2" id="langBox">
                                            <label for="sel1">Select Language:</label>
                                            <select class="form-control" name="month">
                                                <option>-- SELECT --</option>
                                                <option value="January">French</option>
                                                <option value="February">Portuguese</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
<!--                                <div class="col-12">-->
<!--                                    <div class="col-md-6">-->
<!--                                        <div class="input-group mb-3">-->
<!--                                            <div class="input-group-prepend">-->
<!--                                                <span class="input-group-text">Upload Student Picture</span>-->
<!--                                            </div>-->
<!--                                            <div class="custom-file">-->
<!--                                                <input class="custom-file-input" id="inputGroupFile01" type="file" accept="image/*" name="image">-->
<!--                                                <label class="custom-file-label" for="inputGroupFile01">Select file</label>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="col-12">
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
                        $start_date = $_POST["start_date"];
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
                        $pic = strtolower($pic);
                        $sql = "INSERT INTO master_registration_list (email, student_id, registration_invoice_no, registration_date, student_name, start_date,
                                      country, passport_no, dob, phone_no, guardian_contact, address_S_A, facebook, insta, pic) VALUES 
                                ('$email', '$student_id', '$invoice_num', '$registration_date', '$name', '$start_date', '$country', '$passport',
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


<!--COuntry-->
    <script src="js/select.js"></script>
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


    <script>
        $("#bookBox").hide();
        $("#mnthBox").hide();
        $("#langBox").hide();
        $(function(){
            $('#RegistrationInputCheck').click(function() {
                if($("#RegistrationInputCheck").is(':checked')){
                    $("#mnthBox").show();
                    console.log("in");
                }
                else{
                    console.log("out");
                    $("#mnthBox").hide();
                }
            });
            $('#rewrite_check').click(function() {
                if($("#ReWrite").is(':checked')){
                    $("#mnthBox").show();
                    console.log("in");
                }
                else{
                    console.log("out");
                    $("#mnthBox").hide();
                }
            });
            $('#BooksInput').click(function() {
                if($("#BooksInput").is(':checked')){
                    $("#bookBox").show();
                    console.log("in");
                }
                else{
                    console.log("out");
                    $("#bookBox").hide();
                }
            });
            $('#TranslationInput').click(function() {
                if($("#TranslationInput").is(':checked')){
                    $("#langBox").show();
                    console.log("in");
                }
                else{
                    console.log("out");
                    $("#langBox").hide();
                }
            });
        });
    </script>
</body>

</html>