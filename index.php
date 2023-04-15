<?php
include('config.php');
// by default, error messages are empty
$valid=$nameErr=$emailErr='';

// by default,set input values are empty
$set_name=$set_email= $message='';    
 extract($_POST);

if(isset($_POST['submit']))
{
   
   //input fields are Validated with regular expression
   $validName="/^[a-zA-Z ]*$/";
   $validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
   $uppercasePassword = "/(?=.*?[A-Z])/";
   $lowercasePassword = "/(?=.*?[a-z])/";
   $digitPassword = "/(?=.*?[0-9])/";
   $spacesPassword = "/^$|\s+/";
   $symbolPassword = "/(?=.*?[#?!@$%^&*-])/";
   $minEightPassword = "/.{8,}/";

 //  First Name Validation
if(empty($name)){
   $nameErr="First Name is Required"; 
}
else if (!preg_match($validName,$name)) {
   $nameErr="Digits are not allowed";
}else{
   $nameErr=true;
}

//  Last Name Validation


//Email Address Validation
if(empty($email)){
  $emailErr="Email is Required"; 
}
else if (!preg_match($validEmail,$email)) {
  $emailErr="Invalid Email Address";
}
else{
  $emailErr=true;
}
    
// password validation 


// form validation for confirm password

// check all fields are valid or not
if($nameErr==1 &&  $emailErr==1 )
{
    echo "<script>alert('thankyou for submitting')</script>";


   
   //legal input values
   $name= legal_input($name);
   
   $email=     legal_input($email);
   $message=  legal_input($message);
   if(isset($_POST['submit']))
{

   $name=$_POST['name'];
   $email=$_POST['email'];
   $message=$_POST['message'];
   
  
     $q=  mysqli_query($conn, "INSERT INTO `enquiry`( `name`,`email`,`message`) VALUES ('".$name."','".$email."','".$message."')");
   if(!$q)
   {
    echo 'Error in Insertion of your data..Please try again later!';
  } 
  else 
  {
   echo "Successfully Inserted";
  }
  }

   // here you can write Sql Query to insert user data into database table
}else{
     // set input values is empty until input field is invalid
    $set_name=$name;
   
    $set_email= $email;
}


}


// convert illegal input value to ligal value formate
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo1.jpeg">
    <title>Good news baptist bible institute</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">

    <style>
.contain_archive {
  width: 100%;
}
.row_nm_videos {
  overflow:scroll hidden;
  width: 100%;
visibility: visible;
}
.row__inner {
  -webkit-transition: 450ms transform;
  transition: 450ms transform;
  font-size: 0;
  white-space: nowrap;
  margin: 70.3125px 0;
  padding-bottom: 10px;
}
.tile {
  position: relative;
  display: inline-block;
  width: 250px;
  height: 140.625px;
  margin-right: 10px;
  font-size: 20px;
  cursor: pointer;
  -webkit-transition: 450ms all;
  transition: 450ms all;
  -webkit-transform-origin: center left;
          transform-origin: center left;
}
.tile__img {
  width: 250px;
  height: 140.625px;
  -o-object-fit: cover;
     object-fit: cover;
     border: 4px solid #FFC90E;
}

.tile__details:after,
.tile__details:before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  display: #000;
}

.tile:hover .tile__details {
  opacity: 1;
}
.tile__title {
  position: absolute;
  bottom: 0;
  padding: 10px;
}
.row__inner:hover {
  -webkit-transform: translate3d(-120px, 0, 0);
          transform: translate3d(-120px, 0, 0);
}
.row__inner:hover .tile {
  opacity: 0.7;
}
.row__inner:hover .tile:hover {
  -webkit-transform: scale(2);
          transform: scale(2);
  opacity: 1;
}
.tile:hover ~ .tile {
  -webkit-transform: translate3d(250px, 0, 0);
          transform: translate3d(250px, 0, 0);
}

