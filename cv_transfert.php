<?php
function cv_transfert(){
    $ret = false;

    $ret = is_uploaded_file($_FILES['cv_apprenant']);

    if (!$ret) {
        echo "Problème de transfert";
        return false;
    } else {
        echo "Le fichier a bien été reçu";

        include ("connexioncv.php");
        $conn = new mysqli('localhost','root','', 'administration_formation');
        $cv_apprenant = file_get_contents ($_FILES['cv_apprenant']);
        echo $cv_apprenant ;
        $nom_apprenant = $_POST['nom_apprenant'];
        $prenom_apprenant = $_POST['prenom_apprenant'];
        $age_apprenant  = $_POST['age_apprenant'];
        $profession_apprenant = $_POST['profession_apprenant '];
        $specificites_apprenant = $_POST['specificites_apprenant'];
        $situation_apprenant = $_POST['situation_apprenant'];
        $cv_apprenant = $_FILES["cv_apprenant"];

        $req = "INSERT INTO dossiers_apprenants_promo1 (" .
            "nom_apprenant, prenom_apprenant, age_apprenant,profession_apprenant, specificites_apprenant,situation_apprenant,cv_apprenant" .
            ") VALUES (" .
            "'" . $nom_apprenant . "', " .
            "'" . $prenom_apprenant . "', " .
            "'" . $age_apprenant . "', " .
            "'" . $profession_apprenant ."',".
            "'" . $specificites_apprenant . "', " .
            "'" . $situation_apprenant . "', " .
            "'" . $cv_apprenant . "', " .

            "'" . addslashes ($cv_apprenant) . "') "; // N'oublions pas d'échapper le contenu binaire
        $ret = mysqli_query ($conn,$req) or die (mysqli_error ($conn));
        return true;

    }
}
?>
