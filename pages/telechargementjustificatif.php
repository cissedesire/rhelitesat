<?php
session_start();
if (isset($_SESSION['user'])) {
    require_once("connexiondb.php");

    $requete = "select *from congesdemandes";
    $resultatR = $pdo->query($requete);
    $congesdemandes = $resultatR->fetch();

    $fsize = filesize("../fichier/" . $congesdemandes['justificatif']);
    $path_parts = pathinfo("../fichier/" . $congesdemandes['justificatif']);
    $ext = strtolower($path_parts["extension"]);

    switch ($ext) {
        case "pdf":
            $ctype = "application/pdf";
            break;
        default:
            $ctype = "application/force-download";
    }

    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private", false);
    header("Content-Type: $ctype");
    header("Content-Disposition: attachment; filename=\"" . basename("../fichier/" . $congesdemandes['justificatif']) . "\";");
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: " . $fsize);
    ob_clean();
    flush();
    readfile("../fichier/" . $congesdemandes['justificatif']);
}