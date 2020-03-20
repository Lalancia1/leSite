<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Promotion1 | Up To Fourmies</title>
    <?php require_once 'meta_css.php'; ?>
</head>
<body id="menu">
<div class="container" style="margin-left: 250px; margin-top: 100px">
<?php
//include "header.php"; ?>


    <div >
        <h2 class="section-title" style="">ADMINISTRATION CV PROMO1</h2>
    </div>
    <?php
    include ("cv_transfert.php");
if ((isset($nom_apprenant) && isset($prenom_apprenant) && isset($age_apprenant) && isset($profession_apprenant)  && isset($specificites_apprenant) && isset($situation_apprenant)
&& isset($cv_apprenant)) && ( empty($nom_apprenant) or empty($prenom_apprenant) or empty($age_apprenant) or empty($profession_apprenant) or empty($profession_apprenant) or empty($situation_apprenant)))
{
    echo "nom: " .$nom_apprenant."<br>";

    echo "prenom: " .$prenom_apprenant."<br>";
    echo "age: " .$age_apprenant."<br>";
    echo "specificites: " .$specificites_apprenant."<br>";
    echo "situation: " .$situation_apprenant."<br>";

}

    ?>

    <p><a href="liste_des_cv.php">Liste</a></p>

</div>
</body>
</html>