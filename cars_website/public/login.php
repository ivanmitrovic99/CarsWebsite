<?php $error=isset($msg)?$msg:""; ?>

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
<form action="../cars/?action=login" method="post">
Username:<input type="text" name="username"></input>
<br>Password:<input type="password" name="password"></input>
<br><input type="submit" name="action" value="login"></input>
</form>
<?php echo $error;
 ?>
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




<script src="../js/script.js"></script>




</body>
</html>