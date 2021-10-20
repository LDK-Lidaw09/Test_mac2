<?php
require_once ('./autoload.php');
//Récupération des données par post
$nom=htmlentities($_POST['name']);

$prenom=htmlentities($_POST['firstname']);

$email =htmlentities($_POST['email']);

$telephone=htmlentities($_POST['phone']);

$addr=htmlentities($_POST['add']);

$code_postal=htmlentities($_POST['code']);

$ville=htmlentities($_POST['ville']);

$comment=htmlentities($_POST['comment']);

//creation d'un userDAO
$userDAO = UserDAO::getInstance();
//creation d'un participant
$user = new User();
//initialisation des proprietes du user
$array = [
    "name" => $nom,
    "firstname" => $prenom,
    "email" => $email,
    "phone" => $telephone,
    "add" => $addr,
    "ville" => $ville,
    "code" => $code_postal,
    "comment" => $comment,
];
//hydrate initalise l'objet 
$user->hydrate($array);

//ajout du user avec la methode insert de l'objet UserDAO
$ajout = $userDAO->insert($user);
//success de l'ajout en base
if($ajout){
    echo"<h2>Merci $nom! Votre inscription a bien &eacute;t&eacute; prise en compte</h2>
    <a href='user.php'>Nouvelle inscription</a>";
}
//echec en cas d'ajout
else{
    echo"<h2>Echec de l'inscription</h2>
    <a href='user.php'>Nouvelle inscription</a>";
}

