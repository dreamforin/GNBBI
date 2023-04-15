<?php
include('config.php');
// by default, error messages are empty
$valid = $nameErr = $emailErr = '';

// by default,set input values are empty
$set_name = $set_email = $message = '';
extract($_POST);

if (isset($_POST['submit'])) {

  //input fields are Validated with regular expression
  $validName = "/^[a-zA-Z ]*$/";
  $validEmail = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
  $uppercasePassword = "/(?=.*?[A-Z])/";
  $lowercasePassword = "/(?=.*?[a-z])/";
  $digitPassword = "/(?=.*?[0-9])/";
  $spacesPassword = "/^$|\s+/";
  $symbolPassword = "/(?=.*?[#?!@$%^&*-])/";
  $minEightPassword = "/.{8,}/";

  //  First Name Validation
  if (empty($name)) {
    $nameErr = "First Name is Required";
  } else if (!preg_match($validName, $name)) {
    $nameErr = "Digits are not allowed";
  } else {
    $nameErr = true;
  }

  //  Last Name Validation


  //Email Address Validation
  if (empty($email)) {
    $emailErr = "Email is Required";
  } else if (!preg_match($validEmail, $email)) {
    $emailErr = "Invalid Email Address";
  } else {
    $emailErr = true;
  }

  // password validation 


  // form validation for confirm password

  // check all fields are valid or not
  if ($nameErr == 1 &&  $emailErr == 1) {
    echo "<script>alert('thankyou for submitting')</script>";



    //legal input values
    $name = legal_input($name);

    $email =     legal_input($email);
    $message =  legal_input($message);
    if (isset($_POST['submit'])) {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];


      $q =  mysqli_query($conn, "INSERT INTO `enquiry`( `name`,`email`,`message`) VALUES ('" . $name . "','" . $email . "','" . $message . "')");
      if (!$q) {
        echo 'Error in Insertion of your data..Please try again later!';
      } else {
        echo "Successfully Inserted";
      }
    }

    // here you can write Sql Query to insert user data into database table
  } else {
    // set input values is empty until input field is invalid
    $set_name = $name;

    $set_email = $email;
  }
}