.tile_desc{
  position: absolute;
  bottom: 10px;  
  color: #fff;
  font-size: .610em;
  font-family: "Crimson Text";
  margin-left: 10px;
  font-weight: 100;
}
.tile_desc:after {
    display: block;
    width: 20px;
    height: 0;
    font-weight: 100;
    border-bottom: 0.160em solid;
    content: "";
    color: #fff;
}

        .err-msg {
            color: whitesmoke;
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

        /*animation*/
        .bib {
            position: relative;
            grid-area: card;
            align-self: center;
            justify-self: center;
            overflow: hidden;
            display: block;
            width: 100%;
            max-width: 250px;
            height: 280px;
            font-size: var(--fontOrigin);

            box-shadow: 0 16px 60px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            -webkit-transition: all var(--speed) ease;
            transition: all var(--speed) ease;
        }

        .bib:hover {
            box-shadow: 0 40px 130px rgba(0, 0, 0, 0.6);
            -webkit-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
        }

        .card__save {
            position: absolute;
            top: 10px;
            right: 10px;
            display: block;
            width: 35px;
            height: 35px;
            background: transparent;
            border: 0;
            opacity: 0;
            border-radius: 3px;
            -webkit-transition: all var(--speed) ease;
            transition: all var(--speed) ease;
            border-top-right-radius: 40px;
        }

        .card__save:focus {
            outline: 0;
            background-color: rgba(255, 255, 255, 0);
        }

        .card:hover .card__save {
            opacity: 0.6;
        }

        .card__save i {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.6);
            cursor: pointer;
            -webkit-transition: all var(--speed) ease;
            transition: all var(--speed) ease;
        }

        .card__save:hover i {
            color: rgba(255, 255, 255, 0.8);
        }

        .card__save:active,
        .card__save.active {
            opacity: 1 !important;
        }

        .card__save:active i,
        .card__save.active i {
            color: white;
        }
        /*Team members */
        .team-section
{
	background: none;
	text-align: center;
}

.inner-width
{
	max-width: 1200px;
	margin: auto;
	padding: 40px;
	color: #333;
	overflow: hidden;
}

.team-section h1
{
	font-size: 20px;
	text-transform: uppercase;
	display: inline-block;
	border-bottom: 4px solid;
	padding-bottom: 10px;
}

.pe
{
	float: left;
	width: calc(100% / 3);
	overflow: hidden;
	padding: 40px 0;
	transition: 0.4s;
}

.pe:hover
{
	background: #FFC90E;
    border-color:2x solid #640E6B;
}

.pe img
{
	width:200px;
	height: 200px;
	border-radius: 50%;
    border: 2px solid #640E6B;
}

.p-name
{
	margin: 5px;
	text-transform: uppercase;
    color: #640E6B;
    font-weight: 200;
}

.p-des
{
	font-style: italic;
	color: #3498db;
}

.p-sm
{
	margin-top: 6px;
}

.p-sm a
{
	margin: 0 4px;
	display: inline-block;
	width: 30px;
	height: 30px;
	transition: 0.4s;
}

.p-sm a:hover
{
	transform: scale(1.3);
}

.p-sm a i
{
	color: #333;
	line-height: 30px;
}

@media screen and (max-width: 960px) {
	.pe{
		width: 45%;
	}
}
@media screen and (max-width: 768px) {
	.pe{
		width: 50%;
	}
}
@media screen and (max-width: 600px) {
	.pe{
		width: 100%;
    
	}
}
    </style>
</head>

<body>

    <main>

       
   




