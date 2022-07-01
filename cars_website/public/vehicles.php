<?php
require_once "../cars/DAOCars.php";
$dao = new DAOCars();
$cars = $dao->selectAll();
$cars= isset($cars)?$cars:null;
if($cars!=null){
$i=0;
$j=0;
$carsManufacturers=Array();
$carsBody=Array();
foreach($cars as $car){
    if(in_array($car["manufacturer"],$carsManufacturers)){

    }
    else{$carsManufacturers[$i]=$car["manufacturer"];
    $i++;}

    if(in_array($car["body"],$carsBody)){

    }
    else{$carsBody[$j]=$car["body"];
    $j++;}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobili Živanović</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/v-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<div class="container">
    
    <h1 class="vehicles-top">Vozila
    </h1>
    <div class="filters">
        

<select class="filter-select" id="marka">
    <option value="">Sve marke</option>
    <?php for($i=0;$i<sizeof($carsManufacturers);$i++){?>
    <option value="<?php echo $carsManufacturers[$i]; ?>"> <?php echo  $carsManufacturers[$i]; ?> </option>
    <?php } ?>
   
</select>


<select class="filter-select" id="karoserija">
<option value="">Sve karoserije</option>
    <?php for($i=0;$i<sizeof($carsBody);$i++){?>
    <option value="<?php echo $carsBody[$i]; ?>"> <?php echo $carsBody[$i]; ?> </option>
    <?php } ?>
    
</select>

<select class="filter-select" id="godiste">
    <option value="all">Sva godišta</option>
    <option value="1"> Pre 2000 </option>
    <option value="2">2000-2010</option>
    <option value="3">2011-2022</option>  
</select>
<select class="filter-select" id="cene">
    <option value="all">Sve cene</option>
    <option value="1">0-1000 </option>
    <option value="2">1000-5000</option>
    <option value="3">5000-10000</option>  
    <option value="4">10000+</option>  
</select>


<button class="filter-search"> Pretraga </button>

    </div>
   
   <div class="vehicle-container">
    <?php foreach($cars as $car) { ?>
    <div class="vehicle" data-name="v1">
        <div class="col lg-left m-left">
        <img src="<?php echo $car["picture"]; ?>">
        <div><a href="../cars/?action=vehicle&id=<?php echo $car["id"];?>"> <button class="showmore" id="showmore-1"> Prikaži još</button><a>
            
        </div>
    </div>
        <div class="col-m">
        <div class="col lg-mid m-mid">
            <div class="desc-1">
        <h3 id="vehicle-manufacturer"> <?php echo $car["manufacturer"] . ' ' . $car["name"]; ?> </h3>
            
            Godište: <span class="vehicle-age"><?php echo $car["age"]; ?></span> <br>
            Kilometraža: <?php echo $car["mileage"]; ?><br>
            Broj vrata: <?php echo $car["doors_num"]; ?><br>
            Broj sedišta: <?php echo $car["seats_num"]; ?><br>
            Gorivo: <?php echo $car["motor"]; ?><br>
            Stanje: <?php echo $car["state"];?>
        </div>
        </div>
        <div class="col lg-right m-right">
            <div class="desc-2">
        <h3>Cena:</h3>
        <h2><span class="price"><?php echo $car["price"]; ?></span> € </h2>
            Kubikaža: <?php echo $car["tank"]; ?><br>
            Karoserija: <span class="vehicle-type"><?php echo $car["body"]; ?></span><br>
            Snaga motora: <?php echo $car["power"]; ?><br>
            Boja: <?php echo $car["color"]; ?><br>
            
            </div>
        </div>
            </div>
    </div>
    <?php } ?>
   </div>
   

</div></div>

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
    
<?php  } ?>
</body>
</html>