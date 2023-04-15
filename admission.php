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
    $filename= $_FILES["file"]["name"];
    $hii = $_FILES["file"]["tmp_name"];
    $folder = "blogpics/".$filename;
        
        move_uploaded_file ( $hii,  $folder);


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
    cname,activemember,position,highscl,year,state,city,collegename,cyear,cstate,ccity,pname,pemail,pphone,paddress) values ('$fname','$lname','$email','$phone','$gender','$marital','$bday','$folder','$address',
    '$cname','$activemember','$position','$highscl','$year','$state','$city','$collegename','$cyear','$cstate','$ccity','$pname','$pemail','$pphone','$paddress')";
    if (mysqli_query($conn, $sqli)) {
        echo "<script>alert('You are enrolled for Course')</script>";
    } else {
        echo "error:" . mysqli_error($conn);
    }
    mysqli_close($conn);
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
     <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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

    .VIpgJd-ZVi9od-ORHb-OEVmcd {
        display: none !important;
       margin-top: 20px;
       margin-top: 100px;
    }
    .translated-ltr{
        margin-top: -40px;
    }
    .translated-ltr{
        margin-top: -40px;
    }
    .goog-te-combo
    {
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
  font-family: Roboto, 'Open Sans', sans-serif!important;
  text-transform: uppercase;
}
.goog-te-gadget-simple  {
  background-color: rgba(255,255,255,0.20)!important;
  border: 1px solid rgb(240, 240, 240) !important;
  padding: 8px!important;
  border-radius: 4px!important;
  font-size: 1rem!important;
  line-height:2rem!important;
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
 
hr {  
  border: 1px solid #f1f1f1;  
 
}  
    .bgimg{
             background-image: linear-gradient(rgba(54, 5, 77, 0.8),rgba(0,0,0,0.8)),url(images/banner.jpg);
             background-size: 100% 100%;
             background-attachment: fixed;
             background-repeat: no-repeat;
             width: 100%;
             height: 400px;

    }
    .registerbtn {  
  background-color:#FFC90E;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  

    
</style>
    <title>Admission </title>
</head>
<body> 

<?php
        include("header.php");
        ?>



    
           <div class="container-fluid bgimg " >
                    <div class="row">
                         

                          <div class="col-md-12 " style="margin-top: 200px;">
                            <h1 class="text-light " style="font-weight: bolder; font-size: 50px;">Admission</h1>
                     </div>
                    </div>
           </div>
           <section class="membership-section section-padding  "  style="margin-top:-50px;">
           <div class="container ">
                <div class="row ">

                    <h3 style="color:#640E6B;" align="center ">Application form for Admission</h3>
                    <p style="color:#640E6B;" align="center ">Course-Bechalors of Theology</p>
                    <div class="col-lg-8 col-12 mx-auto ">

                    <form method="post" enctype="multipart/form-data">
  <div class="container" style="background-color: #640E6B;padding:30px" >
 <h3 align="center" style="color:whitesmoke">Personal Information</h3>
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

<div class="container">
    <div class="row">
        <div class="col-md-3">
<label  style="color: white;"> 
Gender 
</label><br>
<input type="radio" value="Male" name="gender" checked    > <span style="color: white;">Male</span> 
<input type="radio" value="Female" name="gender"  > <span style="color: white">Female</span>&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="col-md-3">
    <label  style="color: white;">
Marital Status 
</label><br>
<select name="marital" id="cars" >
    <option value="volvo" disabled>Marital Status</option>
    <option value="married">Married</option>
    <option value="single">Single</option>
   
  </select>
    </div>
    <div class="col-md-3">
    <label for="birthday" style="color: white;" >Birthday</label>
  <input type="date" id="birthday" name="bday">
    </div>
    <div class="col-md-3">
    <label for="image" style="color: white;" >Your Photo</label>
    <input type="file" id="file" name="file" accept="upload/*"> 

    </div>
</div>
</div>
<label style="color: white">
Current Address :
</label>
<textarea cols="80" rows="5" name="address" placeholder="Current Address" value="address" required class="form-control">
</textarea>
<h3 align="center" style="color:whitesmoke">Spritual Background</h3>

<label style="color: white;"> Church Name </label> 
<input type="name" name="cname" placeholder= "Church Name" size="80" required class="form-control"/> 
<div class="container">
    <div class="row">
        <div class="col-md-6">
<label  style="color: white;"> 
Are you an Active member of your local church 
</label><br>
<input type="radio" value="yes" name="activemember" checked   > <span style="color: white;">Yes</span> &nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" value="no" name="activemember"  > <span style="color: white">No</span>&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="col-md-6">
    <label  style="color: white;">
Your position in the church
</label><br>
<select name="position" >
    <option value="pastor" >Pastor</option>
    <option value="leader"> Leader</option>
    <option value="believer">Believer</option>
   
  </select>
    </div>

   
</div>
</div>
<h3 align="center" style="color:whitesmoke">Education Information</h3>
<label style="color: white;" >High School </label> 
<input type="name" name="highscl" placeholder= "High school Name" size="15" required class="form-control" /> 
<div class="container">
    <div class="row">
        
    <div class="col-md-4">
    <label  style="color: white;">
Year
</label><br>
<select id="year" name="year" type="year">
    <option>year</option>
    <option value="1940">1940</option>
    <option value="1941">1941</option>
    <option value="1942">1942</option>
    <option value="1943">1943</option>
    <option value="1944">1944</option>
    <option value="1945">1945</option>
    <option value="1946">1946</option>
    <option value="1947">1947</option>
    <option value="1948">1948</option>
    <option value="1949">1949</option>
    <option value="1950">1950</option>
    <option value="1951">1951</option>
    <option value="1952">1952</option>
    <option value="1953">1953</option>
    <option value="1954">1954</option>
    <option value="1955">1955</option>
    <option value="1956">1956</option>
    <option value="1957">1957</option>
    <option value="1958">1958</option>
    <option value="1959">1959</option>
    <option value="1960">1960</option>
    <option value="1961">1961</option>
    <option value="1962">1962</option>
    <option value="1963">1963</option>
    <option value="1964">1964</option>
    <option value="1965">1965</option>
    <option value="1966">1966</option>
    <option value="1967">1967</option>
    <option value="1968">1968</option>
    <option value="1969">1969</option>
    <option value="1970">1970</option>
    <option value="1971">1971</option>
    <option value="1972">1972</option>
    <option value="1973">1973</option>
    <option value="1974">1974</option>
    <option value="1975">1975</option>
    <option value="1976">1976</option>
    <option value="1977">1977</option>
    <option value="1978">1978</option>
    <option value="1979">1979</option>
    <option value="1980">1980</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
</select>
    </div>
    <div class="col-md-4">
    <label for="state" style="color: white;" >State</label>
    <br>
    <!--- India states -->
<select id="country-state" name="state" style="width:140px;">
    <option value="" >Select state</option>
    <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
</select>
    </div>
    <div class="col-md-4">
    <label for="city" style="color: white;" >City</label>
<!-- Madhya Pradesh--><br>
<select id="city" name="city" style="width: 130px;">
	<option value="">Select City</option>
	<option value="Agar">Agar</option>
	<option value="Ajaigarh">Ajaigarh</option>
	<option value="Akodia">Akodia</option>
	<option value="Alampur">Alampur</option>
	<option value="Alirajpur">Alirajpur</option>
	<option value="Alot">Alot</option>
	<option value="Amanganj">Amanganj</option>
	<option value="Amarkantak">Amarkantak</option>
	<option value="Amarpatan">Amarpatan</option>
	<option value="Amarwara">Amarwara</option>
	<option value="Ambah">Ambah</option>
	<option value="Amla">Amla</option>
	<option value="Anjad">Anjad</option>
	<option value="Antri">Antri</option>
	<option value="Anuppur">Anuppur</option>
	<option value="Aron">Aron</option>
	<option value="Ashoknagar">Ashoknagar</option>
	<option value="Ashta">Ashta</option>
	<option value="Babai">Babai</option>
	<option value="Badarwas">Badarwas</option>
	<option value="Badnawar">Badnawar</option>
	<option value="Bag">Bag</option>
	<option value="Bagli">Bagli</option>
	<option value="Baihar">Baihar</option>
	<option value="Baikunthpur">Baikunthpur</option>
	<option value="Bakshwaho">Bakshwaho</option>
	<option value="Balaghat">Balaghat</option>
	<option value="Baldeogarh">Baldeogarh</option>
	<option value="Bamna">Bamna</option>
	<option value="Bamor Kalan">Bamor Kalan</option>
	<option value="Bamora">Bamora</option>
	<option value="Banda">Banda</option>
	<option value="Barela">Barela</option>
	<option value="Barghat">Barghat</option>
	<option value="Bargi">Bargi</option>
	<option value="Barhi">Barhi</option>
	<option value="Barwani">Barwani</option>
	<option value="Basoda">Basoda</option>
	<option value="Begamganj">Begamganj</option>
	<option value="Beohari">Beohari</option>
	<option value="Berasia">Berasia</option>
	<option value="Betma">Betma</option>
	<option value="Betul">Betul</option>
	<option value="Betul Bazar">Betul Bazar</option>
	<option value="Bhabhra">Bhabhra</option>
	<option value="Bhainsdehi">Bhainsdehi</option>
	<option value="Bhander">Bhander</option>
	<option value="Bhanpura">Bhanpura</option>
	<option value="Bhawaniganj">Bhawaniganj</option>
	<option value="Bhikangaon">Bhikangaon</option>
	<option value="Bhind">Bhind</option>
	<option value="Bhitarwar">Bhitarwar</option>
	<option value="Bhopal">Bhopal</option>
	<option value="Biaora">Biaora</option>
	<option value="Bijawar">Bijawar</option>
	<option value="Bijrauni">Bijrauni</option>
	<option value="Bodri">Bodri</option>
	<option value="Burhanpur">Burhanpur</option>
	<option value="Burhar">Burhar</option>
	<option value="Chanderi">Chanderi</option>
	<option value="Chandia">Chandia</option>
	<option value="Chandla">Chandla</option>
	<option value="Chhatarpur">Chhatarpur</option>
	<option value="Chhindwara">Chhindwara</option>
	<option value="Chichli">Chichli</option>
	<option value="Chorhat">Chorhat</option>
	<option value="Daboh">Daboh</option>
	<option value="Dabra">Dabra</option>
	<option value="Damoh">Damoh</option>
	<option value="Datia">Datia</option>
	<option value="Deori Khas">Deori Khas</option>
	<option value="Depalpur">Depalpur</option>
	<option value="Dewas">Dewas</option>
	<option value="Dhamnod">Dhamnod</option>
	<option value="Dhana">Dhana</option>
	<option value="Dhar">Dhar</option>
	<option value="Dharampuri">Dharampuri</option>
	<option value="Dindori">Dindori</option>
	<option value="Etawa">Etawa</option>
	<option value="Gadarwara">Gadarwara</option>
	<option value="Garha Brahman">Garha Brahman</option>
	<option value="Garhakota">Garhakota</option>
	<option value="Gautampura">Gautampura</option>
	<option value="Ghansor">Ghansor</option>
	<option value="Gogapur">Gogapur</option>
	<option value="Gohadi">Gohadi</option>
	<option value="Govindgarh">Govindgarh</option>
	<option value="Guna">Guna</option>
	<option value="Gurh">Gurh</option>
	<option value="Gwalior">Gwalior</option>
	<option value="Harda">Harda</option>
	<option value="Harda Khas">Harda Khas</option>
	<option value="Harpalpur">Harpalpur</option>
	<option value="Harrai">Harrai</option>
	<option value="Harsud">Harsud</option>
	<option value="Hatod">Hatod</option>
	<option value="Hatta">Hatta</option>
	<option value="Hindoria">Hindoria</option>
	<option value="Hoshangabad">Hoshangabad</option>
	<option value="Iawar">Iawar</option>
	<option value="Ichhawar">Ichhawar</option>
	<option value="Iklehra">Iklehra</option>
	<option value="Indore">Indore</option>
	<option value="Isagarh">Isagarh</option>
	<option value="Itarsi">Itarsi</option>
	<option value="Jabalpur">Jabalpur</option>
	<option value="Jaisinghnagar">Jaisinghnagar</option>
	<option value="Jaithari">Jaithari</option>
	<option value="Jamai">Jamai</option>
	<option value="Jaora">Jaora</option>
	<option value="Jatara">Jatara</option>
	<option value="Jawad">Jawad</option>
	<option value="Jhabua">Jhabua</option>
	<option value="Jiran">Jiran</option>
	<option value="Jobat">Jobat</option>
	<option value="Kailaras">Kailaras</option>
	<option value="Kaimori">Kaimori</option>
	<option value="Kannod">Kannod</option>
	<option value="Kareli">Kareli</option>
	<option value="Karera">Karera</option>
	<option value="Karrapur">Karrapur</option>
	<option value="Kasrawad">Kasrawad</option>
	<option value="Katangi">Katangi</option>
	<option value="Katni">Katni</option>
	<option value="Khachrod">Khachrod</option>
	<option value="Khailar">Khailar</option>
	<option value="Khajuraho Group of Monuments">Khajuraho Group of Monuments</option>
	<option value="Khamaria">Khamaria</option>
	<option value="Khandwa">Khandwa</option>
	<option value="Khandwa district">Khandwa district</option>
	<option value="Khargapur">Khargapur</option>
	<option value="Khargone">Khargone</option>
	<option value="Khategaon">Khategaon</option>
	<option value="Khilchipur">Khilchipur</option>
	<option value="Khirkiyan">Khirkiyan</option>
	<option value="Khujner">Khujner</option>
	<option value="Khurai">Khurai</option>
	<option value="Kolaras">Kolaras</option>
	<option value="Korwai">Korwai</option>
	<option value="Kotar">Kotar</option>
	<option value="Kothi">Kothi</option>
	<option value="Kotma">Kotma</option>
	<option value="Kotwa">Kotwa</option>
	<option value="Kukshi">Kukshi</option>
	<option value="Kumbhraj">Kumbhraj</option>
	<option value="Lahar">Lahar</option>
	<option value="Lakhnadon">Lakhnadon</option>
	<option value="Leteri">Leteri</option>
	<option value="Lodhikheda">Lodhikheda</option>
	<option value="Machalpur">Machalpur</option>
	<option value="Madhogarh">Madhogarh</option>
	<option value="Maheshwar">Maheshwar</option>
	<option value="Mahgawan">Mahgawan</option>
	<option value="Maihar">Maihar</option>
	<option value="Majholi">Majholi</option>
	<option value="Maksi">Maksi</option>
	<option value="Malhargarh">Malhargarh</option>
	<option value="Manasa">Manasa</option>
	<option value="Manawar">Manawar</option>
	<option value="Mandideep">Mandideep</option>
	<option value="Mandla">Mandla</option>
	<option value="Mandleshwar">Mandleshwar</option>
	<option value="Mandsaur">Mandsaur</option>
	<option value="Mangawan">Mangawan</option>
	<option value="Manpur">Manpur</option>
	<option value="Mau">Mau</option>
	<option value="Mauganj">Mauganj</option>
	<option value="Mihona">Mihona</option>
	<option value="Mohgaon">Mohgaon</option>
	<option value="Morar">Morar</option>
	<option value="Morena">Morena</option>
	<option value="Multai">Multai</option>
	<option value="Mundi">Mundi</option>
	<option value="Mungaoli">Mungaoli</option>
	<option value="Murwara">Murwara</option>
	<option value="Nagda">Nagda</option>
	<option value="Nagod">Nagod</option>
	<option value="Naigarhi">Naigarhi</option>
	<option value="Nainpur">Nainpur</option>
	<option value="Namli">Namli</option>
	<option value="Naraini">Naraini</option>
	<option value="Narayangarh">Narayangarh</option>
	<option value="Narsimhapur">Narsimhapur</option>
	<option value="Narsinghgarh">Narsinghgarh</option>
	<option value="Narwar">Narwar</option>
	<option value="Nasrullahganj">Nasrullahganj</option>
	<option value="Neemuch">Neemuch</option>
	<option value="Nepanagar">Nepanagar</option>
	<option value="Orchha">Orchha</option>
	<option value="Pachmarhi">Pachmarhi</option>
	<option value="Palera">Palera</option>
	<option value="Pali">Pali</option>
	<option value="Panagar">Panagar</option>
	<option value="Panara">Panara</option>
	<option value="Pandhana">Pandhana</option>
	<option value="Pandhurna">Pandhurna</option>
	<option value="Panna">Panna</option>
	<option value="Pansemal">Pansemal</option>
	<option value="Parasia">Parasia</option>
	<option value="Patan">Patan</option>
	<option value="Patharia">Patharia</option>
	<option value="Pawai">Pawai</option>
	<option value="Petlawad">Petlawad</option>
	<option value="Piploda">Piploda</option>
	<option value="Pithampur">Pithampur</option>
	<option value="Porsa">Porsa</option>
	<option value="Punasa">Punasa</option>
	<option value="Raghogarh">Raghogarh</option>
	<option value="Rahatgarh">Rahatgarh</option>
	<option value="Raisen">Raisen</option>
	<option value="Rajgarh">Rajgarh</option>
	<option value="Rajnagar">Rajnagar</option>
	<option value="Rajpur">Rajpur</option>
	<option value="Rampura">Rampura</option>
	<option value="Ranapur">Ranapur</option>
	<option value="Ratangarh">Ratangarh</option>
	<option value="Ratlam">Ratlam</option>
	<option value="Rehli">Rehli</option>
	<option value="Rehti">Rehti</option>
	<option value="Rewa">Rewa</option>
	<option value="Sabalgarh">Sabalgarh</option>
	<option value="Sagar">Sagar</option>
	<option value="Sailana">Sailana</option>
	<option value="Sanawad">Sanawad</option>
	<option value="Sanchi">Sanchi</option>
	<option value="Sanwer">Sanwer</option>
	<option value="Sarangpur">Sarangpur</option>
	<option value="Satna">Satna</option>
	<option value="Satwas">Satwas</option>
	<option value="Saugor">Saugor</option>
	<option value="Sausar">Sausar</option>
	<option value="Sehore">Sehore</option>
	<option value="Sendhwa">Sendhwa</option>
	<option value="Seondha">Seondha</option>
	<option value="Seoni">Seoni</option>
	<option value="Seoni Malwa">Seoni Malwa</option>
	<option value="Shahdol">Shahdol</option>
	<option value="Shahgarh">Shahgarh</option>
	<option value="Shahpur">Shahpur</option>
	<option value="Shahpura">Shahpura</option>
	<option value="Shajapur">Shajapur</option>
	<option value="Shamgarh">Shamgarh</option>
	<option value="Sheopur">Sheopur</option>
	<option value="Shivpuri">Shivpuri</option>
	<option value="Shujalpur">Shujalpur</option>
	<option value="Sidhi">Sidhi</option>
	<option value="Sihora">Sihora</option>
	<option value="Simaria">Simaria</option>
	<option value="Singoli">Singoli</option>
	<option value="Singrauli">Singrauli</option>
	<option value="Sirmaur">Sirmaur</option>
	<option value="Sironj">Sironj</option>
	<option value="Sitamau">Sitamau</option>
	<option value="Sohagi">Sohagi</option>
	<option value="Sohagpur">Sohagpur</option>
	<option value="Sultanpur">Sultanpur</option>
	<option value="Susner">Susner</option>
	<option value="Tal">Tal</option>
	<option value="Talen">Talen</option>
	<option value="Tarana">Tarana</option>
	<option value="Tekanpur">Tekanpur</option>
	<option value="Tendukheda">Tendukheda</option>
	<option value="Teonthar">Teonthar</option>
	<option value="Thandla">Thandla</option>
	<option value="Tikamgarh">Tikamgarh</option>
	<option value="Tirodi">Tirodi</option>
	<option value="Udaipura">Udaipura</option>
	<option value="Ujjain">Ujjain</option>
	<option value="Ukwa">Ukwa</option>
	<option value="Umaria">Umaria</option>
	<option value="Umaria District">Umaria District</option>
	<option value="Umri">Umri</option>
	<option value="Unhel">Unhel</option>
	<option value="Vidisha">Vidisha</option>
	<option value="Waraseoni">Waraseoni</option>
</select>
    </div>
</div>
</div>




<label style="color: white;">College/University (Optional) </label> 
<input type="name" name="collegename" placeholder= "College/University Name" size="15" class="form-control" /> 
<div class="container">
    <div class="row">
        
    <div class="col-md-4">
    <label  style="color: white;">
Year
</label><br>
<select id="year" name="cyear" >
    <option>year</option>
    <option value="1940">1940</option>
    <option value="1941">1941</option>
    <option value="1942">1942</option>
    <option value="1943">1943</option>
    <option value="1944">1944</option>
    <option value="1945">1945</option>
    <option value="1946">1946</option>
    <option value="1947">1947</option>
    <option value="1948">1948</option>
    <option value="1949">1949</option>
    <option value="1950">1950</option>
    <option value="1951">1951</option>
    <option value="1952">1952</option>
    <option value="1953">1953</option>
    <option value="1954">1954</option>
    <option value="1955">1955</option>
    <option value="1956">1956</option>
    <option value="1957">1957</option>
    <option value="1958">1958</option>
    <option value="1959">1959</option>
    <option value="1960">1960</option>
    <option value="1961">1961</option>
    <option value="1962">1962</option>
    <option value="1963">1963</option>
    <option value="1964">1964</option>
    <option value="1965">1965</option>
    <option value="1966">1966</option>
    <option value="1967">1967</option>
    <option value="1968">1968</option>
    <option value="1969">1969</option>
    <option value="1970">1970</option>
    <option value="1971">1971</option>
    <option value="1972">1972</option>
    <option value="1973">1973</option>
    <option value="1974">1974</option>
    <option value="1975">1975</option>
    <option value="1976">1976</option>
    <option value="1977">1977</option>
    <option value="1978">1978</option>
    <option value="1979">1979</option>
    <option value="1980">1980</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
</select>
    </div>
    <div class="col-md-4">
    <label for="state" style="color: white;" >State</label>
    <br>
    <!--- India states -->
<select id="country-state" name="cstate" style="width:140px;">
    <option value="" >Select state</option>
    <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
</select>
    </div>
    <div class="col-md-4">
    <label for="city" style="color: white;" >City</label>
<!-- Madhya Pradesh--><br>
<select id="city" name="ccity" style="width: 130px;">
	<option value="">Select City</option>
	<option value="Agar">Agar</option>
	<option value="Ajaigarh">Ajaigarh</option>
	<option value="Akodia">Akodia</option>
	<option value="Alampur">Alampur</option>
	<option value="Alirajpur">Alirajpur</option>
	<option value="Alot">Alot</option>
	<option value="Amanganj">Amanganj</option>
	<option value="Amarkantak">Amarkantak</option>
	<option value="Amarpatan">Amarpatan</option>
	<option value="Amarwara">Amarwara</option>
	<option value="Ambah">Ambah</option>
	<option value="Amla">Amla</option>
	<option value="Anjad">Anjad</option>
	<option value="Antri">Antri</option>
	<option value="Anuppur">Anuppur</option>
	<option value="Aron">Aron</option>
	<option value="Ashoknagar">Ashoknagar</option>
	<option value="Ashta">Ashta</option>
	<option value="Babai">Babai</option>
	<option value="Badarwas">Badarwas</option>
	<option value="Badnawar">Badnawar</option>
	<option value="Bag">Bag</option>
	<option value="Bagli">Bagli</option>
	<option value="Baihar">Baihar</option>
	<option value="Baikunthpur">Baikunthpur</option>
	<option value="Bakshwaho">Bakshwaho</option>
	<option value="Balaghat">Balaghat</option>
	<option value="Baldeogarh">Baldeogarh</option>
	<option value="Bamna">Bamna</option>
	<option value="Bamor Kalan">Bamor Kalan</option>
	<option value="Bamora">Bamora</option>
	<option value="Banda">Banda</option>
	<option value="Barela">Barela</option>
	<option value="Barghat">Barghat</option>
	<option value="Bargi">Bargi</option>
	<option value="Barhi">Barhi</option>
	<option value="Barwani">Barwani</option>
	<option value="Basoda">Basoda</option>
	<option value="Begamganj">Begamganj</option>
	<option value="Beohari">Beohari</option>
	<option value="Berasia">Berasia</option>
	<option value="Betma">Betma</option>
	<option value="Betul">Betul</option>
	<option value="Betul Bazar">Betul Bazar</option>
	<option value="Bhabhra">Bhabhra</option>
	<option value="Bhainsdehi">Bhainsdehi</option>
	<option value="Bhander">Bhander</option>
	<option value="Bhanpura">Bhanpura</option>
	<option value="Bhawaniganj">Bhawaniganj</option>
	<option value="Bhikangaon">Bhikangaon</option>
	<option value="Bhind">Bhind</option>
	<option value="Bhitarwar">Bhitarwar</option>
	<option value="Bhopal">Bhopal</option>
	<option value="Biaora">Biaora</option>
	<option value="Bijawar">Bijawar</option>
	<option value="Bijrauni">Bijrauni</option>
	<option value="Bodri">Bodri</option>
	<option value="Burhanpur">Burhanpur</option>
	<option value="Burhar">Burhar</option>
	<option value="Chanderi">Chanderi</option>
	<option value="Chandia">Chandia</option>
	<option value="Chandla">Chandla</option>
	<option value="Chhatarpur">Chhatarpur</option>
	<option value="Chhindwara">Chhindwara</option>
	<option value="Chichli">Chichli</option>
	<option value="Chorhat">Chorhat</option>
	<option value="Daboh">Daboh</option>
	<option value="Dabra">Dabra</option>
	<option value="Damoh">Damoh</option>
	<option value="Datia">Datia</option>
	<option value="Deori Khas">Deori Khas</option>
	<option value="Depalpur">Depalpur</option>
	<option value="Dewas">Dewas</option>
	<option value="Dhamnod">Dhamnod</option>
	<option value="Dhana">Dhana</option>
	<option value="Dhar">Dhar</option>
	<option value="Dharampuri">Dharampuri</option>
	<option value="Dindori">Dindori</option>
	<option value="Etawa">Etawa</option>
	<option value="Gadarwara">Gadarwara</option>
	<option value="Garha Brahman">Garha Brahman</option>
	<option value="Garhakota">Garhakota</option>
	<option value="Gautampura">Gautampura</option>
	<option value="Ghansor">Ghansor</option>
	<option value="Gogapur">Gogapur</option>
	<option value="Gohadi">Gohadi</option>
	<option value="Govindgarh">Govindgarh</option>
	<option value="Guna">Guna</option>
	<option value="Gurh">Gurh</option>
	<option value="Gwalior">Gwalior</option>
	<option value="Harda">Harda</option>
	<option value="Harda Khas">Harda Khas</option>
	<option value="Harpalpur">Harpalpur</option>
	<option value="Harrai">Harrai</option>
	<option value="Harsud">Harsud</option>
	<option value="Hatod">Hatod</option>
	<option value="Hatta">Hatta</option>
	<option value="Hindoria">Hindoria</option>
	<option value="Hoshangabad">Hoshangabad</option>
	<option value="Iawar">Iawar</option>
	<option value="Ichhawar">Ichhawar</option>
	<option value="Iklehra">Iklehra</option>
	<option value="Indore">Indore</option>
	<option value="Isagarh">Isagarh</option>
	<option value="Itarsi">Itarsi</option>
	<option value="Jabalpur">Jabalpur</option>
	<option value="Jaisinghnagar">Jaisinghnagar</option>
	<option value="Jaithari">Jaithari</option>
	<option value="Jamai">Jamai</option>
	<option value="Jaora">Jaora</option>
	<option value="Jatara">Jatara</option>
	<option value="Jawad">Jawad</option>
	<option value="Jhabua">Jhabua</option>
	<option value="Jiran">Jiran</option>
	<option value="Jobat">Jobat</option>
	<option value="Kailaras">Kailaras</option>
	<option value="Kaimori">Kaimori</option>
	<option value="Kannod">Kannod</option>
	<option value="Kareli">Kareli</option>
	<option value="Karera">Karera</option>
	<option value="Karrapur">Karrapur</option>
	<option value="Kasrawad">Kasrawad</option>
	<option value="Katangi">Katangi</option>
	<option value="Katni">Katni</option>
	<option value="Khachrod">Khachrod</option>
	<option value="Khailar">Khailar</option>
	<option value="Khajuraho Group of Monuments">Khajuraho Group of Monuments</option>
	<option value="Khamaria">Khamaria</option>
	<option value="Khandwa">Khandwa</option>
	<option value="Khandwa district">Khandwa district</option>
	<option value="Khargapur">Khargapur</option>
	<option value="Khargone">Khargone</option>
	<option value="Khategaon">Khategaon</option>
	<option value="Khilchipur">Khilchipur</option>
	<option value="Khirkiyan">Khirkiyan</option>
	<option value="Khujner">Khujner</option>
	<option value="Khurai">Khurai</option>
	<option value="Kolaras">Kolaras</option>
	<option value="Korwai">Korwai</option>
	<option value="Kotar">Kotar</option>
	<option value="Kothi">Kothi</option>
	<option value="Kotma">Kotma</option>
	<option value="Kotwa">Kotwa</option>
	<option value="Kukshi">Kukshi</option>
	<option value="Kumbhraj">Kumbhraj</option>
	<option value="Lahar">Lahar</option>
	<option value="Lakhnadon">Lakhnadon</option>
	<option value="Leteri">Leteri</option>
	<option value="Lodhikheda">Lodhikheda</option>
	<option value="Machalpur">Machalpur</option>
	<option value="Madhogarh">Madhogarh</option>
	<option value="Maheshwar">Maheshwar</option>
	<option value="Mahgawan">Mahgawan</option>
	<option value="Maihar">Maihar</option>
	<option value="Majholi">Majholi</option>
	<option value="Maksi">Maksi</option>
	<option value="Malhargarh">Malhargarh</option>
	<option value="Manasa">Manasa</option>
	<option value="Manawar">Manawar</option>
	<option value="Mandideep">Mandideep</option>
	<option value="Mandla">Mandla</option>
	<option value="Mandleshwar">Mandleshwar</option>
	<option value="Mandsaur">Mandsaur</option>
	<option value="Mangawan">Mangawan</option>
	<option value="Manpur">Manpur</option>
	<option value="Mau">Mau</option>
	<option value="Mauganj">Mauganj</option>
	<option value="Mihona">Mihona</option>
	<option value="Mohgaon">Mohgaon</option>
	<option value="Morar">Morar</option>
	<option value="Morena">Morena</option>
	<option value="Multai">Multai</option>
	<option value="Mundi">Mundi</option>
	<option value="Mungaoli">Mungaoli</option>
	<option value="Murwara">Murwara</option>
	<option value="Nagda">Nagda</option>
	<option value="Nagod">Nagod</option>
	<option value="Naigarhi">Naigarhi</option>
	<option value="Nainpur">Nainpur</option>
	<option value="Namli">Namli</option>
	<option value="Naraini">Naraini</option>
	<option value="Narayangarh">Narayangarh</option>
	<option value="Narsimhapur">Narsimhapur</option>
	<option value="Narsinghgarh">Narsinghgarh</option>
	<option value="Narwar">Narwar</option>
	<option value="Nasrullahganj">Nasrullahganj</option>
	<option value="Neemuch">Neemuch</option>
	<option value="Nepanagar">Nepanagar</option>
	<option value="Orchha">Orchha</option>
	<option value="Pachmarhi">Pachmarhi</option>
	<option value="Palera">Palera</option>
	<option value="Pali">Pali</option>
	<option value="Panagar">Panagar</option>
	<option value="Panara">Panara</option>
	<option value="Pandhana">Pandhana</option>
	<option value="Pandhurna">Pandhurna</option>
	<option value="Panna">Panna</option>
	<option value="Pansemal">Pansemal</option>
	<option value="Parasia">Parasia</option>
	<option value="Patan">Patan</option>
	<option value="Patharia">Patharia</option>
	<option value="Pawai">Pawai</option>
	<option value="Petlawad">Petlawad</option>
	<option value="Piploda">Piploda</option>
	<option value="Pithampur">Pithampur</option>
	<option value="Porsa">Porsa</option>
	<option value="Punasa">Punasa</option>
	<option value="Raghogarh">Raghogarh</option>
	<option value="Rahatgarh">Rahatgarh</option>
	<option value="Raisen">Raisen</option>
	<option value="Rajgarh">Rajgarh</option>
	<option value="Rajnagar">Rajnagar</option>
	<option value="Rajpur">Rajpur</option>
	<option value="Rampura">Rampura</option>
	<option value="Ranapur">Ranapur</option>
	<option value="Ratangarh">Ratangarh</option>
	<option value="Ratlam">Ratlam</option>
	<option value="Rehli">Rehli</option>
	<option value="Rehti">Rehti</option>
	<option value="Rewa">Rewa</option>
	<option value="Sabalgarh">Sabalgarh</option>
	<option value="Sagar">Sagar</option>
	<option value="Sailana">Sailana</option>
	<option value="Sanawad">Sanawad</option>
	<option value="Sanchi">Sanchi</option>
	<option value="Sanwer">Sanwer</option>
	<option value="Sarangpur">Sarangpur</option>
	<option value="Satna">Satna</option>
	<option value="Satwas">Satwas</option>
	<option value="Saugor">Saugor</option>
	<option value="Sausar">Sausar</option>
	<option value="Sehore">Sehore</option>
	<option value="Sendhwa">Sendhwa</option>
	<option value="Seondha">Seondha</option>
	<option value="Seoni">Seoni</option>
	<option value="Seoni Malwa">Seoni Malwa</option>
	<option value="Shahdol">Shahdol</option>
	<option value="Shahgarh">Shahgarh</option>
	<option value="Shahpur">Shahpur</option>
	<option value="Shahpura">Shahpura</option>
	<option value="Shajapur">Shajapur</option>
	<option value="Shamgarh">Shamgarh</option>
	<option value="Sheopur">Sheopur</option>
	<option value="Shivpuri">Shivpuri</option>
	<option value="Shujalpur">Shujalpur</option>
	<option value="Sidhi">Sidhi</option>
	<option value="Sihora">Sihora</option>
	<option value="Simaria">Simaria</option>
	<option value="Singoli">Singoli</option>
	<option value="Singrauli">Singrauli</option>
	<option value="Sirmaur">Sirmaur</option>
	<option value="Sironj">Sironj</option>
	<option value="Sitamau">Sitamau</option>
	<option value="Sohagi">Sohagi</option>
	<option value="Sohagpur">Sohagpur</option>
	<option value="Sultanpur">Sultanpur</option>
	<option value="Susner">Susner</option>
	<option value="Tal">Tal</option>
	<option value="Talen">Talen</option>
	<option value="Tarana">Tarana</option>
	<option value="Tekanpur">Tekanpur</option>
	<option value="Tendukheda">Tendukheda</option>
	<option value="Teonthar">Teonthar</option>
	<option value="Thandla">Thandla</option>
	<option value="Tikamgarh">Tikamgarh</option>
	<option value="Tirodi">Tirodi</option>
	<option value="Udaipura">Udaipura</option>
	<option value="Ujjain">Ujjain</option>
	<option value="Ukwa">Ukwa</option>
	<option value="Umaria">Umaria</option>
	<option value="Umaria District">Umaria District</option>
	<option value="Umri">Umri</option>
	<option value="Unhel">Unhel</option>
	<option value="Vidisha">Vidisha</option>
	<option value="Waraseoni">Waraseoni</option>
</select>
    </div>
</div>
</div>
<h3 align="center" style="color:whitesmoke">Pastor Recommendation Letter(Only for pastors)</h3>
<label style="color: white;">Name </label> 
<input type="name" name="pname" placeholder= "Full name" size="15" class="form-control" /> 
<label  style="color: white;" for="email">Email</label>  
 <input type="email" placeholder="Enter Email" name="pemail" class="form-control" >  
  
<label style="color: white;" > 

Phone
</label>
<input type="number" name="pphone" placeholder="phone no." size="10"  class="form-control"> 
<label style="color: white">
Current Address :
</label>
<textarea cols="80" rows="5" name="paddress"placeholder="Current Address" value="address" class="form-control" >
</textarea>
<a href="javascript:void(0);" class="binjo" id="mpopupLink"  style="color: whitesmoke;">STATEMENT OF FINANCIAL RESPONSIBILITIES FOR APPLICANTS&nbsp;&nbsp;&nbsp;&nbsp;&larr;&nbsp;&nbsp;&nbsp;Click Here</a>

<!-- Modal popup box -->
<div id="mpopupBox" class="mpopup">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">×</span>
            <h2>STATEMENT OF FINANCIAL RESPONSIBILITIES FOR APPLICANTS</h2>
        </div>
        <div class="modal-body">
            <p>The balance of tuition, fees, room, and board, is due in full by the time of registration (either by cash, check, credit card, or verified financial aid.)</p>
<p>I certify that the information given in this application is complete and accurate to the best of my knowledge. If accepted, I agree to abide by the rules and regulations of the College and to meet my financial responsibilities.</p>
<p>Good News Baptist Bible Institute does not discriminate with regard to age, race, color, national origin, sex, or disability in any of its education programs or opportunities, employment, or other activities.
</p>
           
        </div>
       
    </div>
</div>
    <button type="submit" class="registerbtn" name="submit">Register</button>    
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



          

