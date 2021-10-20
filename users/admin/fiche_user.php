<?php
session_start();
require_once ("../autoload.php");
if(!isset($_SESSION['login'])){
    //Si la variable session n'a pas été créee
    header("location:index.php");
    exit();
}
$id = $_GET["id"];
 //creation d'un userDAO
 $userDAO = UserDAO::getInstance();
 //creation d'un user
 $user = new User($id);
 //recuperation des infos d'un user
 $fiche = $userDAO->read($user);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<form method="post" action="modif_user.php">
    <h2>Formulaire d'inscription</h2>
    <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom" value="<?= $fiche->getNom() ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputFirstName">Prenoms</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $fiche->getPrenom() ?>" placeholder="Prenoms" required>
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" Email() value="<?= $fiche->getEmail() ?>"required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputTelephone">Telephone</label>
                <input type="text" name=" phone"class="form-control" id="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="Numero de Téléphone (07-00-00-00-00)" value="<?= $fiche->getTelephone() ?>" required>
            </div>


        </div>
        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputAddress">Adresse</label>
            <input type="text" class="form-control" id="Adresse" name="add" placeholder="25 Avenenue..." value="<?= $fiche->getAdresse() ?>" required>
        </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Code Postal</label>
                <input type="text" class="form-control" id="CodePostal" name="code" value="<?= $fiche->getCodePostal() ?>"required>
                <div style="display: none; color: #f55;" id="error-message"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Ville</label>
                <input type="text" class="form-control" id="inputCity" name="ville" value="<?= $fiche->getVille() ?>"required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputComment" >Commentaire</label>
             <textarea class="form-control"  class="form-control" id="Commentaire" name="comment"  value="<?= $fiche->getVille() ?>"rows="3"></textarea>
        </div>
    <div class="field">
        <input type="hidden" name="id" value="<?= $fiche->getId() ?>">
        <input id="bouton" type="submit" name="bModif" value="Modifier">
    </div>
</form>
</body>
</html>
