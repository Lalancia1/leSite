<?php

    $conn = new mysqli('localhost','root','', 'administration_formation');

#connexion à la base de donnée
    if ($conn->connect_errno) {
        echo "Echec lors de la connexion à MySQL : (" . $conn->db->connect_errno . ") " . $conn->db->connect_error;
    }
if ((isset($nom_apprenant) && isset($prenom_apprenant) && isset($age_apprenant) && isset($specificites_apprenant) && isset($situation_apprenant)
        && isset($cv_apprenant)) && ( empty($nom_apprenant) or empty($prenom_apprenant) or empty($age_apprenant) or empty($specificites_apprenant) or empty($situation_apprenant))) {
    $nom_apprenant = $_POST['nom_apprenant'];
    $prenom_apprenant = $_POST['prenom_apprenant'];
    $age_apprenant = $_POST['age_apprenant'];
    $profession_apprenant = $_POST['profession_apprenant '];
    $specificites_apprenant = $_POST['specificites_apprenant'];
    $situation_apprenant = $_POST['situation_apprenant'];
    $cv_apprenant = $_FILES["cv_apprenant"];

    $req = $conn->query("INSERT INTO dossiers_apprenants_promo1(" .
        "nom_apprenant, prenom_apprenant, age_apprenant,profession_apprenant , specificite_apprenant,situation_apprenant,cv_apprenant " .
        ") VALUES (" .
        "'" . $nom_apprenant . "', " .
        "'" . $prenom_apprenant . "', " .
        "'" . $age_apprenant . "', " .
        "'" . $profession_apprenant . "', " .
        "'" . $specificites_apprenant . "', " .
        "'" . $situation_apprenant . "', " .
        "'" . $cv_apprenant . "', ");


}else{
    echo "elle nexiste pas";
}

