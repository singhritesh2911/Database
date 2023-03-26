<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <?php include 'links.php'; ?>
  <style>
    
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

* {
  margin: 0;
  padding: 0;
  scroll-behavior: smooth;
  box-sizing: border-box;
}

body {
  overflow-x: hidden;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
}

ul {
  list-style: none;
}

input {
  overflow: hidden;
}

.section-title {
  position: relative;
  font-size: 30px;
  font-weight: 600;
  font-family: "Poppins", sans-serif;
  margin: 0 0 35px;
    text-align: center;
}

.sec-pad {
  padding: 60px 0 0;
  margin: 50px 0;
}

.contact-sec {
  align-item: center;
  display: flex;
  background-color: #5cbde466;
}

.contact-sec .contact-ul li,
.contact-ul b {
  font-size: 20px;
  margin: 10px 0;
  font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
  word-wrap: break-word;
}

.contact-sec .contact-ul i {
  font-size: 18px;
  padding: 10px;
  margin-right: 10px;
  border-radius: 50%;
}
.contact-detail a {
  color: #000;
  text-decoration: none;
}

.contact-sec .contact-ul li b:hover {
  color: #f93;
}

.contact-sec .contact-ul li .fa-location-dot {
  color: #f44337;
  border: 2px solid #f4433790;
}

.contact-sec .contact-ul li .fa-phone {
  color: #00b055;
  border: 2px solid #00b05590;
}

.contact-sec .contact-ul li .fa-envelope {
  color: #ff6347;
  border: 2px solid #ff634790;
}

.contact-detail span {
  width: 400px;
  display: flex;
  justify-content: center;
}
.contact-detail span a {
  font-size: 20px;
  padding: 6px 12px;
  color: #000;
  border-radius: 50%;
  margin: 0px 5px;
}
.contact-detail span .fb {
  color: #3b5998;
  border: 3px solid #3b5998;
}
.contact-detail span .fb:hover {
  color: #fff;
  background-color: #3b5998;
}

.contact-detail span .insta {
  color: #833ab4;
  border: 3px solid #833ab4;
}
.contact-detail span .insta:hover {
  color: #fff;
  background-color: #833ab4;
}

.contact-detail span .twitter {
  color: #00acee;
  border: 3px solid #00acee;
}
.contact-detail span .twitter:hover {
  color: #fff;
  background-color: #00acee;
}

form.contFrm {
  max-width: 396px;
  margin: auto;
}

.inptFld {
  width: 100%;
  height: 50px;
  border: 0;
  margin: 0 0 10px;
  border-radius: 8px;
  padding: 0 20px;
  font-size: 16px;
  color: #000;
}
 
.inptFld:focus {
  outline-offset: -4px;
  outline: 1px solid #f93;
}

.contFrm textarea {
  height: 75px;
  padding-top: 5px;
}
.inptBtn {
  height: 50px;
  border: 0;
  background: #00b055;
  font-size: 14px;
  color: #fff;
  margin: auto;
  letter-spacing: 1px;
  cursor: pointer;
  width: 100%;
  max-width: 200px;
}
      
      .Btn {
  height: 50px;
  border: 0;
  background: #00b055;
   margin-top: 10px;
  border-radius: 8px;
  padding: 10px 20px;
  font-size: 16px;
          color: #fff;
  letter-spacing: 1px;
  cursor: pointer;
  width: 100%;
  max-width: 200px;
}

/* Responcive css Start */

@media (max-width: 991px) {
  .sec-pad {
    padding: 20px 0 0px;
  }

  .contact-sec .contact-ul li,
  .contact-ul b {
    font-size: 18px;
  }

  .contact-sec .contact-ul i {
    font-size: 14px;
    padding: 6px;
    margin-right: 6px;
  }

  .inptFld {
    height: 40px;
    margin: 0 0 10px;
    padding: 0 14px;
    font-size: 14px;
  }
}

@media (max-width: 767px) {
  .contact-detail span {
    width: auto;
  }
  .contact-detail span a {
    font-size: 18px;
    padding: 5px 10px;
    color: #000;
    border-radius: 50%;
    margin: 0px 5px 20px;
  }
}

@media (max-width: 575px) {
  .section-title {
    font-size: 26px;
    font-weight: 500;
  }
  .contact-sec {
    border-radius: 10% 10% 0% 0% / 5% 5% 0% 0%;
  }

  .contact-sec .contact-ul i {
    border: none;
  }
  .inptFld {
    height: 36px;
    margin: 0 0 8px;
    padding: 0 14px;
    font-size: 14px;
  }
}

@media (max-width: 480px) {
  .contact-sec .contact-ul li,
  .contact-ul b {
    font-size: 16px;
  }
}

    
    
    
    </style>
</head>
<body>

<section class="contact-sec sec-pad">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
       <h1 class="section-title"> Apply for Web Development Internship </h1>
        <form action="#" class="contFrm" method="POST">
          <div class="row">
               
            <div class="col-sm-12">
              <input type="text" name="name" placeholder="Name" class="inptFld" required />
            </div>
              <div class="col-sm-12">
              <input type="text" name="degree" placeholder="Degree" class="inptFld" required />
            </div>
              <div class="col-sm-12">
              <input type="tel" name="mobile" placeholder="Mobile no. " class="inptFld" required />
            </div>

            <div class="col-sm-12">
              <input type="email" name="email" placeholder="Email Address" class="inptFld" required />
            </div>

            <div class="col-sm-12">
              <input type="textclass="inptBtn"" name="refer" placeholder="refrence" class="inptFld" required />
            </div>

            <div class="col-sm-12">
              <input type="text" name="jobprofile" placeholder="Job Profile" class="inptFld" required />
            </div>

            

            <div class="col-6">
              <input type="submit" name="submit" value="SUBMIT" class="inptBtn" />
            </div>
            
            <div class="col-6">
             <button class="inptBtn"><a href="status.php"> CHECK STATUS</a></button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div style="text-align: center; margin-top: 20px;">
      <p> Copyright &copy;
        <script>
          document.write(new Date().getFullYear());
        </script>
        All rights reserved | Ritesh Ranjan
      </p>
    </div>

  </div>
</section>

</body>
</html>




<?php
include 'connection.php';

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $degree = $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $jobprofile = $_POST['jobprofile'];
    
    
  $insertquery = " INSERT INTO `job_resigration`( `NAME`, `DEGREE`, `MOBILE`, `EMAIL`, `REFER`, `JOB POST`) VALUES ('$name',' $degree','$mobile','$email','$refer','$jobprofile')  ";
    
    $res = mysqli_query($conn, $insertquery);

// Check connection
if ($res) {
    
    ?>
    
  <script> 
      alert("Connected sucessfully");
  </script>
  
  <?php
}else{
    
    ?>
<script> 
      alert("Connection fail");
  </script>
  
      <?php 
    
    
    
    
}

  
    
    
}



?>