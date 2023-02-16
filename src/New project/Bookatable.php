<?php
$title = "drinkmenu";
include "../layout/header.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
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
h2 , h3 {
  margin-left: 1%;
  color: white !important;
}
#booking {
  margin-left: 1%;
  background-color: rgb(43, 26, 8);
}

        </style>
        
  </head>
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





<?php include "../layout/footer.php" ?>