<?php
$title = "foodmenu";
include "header.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Sofia+Sans:wght@200&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Home page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="stylefood.css">
        <link rel="icon" href="https://png.pngtree.com/png-vector/20220623/ourmid/pngtree-food-logo-png-image_5297921.png" >
        <style>
            /* -----cont------ */



body{
  background-image: url(images/salad.jpg);
  color: white;
  text-align: center;    
  background-size: cover;
  background-attachment:fixed;
  background-repeat: no-repeat;
  display: flex;
  flex-flow: column;
  overflow-x: hidden; 
}


nav{
  margin: 0;
  
}


.login{
  width: 100px;
}


.top {
  /* margin-left: 10%; */


  
}
.menufood{
  margin-left: 10%;
  margin-right: 10%;
 
}
.mt-5 {
  font-size: 16px;
}
.form-control:active,
.form-control:focus {
  border: none;
  outline: none;
  box-shadow: none;
}
h1{
  margin-top: 10px;
  font-family: 'Dancing Script', cursive; font-size: 40px;
}
.col-md-3 p{
  color:white;
  text-align:center;

}
h2 {
  font-size: 25px !important;
  color:rgb(255, 119, 0) !important;
  text-align: center;
}
a, nav a:visited, nav a:active{
  text-decoration: none; 
  color: rgb(255, 255, 255);
  font-weight: bold;
}
a:hover {
  color: rgb(255, 138, 4);
}
nav {
  /* margin-top: 10px; */
  width: 100%;
  /* margin-left: 135px; */
  /* padding-left: 135%; */
   font-weight: bold;
  background: linear-gradient(to top, transparent, rgb(0, 0, 0)),
  url("critters.png") ;
  border-width: 0;
}
.navbar li{
  margin-left:5px;
  margin-right:5px;
  border-width: 0;
}
#navend {
  border-right: 2px solid gray;
  padding-right: 5px;
}
#facebook, #twitter{
  padding-left: 5px;
}
.dropdown-item {
    font-size: 20px;
}
.navbar
{
  border-width: 0;
}
.modal-footer p, .overlay .btn p {
  padding-top: 6px;
}
/* image hover*/
.imagehover2 {
  position: relative;
  width: 100%;
}

.image2 {
  display: block;
  width: 100%;
  height: 100%;
}
.overlay {
  position:absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color:transparent;
  z-index:1;
}

.imagehover2:hover .overlay {
  opacity: 1;
}

.text2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
#footer1 {
  margin: 0 auto; 
  margin-top: 20px;
  background-color: rgb(172, 107, 72);
  height: 100%;
  color: white;
  text-align: center;
  padding:0 10% 5px 10%;
  ppadding-left: 5px;
}
h3{
  font-family: 'Frutiger', cursive; font-size: 35px;
}
#footer2 {
  margin: 0 auto;
  bbackground-color: rgb(49, 44, 44);    
  color: white;
  text-align: center;
  font-size: 19px;

  hheight: 320px;
  bbackground-image: url(images/back2.jpeg);
  background-repeat: no-repeat;
  background-size:cover;
  
  
}
#Dubai{
  width: 270px; 
  height: 350px;
}

.carousel-inner{
  
  text-align: center;
  height: 360px;
  
}
.carousel-image  {
  position: absolute; 
  
  
  
}
.swipeimage{
  position: relative;
  bottom:20%;
}

.swipeimage1{
  position: relative;
  bottom:10%;
}

#footer3 {
  margin-top: 10px;
  
  abackground-color: rgb(171, 98, 35);
  height: 100%;
  color: white;
  text-align: start;
  font-size: 15px;
  padding-left: 5px;
  padding-top: 15px;
  height: 346px;
  background-image: url(images/back4.jpg);
  background-repeat: no-repeat;
  background-size:cover;
}
hr.style1{
  border-top: 4px solid #fefefe;
}
#firstcol {
  padding-top: 15px;
}

.imagehover2 row mt-5{
  margin-top: 100px;
}
.col-md-6{
  left: 10%;

}


@media (min-width: 1200px){
.container {
  width: 100%;
}
}
@media (max-width: 900px) {
  nav {
    /* margin-top: 20px; */
    width: 100%;
    margin-left: 0;
    position: relative;
    justify-content: center;
}
.swipeimage{
  position: relative;
  bottom: 0%;
}
.swipeimage1{
  position: relative;
  bottom: 0%;
}
#Dubai{
  width: 270px; 
  height: 300px;
}
.carousel-inner{
  
  text-align: center;
  height: 320px;
  
}
}

