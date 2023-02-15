<?php
$title = "saladmenu";
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
  text-decoration: none ; 
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
          
             <div class="row" id="Linediv">
              <div class="col-md-4" id="firstcol">
                <hr class="style1">
              </div>
              <div class="col-md-4">
                <h1>Uzbek Salads</h1>
              </div>
              <div class="col-md-4" id="firstcol">
                <hr class="style1">
              </div>
             </div> 
            <div class="row" id="content">
                <div class="col-md-3">
                    <p class="mt-5 text-light">“Uzbekistan” salad, despite the name, isn’t part of traditional Uzbek 
                      cuisine. Supposedly, it was invented in the 1950s in Moscow when Uzbek chefs tried to
                       introduce Russians to their national cuisine for the first time. It combines Central Asian green radish 
                      with the Russian love of mayonnaise – almost like an Uzbek version of the famous “Olivier” salad. It
                       does look pretty “retro” – it reminds me of something you’d see in 1970s US cookbooks –
                       but trust me, it’s delicious. The green radish is a refreshing complement to the fried onion, mayo,
                       and oven-baked steak.Salads have their own unique taste and aroma.</p>
                </div>
              <div class="col-md-3">               
                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/Moroccan tomato salad - 4$.jpg" alt="Moroccan tomato salad">
                  <p>Garden salad </p>
                  <h2> $4 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/Moroccan tomato salad - 4$.jpg" alt="Moroccan tomato salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Moroccan tomato salad</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p>juicy tomatoes, fresh herbs, and traditional Moroccan spices.</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>

                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/Garden salad - 3$.jpg" alt="Garden salad">
                  <p>Garden salad </p>
                  <h2> $3 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/Garden salad - 3$.jpg" alt="Garden salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Garden salad</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p >red onion, green onion, cucumber, cherry tomatoes, radishes and carrots</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">                
                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/Caesar salad - 6$.jpg" alt="Caesar salad">
                  <p>Garden salad </p>
                  <h2> $3 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/Caesar salad - 6$.jpg" alt="Caesar salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Caesar salad</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p>lettuce, Parmesan cheese, Crisp croutons,Caesar salad dressing</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>

                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/Spicy Squid Salad2 6$.jpg" alt="Spicy Squid Salad">
                  <p>Spicy Squid salad</p>
                  <h2> $6 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/Spicy Squid Salad2 6$.jpg" alt="Spicy Squid Salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Spicy Squid Salad</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p>a spicy, sweet dish made with boiled squid and fresh vegetables</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>                
              </div>
              
              <div class="col-md-3"> 
                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/shanghai salad.jpg" alt="shanghai salad">
                  <p>shanghai salad</p>
                  <h2> $5 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/shanghai salad.jpg" alt="shanghai salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">shanghai salad</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p>chicken, peppers, oranges, onions, wonton strips and cashews</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>

                

                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="images/cobb salad 3$.jpg" alt="cobb salad">
                  <p>cobb salad</p>
                  <h2> $6 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="images/cobb salad 3$.jpg" alt="cobb salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">cobb salad</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p>crispy bacon, hard-boiled eggs, chicken breast and creamy avocado</p>
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
                <div class="col  justify-content-center" id="Dubai" style="width: 270px; height: 300px;">
                  <div id="myCarousel" class="carousel slide justify-content-center" data-ride="carousel" >                  
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active carousel-image">
                        <img src="images/salad5.jpg" alt="Los Angeles" style="width:100%;">
                      </div>
                
                      <div class="item carousel-image">
                        <img src="images/salad6.jpg" alt="Chicago" style="width:100%;">
                      </div>
                    
                      <div class="item carousel-image">
                        <img src="images/salad7.jpg" alt="New york" style="width:100%;">
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