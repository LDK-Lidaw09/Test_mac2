<?php
function Email()
{
    $email_a = 'mac2@example.com';
    $email_b = 'mac2';

    if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
        echo "Email address '$email_a' is considered valid.\n";
    }
    if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
        echo "Email address '$email_b' is considered valid.\n";
    } else {
        echo "Email address '$email_b' is considered invalid.\n";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>User Form</title>
</head>

<body>
    <form action="ajout_user.php" method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputFirstName">Prenoms</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prenoms" required>
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" Email() required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputTelephone">Telephone</label>
                <input type="text" name=" phone" class="form-control" id="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="Numero de Téléphone (07-00-00-00-00)" required>
            </div>


        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputAddress">Adresse</label>
                <input type="text" class="form-control" id="Adresse" name="add" placeholder="25 Avenenue..." required>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Code Postal</label>
                <input type="text" class="form-control" id="zipcode" name="code" required>
                <div style="display: none; color: #f55;" id="error-message"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Ville</label>
                <select type="text" class="form-control" id="city" name="ville" required>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputComment">Commentaire</label>
            <textarea class="form-control" class="form-control" id="Commentaire" name="comment" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="valider">Valider</button>
    </form>
    <script type="text/Javascript" src="./js/jquery-3.5.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>

</html>