<!--<nav class="navbar navbar-expand-lg" style="background-color:#640E6B
        ;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="images/logo1.jpeg" height="60px">
                    <span class="navbar-brand-text">
                           Good News
                            <small>Baptist Bible Institute</small>
                        </span>
                </a>

                <div class="d-lg-none ms-auto me-3">
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item" style="color: #FFC90E;">
                            <a class="nav-link " href="index.php" style="color: #FFC90E;" >Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="about.php">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="gallery.php">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#section_4">Course</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#section_5">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#section_5">Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                        <div id="google_translate_element" ></div>

                        </li>


                      
                    </ul>

                   
                </div>
            </div>
        </nav>-->
    
        <?php
        include('header.php');
        ?>

        <section class="hero-section d-flex justify-content-center align-items-center "  style="background-image: url(images/banner.jpg);">

            <div class="section-overlay "></div>

            <!--- <svg xmlns="http://www.w3.org/2000/svg " viewBox="0 0 1440 320 "><path fill="#3D405B " fill-opacity="1 " d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z "></path></svg>-->

            <div class="container ">
                <div class="row ">
                    <!--<div class="col-lg-6 col-12 ">
                        <div class="ratio ratio-16x9 ">
                            <iframe width="400 " height="200 " src="https://www.youtube.com/embed/MGNgbNGOzh8 " title="YouTube video player " frameborder="0 " allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;
                            web-share " allowfullscreen></iframe>
                        </div>
                    </div>-->

                    <div class="col-lg-6 col-12 mb-5 mb-lg-4 ">
                        <h2 class="text-white ">“How blessed is the one whom you instruct, O LORD, the one whom you teach from your law,”</h2>
                        <p style="color:aliceblue"> Psalm 94;12</p>

                        <h1 class="cd-headline rotate-1 text-white mb-4 pb-2 ">
                            <span>Jesus is</span>
                            <span class="cd-words-wrapper ">
                                <b class="is-visible " style="color:#FFC90E
                                    ;">Love</b>
                                <b style="color:#FFC90E">Life</b>
                                <b style="color:#FFC90E">Lord</b>
                            </span>
                        </h1>

                        <div class="custom-btn-group ">
                            <a href="admission.php" class="btn  btn-warning " style="border: 2px solid#640E6B;">Admission</a>
                            <a href="contact.php" class="btn  btn-warning " style="border: 2px solid#640E6B;">Enquiry</a>


                        </div>
                    </div>


                </div>
            </div>

            <!--<svg xmlns="http://www.w3.org/2000/svg " viewBox="0 0 1440 320 "><path fill="#ffffff " fill-opacity="1 " d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z "></path></svg>-->
        </section>


        <section class="about-section section-padding " id="section_2 ">
            <div class="container ">
                <div class="row ">
                    <?php
                    $b = mysqli_query($conn, "select * from cardtable LIMIT 4");
                    while ($d = mysqli_fetch_array($b)) {
                    ?>
                        <div class="col-md-3 mt-5 ">
                            <div class="card bib mt-1" data-effect="zoom" style="background-color:#640E6B;padding: 20px;border-radius: 30px;box-shadow: 15px 15px #737070;">
                                <div class="card-header" style="border-bottom: 10px solid #FFC90E;color: aliceblue;"><!--Living Life For Him-->
                                    <?php
                                    echo  $d['title'];
                                    ?>
                                </div>
                                <div class="card-text" style="color: white;">
                                    <?php
                                    echo  $d['description'];
                                    ?>
                                    <!--Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto deserunt, dolorum quae labore non, dicta pariatur quidem, quo officiis vitae accusamus voluptas! Temporibus molestiae beatae iure eius consectetur animi ut.-->
                                </div>

                            </div>



                        </div>

                        <!--<div class="col-md-3 ">
                        <div class="card bib  mt-1"data-effect="zoom" shadow style="background-color:#640E6B;padding: 20px;border-radius: 30px; box-shadow: 15px 15px #737070;">
                        <button class="card__save  js-save" type="button">
                         <i class="fa  fa-bookmark"></i>
                    </button>
                            <div class="card-header " style="border-bottom: 10px solid #FFC90E;color: aliceblue; ">Living Life For Him</div>
                            <div class="card-text " style="color: white;">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto deserunt, dolorum quae labore non, dicta pariatur quidem, quo officiis vitae accusamus voluptas! Temporibus molestiae beatae iure eius consectetur animi ut.
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 ">
                        <div class="card bib  mb-1 "data-effect="zoom" style="background-color:#640E6B;padding: 20px;border-radius: 30px;box-shadow: 15px 15px #737070; " >
                            <div class="card-header " style="border-bottom: 10px solid #FFC90E;color: aliceblue; ">Living Life For Him</div>
                            <div class="card-text "style="color: white; ">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto deserunt, dolorum quae labore non, dicta pariatur quidem, quo officiis vitae accusamus voluptas! Temporibus molestiae beatae iure eius consectetur animi ut.
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 ">
                        <div class="card bib mb-1"data-effect="zoom" style="background-color:#640E6B;padding: 20px;border-radius: 30px;box-shadow: 15px 15px #737070; " >
                            <div class="card-header " style="border-bottom: 10px solid #FFC90E;color: aliceblue; ">Living Life For Him</div>
                            <div class="card-text " style="color: white;">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto deserunt, dolorum quae labore non, dicta pariatur quidem, quo officiis vitae accusamus voluptas! Temporibus molestiae beatae iure eius consectetur animi ut.
                            </div>
                        </div>

                    </div>
                </div>-->
                    <?php
                    }
                    ?>
                </div>

            </div>
        </section>




        <section class="about-section section-padding " id="section_2 ">
            <div class="container ">
                <div class="row ">
                    <div class="col-lg-12 col-12 text-center ">
                        <h2 class="mb-lg-5 mb-4 " style="color:#640E6B;">Good News Baptist Bible Institute</h2>
                    </div>
                    <div class="col-lg-12 col-12 text-center ">
                        <p style="color: black;text-align: justify;">Good News Baptist Bible Institute Ministries is a non-profit Biblical Christian ministry governed under the Good News Baptist Church. Where committed to provide true Bible based doctrine/teaching.
