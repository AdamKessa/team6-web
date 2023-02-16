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
  <style>
  body {
  background-image: url(images/salad.jpg);
  color: white;
  /* text-align: center;     */
  background-size: cover;
  background-attachment:fixed;
  background-repeat: no-repeat;
  mmargin-top: 90px;
  display: flex;
  flex-flow: column;
  overflow-x: hidden; 
}
.image {
  display: block;
  width: 100%;
  height: 100%;
}
h2 , h3 ,label {
  margin-left: 1%;
  color: white !important;
}
#booking {
  margin-left: 1%;
  background-image: url(images/istockphoto-1312307362-170667a.jpg);
  background-size: cover;
  bbackground-attachment:fixed;
  background-repeat: no-repeat;
  
}
.col-xs-6 {
    padding-left: 0 !important;
}
#tel {
    margin-left: 0;;
}
.w-50 {
  height: 35px;
}

 </style>        
  </head>
  <form action="" method="post">
     <body>   
             <div class="row">
              <h2>Book a table</h2>
             </div>
             <div class="row">
              <div class="col" id="booking">
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
                    <input class="w-50 " type="date" name="bdate" placeholder="Date">
                  </div>
                  <div class="col-xs-4" id="DateandTime">
                    <input  class="w-50" type="time" name="btime" placeholder="Time">
                  </div>
                </div><br><br>
                  <div class="col-xs-6">                  
                    <input class="form-control" type="text" form-select-lg  name="fname" placeholder="Fisrt Name                         required" required>
                  </div>
                  <div class="col-xs-6">   
                    <input class="form-control " type="text" form-select-lg name="lname" placeholder="Last Name             required" required><br><br>
                  </div>
                    <input class="form-control" type="text" name="email" placeholder="Email                    required" required><br><br>                 
                <div class="row" id="tel">
                    <div class="input-group-prepend w-auto">                        
                        <!-- <span class="input-group-text input-sm bg-secondary"><b>+358</b></span> -->
                        <button type="button" class="btn btn-primary "><b>+358</b></button>
                    </div>
                    <input type="text" class="form-control w-75" placeholder="Mobile Phone">
                </div> <br><br>                 
                <button type="submit" class="btn btn-primary btn-lg" value="Submit" name="submit">Submit</button>
  </form>
              </div>
              <div class="col" id="">
                <img class="image" src="images/Bookatable.jpg" alt="Moroccan tomato salad">                
              </div>              
             </div> 
        





<?php include "footer.php" ?>
         
