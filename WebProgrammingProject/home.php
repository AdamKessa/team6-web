<?php
$title = "Home";
include "header.php" ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styleAsror.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&amp;family=Sofia+Sans:wght@200&amp;display=swap"
        rel="stylesheet">
    <title><?php echo $title  ?></title>

    <link rel="icon" href="https://png.pngtree.com/png-vector/20220623/ourmid/pngtree-food-logo-png-image_5297921.png" >
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<style>
    
/* -----home--- */
body {
  margin: 0;
  padding: 0;
  background-image: url(images/back4.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  padding: 0;
  position: relative;

}

@font-face {
  font-family: 'Inspiration';
  src: url(inspiration.ttf);
}

.Home-page {
  /* background-image: url(images/PH.jpg); */
  background-position: center center;
  min-height: calc(108vh - 50px);
  background-repeat: no-repeat;
  background-size: cover;
  padding: 0;
  position: relative;
}

/* -----cont------ */


.icon
{
  padding-right: 1%;
}

/* .cont>nav>ul>div
{
  
    font-weight: bold;
  display: block;
  color: rgb(255, 255, 255);
  font-size: 15px;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none
}

.cont>nav>ul
{ 
  display: flex;
  float: right;
  position: fixed;
  width: 100%;
  padding-left: 5%; */
  /* padding-left: 100%; */
  /* padding-right: 2%; */
  /* background: linear-gradient(to top, transparent, rgb(0, 0, 0)),
  url("critters.png") ; */

}
/* nav li
{
   margin-top: 20px;
}
.nav-link
{
  margin-top: 20px;
} */

ul {
  
  list-style-type: none;
  padding: 0;
  overflow: hidden;
  
}

li a {
  
  font-weight: bold;
  display: block;
  color: rgb(255, 255, 255);
  font-size: 15px;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


li a:hover {
  color: orange;
}

.active {
  font-size: 14px;
  color: rgb(255, 123, 0);
}

/* ---mid------- */
.mid {
  padding-bottom: 30%;
  align-items: center;
  padding-top: 20%;
  display: block;
  text-align: center;
}

.mid>ul>li {
  color: rgb(255, 255, 255);
  font-weight: bold;
}

.text {
  max-width: 50%;
}

.button {
  
  padding-top: 10px;
}

a.button {

  text-align: center;
  align-items: center;
  color: black;
  font-weight: 700;
  text-decoration: none;
  user-select: none;
  padding: .25em .5em;
  outline: none;
  border: 1px solid rgb(247, 144, 0);
  border-radius: 7px;
  background: rgb(255, 116, 3) linear-gradient(rgb(255, 133, 3), rgb(248, 124, 23));
  box-shadow: inset 0 -2px 1px rgba(0, 0, 0, 0), inset 0 1px 2px rgba(0, 0, 0, 0), inset 0 0 0 60px rgba(255, 255, 0, 0);
  transition: box-shadow .2s, border-color .2s;
}

a.button:hover {
  box-shadow: inset 0 -1px 1px rgba(0, 0, 0, 0), inset 0 1px 2px rgba(0, 0, 0, 0), inset 0 0 0 60px rgba(255, 255, 0, .5);
}

a.button:active {
  padding: calc(.25em + 1px) .5em calc(.25em - 1px);
  border-color: rgba(177, 159, 0, 1);
  box-shadow: inset 0 -1px 1px rgba(0, 0, 0, .1), inset 0 1px 2px rgba(0, 0, 0, .3), inset 0 0 0 60px rgba(255, 255, 0, .45);
}

.row {
  padding-top: 1em;
  display: grid;
  grid-template-columns: 33.3% 33.3% 33.3%;
}

.vert {
  vertical-align: super;
}
/* --------FacTwtr-------- */
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}

.blog
{ border-style: solid;
  border-bottom: 0ch;
  border-left: 0ch;
  border-top: 0ch;
  border-width: 1px;
  margin-bottom: 100px;
  border-color: rgb(253, 253, 253);
}

/* ---US---- */
.US
{ 
  
  background-color: rgb(255, 72, 0);
  
}
.location
{
  display: flex;
  float: left;
}
.info
{ 
  padding: 10%;
  padding-bottom: 0;
}
.info>li
{
  color: white;
  padding: 5px;
}
.location1
{
  display: flex;
  float: left;
}
.info1
{ 
  padding: 10%;
  padding-bottom: 0;
}
.info1>li
{
  color: white;
  padding: 5px;
}
h4
{
  color: rgb(255, 255, 255);
}
.icons>div
{   display: inline-block;
  color: white;
}

.locationul1>ul>li
{
  background-color:rgb(255, 72, 0) ;
}

/*    ================================ */

h3
 { 
    padding: 0;
    margin: 0;
    padding-left: 5%;
    border-style: solid;
    border-width: 1PX;
   border-color: white;
    border-left: 0;
    border-right: 0;
    background: linear-gradient(to left, transparent,rgb(255, 72, 0)),
    url("critters.png") ;
  }
