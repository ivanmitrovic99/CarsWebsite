<?php 
$errorCars=isset($msgCars)?$msgCars:"";
$errorPics=isset($msgPics)?$msgPics:"";
require_once "../cars/DAOCars.php";
$dao = new DAOCars();
$cars=$dao->selectAll();
$cars=isset($cars)?$cars:null;
if($cars!=null){ ?>

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
<br><br><br><br><br><br><br>
<h1>WELCOME ADMIN</h1>


<table class="table">
<tr>
<th>ID</th>
<th>Ime</th>
<th>Marka</th>
<th>Cena</th>
<th>Godiste</th>
<th>Kilometraza</th>
<th>Br. vrata</th>
<th>Br. sed.</th>
<th>Motor</th>
<th>Kubikaza</th>
<th>Karoserija</th>
<th>Snaga motora</th>
<th>Boja</th>
<th>Stanje</th>
<th>Slike id</th>

</tr>
<?php
 foreach ($cars as $car) {?>
		<tr>
			<td><?= $car['id']?></td>
            <td><?= $car['name']?></td>
            <td><?= $car['manufacturer']?></td>
            <td><?= $car['price']?></td>
            <td><?= $car['age']?></td>
            <td><?= $car['mileage']?></td>
            <td><?= $car['doors_num']?></td>
            <td><?= $car['seats_num']?></td>
            <td><?= $car['motor']?></td>
            <td><?= $car['tank']?></td>
            <td><?= $car['body']?></td>
            <td><?= $car['power']?></td>
			<td><?= $car['color']?></td>
            <td><?= $car['state']?></td>
            <td><?= $car['pictures_id']?></td>
            <td><a href="../cars/?action=delete&id=<?= $car['id']?>">IZBRISI</a></td>
			<td><a href="../cars/?action=edit&id=<?= $car['id']?>">IZMENI</a></td>
			
		</tr>
		<?php }?>
	</table>
<br><br><br>
<h1>Dodaj slike automobila</h1><br>
<div class="input-container">
<form action="../cars/?action=insertPics" method="post">
Id:<input type="number" name="pics_id"></input>
<br>Slika:<input type="text" name="pic1"></input>
<br>Slika:<input type="text" name="pic2"></input>
<br>Slika:<input type="text" name="pic3"></input>
<br>Slika:<input type="text" name="pic4"></input>
<br>Slika:<input type="text" name="pic5"></input>
<br>Slika:<input type="text" name="pic6"></input>
<br>Slika:<input type="text" name="pic7"></input>
<br>Slika:<input type="text" name="pic8"></input>
<br>Slika:<input type="text" name="pic9"></input>
<br>Slika:<input type="text" name="pic10"></input>
<br><input type="submit" name="action" value="Insert Pictures"></input>
</form>
 </div>
<br><br>
<?php echo $errorPics;
 ?>

<br><br>
<h1>Dodaj novi automobil</h1><br>

<div class="input-container">
<form action="../cars/?action=insert" method="post">
Id:<input type="number" name="id"></input>
<br>Ime:<input type="text" name="name"></input>
<br>Marka:<input type="text" name="manufacturer"></input>
<br>Cena:<input type="number" name="price"></input>
<br>Godiste:<input type="number" name="age"></input>
<br>Kilometraza:<input type="number" name="mileage"></input>
<br>Br. vrata:<input type="number" name="doors_num"></input>
<br>Br. sed.:<input type="number" name="seats_num"></input>
<br>Motor:<input type="text" name="motor"></input>
<br>Kubikaza:<input type="number" name="tank"></input>
<br>Karoserija:<input type="text" name="body"></input>
<br>Snaga:<input type="number" name="power"></input>
<br>Boja:<input type="text" name="color"></input>
<br>Stanje:<input type="text" name="state"></input>
<br>Glavna slika:<input type="text" name="picture"></input>
<br>ID Slika:<input type="number" name="pictures_id"></input>
<br><input type="submit" name="action" value="Insert Car"></input>
</form></div>
<?php echo $errorCars;
 ?>

<br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>

<footer class="footer" style="position:fixed; bottom:0px;">
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
<?php } ?>



<script src="../js/script.js"></script>




</body>
</html>