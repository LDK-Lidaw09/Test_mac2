<?php
session_start();
require_once ("../autoload.php");
if(!isset($_SESSION['login'])){
    //Si la variable session n'a pas été créee
    header("location:index.php");
    exit();
}
//Récupération des données par la méthode POST
$nom=$_POST['name'];
$prenom=$_POST['firstname'];
$email=$_POST['email'];
$telephone=$_POST['phone'];
$addr=$_POST['add'];
$code_postal=$_POST['code'];
$ville=$_POST['ville'];
$comment=$_POST['comment'];
$id=$_POST['id'];
//creation d'un userDAO
$userDAO = UserDAO::getInstance();
//creation d'un user
$user = new User($id);
//affection des differents valeurs reçue aux proprietes de l'objet user
$user->setNom($nom);
$user->setPrenom($prenom);
$user->setEmail($email);
$user->setTelephone($telephone);
$user->setAdresse($addr);
$user->setCodePostal($sexe);
$user->setVille($ville);
$user->setComment($comment);

//modifier les informations de l'utilisateur avec la methode update de l'objet UserDAO
$modif = $userDAO->update($user);
//modification reussi
if($modif){
    //redirect
    header("location:liste_user.php");
    exit();
}
//echec de la modification
else{
    echo"<h2>echec de la modification des informations du user :)</h2>";
}


