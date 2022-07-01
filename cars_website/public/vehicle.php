<?php
require_once "../cars/DAOCars.php";
$dao = new DAOCars();
$car=$dao->selectCar($id);
$pictures=$dao->selectPictures($id);
$car=isset($car)?$car:null;
if($car!=null){



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobili Živanović</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/v-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    
     
<header class="header">
    
<a href="../cars/?action=homepage"><img class="logo" src="../images/logo.gif"></a>
    <div id="menu-btn" class="fas fa-bars fa-lg"></div>
   <nav class="navbar">
       <a href="../cars/?action=homepage">Početna</a>
       <a href="../cars/?action=vehicles">Automobili</a>
       
       <a href="../cars/?action=aboutus">O nama</a>
        <a href="../cars/?action=contact">Kontakt</a>
   
   </nav>
   </header>


   
<div class="car">
    <h1> <?php echo $car["manufacturer"] . ' ' . $car["name"]; ?></h1>
     <div class="main-picture">
<img src="<?php echo $car["picture"]; ?>">
    </div>
    <div class="car-pictures">
    <img src="<?php echo $pictures["pic1"]; ?>" onclick="carouselFunc('<?php echo $pictures['pic1']; ?>')">
    <img src="<?php echo $pictures["pic2"]; ?>" onclick="carouselFunc('<?php echo $pictures['pic2']; ?>')">
    <img src="<?php echo $pictures["pic3"]; ?>" onclick="carouselFunc('<?php echo $pictures['pic3']; ?>')">
    <img src="<?php echo $pictures["pic4"]; ?>" onclick="carouselFunc('<?php echo $pictures['pic4']; ?>')">
    <img src="<?php echo $pictures["pic5"]; ?>" onclick="carouselFunc('<?php echo $pictures['pic5']; ?>')">
    <img src="<?php echo $pictures["pic6"]; ?>" onclick="carouselFunc('<?php echo $pictures['pic6']; ?>')">
    <img src="<?php echo $pictures["pic7"]; ?>" onclick="carouselFunc('<?php echo $pictures['pic7']; ?>')">
    <img src="<?php echo $pictures["pic8"]; ?>" onclick="carouselFunc('<?php echo $pictures['pic8']; ?>')">
    <img src="<?php echo $pictures["pic9"]; ?>" onclick="carouselFunc('<?php echo $pictures['pic9']; ?>')">
    <img src="<?php echo $pictures["pic10"]; ?>" onclick="carouselFunc('<?php echo $pictures['pic10']; ?>')">
    
</div>
 <h1> Karakteristike </h1>
 <div class="car-characteristics">
<div class= "car-c1">
            Godište: <span class="vehicle-age"><?php echo $car["age"]; ?></span> <br>
            Kilometraža: <?php echo $car["mileage"]; ?><br>
            Broj vrata: <?php echo $car["doors_num"]; ?><br>
            Broj sedišta: <?php echo $car["seats_num"]; ?><br>
            Gorivo: <?php echo $car["motor"]; ?><br>
</div>   

<div class="car-c2">
            Kubikaža: <?php echo $car["tank"]; ?><br>
            Karoserija: <span class="vehicle-type"><?php echo $car["body"]; ?></span><br>
            Snaga motora: <?php echo $car["power"]; ?><br>
            Boja: <?php echo $car["color"]; ?><br>
</div>
</div>
</div>


<footer class="footer">
<div class="footer-row">
    <div class="footer-col col1">
    <img class="logo" src="../images/logo.gif">
</div>
<div class="footer-col col2">
    <a href="https://facebook.com/"><i class="fa-brands fa-facebook fa-2x"></i></a>
    <a href="https://instagram.com"><i class="fa-brands fa-instagram fa-2x"></i></a>
</div>
</div>
</footer>




<script src="../js/script.js"></script>


<?php } ?>    

</body>
</html>