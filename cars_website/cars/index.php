<?php
require_once "controllerCars.php";
$action=$_REQUEST["action"];
//$action = isset($_REQUEST["action"])?$_REQUEST["action"]:"homepage";
$ct = new ControllerCars();
switch($_SERVER["REQUEST_METHOD"]){
    case "GET":
        switch($action){
            case "homepage":
                $ct->Homepage();
                break;

            case "vehicles":
                 $ct->Vehicles();
                break;
            case "vehicle":
                $ct->Vehicle();
                break;
            case "aboutus":
                $ct->AboutUs();
                break;
            case "contact":
                $ct->Contact();
                break;
            case "delete":
                $ct->DeleteCar();
                break;
            case "edit":
                $ct->UpdateCar();
                break;
        }
    break;

    case "POST":
        switch($action){
            case "login":
                $ct->Login();
                break;
            case "Insert Pictures":
                $ct->InsertPictures();
                break;
            case "Insert Car":
                $ct->InsertCar();
                break;
            case "Update Car":
                $ct->UpdateCarValues();
                break;
        }
    break;
}





?>