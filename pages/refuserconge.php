<?php
session_start();
if (isset($_SESSION['user'])) {
    require_once("connexiondb.php");
    if (isset($_GET['idemp'])) {
        $id = $_GET['idemp'];
    } else {
        $id = "";
    }

    $requete1 = "select * from employes where idemp='$id'";
    $resultat1 = $pdo->query($requete1);

    if ($employes = $resultat1->fetch()) {
        $email = $employes['email'];

        if (!empty($email)) { // Vérifier si l'email est défini
            $to = $email;
            $subject = "REPONSE SUR LA DEMANDE DE CONGE ";
            $txt = "votre demande de congé a été refusée.";
            $headers = "From: RHPLUS" . "\r\n" . "CC: rhplusentreprise@gmail.com";
            mail($to, $subject, $txt, $headers);
        }
    }

    $requete2 = "delete from congesdemandes where idemp=$id";
    $resultat2 = $pdo->prepare($requete2);
    $resultat2->execute();
}
?>
<html>

<body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    swal({
        icon: "success",
        title: "Bon travail !",
        text: "Le congé a été supprimé avec succès et un message a été envoyé à l'employé (si l'email était défini)!",
        showConfirmButton: true,
        confirmButtonText: "Cerrar",
        closeOnConfirm: false
    }).then(function(result) {
        window.location = "congesdemandes.php";
    });
    </script>
</body>

</html>