The meet is very vast and urgent need, the Good News Baptist Bible Institute (GNBBI) was started in 2021 by the Guidance of Pr. Jefferson Quevedo Sores & his wife Irmigard Mayer Sores (Epi) and with the support of Pr. Dr. Amiya Amitav Dash  to prepare national brothers and sisters by providing them with a formal and systematic Biblical education so they can carry out the Great Commission (Matthew 28:19-20) and serve the Lord among their own people and communities in their own languages.
</p>
                    </div>
                    <a href="about.php"><button class="btn read" style="background-color:#640E6B;color: aliceblue
                    ;">Read More</button></a>





                </div>
            </div>
        </section>

        <h2 style="color:#640E6B;" align="center">Testimonials</h2>
        <section style="background-color:#640E6B;">
            <!-- <svg viewBox="0 0 1265 144 " xmlns="http://www.w3.org/2000/svg " xmlns:xlink="http://www.w3.org/1999/xlink "><path fill="rgba(255, 255, 255, 1) " d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z " stroke-width="0
                            "></path> <path fill="rgba(255, 255, 255, 1) " d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z " stroke-width="0 "></path> <path fill="rgba(255, 255, 255, 1) " d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z
                            " stroke-width="0 "></path><path fill="rgba(255, 255, 255, 1) " d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z " stroke-width="0 "></path><path fill="rgba(255, 255, 255, 1) " d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265
                            0 L 1265 0 L 1127 0 Z " stroke-width="0 "></path></svg>-->

            <div class="container  " style="background-color:#640E6B;padding: 20px;">
                <!--<div class="row ">
                
                <div class=" col-lg-3 col-12 ml-2 ">
                        <div class=" card " style=" background-color: #FFC90E;padding: 10px; ">
                            <video src="videos/bible.mp4 " controls></video>
                            <div class=" card-body ">
                                <h5 class=" card-title ">Max John Manuel</h5>
                                <a href="videos.php" class=" btn read " style=" background-color:#640E6B;color:aliceblue; ">Watch More</a>
                            </div>
                        </div>
                    </div>
                   
                 <div class=" col-lg-3 col-12 ml-2 ">
                        <div class=" card " style=" background-color: #FFC90E;padding: 10px; ">
                            <video src="videos/bible.mp4 " controls></video>
                            <div class=" card-body ">
                                <h5 class=" card-title ">Ashish chettri</h5>
                                <a href=" # " class=" btn read " style=" background-color:#640E6B;color:aliceblue; ">Watch More</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-12 ">
                        <div class=" card " style=" background-color: #FFC90E;padding: 10px; ">
                            <video src="videos/bible.mp4 " controls></video>
                            <div class=" card-body ">
                                <h5 class=" card-title ">Joseph williams</h5>
                                <a href=" # " class=" btn read " style=" background-color:#640E6B;color:aliceblue; ">Watch More</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-12 ">
                        <div class=" card " style=" background-color: #FFC90E;padding: 10px; ">
                            <video src="videos/bible.mp4 " controls ></video>
                            <div class=" card-body ">
                                <h5 class=" card-title ">Razina Joseph</h5>
                                <a href=" # " class=" btn read " style=" background-color:#640E6B;color:aliceblue;">Watch More</a>
                            </div>
                        </div>
                    </div>

                </div>
     </div>-->
     <div class="contain_archive">
 
