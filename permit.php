<?php
require 'parts/app.php';
$id = $_GET["id"];
$s = "SELECT * FROM master_registration_list WHERE id=$id";
$r = mysqli_query($con, $s);
$row = mysqli_fetch_array($r);
?>
<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">
<!--
span.cls_002{font-family:Arial,serif;font-size:25.0px;color:rgb(65,65,65);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_002{font-family:Arial,serif;font-size:25.0px;color:rgb(65,65,65);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_003{font-family:"Calibri",serif;font-size:10.1px;color:rgb(102,102,102);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:"Calibri",serif;font-size:10.1px;color:rgb(102,102,102);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_004{font-family:"Calibri",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_004{font-family:"Calibri",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_005{font-family:"Calibri Bold",serif;font-size:10.1px;color:rgb(65,65,65);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_005{font-family:"Calibri Bold",serif;font-size:10.1px;color:rgb(65,65,65);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_006{font-family:"Calibri",serif;font-size:10.1px;color:rgb(65,65,65);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_006{font-family:"Calibri",serif;font-size:10.1px;color:rgb(65,65,65);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_012{font-family:"Calibri Bold",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: underline}
div.cls_012{font-family:"Calibri Bold",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_008{font-family:"Calibri Bold",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_008{font-family:"Calibri Bold",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_013{font-family:"Calibri",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_013{font-family:"Calibri",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_009{font-family:Arial,serif;font-size:10.1px;color:rgb(65,65,65);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_009{font-family:Arial,serif;font-size:10.1px;color:rgb(65,65,65);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_010{font-family:"Calibri",serif;font-size:11.1px;color:rgb(65,65,65);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_010{font-family:"Calibri",serif;font-size:11.1px;color:rgb(65,65,65);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_014{font-family:"Calibri Bold",serif;font-size:10.1px;color:rgb(17,84,204);font-weight:bold;font-style:normal;text-decoration: underline}
div.cls_014{font-family:"Calibri Bold",serif;font-size:10.1px;color:rgb(17,84,204);font-weight:bold;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="fe48b5fc-d4bc-11eb-a980-0cc47a792c0a_id_fe48b5fc-d4bc-11eb-a980-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-306px;top:0px;width:612px;height:100vh;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<!--<img src="img/permit_bg.jpg" width=612 height=792></div>-->
<!--<div style="position:absolute;left:149.25px;top:27.00px" class="cls_002"><span class="cls_002">ABC International - South Africa</span></div>-->
<div style="position:absolute;left:149.25px;top:27.00px" class="cls_002"><span class="cls_002">&nbsp;</span></div>
<div style="position:absolute;left:51.15px;top:101.60px" class="cls_003"><span class="cls_003">KBW House, 122 De Korte Street,</span></div>
<div style="position:absolute;left:498.90px;top:101.60px" class="cls_004"><span class="cls_004"><?php echo date("M d, Y"); ?></span></div>
<div style="position:absolute;left:51.15px;top:115.10px" class="cls_003"><span class="cls_003">Braamfontein, Johannesburg</span></div>
<div style="position:absolute;left:51.15px;top:128.60px" class="cls_003"><span class="cls_003">South Africa</span></div>
<div style="position:absolute;left:51.15px;top:142.10px" class="cls_003"><span class="cls_003">Telephone: +27 11 403 2171  |</span></div>
<div style="position:absolute;left:181.70px;top:142.10px" class="cls_003"><span class="cls_003">011 4032171</span></div>
<div style="position:absolute;left:51.15px;top:155.60px" class="cls_003"><span class="cls_003">Email: info@abcinternational.co.za</span></div>
<div style="position:absolute;left:51.15px;top:169.10px" class="cls_003"><span class="cls_003">Web: </span><A HREF="http://www.abcinternational.co.za/">www.abcinternational.co.za</A> </div>
<div style="position:absolute;left:49.65px;top:198.85px" class="cls_005"><span class="cls_005">To whom it may concern</span></div>
<div style="position:absolute;left:49.65px;top:217.10px" class="cls_006"><span class="cls_006">Dear Sir or Madam,</span></div>
<div style="position:absolute;left:51.90px;top:247.06px" class="cls_012"><span class="cls_012">Study permit application for the following student</span></div>
<div style="position:absolute;left:51.90px;top:265.10px" class="cls_008"><span class="cls_008">Student Name :</span><span class="cls_004">   <?php echo $row["student_name"]; ?></span></div>
<div style="position:absolute;left:51.90px;top:281.60px" class="cls_008"><span class="cls_008">Date of Birth :</span></div>
<div style="position:absolute;left:127.65px;top:281.60px" class="cls_004"><span class="cls_004"><?php echo $row["dob"]; ?></span></div>
<div style="position:absolute;left:226.65px;top:281.60px" class="cls_008"><span class="cls_008">Passport Number :</span><span class="cls_004">  <?php echo $row["passport_no"]; ?></span></div>
<div style="position:absolute;left:49.65px;top:315.85px" class="cls_004"><span class="cls_004">This is to certify that the student above has been accepted to study at the above Academy</span></div>
<div style="position:absolute;left:49.65px;top:329.60px" class="cls_004"><span class="cls_004">and </span><span class="cls_013">has paid the required deposit to study for 12 months</span><span class="cls_004"> ( Invoice number: 44278OP073564237290 ).</span></div>
<div style="position:absolute;left:49.65px;top:356.60px" class="cls_006"><span class="cls_006">The student will complete the following courses:</span></div>
<div style="position:absolute;left:49.65px;top:383.60px" class="cls_005"><span class="cls_005">ENGLISH FOUNDATION COURSE (LEVEL 1 - 6)</span></div>
<div style="position:absolute;left:49.65px;top:397.10px" class="cls_005"><span class="cls_005">ENGLISH BASIC COURSE (LEVEL 7 - 15)</span></div>
<div style="position:absolute;left:49.65px;top:410.60px" class="cls_005"><span class="cls_005">ENGLISH INTERMEDIATE COURSE (LEVEL 16 - 23)</span></div>
<div style="position:absolute;left:228.30px;top:424.10px" class="cls_005"><span class="cls_005">Duration:</span><span class="cls_004"> April, 2021 to March, 2022</span></div>
<div style="position:absolute;left:49.65px;top:451.85px" class="cls_006"><span class="cls_006">The above registration is based on the following criteria:</span></div>
<div style="position:absolute;left:68.40px;top:466.85px" class="cls_009"><span class="cls_009">●</span><span class="cls_006">  Employment prohibited</span></div>
<div style="position:absolute;left:219.15px;top:466.85px" class="cls_009"><span class="cls_009">●</span><span class="cls_006">  Conduct</span></div>
<div style="position:absolute;left:68.40px;top:481.85px" class="cls_009"><span class="cls_009">●</span><span class="cls_006">  Academic performance</span></div>
<div style="position:absolute;left:219.15px;top:481.85px" class="cls_009"><span class="cls_009">●</span><span class="cls_006">  Attendance</span></div>
<div style="position:absolute;left:50.40px;top:514.10px" class="cls_005"><span class="cls_005">The Registrar or Principal of the learning institution will undertake to -</span></div>
<div style="position:absolute;left:68.40px;top:541.10px" class="cls_006"><span class="cls_006">1.   Provide proof of registration as contemplated in the relevant legislations within 60 days of registration or</span></div>
<div style="position:absolute;left:68.40px;top:554.60px" class="cls_006"><span class="cls_006">2.   In the event of failure to register by the closing date, provide the Director-General with a notification of failure to</span></div>
<div style="position:absolute;left:86.40px;top:568.10px" class="cls_006"><span class="cls_006">register within 7 days of the closing date of registration;</span></div>
<div style="position:absolute;left:68.40px;top:581.60px" class="cls_006"><span class="cls_006">3.   Within 30 days of de-registration, notify the Director-General that the applicant is no longer registered with such</span></div>
<div style="position:absolute;left:86.40px;top:595.10px" class="cls_006"><span class="cls_006">institution; and</span></div>
<div style="position:absolute;left:68.40px;top:608.60px" class="cls_006"><span class="cls_006">4.   Within 30 days of completion of studies, notify the Director-General when the applicant has completed his or her</span></div>
<div style="position:absolute;left:86.40px;top:622.10px" class="cls_006"><span class="cls_006">studies or requires to extend such period of study.</span></div>
<div style="position:absolute;left:50.40px;top:649.10px" class="cls_005"><span class="cls_005">Should you have any queries, please contact the administrator or principal.</span></div>
<div style="position:absolute;left:50.40px;top:676.10px" class="cls_006"><span class="cls_006">Sincerely,</span></div>
<div style="position:absolute;left:50.40px;top:703.06px" class="cls_010"><span class="cls_010">Kim Wetzl</span></div>
<div style="position:absolute;left:50.40px;top:718.10px" class="cls_005"><span class="cls_005">Principal</span></div>
<div style="position:absolute;left:50.40px;top:731.60px" class="cls_014"><span class="cls_014"> </span><A HREF="mailto:kim@abcinternational.co.za">kim@abcinternational.co.za</A> </div>
</div>

</body>
</html>
