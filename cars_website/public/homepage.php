<?php
require_once "../cars/DAOCars.php";
$dao = new DAOCars();
$cars=$dao->selectLimited();
$cars=isset($cars)?$cars:null;
if($cars!=null){



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

<section class="home">
    <h1 class="home-find">
    Pronađite automobil za Vas   
    </h1>
    <img class="home-find" src="../images/hero.webp">
</section>
<h1 class="offer">
    NOVO U PONUDI
</h1>
   <div class="cars cars-sm">
        <div class="car-row car-row-sm">
        <?php foreach($cars as $car){ ?>
            <div class="car-column car-column-sm">
                <img src="<?php echo $car["picture"]; ?>">
                <h3> <?php echo $car["manufacturer"] . ' ' . $car["name"]; ?></h3>
                <h4><?php echo $car["price"]; ?> €</h4>
                <a href="../cars/?action=vehicle&id=<?php echo $car["id"]; ?>"> <button class="car-button" >Pogledaj</button></a>
            </div>
        <?php } ?>
          

</div></div>





<div class="newsletter">

    <h1>Budite u toku sa najnovijim ponudama</h1>
    <div class="newsletter-input">
    <input type="email" name="email-newsletter" placeholder="Unesite vaš e-mail ako želite da dobijate vesti od nas" required></input>
   </div>
   <div class="newsletter-send">
   <input type="submit" value="Pošalji"> </input></div>
    <div class="newsletter-img"><img src="../images/newsletter.jpg"><img src="../images/newsletter2.jpg"></div>
</div>

<div class="misc">
    <div class="misc-row">
        <div class="misc-col">
    <a href="../cars/?action=vehicles"><i class="fas fa-car fa-10x"></i></a>
    <h2><?php echo sizeof($cars); ?></h2>        
    <h3>Trenutno na prodaju</h3>
            
        </div>
    <div class="misc-col">
        <i class="fa-solid fa-handshake fa-10x"></i>
        <h2>20</h2>        
    <h3>Prodatih vozila</h3>
     </div>
     <div class="misc-col">
        <a href="../cars/?action=aboutus"><i class="fa-solid fa-user fa-10x"></i></a>
        <h2>O nama</h2>
      </div>
     <div class="misc-col">
        <a href="../cars/?action=contact"><i class="fa-solid fa-phone fa-10x"></i></a>
        <h2>Kontaktirajte nas</h2>
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