<div class="row_nm_videos">
<div class="row__inner">
<div class="tile" id="facebook_1">
<div class="tile__media">

<video src="videos/bible.mp4" controls class="tile__img"></video>  
<div class="tile_desc"> Micheal Costello - 2PM </div>
  </div><div class="tile__details"><div class="tile__title">
  </div>
  </div>
  </div>
<div class="tile" id="facebook_2"><div class="tile__media">
<video src="videos/bible.mp4" controls class="tile__img"></video>  
  <div class="tile_desc"> Micheal Costello - 2PM </div>
  </div>
  <div class="tile__details">
    <div class="tile__title">
          </div>
        </div>
      </div>
<div class="tile" id="facebook_3">
<div class="tile__media">
<video src="videos/bible.mp4" controls class="tile__img"></video>  
  <div class="tile_desc"> Micheal Costello - 2PM </div>
        </div>
        <div class="tile__details">
          <div class="tile__title">
          </div>
        </div>
      </div>



      <div class="tile" id="facebook_7">
        <div class="tile__media">
        <video src="videos/bible.mp4" controls class="tile__img"></video>  
          <div class="tile_desc"> Rag & Bone - 8PM </div>
        </div>
        <div class="tile__details">
          <div class="tile__title">
          </div>
        </div>
      </div>

      <div class="tile">
        <div class="tile__media">
<video src="videos/bible.mp4" controls class="tile__img"></video>  
          <div class="tile_desc"> DKNY - 8.30PM </div>
        </div>
        <div class="tile__details">
          <div class="tile__title">
          </div>
        </div>
      </div>

      <div class="tile">
        <div class="tile__media">
<video src="videos/bible.mp4" controls class="tile__img"></video>  
          <div class="tile_desc"> Oscar de la Renta - 3PM </div>
        </div>
        <div class="tile__details">
          <div class="tile__title">
          </div>
        </div>
      </div>

      <div class="tile">
        <div class="tile__media">
<video src="videos/bible.mp4" controls class="tile__img"></video>  
          <div class="tile_desc"> 3.1 Philip Lim - 3PM </div>
        </div>
        <div class="tile__details">
          <div class="tile__title">
          </div>
        </div>
      </div>

      <div class="tile">
        <div class="tile__media">
<video src="videos/bible.mp4" controls class="tile__img"></video>  
          <div class="tile_desc"> Libertine - 6PM </div>
        </div>
        <div class="tile__details">
          <div class="tile__title">
          </div>
        </div>
      </div>

      <div class="tile">
        <div class="tile__media">
<video src="videos/bible.mp4" controls class="tile__img"></video>  
          <div class="tile_desc"> Altuzarra - 5PM </div>
        </div>
        <div class="tile__details">
          <div class="tile__title">
          </div>
        </div>
      </div>

      <div class="tile vimeo">
        <div class="tile__media">
