<?php

$insert = false;

if(isset($_POST['firstname']) ){

   // Set connection variables

   $server = "localhost";
   $username = "root";
   $password = "";

  

   // Create a database connection

   $con = mysqli_connect($server, $username, $password);

   // Check for connection success
   if(!$con){
       die("connection to this database failed due to" . mysqli_connect_error());
   }
   // echo "Success connecting to the db";

   // Collect post variables

   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $gender = $_POST['gender'];
   $dob = date('d-m-y', strtotime($_POST['dob']));
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $pincode = $_POST['pincode'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $Xpercentage = $_POST['Xpercentage'];
   $XIIpercentage = $_POST['Xpercentage'];
   $hobbies  = $_POST['hobbies'];
   $cfa = $_POST['cfa'];


   $sql = "INSERT INTO `form4`. `form` ( `firstname`, `lastname`, `gender`, `dob`, `email`, `phone`, `address`, `pincode`, `city`, `state`, `country`, `Xpercentage`, `XIIpercentage`, `hobbies`, `cfa`) 
   VALUES ('$firstname', '$lastname', '$gender', '$dob', '$email', '$phone', '$address', '$pincode', '$city', '$state', '$country', '$Xpercentage', '$XIIpercentage', '$hobbies', '$cfa');";

   // Execute the query
   if($con->query($sql) == true){
       // echo "Successfully inserted";

       // Flag for successful insertion.
       $insert = true;
   }
   else{
       echo "ERROR: $sql <br> $con->error";
   }

   // Close the database connection
   $con->close();
}
?>  




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
       integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="">


   <style>
       button {
           cursor: pointer;
       }

       .submitmsg {
           color: green;
           font-size: 25px;
       }
   </style>

</head>

<body>
   <!-- <div class="imgBx">
       <img src="" alt="">
   </div> -->

   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-6 offset-md-1">
               <div class="signup-form">
                   <form action="index.php" method="post" class="mt-5 border p-4 bg-light shadow">
                       <h2 class="mb-5 text-secondary">Sign Up Form</h2>
                       <p>Enter your details and submit this form  </p>
                       <?php
                           if($insert == true){
                               echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you. </p>";
                           }

                       ?>
                       <div class="">
                           <div class="mb-3 col-md-6">
                               <label>First Name:<span class="text-danger">*</span></label>
                               <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter First Name">
                           </div>
                       </div>
                       <div>
                           <div class="mb-3 col-md-6">
                               <label>Last Name:<span class="text-danger">*</span></label>
                               <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Last Name">
                           </div>
                       </div>


                       <div>
                           <span>Gender:</span>
                           <br><br>
                           <div class="form-check" name="gender">
                               <input class="form-check-input" type="radio" name="gender" id="gender">
                               <label class="form-check-label" for="gender">
                                   Male
                               </label>
                           </div>
                           <div class="form-check" name="gender">
                               <input class="form-check-input" type="radio" name="gender" id="gender">
                               <label class="form-check-label" for="gender">
                                   Female
                               </label><br><br>
                           </div>
                       </div>

                       <div>
                           <div class="dob" name="dob">

                               <label for="">Date of Birth</label>
                               <input type="date" name="dob" />
                               <br><br>

                           </div>
                          
                           <br><br>

                       </div>
                       <div class="mb-3 col-md-6 col-lg-6">
                           <label>Email Id:<span class="text-danger">*</span></label>
                           <input type="text" name="email" class="form-control" placeholder="youremail@gmail.com">

                       </div>
                       <div class="mb-3 col-md-6 col-lg-6">
                           <label>phone:<span class="text-danger">*</span></label>
                           <input type="text" name="phone" class="form-control" placeholder="Mobile Number">
                       </div>
                       <div class="mb-3 col-md-6 col-lg-6">
                           <label>Address:<span class="text-danger">*</span></label>
                           <input type="text" name="address" class="form-control" placeholder="">
                       </div>
                       <div class="mb-3 col-md-6 colo-lg-6">
                           <label>City<span class="text-danger">*</span></label>
                           <input type="text" name="city" class="form-control" placeholder="">
                       </div>
                       <div class="mb-3 col-md-6 col-lg-6">
                           <label>Pincode:<span class="text-danger">*</span></label>
                           <input type="text" name="state" class="form-control" placeholder="">
                       </div>

                       <div class="mb-3 col-md-6 col-lg-6">
                           <label>State:<span class="text-danger">*</span></label>
                           <input type="text" name="pincode" class="form-control" placeholder="">
                       </div>
                       <div class="mb-3 col-md-6 col-lg-6">
                           <label>Country:<span class="text-danger">*</span></label>
                           <input type="text" name="country" class="form-control" value="India" readonly="readonly">
                       </div>

                       <div class="mb-3 col-md-6 col-lg-6">

                           <label>Class X percentage:<span class="text-danger">*</span></label>
                           <input type="text" name="Xpercentage" class="form-control" placeholder="">



                       </div>

                       <div class="mb-3 col-md-6 col-lg-6">
                           <label>Class XII percentage:<span class="text-danger">*</span></label>
                           <input type="text" name="XIIpercentage" class="form-control" placeholder="">
                       </div>

                       <div>
                           <br><br>
                           <span>Hobbies:</span>
                           <br><br>
                           <div class="form-check" >
                               <input class="form-check-input" type="radio" name="btn1" id="flexRadioDefault1">
                               <label class="form-check-label" for="flexRadioDefault1">
                                   Drawing
                               </label>
                           </div>
                           <div class="form-check">
                               <input class="form-check-input" type="radio" name="btn1" id="flexRadioDefault2" checked>
                               <label class="form-check-label" for="flexRadioDefault2">
                                   Singing
                               </label>
                           </div>
                           <div class="form-check">
                               <input class="form-check-input" type="radio" name="btn1" id="flexRadioDefault2" checked>
                               <label class="form-check-label" for="flexRadioDefault2">
                                   Dancing
                               </label>
                           </div>
                           <div class="form-check">
                               <input class="form-check-input" type="radio" name="btn1" id="flexRadioDefault2" checked>

                               <label class="form-check-label" for="flexRadioDefault2">
                                   Sketching
                               </label>
                           </div>
                           <div class="form-check">
                               <input class="form-check-input" type="radio" name="btn1" id="flexRadioDefault2" checked>

                               <label class="form-check-label" for="flexRadioDefault2">
                                   Others
                               </label>
                               <br><br>

                           </div>
                       </div>



                       <div class="mb-3 col-md-6 col-lg-6" >
                           <span>Courses Applied For:</span><br><br>
                           <div class="form-check-1" name="cfa">
                               <input class="form-check-input" type="radio" name="cfa" id="cfa">
                               <label class="form-check-label" for="flexRadioDefault1">
                                   BCA
                               </label>
                           </div>
                           <div class="form-check" name="cfa">
                               <input class="form-check-input" type="radio" name="cfa" id="cfa" checked>
                               <label class="form-check-label" for="flexRadioDefault2">
                                   B.Com
                               </label>
                           </div>
                           <div class="form-check" name="cfa">
                               <input class="form-check-input" type="radio" name="cfa" id="cfa" checked>
                               <label class="form-check-label" for="flexRadioDefault2">
                                   B.Sc
                               </label>
                           </div>
                           <div class="form-check" name="cfa">
                               <input class="form-check-input" type="radio" name="cfa" id="cfa" checked>
                               <label class="form-check-label" for="flexRadioDefault2">
                                   B.A
                               </label>
                           </div>


                           <br><br>
                       </div>

                       <div class="mb-3 col-md-8 col-lg-6">
                           <button type="btn"  class="btn btn-outline-dark">Submit</button>  
                           <!-- name="save" -->

                       </div>

                       <!-- <div class="submitmsg">
                           <p >Thank you for submitting this form</p>
                       </div> -->














                   </form>
               </div>


           </div>
           


       </div>





   </div>
      <!-- </div>
      </div> -->
      <!-- <script src="js/bootstrap.bunlde.min.js"> -->

       <!-- </script> -->



</body>

</html>









