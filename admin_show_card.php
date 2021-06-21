<?php
require 'parts/app.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
$title = "Login";
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


                    <div class="row">
                        <div class="col-md-4 mx-auto">
                            <!-- Card Front -->
                            <div id="CardFront">
                                <div class="row" style="background-color: #bebebe;">
                                    <div class="col-md-4 mx-auto">
                                        <img src="img/logo.png" alt="" height="60px">
                                    </div>
                                    <div class="col-md-8 mx-auto d-flex flex-column justify-content-center align-items-center text-dark">
                                        <p class="m-0" style="font-size: x-large;font-weight: 800;">ABC International</p>
                                        <p class="m-0" style="font-size: large;font-weight: 400;">Professional Learnship Programme</p>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-md-5">
                                        <img src="img/user.jpg" alt="" class="w-100">
                                    </div>
                                    <div class="col-md-7 text-dark d-flex flex-column justify-content-center align-items-center">
                                        <h3 class="font-weight-bold">Mr Mahbobur Rahman</h3>
                                        <div style="font-size: large;">
                                            <span>Date Of Birth: </span>
                                            <span>19 February 1989</span>
                                        </div>
                                        <div style="font-size: large;">
                                            <span>Passport No. : </span>
                                            <span>BW0317588</span>
                                        </div>
                                        <div style="font-size: large;">
                                            <span>Student ID: </span>
                                            <span>adfasdfsdf</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row bg-appColor">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-7 text-center text-white py-2" style="font-size: large">
                                        Expiry Date: October 2021
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <!-- Card Back -->
                            <div id="CardFront">
                                <div class="row" style="background-color: #bebebe;">
                                    <div class="col-md-12 py-2 d-flex flex-column justify-content-center align-items-center text-dark">
                                        <p class="m-0" style="font-size: x-large;font-weight: 800;">ABC International (PTY) Ltd</p>
                                        <p class="m-0 font-weight-bold" style="font-size: large;font-weight: 400;">2018/506135/07</p>
                                    </div>
                                </div>
                                <div class="row no-gutters d-flex flex-column justify-content-center align-items-center ">
                                    <div class="col-md-12 pt-2 pb-1 text-dark">
                                        <table>
                                            <tr style="font-size: large;">
                                                <td class="text-center">Accreditation No.: </td>
                                                <td>ETDP10758</td>
                                            </tr>
                                            <tr style="font-size: large;">
                                                <td class="text-center">IEB Centre: </td>
                                                <td>9584</td>
                                            </tr>
                                            <tr style="font-size: large;">
                                                <td class="text-center">Address : </td>
                                                <td style="text-align: justify; width: 55%;">KBW House, 122 De Korte street,
                                                    Braamfontein, Johannesburg
                                                    South Africa
                                            </td>
                                            </tr>
                                            <tr style="font-size: large;">
                                                <td class="text-center">Email Address: </td>
                                                <td>info@abcinternatonal.co.za</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row bg-appColor py-2">
                                    &nbsp;
                                </div>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>