<video src="videos/bible.mp4" controls class="tile__img"></video>  
          <div class="tile_desc"> Thakoon - 7PM </div>
        </div>
        <div class="tile__details">
          <div class="tile__title">
          </div>
        </div>
      </div>

      <div class="tile">
        <div class="tile__media">
<video src="videos/bible.mp4" controls class="tile__img"></video>  
          <div class="tile_desc"> Cynthia Rowley - 6PM </div>
        </div>
        <div class="tile__details">
          <div class="tile__title">
          </div>
        </div>
      </div>

    </div>
  </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="magnific-popup/jquery.magnific-popup.min.js"></script>
            </div>
            <!--<svg viewBox=" 0 0 1265 144 " xmlns=" http://www.w3.org/2000/svg " xmlns:xlink=" http://www.w3.org/1999/xlink "><path fill=" rgba(255, 255, 255, 1) " d=" M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z " stroke-width=" 0 "></path> <path fill=" rgba(255, 255, 255, 1) " d=" M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z " stroke-width=" 0 "></path> <path fill=" rgba(255, 255, 255, 1) " d=" M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z " stroke-width=" 0 "></path><path fill=" rgba(255, 255, 255, 1) " d=" M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z " stroke-width=" 0 "></path><path fill=" rgba(255, 255, 255, 1) " d=" M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z " stroke-width=" 0 "></path></svg>-->
        </section>
        <br>
        

        <!--<section class=" membership-section section-padding " id=" section_3 ">

        <h2 style=" color:#640E6B; " align=" center ">Our Team</h2>
        <div class=" container ">
            <div class=" row ">
        <div class=" col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0 ">
            <div class=" member-block " >
                <div class=" member-block-image-wrap "style=" border: 3px solid#640E6B; ">
                    <img src=" images/members/jeff.jpeg " class=" member-block-image " alt=" ">


                    <ul class=" social-icon ">
                        <li class=" social-icon-item ">
                            <a href=" # " class=" social-icon-link bi-twitter "></a>
                        </li>

                        <li class=" social-icon-item ">
                            <a href=" # " class=" social-icon-link bi-whatsapp "></a>
                        </li>
                    </ul>
                </div>

                <div class=" member-block-info d-flex align-items-center ">
                    <h4>Pr.Jefferson Quevedo Sores( Brazil)</h4>
                   

                    <p class=" ms-auto ">Director</p>
                </div>
            </div>
        </div>
        <div class=" col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0 " >
            <div class=" member-block ">
                <div class=" member-block-image-wrap " style=" border: 3px solid#640E6B; ">
                    <img src=" images/members/amya.jpg" class="member-block-image img-fluid " alt=" ">

                                <ul class="social-icon ">
                                    <li class="social-icon-item ">
                                        <a href="# " class="social-icon-link bi-twitter "></a>
                                    </li>

                                    <li class="social-icon-item ">
                                        <a href="# " class="social-icon-link bi-whatsapp "></a>
                                    </li>
                                </ul>
                        </div>

                        <div class="member-block-info d-flex align-items-center ">
                            <h6>Pr. Dr. Amiya Amitav Dash(West Bengal)</h6>

                            <p class="ms-auto ">President/Pricipal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0 ">
                    <div class="member-block ">
                        <div class="member-block-image-wrap " style="border: 3px solid#640E6B; ">
                            <img src="images/members/ash.jpeg" class="member-block-image img-fluid " alt=" ">

                            <ul class="social-icon ">
                                <li class="social-icon-item ">
                                    <a href="# " class="social-icon-link bi-twitter "></a>
                                </li>

                                <li class="social-icon-item ">
                                    <a href="# " class="social-icon-link bi-whatsapp "></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="member-block-info d-flex align-items-center ">
                            <h6>Bro. Ashish Chhetri </h6>

                            <p class="ms-auto ">Warden cum Student Advisor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0 ">
                    <div class="member-block ">
                        <div class="member-block-image-wrap " style="border: 3px solid#640E6B; ">
                            <img src="images/members/max.jpeg" class="member-block-image img-fluid " alt=" ">

                            <ul class="social-icon ">
                                <li class="social-icon-item ">
                                    <a href="# " class="social-icon-link bi-twitter "></a>
                                </li>

                                <li class="social-icon-item ">
                                    <a href="# " class="social-icon-link bi-whatsapp "></a>
                                </li>
                            </ul>
                        </div>

                        <div class="member-block-info d-flex align-items-center ">
                            <h6>Bro. Max</h6>

                            <p class="ms-auto ">technical Advisor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0 ">
                    <div class="member-block ">
                        <div class="member-block-image-wrap " style="border: 3px solid#640E6B; ">
                            <img src="images/members/sabita.jpg " class="member-block-image img-fluid " alt=" ">

                            <ul class="social-icon ">
                                <li class="social-icon-item ">
                                    <a href="# " class="social-icon-link bi-twitter "></a>
                                </li>

                                <li class="social-icon-item ">
                                    <a href="# " class="social-icon-link bi-whatsapp "></a>
                                </li>
                            </ul>
                        </div>

                        <div class="member-block-info d-flex align-items-center ">
                            <h6>Mrs. Sabita Dash</h6>

                            <p class="ms-auto ">Tresurer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0 ">
                    <div class="member-block ">
                        <div class="member-block-image-wrap " style="border: 3px solid#640E6B; ">
                            <img src="images/members/brazil.jpeg " class="member-block-image img-fluid " alt=" ">

                            <ul class="social-icon ">
                                <li class="social-icon-item ">
                                    <a href="# " class="social-icon-link bi-twitter "></a>
                                </li>

                                <li class="social-icon-item ">
                                    <a href="# " class="social-icon-link bi-whatsapp "></a>
                                </li>
                            </ul>
                        </div>

                        <div class="member-block-info d-flex align-items-center ">
                            <h6>Mrs. Irmigard Mayor Sores(Brazil)</h6>

                            <p class="ms-auto ">Financial Advisor</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>-->
        <div class="team-section">
		<div class="inner-width">
        <h2 style="color:#640E6B;" align="center">Meet Our GNBBI Team</h2>
			<div class="pers">
				

				<div class="pe">
					<img src="images/members/jeff.jpeg " alt="rafeh">
					<div class="p-name">Pr.Jefferson Quevedo Sores( Brazil)</div>
					<div class="p-des">Director</div>
					<div class="p-sm">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-tumblr"></i></a>
					</div>
				</div>

				<div class="pe">
					<img src="images/members/amya.jpg" alt="rafeh">
					<div class="p-name">Pr. Dr. Amiya Amitav Dash(West Bengal)</div>
					<div class="p-des">President</div>
					<div class="p-sm">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-tumblr"></i></a>
					</div>
				</div>

				<div class="pe">
					<img src="images/members/ash.jpeg" alt="rafeh">
					<div class="p-name">Bro. Ashish Chhetri </div>
					<div class="p-des">Warden cum Student Advisor</div>
					<div class="p-sm">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-tumblr"></i></a>
					</div>
				</div>


			</div>
		</div>
	    
         <div class="team-section " style="margin-top: -80px;">
		<div class="inner-width">
     
			<div class="pers">
				

				<div class="pe">
					<img src="images/members/max.jpeg" alt="rafeh">
					<div class="p-name">Bro. Max</div>
					<div class="p-des">Technical Advisor</div>
					<div class="p-sm">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-tumblr"></i></a>
					</div>
				</div>

				<div class="pe">
					<img src="images/members/sabita.jpg" alt="rafeh">
					<div class="p-name">Mrs. Sabita Dash</div>
					<div class="p-des">Tresurer</div>
					<div class="p-sm">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-tumblr"></i></a>
					</div>
				</div>

				<div class="pe">
					<img src="images/members/brazil.jpeg " alt="rafeh">
					<div class="p-name">Mrs. Irmigard Mayor Sores(Brazil)</div>
					<div class="p-des">Financial Advisor</div>
					<div class="p-sm">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-tumblr"></i></a>
					</div>
				</div>


			</div>
		</div>
	</div>




        <section class="events-section section-bg section-padding " id="section_4 ">
            <div class="container ">
                <div class="row ">

                    <h2 style="color:#640E6B; " align="center ">Blogs</h2>


                    <div class="row custom-block mb-3 ">
                        <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0 ">
                            <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0 " style="background-color:#640E6B; ">
                                <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0 " style="color: #FFC90E; ">24</h6>

                                <strong class="text-white ">Feb 2021</strong>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0 ">
                            <div class="custom-block-image-wrap " style="border: 3px solid#640E6B; ">
                                <a href="# ">
                                    <img src="images/mountain-bible-verse-matthew-scene-typography-faith-can-move-mountians-out-matt-57290955.jpg " class="custom-block-image img-fluid " alt=" ">

                                    <i class="custom-block-icon bi-link "></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 order-3 order-lg-0 ">
                            <div class="custom-block-info mt-2 mt-lg-0 ">
                               

                                <p class="mb-0 "> In today's world, where corruption, greed, and selfishness often prevail, faith in God has become more important than ever before. It provides a sense of hope, comfort, and guidance to people who are struggling to find meaning and purpose in their lives. Faith in God also helps people to form a deeper connection with their fellow human beings. When we recognize that we are all children of God, we are more likely to treat each other with kindness, compassion, and respect.</p>

                                <div class="d-flex flex-wrap border-top mt-4 pt-3 ">

                                    

                                    <div class="d-flex align-items-center ms-lg-auto ">
                                      <a href="blog.php" > <button class="btn read " style="background-color:#640E6B;color: aliceblue ; ">View Blogs</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                 

                  

                   
                </div>



            </div>
            </div>
        </section>





        <section class="membership-section section-padding ">
            <div class="container ">
                <div class="row ">

                    <h2 style="color:#640E6B;" align="center ">Contact</h2>
                    <div class="col-lg-8 col-12 mx-auto ">

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="custom-form membership-form shadow-lg " role="form " style="background-color:#640E6B; ">
                            <h4 class="text-white mb-4 " style="color:#640E6B; ">Enquiry for Class</h4>
      
                            <p class="text-success text-center"><?php echo $valid; ?></p> 
                            <div >
                                <input type="text " name="name" id="full-name " class="form-control " placeholder="Full Name " value="<?php echo $set_name;?>">

