<?php
    $id = $_GET["id"];
    require "parts/db.php";
    $sql = "SELECT * FROM payments WHERE Database_Invoice_No  =$id";
    $res = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($res);
?>
<html>
    <head>
        <title>Invoice Details</title>
        <link href="css/sb-admin-2.min.css?v=<?php echo rand(); ?>" rel="stylesheet">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-dark display-4 font-weight-bold">ABC School System</p>
                    <p class="lead text-dark font-weight-bold">
                        Invoice # <span class="font-weight-normal">34434</span>
                    </p>
                </div>
                <div class="d-flex">
                    <p><span class="font-weight-bold">Date:</span> <?php echo $row["Invoice_Date"]; ?></p>
                </div>
                <div class="w-100" style="border-top: .105rem solid #5a5c69!important; height: 10px !important;">&nbsp;</div>
                <div class="col-12">
                    <table class="table table-striped text-center">
                        <tbody>
                            <tr class="w-100">
                                <td class="w-50">Name</td>
                                <td class="w-50"><?php echo $row["Customer"]; ?></td>
                            </tr>
                            <tr class="w-100">
                                <td class="w-50">Terms Of payment</td>
                                <td class="w-50"><?php echo $row["Terms_of_Payment"]; ?></td>
                            </tr>
                            <?php if($row["Terms_of_Payment"]=="eft") { ?>
                                <tr class="w-100">
                                    <td class="w-50">EFT Date</td>
                                    <td class="w-50"><?php echo $row["eft_date"]; ?></td>
                                </tr>
                                <tr class="w-100">
                                    <td class="w-50">EFT Reference</td>
                                    <td class="w-50"><?php echo $row["eft_reference"]; ?></td>
                                </tr>
                            <?php } ?>
                            <tr class="w-100">
                                <td class="w-50">ABC Receipt #</td>
                                <td class="w-50"><?php echo $row["ABC_Receipt_book"]; ?></td>
                            </tr>
                            <tr class="w-100">
                                <td class="w-50">Service Description</td>
                                <td class="w-50"><?php echo $row["ProductService_Description"]; ?></td>
                            </tr>
                            <tr class="w-100">
                                <td class="w-50">Teacher</td>
                                <td class="w-50"><?php echo $row["Teacher"]; ?></td>
                            </tr>
                            <tr class="w-100">
                                <td class="w-50">Payment Method</td>
                                <td class="w-50"><?php echo $row["Terms_of_Payment"]; ?></td>
                            </tr>
                            <?php if($row["Terms_of_Payment"]=="EFT") { ?>
                                <tr class="w-100">
                                    <td class="w-50">EFT Date/Reference</td>
                                    <td class="w-50"><?php echo $row["eft_date"].' / '.$row["eft_reference"]; ?></td>
                                </tr>
                            <?php } ?>
                            <?php if($row["userSelection"]=="Books") { ?>
                                <tr class="w-100">
                                    <td class="w-50">Course</td>
                                    <td class="w-50"><?php echo $row["course"]; ?></td>
                                </tr>
                            <?php } ?>
                            <?php if($row["userSelection"]=="Registration fee") { ?>
                                <tr class="w-100">
                                    <td class="w-50">Registration Fee</td>
                                    <td class="w-50"><?php echo 1600; ?></td>
                                </tr>
                            <?php } ?>
                            <?php if($row["userSelection"]=="Monthly fee") { ?>
                                <tr class="w-100">
                                    <td class="w-50">Monthly Fee for Month</td>
                                    <td class="w-50"><?php echo $row["mnth"]; ?></td>
                                </tr>
                            <?php } ?>
                            <?php if($row["userSelection"]=="Exam Re-write") { ?>
                                <tr class="w-100">
                                    <td class="w-50">ReWrite Fee for Month</td>
                                    <td class="w-50"><?php echo $row["mnth"]; ?></td>
                                </tr>
                            <?php } ?>
                            <?php if($row["userSelection"]=="Translation") { ?>
                                <tr class="w-100">
                                    <td class="w-50">Translation Languages / Pages</td>
                                    <td class="w-50"><?php echo $row["lang"].' / '.$row["Tranlations_no_of_pages"]; ?></td>
                                </tr>
                            <?php } ?>
                            <tr class="w-100">
                                <td class="w-50">&nbsp</td>
                                <td class="w-50"><b>Total &nbsp;</b><?php echo $row["Amount"]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
