<?php
require_once "DAOCars.php";

class ControllerCars{
    public function Homepage(){
        include "../public/homepage.php";
    }
    public function Vehicles(){
        include "../public/vehicles.php";
    }

    public function Vehicle(){
        $id=isset($_GET["id"])?$_GET["id"]:"";
        include "../public/vehicle.php";
    }

    public function UpdateCar(){
        $id=isset($_GET["id"])?$_GET["id"]:"";
        include "../public/editCar.php";
    }
    public function AboutUs(){
        include "../public/aboutus.php";
    }
    
    public function Contact(){
        include "../public/contact.php";
    }

    public function Login(){
        $msg="";
        $dao=new DAOCars();
        $username=isset($_POST["username"])?$_POST["username"]:"";
        $password=isset($_POST["password"])?$_POST["password"]:"";
        $user = $dao->selectPassword($username);
        $passwordCheck=$user["password"];
        if($password==$passwordCheck){
            include "../public/admin.php";
        }
        else{
            $msg="Password or username is not correct!";
            include "../public/login.php";
        }
        
    }

    public function InsertPictures(){
        $msgPics="";
        $dao= new DAOCars();
        $pics_id=$_POST["pics_id"];
        $pic1=isset($_POST["pic1"])?$_POST["pic1"]:" ";
        $pic2=isset($_POST["pic2"])?$_POST["pic2"]:" ";
        $pic3=isset($_POST["pic3"])?$_POST["pic3"]:" ";
        $pic4=isset($_POST["pic4"])?$_POST["pic4"]:" ";
        $pic5=isset($_POST["pic5"])?$_POST["pic5"]:" ";
        $pic6=isset($_POST["pic6"])?$_POST["pic6"]:" ";
        $pic7=isset($_POST["pic7"])?$_POST["pic7"]:" ";
        $pic8=isset($_POST["pic8"])?$_POST["pic8"]:" ";
        $pic9=isset($_POST["pic9"])?$_POST["pic9"]:" ";
        $pic10=isset($_POST["pic10"])?$_POST["pic10"]:" ";
        
        $result=$dao->insertPictures($pics_id,$pic1,$pic2,$pic3,$pic4,$pic5,$pic6,$pic7,$pic8,$pic9,$pic10);
        if($result){
        $msgPics="Uspesno unete slike";
        include "../public/admin.php";
        }

        else{ $msgPics="Greska pri unosu slika. Proverite polja";
        include "../public/admin.php";}
    }

    public function InsertCar(){
        $msgCars="";
        $dao=new DAOCars();
        $id=$_POST["id"];
        $name=$_POST["name"];
        $manufacturer=$_POST["manufacturer"];
        $price=$_POST["price"];
        $age=$_POST["age"];
        $mileage=$_POST["mileage"];
        $doors_num=$_POST["doors_num"];
        $seats_num=$_POST["seats_num"];
        $motor=$_POST["motor"];
        $tank=$_POST["tank"];
        $body=$_POST["body"];
        $power=$_POST["power"];
        $color=$_POST["color"];
        $state=$_POST["state"];
        $picture=$_POST["picture"];
        $pictures_id=$_POST["pictures_id"];
        $result=$dao->insertCar($id,$name,$manufacturer,$price,$age,$mileage,$doors_num,$seats_num,$motor,$tank,$body,$power,$color,$state,$picture,$pictures_id);
        if($result){
            $msgCars="Uspesno unet automobil";
            include "../public/admin.php";
            }
    
            else{ $msgCars="Greska pri unosu automobila. Proverite polja";
            include "../public/admin.php";}
    }

    public function DeleteCar(){
        $id=isset($_GET["id"])?$_GET["id"]:"";
        $dao=new DAOCars();
        $dao->deleteCar($id);
        include "../public/admin.php";
    }


    public function UpdateCarValues(){
        $msgCars="";
        $dao=new DAOCars();
        $id=$_POST["id"];
        $name=$_POST["name"];
        $manufacturer=$_POST["manufacturer"];
        $price=$_POST["price"];
        $age=$_POST["age"];
        $mileage=$_POST["mileage"];
        $doors_num=$_POST["doors_num"];
        $seats_num=$_POST["seats_num"];
        $motor=$_POST["motor"];
        $tank=$_POST["tank"];
        $body=$_POST["body"];
        $power=$_POST["power"];
        $color=$_POST["color"];
        $state=$_POST["state"];
        $picture=$_POST["picture"];
        $pictures_id=$_POST["pictures_id"];
        $result=$dao->updateCar($name,$manufacturer,$price,$age,$mileage,$doors_num,$seats_num,$motor,$tank,$body,$power,$color,$state,$picture,$pictures_id,$id);
        if($result){
            $msgCars="Uspesno unet automobil";
            include "../public/admin.php";
            }
    
            else{ $msgCars="Greska pri unosu automobila. Proverite polja";
            include "../public/admin.php";}
    }

}

?>