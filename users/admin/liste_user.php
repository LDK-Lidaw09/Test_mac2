<?php
session_start();
require_once ("../autoload.php");
if(!isset($_SESSION['login'])){//Si la variable session n'a pas été créee
    header("location:index.php");
    exit();
}
   //creation d'un userDAO
   $userDAO = UserDAO::getInstance();
   //lister les utilisateurs avec la methode getList()
   $lesuser = $userDAO->getList();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Liste des Utilisateurs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align: center;">Liste des utilisateurs</h1>
<table class="table table-hover">
    
    <thead>
    <tr>
        <th scope="col">Modification</th>
        <th scope="col">Suppression</th>
        <th scope="col">NOM</th>
        <th scope="col">Prénoms</th>
        <th scope="col">E-mail</th>
        <th scope="col">Telephone</th>
        <th scope="col">Adresse</th>
        <th scope="col">Code Postal</th>
        <th scope="col">Ville</th>
        <th scope="col">Commentaire</th>
    </tr>
    </thead>
    <tbody>
    <?php
     foreach($lesuser as $user){
       echo"<tr>
       <td><a href='fiche_user.php?id={$user->getId()}'>Editer</a></td>
       <td><a href='supprim_user.php?id={$user->getId()}'
           onclick=\"return confirm('Voulez vous supprimer {$user->getNom()} ? Oui ou Non?');\">Supprimer</a></td>
           <td scope='row'>{$user->getNom()}</td>
           <td scope='row'>{$user->getPrenom()}</td>
           <td scope='row'>{$user->getEmail()}</td>
           <td scope='row'>{$user->getTelephone()}</td>
           <td scope='row'>{$user->getAdresse()}</td>
           <td scope='row'>{$user->getCodePostal()}</td>
           <td scope='row'>{$user->getVille()}</td>
           <td scope='row'>{$user->getComment()}</td>
            </tr>";
      }
    ?>
    </tbody>
    
</table>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

