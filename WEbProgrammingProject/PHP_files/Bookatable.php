<?php
$title = "drinkmenu";
include "header.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS_files/bookatable.css">       
  </head>
          <form action="" method="post">
            <body>   
             <div class="row">
              <h2>Book a table</h2>
             </div>
             <div class="row">
              <div class="col" id="booking" style="background-image: url('../images/istockphoto-1312307362-170667a.jpg')">
              <label for="sel1" class="form-label">Party size</label>
                <select class="form-select form-select-lg mb-5" id="sel1" name="sellist1">
                  <option>1 person</option>
                  <option>2 persons</option>
                  <option>3 persons</option>
                  <option>4 persons</option>
                  <option>+5 persons</option>
                </select>
                <div class="row">
                  <label>Please choose Date and Time</label>
                  <div class="col-xs-4" id="DateandTime">
                    <input class="w-50 " type="date" name="bdate" placeholder="Date" required>
                  </div>
                  <div class="col-xs-4" id="DateandTime">
                    <input  class="w-50" type="time" name="btime" placeholder="Time"  required>
                  </div>
                </div><br><br>
                  <div class="col-xs-6">                  
                    <input class="form-control" type="text" form-select-lg  name="fname" placeholder="Fisrt Name" required>
                  </div>
                  <div class="col-xs-6">   
                    <input class="form-control " type="text" form-select-lg name="lname" placeholder="Last Name" required><br><br>
                  </div>
                    <input class="form-control" type="text" name="email" placeholder="Email" required><br><br>                 
                <div class="row" id="tel">
                    <div class="input-group-prepend w-auto">                        
                        <!-- <span class="input-group-text input-sm bg-secondary"><b>+358</b></span> -->
                        <button type="button" class="btn btn-primary "><b>+358</b></button>
                    </div>
                    <input type="text" class="form-control w-75" placeholder="Mobile Phone" name="phonenumber" required>
                </div> <br><br>                 
                <button type="submit" class="btn btn-primary btn-lg" value="Submit" name="submit">Confirm and Book</button>
          </form>
                <?php
              $reservationcode = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 8)), 0, 8);
              
              if(isset($_POST['submit'])){
                $party_size=$_POST['sellist1'];
                $date=$_POST['bdate'];
                $time=$_POST['btime'];
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $phone_number=$_POST['phonenumber'];
              include 'bookatable-db.php';
              $sql= "insert into reservation (party_size, date, time, fname, lname, email, phone_number, reservationCode) values('$party_size',
              '$date', '$time', '$fname', '$lname', '$email', '$phone_number', '$reservationcode')";
              if ($conn->query($sql)==True){
                  //  echo "Your reservation is done anf your reservation code is $reservationcode";
                  echo "<br><br>".  " <div style ='font:25px Arial,tahoma,sans-serif;color:#F05C25';padding-left: 30px> Your reservation is done and your reservation code is $reservationcode</div>";
              }
              else {
                  echo "Error : please check your information" .$conn->error; 
                  }
                }
              ?>              
              </div>
              <div class="col" id="col2">
                <!-- <img class="image" src="../images/Book2.avif" alt="Moroccan tomato salad">    -->
                <h3><b>Check your reservation here</b></h3>
                <form action="" method="post">
                  <input class="form-control w-50"  type="text" name="checkreservation" placeholder="Your reservation code"><br>
                  <button type="submit" class="btn btn-primary btn-lg" value="check your reservation" name="check">Check</button>
                  <button type="submit" class="btn btn-primary btn-lg" value="delete your reservation" name="delete">Cancel reservation</button>
                </form>
              </div>
              
             </div> 

        





<?php include "footer.php" ?>
         
