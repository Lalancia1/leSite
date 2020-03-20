<?php
include ('sitedelapromo.php');
include ('meta_css.php');
?>

<?php
if ( isset($_GET['id']) ){
    $id = intval ($_GET['id']);
    include ("connexioncv.php");

    $conn = new mysqli('localhost','root','', 'administration_formation');

    $req = "SELECT id, nom_apprenant, prenom_apprenant,cv_apprenant " .
        "FROM dossiers_apprenants_promo1 WHERE id = " . $id;
    $ret = mysqli_query ($conn,$req) or die (mysqli_error ($conn));
    $col = mysqli_fetch_row ($ret);
    $requete="SELECT * FROM  dossiers_apprenants_promo1";
    $exec=mysqli_query($conn,$requete);
     while ($ligne = mysqli_fetch_assoc($exec)) {
//mais ta table contiendra les deux promos
//et dans ton select tu selectionneras les eleves promo 1 ou promo 2 en fonction de la page demandée
//sinon oui c'est ça et tu peux utiliser l'id d'un apprenant pour créer un div ayant pour id apprenant_$id par exemple
?>
<div  id="promo1"><a  href="aperçu_des_cv.php?id=$id">  .$id." ".$nom_apprenant."<br></a></div>;

         <?php
     }
?>
    <img alt="" src="dossiers_apprenants_promo1/<?= $ligne['cv_apprenant'] ?>">
<?php
/*********************************************/
    if ( !$col[0] ){
        echo " ce cv  inconnu";
    } else {
        header ("Content-type: " . $col[1]);
        echo $col[2];
    }

} else {
    echo "choisissez un bon cv  svp";
}


?>
//*******************************************
http://www.leSite_apprenant.com:80/emplacement du fichier/vers/monfichier.PHP? clé1=valeur1& clé2=valeur2
//*************************
<script >
    alert('au revoirrrrrrrrr');
  var voir=document.getElementById('promo1');
  voir.addEventListener("click", function(){
 document.location.href= http://www;
      
  });
</script>