<p class="err-msg">
<?php if($nameErr!=1){ echo $nameErr; } ?>


                            </div>

                            <div >
                                <input type="email " name="email" id="email " class="form-control " placeholder="Email address "value="<?php echo $set_email;?>">

<p class="err-msg">
<?php if($emailErr!=1){ echo $emailErr; } ?>


                            </div>

                            <div >
                                <textarea class="form-control " type="text" id="message " name="message"  placeholder="Describe message here "></textarea>
                                
                            </div>

                            <button name="submit" class="btn btn-warning">Send</button>
                    </div>
                    </form>
                </div>

            </div>
            </div>
        </section>
    </main>

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
<script>
   
 
</script>
<script>
    $('#facebook_0').magnificPopup({
	items: {
		src: 'https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154556367432847'
	},
	type: 'iframe'
});


$('#facebook_1').magnificPopup({
	items: {
		src: 'https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154556367432847'
	},
	type: 'iframe'
});

$('#facebook_2').magnificPopup({
	items: {
		src: 'https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154556282892847'
	},
	type: 'iframe'
});


$('#facebook_3').magnificPopup({
	items: {
    src: 'https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154603410842847'	},
	type: 'iframe'
});

$('#facebook_4').magnificPopup({
	items: {
    src: 'https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154582395637847'	},
	type: 'iframe'
});

$('#facebook_5').magnificPopup({
	items: {
    src: 'https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154556282892847'	},
	type: 'iframe'
});
$('#facebook_6').magnificPopup({
	items: {
    src: 'https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154556367432847'	},
	type: 'iframe'
});

</script>
</body>

</html>