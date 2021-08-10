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
                                <strong>Success! </strong> Payment Inserted! ID: <?php echo $_GET["last_id"]; ?>
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
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Date</label>
                                            <input type="date" name="date" class="form-control" placeholder="Registration Date" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Teacher:</label>
                                            <input type="text" name="teacher" placeholder="Teacher Name" class="form-control" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Student/Customer Name:</label>
                                            <input type="text" name="name" placeholder="Student/Customer Name" class="form-control" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">ABC Receipt #:</label>
                                            <input type="text" name="receipt" class="form-control" placeholder="Passport Number" id="pwd">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Service Description #:</label>
                                            <input type="text" name="desc" class="form-control" placeholder="Service Description" id="pwd">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Payment Method:</label>
                                            <span class="ml-2" id="payment_methods_list">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="cash1" value="Cash" name="pay">
                                                    <label class="form-check-label" for="Registration">Cash</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="cash2" value="Card" name="pay">
                                                    <label class="form-check-label" for="Books">Card</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="cash3" value="EFT" name="pay">
                                                    <label class="form-check-label" for="Translation">EFT</label>
                                                </div>
                                            </span>
                                        </div>
                                        <div class="row mb-3" id="payment_method">
                                            <div class="col">
                                                <input type="date" class="form-control" placeholder="Date" name="eft_date">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Reference of EFT" name="eft_reference">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="font-weight-bold">Select Services</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="registration_check">
                                            <input class="form-check-input" type="checkbox" id="" value="Registration fee" name="userSelection">
                                            <label class="form-check-label" for="Registration">Registration</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="registration_check">
                                            <input class="form-check-input" type="checkbox" id="RegistrationInputCheck" value="Monthly fee" name="userSelection">
                                            <label class="form-check-label" for="Registration">Monthly Fee</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="book_check">
                                            <input class="form-check-input" type="checkbox" id="BooksInput" value="Books" name="userSelection">
                                            <label class="form-check-label" for="Books">Books</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="lang_check">
                                            <input class="form-check-input" type="checkbox" id="TranslationInput" value="Translation" name="userSelection">
                                            <label class="form-check-label" for="Translation">Translation</label>
                                        </div>
                                        <div class="form-check form-check-inline" id="rewrite_check">
                                            <input class="form-check-input" type="checkbox" id="ReWrite" value="Exam Re-write" name="userSelection">
                                            <label class="form-check-label" for="ReWrite">Exam Re-write</label>
                                        </div>
                                        <div class="form-group mt-2" id="mnthBox">
                                            <label for="sel1">Select Month:</label>
                                            <select class="form-control" name="month">
                                                <option value="">-- SELECT --</option>
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
                                        <div  id="bookBox">
                                            <div class="form-group mt-2">
                                                <label for="sel1">Select Course:</label>
                                                <select class="form-control" name="course">
                                                    <option value="">-- SELECT --</option>
                                                    <option value="Foundation">Foundation</option>
                                                    <option value="Basic">Basic</option>
                                                    <option value="Intermediate">Intermediate</option>
                                                    <option value="Reader">Reader</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="langBox">
                                            <div class="form-group mt-2">
                                                <label for="sel1">Select Language:</label>
                                                <select class="form-control" name="lang">
                                                    <option value="">-- SELECT --</option>
                                                    <option value="French">French</option>
                                                    <option value="Portuguese">Portuguese</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="number" class="form-control" placeholder="No. Of Pages" name="numOfPages">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-md-10 mx-auto">
                                        <button class="btn btn-primary bg-appColor w-100" type="submit" name="add_payment">
                                            <span class="fas fa-save"></span> Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                    if(isset($_POST["add_payment"])){
//                        print_r($_POST); exit(); die();
                        require 'parts/db.php';
                        $date = $_POST["date"];
                        $teacher = $_POST["teacher"];
                        $name = $_POST["name"];
                        $receipt = $_POST["receipt"];
                        $desc = $_POST["desc"];
                        $pay = $_POST["pay"];
                        $eft_date = $_POST["eft_date"] ?? '00-00-0000';
                        $eft_reference = $_POST["eft_reference"] ?? null;
                        $userSelection = $_POST["userSelection"];
                        $month = $_POST["month"] ?? null;
                        $bookBox = $_POST["course"] ?? null;
                        $langBox = $_POST["lang"] ?? null;
                        $numOfPages = !empty($_POST["numOfPages"]) ? $_POST["numOfPages"] : 0;


                        $amount = 0;

//                        foreach($userSelection as $chk1)
//                        {
//                            if($userSelection=="Registration fee") $amount += 1600;
//                            if($userSelection=="Monthly fee") $amount += 2500;
//                            if($userSelection=="Books") { $amount += $bookBox=="Reader" ? 30 : 600; }
//                            if($userSelection=="Exam Re-write") $amount += 300;
//                            if($userSelection=="Translation") {
//                                $factor = $langBox=="French" ? 150 : 200;
//                                $amount += $factor*$numOfPages;
//                            }
//                        }
                        if($userSelection=="Registration fee") $amount += 1600;
                        if($userSelection=="Monthly fee") $amount += 2500;
                        if($userSelection=="Books") { $amount += $bookBox=="Reader" ? 30 : 600; }
                        if($userSelection=="Exam Re-write") $amount += 300;
                        if($userSelection=="Translation") {
                            $factor = $langBox=="French" ? 150 : 200;
                            $amount += $factor*$numOfPages;
                        }

//                        echo $amount; exit(); die();
                        echo $amount;

                        $sql = "INSERT INTO payments (Customer, Invoice_Date, Terms_of_Payment, eft_date, eft_reference, ABC_Receipt_book, ProductService_Description, Amount, Course, Teacher,
                                                    Tranlations_no_of_pages, mnth, lang, userSelection)
                                VALUES ('$name', '$date', '$pay', '$eft_date', '$eft_reference', '$receipt', '$desc', $amount, '$bookBox', '$teacher', $numOfPages, '$month', '$langBox',
                                        '$userSelection')";

                        echo $sql;

                        require 'parts/db.php';
                        if(mysqli_query($con, $sql)){
                            $last_id = mysqli_insert_id($con);
                            js_redirect("admin_enter_payment.php?success=1&last_id=$last_id");
                        }else{
                            echo mysqli_error($con); exit(); die();
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
        $("#payment_method").hide();
        $(function(){
            $('#payment_methods_list').click(function() {
                if(
                    $("#cash3").is(':checked')
                ){
                    $("#payment_method").show();
                    console.log("in");
                }
                else{
                    console.log("out");
                    $("#payment_method").hide();
                }
            });
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