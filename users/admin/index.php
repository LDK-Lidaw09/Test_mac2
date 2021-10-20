<?php
session_start();
if(isset($_SESSION['login'])){
    //Si la variable session a été créee
    header("location:liste_user.php");
    exit();
}
if(isset($_POST['Bconnexion'])){
    require_once("../autoload.php");
    //Recuperation des donnees par la methode POST
    $login=$_POST['login'];
    $mdp=$_POST['mdp'];
    $mdpHash=sha1($mdp);
    //creation d'un admin
    $admin = new Admin();
    //affectation des proprietes (login , mdp) de l'objet admin
    $admin->setLogin($login);
    $admin->setMdp($mdpHash);
    //creation d'un adminDAO
    $adminDAO = AdminDAO::getInstance();
    //resultat de l'authentification
    $auth = $adminDAO->getAuth($admin);
    if($auth->nbl==1){
        //Si l'authentification est correcte
        //Creation d'une variable session
        $_SESSION['login']=$login;
        header("location:liste_user.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Authentification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<h2>Authentification</h2>
<div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputLogin">Login</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPwd">Password</label>
                <input type="text" class="form-control" id="mdp" name="mdp" placeholder="Password" required>
            </div>
        </div>
<div class="field">
    <input id="bouton" type="submit" name="Bconnexion" value="Connexion">
</div>
</form>

</body>
</html>