<?php
session_start();
if (isset($_SESSION['erreurLogin']))
    $erreurLogin = $_SESSION['erreurLogin'];
else {
    $erreurLogin = "";
}
session_destroy();
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="cisse sidick">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Connexion</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
    <link rel="stylesheet" href="fichier.css">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
    body {
        background: url('../images/recru.jpeg') no-repeat center center fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
    }

    .container {
        margin-top: 50px;
    }

    h1 {
        text-align: center;
        color: white;
    }

    .loginform {
        background: white;
        width: 55%;
        padding: 25px;
        border-radius: 20px;
        margin: 50px auto;
    }

    @media (max-width: 992px) {
        .loginform {
            width: 90%;
        }
    }

    .container img {
        display: block;
        margin: 0 auto 30px auto;
        width: 120px;
        height: 120px;
    }
    </style>
    <link href="navbar-top.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="../images/Canal-Logo-1995.png" type="image/x-icon">
    <link rel="icon" href="/docs/5.0/assets/img/favicon-s/favicon.ico">

    <meta name="theme-color" content="#7952b3">

</head>

<body>
    <?php include('menu.php'); ?>
    <div class="container">
        <br><br><br><br><br>
        <div class="loginform">
            <form id="loginForm" name="loginForm" method="post" action="seconnecter.php">
                <?php if (!empty($erreurLogin)) { ?>
                <div class="alert alert-danger">
                    <?php echo $erreurLogin; ?>
                </div>
                <?php } ?>
                <div class="row">
                    <div class="form-group col-12">
                        <label>Login:</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <label>Mot de passe:</label>
                        <input type="password" name="motdepasse" class="form-control" placeholder="mot de passe">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-6">
                        <input type="submit" class="btn btn-success" value="Se connecter">
                    </div>
                </div>
                <div class="info">
    <ul class="list-unstyled d-flex justify-content-end mt-4">
        <a style="background: #212121;padding: 10px 18px;text-decoration: none;color: #fff;display: inline-block;margin: 30px 0;border-radius: 5px;"
           href="../pages/accueil.php">Retour</a>
    </ul>
</div>

                <a href="motDepasseoublie.php">Mot de passe oublié?</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-..."
        crossorigin="anonymous">
    </script>
</body>

</html>
