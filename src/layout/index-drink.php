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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Sofia+Sans:wght@200&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Home page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="https://png.pngtree.com/png-vector/20220623/ourmid/pngtree-food-logo-png-image_5297921.png" >
    <link rel="stylesheet" href="style.css">
        <link rel="icon" href="https://png.pngtree.com/png-vector/20220623/ourmid/pngtree-food-logo-png-image_5297921.png" >
        <style>
             body {
  background-image: url(images/salad.jpg);
  color: white;
  text-align: center;    
  background-size: cover;
  background-attachment:fixed;
  background-repeat: no-repeat;
  mmargin-top: 90px;
  display: flex;
  flex-flow: column;
  overflow-x: hidden; 
}
#content {
  width: 80%;
  height: 100%;
  margin: 0 auto;
  
}
.top {
  /* margin-left: 10%; */
  height: 100%;
 
  
}
.mt-5 {
  font-size: 17px;
}
#Linediv {
  display: contents;
}
.form-control:active,
.form-control:focus {
  border: none;
  outline: none;
  box-shadow: none;
}
h1 {
  font-family: 'Dancing Script', cursive;
  font-size: 55px;
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
  /* width: 85%; */
  /* margin-left: 135px; */
  position: fixed;
  width: 85%;
  font-weight: bold;
}
#navend {
  border-right: 2px solid gray;
  padding-right: 5px;
}
.dropdown-item {
  font-size: 20px;
}
.navbar li{
  margin-left:5px;
  margin-right:5px;
}
#facebook, #twitter{
  padding-left: 5px;
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
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color:transparent;
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
  background-color: rgb(172, 107, 72);
  height: 100%;
  color: white;
  text-align: center;
  ffont-size: 20px;
  ppadding-left: 5px;
  display: flex;
  padding:0 10% 5px 10%;
}
h3{
  font-family: 'Frutiger', cursive; font-size: 35px;
}
#footer3text {
  padding-left: 12%;
}
#footer2 {
  margin: 0 auto;
  bbackground-color: rgb(49, 44, 44);    
  color: white;
  text-align: center;
  font-size: 19px;
  padding-top: 5px;
  hheight: 270px;
  bbackground-image: url(images/back2.jpeg);
  background-repeat: no-repeat;
  background-size:cover;
}
.carousel-image  {
  height: 308.49px;
  wwidth: 290px;
  background-repeat: no-repeat;
  background-size:cover;
  background-position: center;
}
#Dubai {
  smargin-left: 250px;
}
#footer3 {
  margin: 0 auto;
  vbackground-color: rgb(56, 56, 56);
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
.AppStore {
  width: 100px;
}
#Linediv{ 
  display: block !important;
}

@media (min-width: 1200px){
.container {
  width: 100%;
}
}
@media (max-width: 791px) {
  nav {
    /* margin-top: 20px; */
    /* width: 85%; */
    /* margin-left: 0; */
    position: relative;
    justify-content: center;
}
}

        </style>
        
  </head>
  <body>
    
        <div class="">
       
             <div class="row">
              <div class="col-md-4" id="firstcol">
                <hr class="style1">
              </div>
              <div class="col-md-4">
                <h1>Uzbek Drinks</h1>
              </div>
              <div class="col-md-4" id="firstcol">
                <hr class="style1">
              </div>
             </div> 
            <div class="row" id="content">
                <div class="col-md-3">
                    <p class="mt-5 text-light">Uzbek tea secrets: Every country has its own tea tradition. 
                      In Uzbekistan, this is a special culture. Every Uzbek citizen's day begins and ends with a sip of fragrant tea.
                       After a hot breakfast in the morning, after a high-calorie lunch, dinner, or when guests arrive, tea is an irreplaceable part of a busy day</p>
                </div>
              <div class="col-md-3">               
                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/uzb_tea.jpg" alt="Moroccan tomato salad">
                  <p>Uzbek tea</p>
                  <h2> $6 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/uzb_tea.jpg" alt="Moroccan tomato salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Uzbek tea</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">Traditional Uzbek tea made with love</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>

                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/peache.jpg" alt="Garden salad">
                  <p>Peach juice </p>
                  <h2> $6 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/peache.jpg" alt="Garden salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Peach juice</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">Fresh peach juice</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">                
                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/kiwiberry.jpg" alt="Caesar salad">
                  <p> Kiwi Berry</p>
                  <h2> $6 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/kiwiberry.jpg" alt="Caesar salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Kiwi Berry</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">Fresh kiwi berry juice</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>

                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/tomatoe.jpeg" alt="Spicy Squid Salad">
                  <p>Tomato juice</p>
                  <h2> $6 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/tomatoe.jpeg" alt="Spicy Squid Salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Tomato juice</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">fresh tomatoe juice</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>                
              </div>
              
              <div class="col-md-3"> 
                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/orange.jpg" alt="shanghai salad">
                  <p>Orange juice</p>
                  <h2> $4 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/orange.jpg" alt="shanghai salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">orange Juice</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">chicken, peppers, oranges, onions, wonton strips and cashews</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>

                

                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/apple.jpg" alt="cobb salad">
                  <p>Apple juice</p>
                  <h2> $6 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/apple.jpg" alt="cobb salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start"> Apple juice</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">fresh apple juice</p>
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
                <p style="font-size: 17px;">UZBEKOVKAT is the only international Uzbekistani food restorant in the world.
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
                         
                <div class="col  justify-content-center" id="Dubai" style="width: 270px; height: 300px;">
                  <div id="myCarousel" class="carousel slide justify-content-center" data-ride="carousel" >                  
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active carousel-image">
                        <img src="images/strawberry_cocktail.jpg" alt="Los Angeles" style="width:100%;">
                      </div>
                
                      <div class="item carousel-image">
                        <img src="images/sumalyak.jpg" alt="Chicago" style="width:100%;">
                      </div>
                    
                      <div class="item carousel-image">
                        <img src="images/strawbery.jpg" alt="New york" style="width:100%;">
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