article
{
  
  background-image: url(images/img6.jpg);
  background-position: center center;
  min-height: calc(52vh - 50px);
  background-repeat: no-repeat;
  background-size: cover;
  
}


 article img
 {  
  width: 435px;
  height: 100%;
  overflow: hidden;
  margin: 1px;
  border-style: solid;
 }
.pic-ctn {
  display: flex;
  float: right;
  width: 50vw;
  height: 200px;

}

@keyframes display {
  0% {
    transform: translateX(200px);
    opacity: 0;
  }
  10% {
    transform: translateX(0);
    opacity: 1;
  }
  20% {
    transform: translateX(0);
    opacity: 1;
  }
  30% {
    transform: translateX(-200px);
    opacity: 0;
  }
  100% {
    transform: translateX(-200px);
    opacity: 0;
  }
}

.pic-ctn {
  position: relative;
  width: 100vw;
  height: 300px;
 
}

.pic-ctn > img {
  position: absolute;
  top: 0;
  left: calc(50% - 100px);
  opacity: 0;
  animation: display 10s infinite;
  margin-left: 20%;
}

img:nth-child(2) {
  animation-delay: 2s;
}
img:nth-child(3) {
  animation-delay: 4s;
}
img:nth-child(4) {
  animation-delay: 6s;
}
img:nth-child(5) {
  animation-delay: 8s;
}
/* ------------------------------------- */
p {
  margin-left: 10%;
  margin-top: 4%;
  margin-bottom: 0rem;
}


.MIDLE
{
display: block;
color: rgb(243, 243, 243);
}

.midtext
{
display: flex;
float: left;
}

.FFF
{
width: 30%;
}

/* END MIDLE*/

/* +++++ MOBILEWEB +++++ */

@media(max-width: 700px) {
nav>ul {
    display: flex; 
    flex-direction: column;
}
.US>ul
{
  display: flex; 
  flex-direction: column;
}

}
@media(max-width: 1000px)
{
  .face
  {
    display: none;
  }
    article
    {
        background-image: none;
        padding-left: 0;
    }
article img
{
  display: none; 
}

.FFF
{ 
display: inline;
width: auto;
}
.US
{ 
  border-style: solid;
  background-image: none;
  border-bottom: 0ch;
}
.MIDLE
{
  border-style: solid;
  border-width: 0.5PX;
}
.location
{
  border-style: solid;
  border-bottom: 0ch;
  width: 100%;
  border-left: 0ch;
}
.cont>nav>ul
{
  border-bottom: 0ch;
  position: absolute;
  padding-left: 0;
  background-image: none;
  margin-top: 57%;

}
.face
{
  text-align: center;
 mmargin-bottom: 55%;
}
.MIDLE {
  margin-top: 20%;
}



}
@media(max-width: 500px)
{
  .FFF
  {
    width: auto;
    text-align: center;
  }
}

/* ----- end?---------?*/
</style>
</head>

<body>
   <div>

       <div class="Home-page">
   
           <div class="cont">
   
               
           <div class="mid">
   
   <ul>
<li class="name2" style="font-family: 'Dancing Script', cursive; font-size: 66px; color: rgb(245, 86, 6);">Welcome</li>
      
       <li style="font-size:40PX ;"> RESTAURANT</li>
       <li style="font-size:18PX ; font-weight: normal;"> <span class="vert">__________</span> NEW FLAVOURS
           <span class="vert">__________</span>
       </li>
   </ul>
   <div class="button">
       <a href="#" class="button">BOOK A TABLE</a>

   </div>
</div>

</div>



<div class="MIDLE">
<article>
<h3> YOU DON'T NEED A SILVER FORK TO EAT GOOD FOOD </h3>
 
<div class="pic-ctn">
   <p class="FFF">
    Uzbek cuisine is hearty, rich and delicious. Developed to feed an agrarian society, many of its dishes are packed full of calories once needed to sustain workers in the fields. Recipes are heavy on meat, relying primarily on the fatty sheep that graze in the country's pastureland.
   </p>

    
       <img src="https://attuale.ru/wp-content/uploads/2018/02/7fb0ba22ade79be35017e8a0f07fb089.jpg" alt=""
           class="pic">
       <img src="https://adonius.club/uploads/posts/2022-08/1660181265_66-adonius-club-p-uzbekskoe-blyudo-damlama-krasivo-foto-70.jpg"
           alt="" class="pic">
       <img src="https://avatars.dzeninfra.ru/get-zen_doc/30884/pub_5b0f05cbc3f75e00a7e3e3b0_5b0f15fcd7bf2102f7e242a6/scale_1200"
           alt="" class="pic">
       <img src="https://bystryerecepty.ru/wp-content/uploads/2022/06/blobid1530258764605.jpg" alt="" class="pic">
       <img src="images/sumalyak.jpg" alt="" class="pic">

</div>
</article>
</div>

       <?php include "footer.php" ?>