// convert illegal input value to ligal value formate
function legal_input($value)
{
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS FILES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/bootstrap-icons.css" rel="stylesheet">

  <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .VIpgJd-ZVi9od-ORHb-OEVmcd {
      display: none !important;
      margin-top: 20px;
      margin-top: 100px;
    }

    .translated-ltr {
      margin-top: -40px;
    }

    .translated-ltr {
      margin-top: -40px;
    }

    .goog-te-combo {
      cursor: pointer;
      border: 1px solid #FFC90E;
      background-color: #640E6B;
      height: 50px;
      width: 200px;
      color: #FFC90E;
      font-size: 1.5em;
      box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6);
    }

    .goog-te-gadget {
      font-family: Roboto, 'Open Sans', sans-serif !important;
      text-transform: uppercase;
    }

    .goog-te-gadget-simple {
      background-color: rgba(255, 255, 255, 0.20) !important;
      border: 1px solid rgb(240, 240, 240) !important;
      padding: 8px !important;
      border-radius: 4px !important;
      font-size: 1rem !important;
      line-height: 2rem !important;
      display: inline-block;
      cursor: pointer;
      zoom: 1;
    }

    .read {
      width: 140px;
      box-shadow: 5px 5px black;
      border-radius: 5px;
    }

    ul {
      margin: 0px;
      padding: 0px;
    }

    .footer-section {
      background: #640E6B;
      position: relative;
    }

    .footer-cta {
      border-bottom: 1px solid #FFC90E;
    }

    .single-cta i {
      color: #ff5e14;
      font-size: 30px;
      float: left;
      margin-top: 8px;
    }

    .cta-text {
      padding-left: 15px;
      display: inline-block;
    }

    .cta-text h4 {
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 2px;
    }

    .cta-text span {
      color: #757575;
      font-size: 15px;
    }

    .footer-content {
      position: relative;
      z-index: 2;
    }

    .footer-pattern img {
      position: absolute;
      top: 0;
      left: 0;
      height: 330px;
      background-size: cover;
      background-position: 100% 100%;
    }

    .footer-logo {
      margin-bottom: 30px;
    }

    .footer-logo img {
      max-width: 200px;
    }

    .footer-text p {
      margin-bottom: 14px;
      font-size: 14px;
      color: #7e7e7e;
      line-height: 28px;
    }

    .footer-social-icon span {
      color: #fff;
      display: block;
      font-size: 20px;
      font-weight: 700;
      font-family: 'Poppins', sans-serif;
      margin-bottom: 20px;
    }

    .footer-social-icon a {
      color: #fff;
      font-size: 16px;
      margin-right: 15px;
    }

    .footer-social-icon i {
      height: 40px;
      width: 40px;
      text-align: center;
      line-height: 38px;
      border-radius: 50%;
    }

    .facebook-bg {
      background: #3B5998;
    }

    .twitter-bg {
      background: #55ACEE;
    }

    .google-bg {
      background: #DD4B39;
    }

    .footer-widget-heading h3 {
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 40px;
      position: relative;
    }

    .footer-widget-heading h3::before {
      content: "";
      position: absolute;
      left: 0;
      bottom: -15px;
      height: 2px;
      width: 50px;
      background: #ff5e14;
    }

    .footer-widget ul li {
      display: inline-block;
      width: 50%;
      margin-bottom: 12px;
    }

    .footer-widget ul li a:hover {
      color: #ff5e14;
    }

    .footer-widget ul li a {
      color: #878787;
      text-transform: capitalize;
    }

    .subscribe-form {
      position: relative;
      overflow: hidden;
    }

    .subscribe-form input {
      width: 100%;
      padding: 14px 28px;
      background: #2E2E2E;
      border: 1px solid #2E2E2E;
      color: #fff;
    }

    .subscribe-form button {
      position: absolute;
      right: 0;
      background: #ff5e14;
      padding: 13px 20px;
      border: 1px solid #ff5e14;
      top: 0;
    }

    .subscribe-form button i {
      color: #fff;
      font-size: 22px;
      transform: rotate(-6deg);
    }

    .copyright-area {
      background: #202020;
      padding: 25px 0;
    }

    .copyright-text p {
      margin: 0;
      font-size: 14px;
      color: #878787;
    }

    .copyright-text p a {
      color: #ff5e14;
    }

    .footer-menu li {
      display: inline-block;
      margin-left: 20px;
    }

    .footer-menu li:hover a {
      color: #ff5e14;
    }

    .footer-menu li a {
      font-size: 14px;
      color: #878787;
    }

    .bgimg {
      background-image: linear-gradient(rgba(54, 5, 77, 0.8), rgba(0, 0, 0, 0.8)), url(images/banner.jpg);
      background-size: 100% 100%;
      background-attachment: fixed;
      background-repeat: no-repeat;
      width: 100%;
      height: 400px;

    }

    /*.footer_get_touch_outer {
      margin-top: 80px;
    }

    .container {
      width: 95%;
      max-width: 1140px;
      margin: auto;

    }

    .grid-70-30 {
      display: grid;
      grid-template-columns: 70% 30%;
    }

    .get_form_inner {
      display: block;
      padding: 50px 40px;
      background: #fff;
      box-shadow: -4px -2px 20px -7px #cfd5df;
    }

    input[type="text"],
    input[type="text"],
    input[type="email"],
    input[type="tel"] {
      border: 1px solid #dbdbdb;
      border-radius: 2px;
      color: #333;
      height: 42px;
      padding: 0 0 0 20px;
      width: 100%;
      outline: 0;
    }

    .grid-50-50 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-gap: 20px;
    }

    .grid-full {
      margin: 20px 0;
      border-radius: 20px;
    }

    textarea {
      border: 1px solid #dbdbdb;
      border-radius: 2px;
      color: #333;
      padding: 12px 0 0 20px;
      width: 100%;
      outline: 0;
      margin-bottom: 20px;
    }

    .get_form_inner_text h3 {
      color: #333;
      font-size: 26px;
      font-weight: 600;
      margin-bottom: 40px;
    }

    input[type="submit"] {
      display: inline-block;
      font-size: 16px;
      text-transform: uppercase;
      background: transparent;
      border: 2px solid;
      font-weight: 500;
      padding: 10px 20px;
      outline: 0;
      cursor: pointer;
      color: #103e65;
      transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
      -webkit-transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
      -moz-transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
      -ms-transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
      -o-transition: all 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    input[type="submit"]:hover {
      background-color: #FFC90E;
      color: #640E6B;

    }

    .get_say_form {
      display: inline-block;
      padding: 45px 0 25px 30px;
      background-color: #FFC90E;
      position: relative;
      color: #640E6B;
    }

    .get_say_form h5 {
      color: #fff;
      font-size: 26px;
      margin: 0 0 40px;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .get_say_social-icn {
      display: flex;
      position: absolute;
      bottom: 40px;
    }

    .get_say_social-icn a {
      font-size: 22px;
      color: #fff;
      padding: 0 20px 0 0;
    }

    .get_say_info_sec i {
      color: #fff;
      font-size: 32px;
    }

    .get_say_info_sec>li {
      display: grid;
      grid-template-columns: 40px auto;
      align-items: center;
      margin-bottom: 40px;
    }

    .get_say_info_sec>li a {
      width: 100%;
      display: block;
      padding: 15px 25px;
      color: #fff;
      font-size: 16px;
      text-decoration: unset;
      font-weight: 500;
      background-color: #640E6B;
      border-radius: 5px 0 0 5px;
      transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
      -webkit-transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
      -moz-transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
      -ms-transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
      -o-transition: background 0.3s cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    .get_say_info_sec>li a:hover {
      background-color: #FFC90E;
      color: #640E6B;
    }

    @media screen and (max-width: 960px) {
      .get_say_form {
        width: 45%;
      }
    }

    @media screen and (max-width: 768px) {
      .get_say_form {
        width: 50%;
      }
    }

    @media screen and (max-width: 600px) {
      .get_say_form {
        width: 100%;
      }
    }*/
    .gradient-brand-color {
    background-image: -webkit-linear-gradient(0deg, #376be6 0%, #6470ef 100%);
    background-image: -ms-linear-gradient(0deg, #376be6 0%, #6470ef 100%);
    color: #fff;
}
.contact-info__wrapper {
    overflow: hidden;
    border-radius: .625rem .625rem 0 0;
    background-color: #640E6B;
}

@media (min-width: 1024px) {
    .contact-info__wrapper {
        border-radius: 0 .625rem .625rem 0;
        padding: 5rem !important
    }
}
.contact-info__list span.position-absolute {
    left: 0
}
.z-index-101 {
    z-index: 101;
}
.list-style--none {
    list-style: none;
}
.contact__wrapper {
    background-color: #640E6B;
    border-radius: 0 0 .625rem .625rem
}

@media (min-width: 1024px) {
    .contact__wrapper {
        border-radius: .625rem 0 .625rem .625rem
    }
}
@media (min-width: 1024px) {
    .contact-form__wrapper {
        padding: 5rem !important
    }
}
.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(132,138,163,0.1) !important;
}
input[type="submit"] {
      background-color: #FFC90E;
      color: #640E6B;

    }
    input[type="submit"]:hover {
      background-color:white;
      color: #640E6B;

    }
    .pink{
      background-color: #FFC90E;
    }
    .cform{
      padding: 15px;
      border-color:#FFC90E ;
      border-radius: 30px;
    }
    .cform:hover{
     
      border-color:black ;
    }
    .white:hover{
      
    text-transform: capitalizes;
    }
  </style>
  <title>Contact </title>
</head>

<body>

  <?php
  include("header.php");
  ?>




  <div class="container-fluid bgimg ">
    <div class="row">


      <div class="col-md-12 " style="margin-top: 200px;">
        <h1 class="text-light " style="font-weight: bolder; font-size: 50px;">Contact</h1>
      </div>
    </div>
  </div>


<br>
<section>
  <div class="container">
    <div class="contact__wrapper shadow-lg mt-n9">
        <div class="row no-gutters">
            <div class="col-lg-5 contact-info__wrapper pink p-5 order-lg-2">
                <h3 class="color--white mb-5 " style="color: #640E6B;">Contact</h3>
    
                <ul class="contact-info__list list-style--none position-relative z-index-101">
                    <li class="mb-4 pl-4">
                        <span class="position-absolute" style="color: #640E6B;"><i class="fa fa-envelope"></i></span > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #640E6B;" class="white">gnbbi@gmail.com</span> 
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute" style="color: #640E6B;"><i class="fa fa-phone"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #640E6B;">98925753492</span> 
                    </li>
                    <li class="mb-4 pl-4">
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute" style="color: #640E6B;"><i class="fa fa-map-marker"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #640E6B;">West Bengal</span> 
                    </li>
                    <li class="mb-4 pl-4">
                        <div class="mt-3">
                            <a href="https://www.google.com/maps" target="_blank" class="text-link link--right-icon " style="color: #640E6B;font-size:25px">Feel Free to contact us <i class="link__icon fa fa-directions"></i></a>
                        </div>
                    </li>
                </ul>
    
                <figure class="figure position-absolute m-0 opacity-06 z-index-100" style="bottom:0; right: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="444px" height="626px">
                        <defs>
                            <linearGradient id="PSgrad_1" x1="0%" x2="81.915%" y1="57.358%" y2="0%">
                                <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1"></stop>
                                <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0"></stop>
                            </linearGradient>
    
                        </defs>
                    </svg>
                </figure>
            </div>
    
            <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="contact-form form-validate" novalidate="novalidate" method="post">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="form-group">
                            <p class="text-success text-center"><?php echo $valid; ?></p>

                                <label class="required-field" for="firstName" style="color:whitesmoke">Fullname</label>
                                <input type="text" class="form-control cform" id="firstName" name="name" placeholder=" Your Fullname">


                            </div>
                            <p class="err-msg">
                  <?php if ($nameErr != 1) {
                    echo $nameErr;
                  } ?>
                        </div>
                     
                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <label class="required-field" for="firstName" style="color:whitesmoke">Email</label>
                                <input type="text" class="form-control cform"  name="email" placeholder="Your Email">
                            </div>
                            <p class="err-msg">
                  <?php if ($emailErr != 1) {
                    echo $emailErr;
                  } ?>
                    
                        

                        <div class="col-sm-12 mb-2">
                            <div class="form-group">
                                <label class="required-field" for="message" style="color:whitesmoke">Message</label>
                                <textarea class="form-control cform" id="message" name="message" rows="4" placeholder="Your Message Here...."></textarea>
                            </div>
                        </div>
    
                        <div class="col-sm-12 mb-3">
                            <input type="submit" name="submit" class="btn " value="Send" >
                        </div>
    
                    </div>
                </form>
            </div>
            <!-- End Contact Form Wrapper -->
    
        </div>
    </div>
</div>
                </section>
<br>
  <?php
  include('footer.php');
  ?>


  <!-- JAVASCRIPT FILES -->
  <script src="js/jquery.min.js "></script>
  <script src="js/bootstrap.bundle.min.js "></script>
  <script src="js/jquery.sticky.js "></script>
  <script src="js/click-scroll.js "></script>
  <script src="js/animated-headline.js "></script>
  <script src="js/modernizr.js "></script>
  <script src="js/custom.js "></script>


</body>

</html>