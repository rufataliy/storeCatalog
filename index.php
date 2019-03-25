<?php
  include "./php/stock.php";

  include "./php/collect-and-print-data.php"


// function returnDetails($arr, $id, $details=NULL) {
//
//     for ($i = 0; $i < sizeof($arr); $i++) {
//       if ($id === $arr[$i]["id"]) {
//         $details .= "<div class=\"card\">
//                       <div class=\"card-image\">
//                         <img src=\"{$arr[$i]["thumbnail"]}\">
//
//                       </div>
//                       <div class=\"card-content\">
//                         <span class=\"card-title\">{$arr[$i]["type"]}</span>
//                         <p class=\"price\">{$arr[$i]["price"]}</p>
//                       </div>
//                     </div>
//                   </div>";
//     }
//   }
//
//   return $details;
// }

   ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">


  <title>Document</title>
</head>
<body>

<header>
  <nav class="transparent logo-header no-shadow">
    <div class="nav-wrapper">
      <div class="container">
        <a href="index.php"><img class="brandLogo" src="img/logo.svg" alt=""><span>Laralea</span></a>
        <!-- <span>Laralea</span> -->
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="badges.html">MEN</a></li>
          <li><a href="collapsible.html">WOMEN</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <nav class="transparent menu-nav no-shadow brand-font-color ">
    <div class="nav-wrapper valign-wrapper flex flex-align-between container">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <div class="nav-menu">
        <ul class="right hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <a class='dropdown-trigger btn hover-dark brand-font-color transparent no-shadow' href='#' data-target='dropdown1'>Products<i class="material-icons">arrow_drop_down</i></a>
        <!-- Dropdown Structure -->
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href="./index.php?prod-id=watch">Watches</a></li>
            <li><a href="./index.php?prod-id=belt">Belts</a></li>
            <li><a href="./index.php?prod-id=tie">Ties</a></li>
          </ul>
        </ul>
      </div>
      <div class="account-box">
        <a class="waves-effect waves-light btn light-btn brand-font-color brandBorder hover-dark m-right">LOG IN</a>
        <a class="waves-effect waves-brand btn hover-light brandBgColor">SIGN UP</a>
      </div>
    </div>
  </nav>
  <ul class="sidenav brand-font-color" id="mobile-demo">
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
    <li>
      <a class='dropdown-trigger show-on-small hover-dark brand-font-color transparent no-shadow' href='#' data-target='dropdown2'>Products<i class="material-icons">arrow_drop_down</i></a>
    </li>
    <ul id='dropdown2' class='dropdown-content'>
      <li><a href="./index.php?prod-id=watch">Watches</a></li>
      <li><a href="./index.php?prod-id=belt">Belts</a></li>
      <li><a href="./index.php?prod-id=tie">Ties</a></li>
    </ul>
  </ul>
</header>
  <main>
    <div class="row">
    <div class="col s12 m4 l6">
      <div class="products-tool-bar">sd</div>
        <?php echo $markup; ?>
    </div>
    <div class="col m8 l6 fixed-right hide-on-small-only">

      <div class="card">
        <div class="card-image">
          <img id="show-img" src="
          <?php  if(isset($_GET["prod-sn"])){
            for ($i=0; $i <sizeof($products) ; $i++) {
              if ($_GET["prod-sn"]==$products[$i]["sn"]) {
                 echo $selectedItems[$i]["thumbnail"] ;  ?>">

        </div>
        <div class="card-content">
          <span class="card-title">
                <?php echo $products[$i]["type"];?>
              </span>
          <p><?php echo $products[$i]["price"];?></p>
        </div>
      </div>
      <?php    }
              }
            }
      ?>
    </div>
  </div>
  </main>
  <a href="./index.php?prod-id=watch">Watch</a>
  <a href="./index.php?prod-id=belt">Belt</a>
  <a href="./index.php?prod-id=tie">Tie</a>





  <script
    src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.sidenav').sidenav();
});
 $('.dropdown-trigger').dropdown();
</script>
<script src="js/main.js">

</script>
</body>
</html>
