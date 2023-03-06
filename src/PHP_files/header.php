
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php echo $title ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Sofia+Sans:wght@200&display=swap"
    rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="https://png.pngtree.com/png-vector/20220623/ourmid/pngtree-food-logo-png-image_5297921.png">

  <link rel="stylesheet" href="../layout/CSS_files/header.css">
  <script src="../layout/js/register.js"></script>
  <script src="../layout/js/BookaTable.js"></script>
  


  <link rel="icon" href="https://png.pngtree.com/png-vector/20220623/ourmid/pngtree-food-logo-png-image_5297921.png">

  <style>
    label {
      color: white;
    }
  </style>
</head>

<div class="">
  <div class="top">
    <nav class="navbar navbar-expand-sm navbar-dark fs-3">
      <div class="container-fluid">
        <img class="" src="../layout/images/R3.png" alt="Moroccan tomato salad" width="100px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link nav-link text-light" href="index.php">
                <p style="color: rgb(255, 106, 0);"><b>HOME</b></p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link text-light" href="">ABOUT US</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nav-link text-light" href="#" role="button"
                data-bs-toggle="dropdown">MENU</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-white bg-dark" href="index-food.php">FOOD</a></li>
                <li><a class="dropdown-item text-white bg-dark" href="index-salad.php">SALAD</a></li>
                <li><a class="dropdown-item text-white bg-dark" href="index-drink.php">DRINK</a></li>
                <li><a class="dropdown-item text-white bg-dark" href="ex4.php">Exercise4</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link text-light" href="">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link text-light" href="Bookatable.php">RESERVATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link text-light" href="review.php">REVIEW</a>
            </li>
            <?php
          if(isset($_SESSION['user'])==''):
          ?>
            <li class="nav-item">
              <a class="nav-link nav-link text-light" href="login.php">Login</a>
            </li>
            <?php else:?>
              <li class="nav-item">
              <a class="nav-link nav-link text-light" href="login.php">Log out</a>
            </li>
            <?php endif;?>
            <!-- <li class="nav-item" id="navend">
              <a class="nav-link nav-link text-light" href="">BLOG</a>
            </li> -->
            <li class="nav-item" id="facebook">
              <a class="nav-link nav-link text-light" href="#"><i class="bi bi-facebook"></i></i></a>
            </li>
            <li class="nav-item" id="twitter">
              <a class="nav-link nav-link text-light" href="#"><i class="bi bi-twitter"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
