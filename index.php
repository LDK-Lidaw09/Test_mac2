<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Test_mac - ACCUEIL</title>
</head>

<body>

    <div class="container">

        <div class="pt-5" style="margin-top: 150px">
            <div class="row">
                <div class="container">
                    <h1 class="text-uppercase" style="margin-left: 40%">a propos</h1>
                    <div class="container-fluid">
                        <p style="text-align: center;">
                            BIENVENUE/WELCOME sur notre plateforme !!<br>

                        </p>
                    </div>
                    <hr class="my-5">
                </div>
            </div>
            <div class="col-lg-11 mx-auto">
                <div class="row">
                    <h1 class="text-uppercase" style="margin-left: 40%">Nos profils</h1>
                </div>
                <!--Formulaire d'Inscription-->
                <div class="row py-5">
                    <div class="col-lg-4 mb-1" style="margin-left: 35%;">
                        <figure class="rounded p-3 bg-white shadow-sm">
                            <img src="assets/image.png" alt="" class="w-100 card-img-top">
                            <figcaption class="p-4 card-img-bottom">
                                <h2 class="h5 font-weight-bold mb-2 font-italic">User</h2>
                                <p class="mb-0 text-small text-muted font-italic">Bonjour,vous êtes à la recherche d'une entreprise pour vos projets E-commerce,Gestion et MarKeting? Vous vous trouvez à la bonne adresse. <br> Inscrivez-vous en appuyant sur le boutton ci-dessous</p>
                            </figcaption>
                            <div style="margin-left: 80px" class="container-fluid">
                                <a href="users/user.php" class="btn btn-primary">S'incrire</a>
                            </div>

                        </figure>
                    </div>
                </div>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <script>
            $(function() {
                $(window).on('scroll', function() {
                    if ($(window).scrollTop() > 10) {
                        $('.navbar').addClass('active');
                    } else {
                        $('.navbar').removeClass('active');
                    }
                });
            });
        </script>

</body>


</html>