.AppStore {
  width: 100px;
}
        </style>
  </head>
  <body>
    
       
          

          
             <div class="row">
              <div class="col-md-4" id="firstcol">
                <hr class="style1">
              </div>
              <div class="col-md-4">
                <h1>Uzbek Food</h1>
              </div>
              <div class="col-md-4" id="firstcol">
                <hr class="style1">
              </div>
             </div> 
             <div class="menufood">
            <div class="row" id="content">
                <div class="col-md-3">
                    <p class="mt-5 text-light"> Uzbek food is an intriguing blend of influences, shaped through the centuries by its neighbors and the many traders traveling along the Silk Road.
                      
                      Food is always a fantastic way to experience the local culture. The architecture in Uzbekistan is one of the country’s biggest draws but as this list of tasty Uzbek dishes will show you, so is the food.
                      Freshly butchered meat and locally-grown vegetables feature prominently in the diet of local Uzbek people. Thanks to the abundance of sheep, mutton and lamb are among the most widely consumed meats. 
                      They make their way into many Uzbek recipes though beef, goat, poultry, camel, and horse meat are also common.</p>
                </div>
              <div class="col-md-3">               
                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/food/food1.jpg" alt="Moroccan tomato salad">
                  <p>Uzbek Plov</p>
                  <h2> $14.8 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/food/food1.jpg" alt="Moroccan tomato salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Uzbek Plov</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">No article on Uzbek food can ever be complete without plov, the country’s national dish.</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>

                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/food/food2.jpg" alt="Garden salad">
                  <p>Shivit Oshi</p>
                  <h2> $7.66 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/food/food2.jpg" alt="Garden salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Shivit Oshi</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">It’s traditionally enjoyed topped with a meat and vegetable stew and a side of sour cream or plain yogurt.</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">                
                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/food/food3.JPG" alt="Caesar salad">
                  <p>Shashlik </p>
                  <h2> $8.99/4kpl </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/food/food3.JPG" alt="Caesar salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Shashlik</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">Meat rolls made with ground beef or fatty beef (or lamb) are common, as are skewered and grilled chicken legs.</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>

                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/food/food4.JPG" alt="Spicy Squid Salad">
                  <p>Kazan Kabob</p>
                  <h2> $9.99  </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/food/food4.JPG" alt="Spicy Squid Salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Kazan Kabob</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">It consists of marinated meat like mutton or beef that’s pan-fried first with potatoes before being covered and steamed in a kazan at low heat. </p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>                
              </div>
              
              <div class="col-md-3"> 
                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/food/food5.JPG" alt="shanghai salad">
                  <p>Lagman</p>
                  <h2> $11.95 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/food/food5.JPG" alt="shanghai salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Lagman</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;"> a fried noodle dish.fried meat (usually l mb or beef), garlic, onions, potatoes, carrots, bell peppers, and other vegetables.</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>

                

                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/food/food6.JPG" alt="cobb salad">
                  <p>Shurpa </p>
                  <h2> $10.85  </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/food/food6.JPG" alt="cobb salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Shurpa</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">They can be made in different ways and typically consist of large chunks of meat cooked in a broth with potatoes, different vegetables, herbs, and spices.</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>
              </div>                             
                               
              </div>
            </div>

            <div class="row" id="footer1">
              <div class="col-md-12 " >
                <h3>WHY CHOOSE UZBEKOVKAT:</h3> 
                <p style="font-size: 22px;">UZBEKOVKAT is the only international Uzbekistani food restorant in the world.
                   We decided to take the initiative of making this restorant because we love and value
                   Uzbek foods and delicacies and we would love to share them with the world through our fine salads, drinks and foods.</p>                   
              </div> 
              <div>
                <h4><b>Order anywhere, anytime! download our App</h4> 
                <a href=""><img class="AppStore" src="images/App Store Badge.png" alt="App Store" width="15px"></a> 
                <a href=""><img class="AppStore" src="images/Google Play Store Badge.png" alt="Google Play Store" width="15px"></a> 
              </div>           
            </div>
            <div class="container">
              <div class="row" id="footer2">
                <!-- <div class="col-md-3" id="">
                  <p style="font-size: 22px;">Being a grain-farming country, rice, noodles, and breads are equally vital to Uzbek culture and cuisine. 
                    In fact, plov or Uzbek rice pilaf is the country’s national dish and the most popular food in Uzbekistan.</p>                 
                </div> -->
                <div class="col  justify-content-center" id="Dubai" >
                  <div id="myCarousel" class="carousel slide justify-content-center" data-ride="carousel" >                  
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active carousel-image">
                        <img src="images/food/food7.jpg"  class="swipeimage" alt="Los Angeles" style="width:100%;">
                      </div>
                
                      <div class="item carousel-image">
                        <img src="images/food/food8.jpg" class="swipeimage"  alt="Chicago" style="width:100%;">
                      </div>
                    
                      <div class="item carousel-image">
                        <img src="images/food/food9.jpg" class="swipeimage1" alt="New york" style="width:100%;">
                      </div>
                    </div>            
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>     
              </div>
            </div>  
            
        </div>           
         
           
  
    


<?php include "footer.php" ?>