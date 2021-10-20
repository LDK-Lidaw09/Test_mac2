<?php
session_start();
require_once ("../autoload.php");
if(!isset($_SESSION['login'])){//Si la variable session n'a pas été créee
    header("location:index.php");
    exit();
}
$id = $_GET["id"];
//creation d'un User DAO
$userDAO = UserDAO::getInstance();
//creation d'un participant
$user = new User($id);
//suppression d'un User
$supprime = $userDAO->delete($user);
//suppression reussi
if($supprime){
   //Redirection
   header("location:liste_user.php");
}
//echec de suppression
else{
    echo "Echec de la suppression :)";
}

