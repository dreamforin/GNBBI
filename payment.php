<?php
include('config.php');
include('session.php');

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $marital = $_POST['marital'];
    $bday = $_POST['bday'];
    $file_name = $_FILES['photo']['name'];
    $file_type = $_FILES['photo']['type'];
    $file_size = $_FILES['photo']['size'];
    $tempname=$_FILES['photo']['tmp_name'];
   $img="./photo/".$file_name;
   move_uploaded_file($tempname,$img);
   $address = $_POST['address'];
   $cname = $_POST['cname'];
   $activemember = $_POST['activemember'];
   $position = $_POST['position'];
   $highscl = $_POST['highscl'];
   $year = $_POST['year'];
   $state = $_POST['state'];
   $city = $_POST['city'];
   $collegename = $_POST['collegename'];
   $cyear = $_POST['cyear'];
   $cstate = $_POST['cstate'];
   $ccity = $_POST['ccity'];
   $pname = $_POST['pname'];
   $pemail = $_POST['pemail'];
   $pphone = $_POST['pphone'];
   $paddress = $_POST['paddress'];

    $sqli = "insert into admission (fname,lname,email,phone,gender,marital,bday,image,address,
    cname,activemember,position,highscl,year,state,city,collegename,cyear,cstate,ccity,pname,pemail,pphone,paddress) values ('$fname','$lname','$email','$phone','$gender','$marital','$bday','$img','$address',
    '$cname','$activemember','$position','$highscl','$year','$state','$city','$collegename','$cyear','$cstate','$ccity','$pname','$pemail','$pphone','$paddress')";
    if (mysqli_query($conn, $sqli)) {
        echo "<script>alert('You are enrolled for Course')</script>";
    } else {
        echo "error:" . mysqli_error($conn);
    }
    mysqli_close($conn);
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
.mpopup {
    display: none;
    position:fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 30px;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    
}
.modal-content {
    position: relative;
    background-color: #fff;
    margin: auto;
    padding: 0;
    width: 450px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
    border-radius: 0.3rem;
}
.modal-header {
    padding: 2px 12px;
    background-color: #ffffff;
    color: #333;
    border-bottom: 1px solid #e9ecef;
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem;
}
.modal-header h2{
    font-size: 1.25rem;
    margin-top: 14px;
    margin-bottom: 14px;
}
.modal-body {
    padding: 2px 12px;
}
.modal-footer {
    padding: 1rem;
    background-color: #ffffff;
    color: #333;
    border-top: 1px solid #e9ecef;
    border-bottom-left-radius: 0.3rem;
    border-bottom-right-radius: 0.3rem;
    text-align: right;
}

.close {
    color: #888;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover, .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

/* add animation effects */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
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
            float: left;
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
       
        input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none; 
  border-radius: 30px; 
  background: #f1f1f1;  
}  

input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  

#pay-now {
	font-size: 20px;
	color:#f7f7f7;
	background-color: #2ECC71;
	width:100%;
	padding:11px 11px 11px 20px;
	box-sizing: border-box;
	border: 3px solid rgba(0,0,0,0);
  box-shadow:
  transition: all .3s linear;
}

    </style>
</head>

<body>

    <main>

        <?php
        include("header.php");
?>
          
        <br> 

        <section class="membership-section section-padding  " >
            <div class="container ">
                <div class="row ">

                    <h3 style="color:#640E6B;" align="center ">Payment form</h3>
                    <p style="color:#640E6B;" align="center ">Course-Bechalors of Theology</p>
                    <div class="col-lg-8 col-12 mx-auto ">

                    <form method="post"action="" enctype="multipart/form-data">
  <div class="container" style="background-color: #640E6B;padding:30px" >
 <h3 align="center" style="color:whitesmoke">Payment details</h3>
  <label style="color: white;"> Firstname </label> 
<input type="name" name="fname" placeholder= "firstname" size="15" required  class="form-control"/> 
 
<label style="color: white;"> Lastname </label>  
<input type="name" name="lname" placeholder="lastname" size="15"required class="form-control"/> 
<div>
<label  style="color: white;" for="email">Email</label>  
 <input type="email" placeholder="Enter Email" name="email" required class="form-control">  
  
<label style="color: white;" > 

Phone
</label>
<input type="number" name="phone" placeholder="phone no." size="10" required  class="form-control"> 

<br>
    <button type="submit" id="pay-now"class=" btn  btn-success" name="submit">pay now</button>    
</form>  
                    </div>
                </div>

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
// Select modal
var mpopup = document.getElementById('mpopupBox');

// Select trigger link
var mpLink = document.getElementById("mpopupLink");

// Select close action element
var close = document.getElementsByClassName("close")[0];

// Open modal once the link is clicked
mpLink.onclick = function() {
    mpopup.style.display = "block";
};

// Close modal once close element is clicked
close.onclick = function() {
    mpopup.style.display = "none";
};

// Close modal when user clicks outside of the modal box
window.onclick = function(event) {
    if (event.target == mpopup) {
        mpopup.style.display = "none";
    }
};
</script>
  


</body>

</html>