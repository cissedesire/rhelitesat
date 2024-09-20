<?php
require_once("identifier.php");
require_once("connexiondb.php");

// Données provenant du formulaire
$dateC = $_POST['datecreation'];
$datedebut = $_POST['debutdeconge'];
$datefin = $_POST['findeconge'];
$typeconge = $_POST['type'];
$justificatif = $_POST['justificatif'];
$nom = $_SESSION['user']['nom'];
$id = $_SESSION['user']['idemp'];

// Calcul de la période
$periode = round((strtotime($datefin) - strtotime($datedebut)) / (60 * 60 * 24));

// Requête préparée
$requete = "INSERT INTO congesdemandes (idconge, datecreation, periode, datedebut, datefin, typeconge, justificatif, nom, idemp) VALUES (NULL, :dateC, :periode, :datedebut, :datefin, :typeconge, :justificatif, :nom, :id)";

$resultat = $pdo->prepare($requete);
$resultat->bindParam(':dateC', $dateC);
$resultat->bindParam(':periode', $periode);
$resultat->bindParam(':datedebut', $datedebut);
$resultat->bindParam(':datefin', $datefin);
$resultat->bindParam(':typeconge', $typeconge);
$resultat->bindParam(':justificatif', $justificatif);
$resultat->bindParam(':nom', $nom);
$resultat->bindParam(':id', $id);

// Exécution de la requête
$resultat->execute();

?>
<html>

<body>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
    swal({
        icon: "success",
        title: "Demande envoyée !",
        text: "Votre demande sera examinée le plus tôt possible !",
        showConfirmButton: true,
        confirmButtonText: "Fermer",
        closeOnConfirm: false
    }).then(function(result) {
        window.location = "profilEmployes.php";
    });
    </script>


</body>

</html>