<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="cisse sidick">
    <meta name="generator" content="Hugo 0.84.0">
    <title>La page de candidature</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
    <link rel="icon" href="../images/Canal-Logo-1995.png" type="image/x-icon">
    <link rel="stylesheet" href="fichier.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
    body {
        background: url('../images/recrutement.jpeg') no-repeat center center fixed;
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

    .myform {
        background: white;
        width: 55%;
        padding: 25px;
        border-radius: 20px;
        margin: 50px auto;
    }

    @media (max-width: 992px) {
        .myform {
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
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

</head>

<body>
    <?php include('menu.php'); ?>
    <div class="container">
        <br>
        <div class="myform">
            <form id="candidatureForm" name="candidatureForm" method="post" enctype="multipart/form-data" action="ajoutercandidature.php">
                <div class="row">
                    <div class="form-group col-6">
                        <label>Prénom:</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom">
                    </div>
                    <div class="form-group col-6">
                        <label>Nom:</label>
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Date de naissance:</label>
                        <input type="date" name="date" id="date" class="form-control" placeholder="Date de naissance">
                    </div>
                    <div class="form-group col-6">
                        <label>Genre:</label>
                        <select name="genre" class="form-control">
                            <option>Femme</option>
                            <option>Homme</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-6">
                        <label>Téléphone:</label>
                        <input type="number" name="telephone" id="tel" class="form-control" placeholder="Téléphone">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Poste:</label>
                        <select name="poste" class="form-control">
                            <option>Conseiller client</option>
                            <option>Télé conseiller</option>
                            <option>VAD</option>
                            <option>Service technique</option>
                            <option>Logistique</option>
                            <option>Comptabilité</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label>Niveau:</label>
                        <select name="niveau" class="form-control">
                            <option>Bepc</option>
                            <option>Bac</option>
                            <option>Bac+1</option>
                            <option>Bac+2</option>
                            <option>Bac+3</option>
                            <option>Bac+4</option>
                            <option>Bac+5</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="file">CV:</label>
                        <input type="file" name="cv" id="cv" class="form-control" placeholder="CV">
                    </div>
                    <div class="form-group col-6">
                        <label for="file">Lettre De Motivation:</label>
                        <input type="file" name="lettre" id="lettre" class="form-control" placeholder="Lettre De Motivation">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-6">
                        <input type="submit" id="soumettre" class="btn btn-success" value="soumettre">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
    document.querySelector('#soumettre').onclick = function() {
        var prenom = document.querySelector('#prenom').value,
            nom = document.querySelector('#nom').value,
            date = document.querySelector('#date').value,
            email = document.querySelector('#email').value,
            tel = document.querySelector('#tel').value,
            niveau = document.querySelector('#niveau').value,
            cv = document.querySelector('#cv').value,
            lettre = document.querySelector('#lettre').value,
            poste = document.querySelector('#poste').value;
        if (prenom == "" || nom == "" || date == "" || email == "" || tel == "" || niveau == "" || cv == "" ||
            poste == "" || lettre == "") {
            alert("vérifier que vous avez bien remplis tous les champs !");
            return false;
        } else return true;
    }
    </script>

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
