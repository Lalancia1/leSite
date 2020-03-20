<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Contacts | Up To Fourmies</title>

    <?php require_once 'meta_css.php'; ?>

</head>
<body id="menu">
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>
<?php include "sitedelapromo.php"; ?>

<div class="container-fluid" id="groupe">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="container-titre" id="container-titre-contact">
                <div class="row">
                    <h1><i>#</i> CONTACTS </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container">
    <div class="row ml-1 mr-1">
        <div class="col-sm-3"></div>
        <!-- Div Titre Nous Contacter-->
        <div class="col-sm-6 text-center mb-5 mt-5 programme">
            <h2 class="color h2_inherit">NOUS CONTACTER</h2>
        </div>
        <div class="col-sm-3"></div>
    </div>
    <?php

    if (empty($_POST['Nom']) && empty($_POST['emai1']) && empty($_POST['msg'])) {

        echo '<form class="col-sm-6" id="formulaire" method="post" action="contacts.php">

    <div class="form-group">
        <label for="Nom">Nom et Prénom</label>
            <input type="text" class="form-control" id="Nom" name="Nom" placeholder="Entrer ici votre nom et prénom">
        <label for="emai1">Adresse Email</label>
            <input type="email" class="form-control" id="emai1" name="emai1" placeholder="Entrer ici votre adresse mail">

        <label for="Objet">Objet</label>
            <input type="text" class="form-control" id="Objet" name="Objet" placeholder="Entrer ici l\'objet de votre message">
        <label for="msg" >Message</label>
            <textarea id="msg" name="msg" class="form-control" rows="3" placeholder="Entrer ici votre message"></textarea>

        <div class="col-sm-2" id="boutonEnvoi">
            <input type="submit" class="btn btn-primary envoi" value="Envoyer">
        </div>
    </div>

</form>';
    } else {


        require_once 'vendor/autoload.php';
        // SMTP


        // Create the Transport
        $transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');
        //  $transport = new Swift_SmtpTransport('localhost', 25);


        // Instance Swiftmailer
        $instance_swiftmailer = new Swift_Mailer($transport);


        // Instance message
        $message = new Swift_Message();
        $message->setSubject($_POST['Objet']);



        $message->setFrom(['noreply@uptofourmies.fr' => 'Simon']);
        $message->setReplyTo([$_POST['emai1'] => $_POST['Nom']]);
        $message->setTo(['simonstien85@gmail.com' => 'Simon Stien']);
        $message->setBody($_POST['msg']);
        $body_html = nl2br($_POST['msg']);
        $message->addPart($body_html, 'text/html');



        if ($instance_swiftmailer->send($message)) {
            echo "<p>Nous avons bien reçu votre demande et y répondrons dans les plus brefs délais.</p>";
        } else {
            echo "<p>Une erreur s'est produit lors de l'envoie du message, veuillez envoyer votre demande dans quelques instants.</p>";
        }




        $transport_retour = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');
      	$instance_swiftmailer_retour = new Swift_Mailer($transport_retour);
      	$message_noreply = "\n\nNe repondez pas à ce message, il s'agit d'un email automatique";
      	$message_retour = "Bonjour " . $_POST['Nom'] . ",\nNous avons bien reçu votre demande d'information. Nous y répondrons dans les plus brefs délais.\n\nBien cordialement,\n\nL'équipe UpTo";
      	$message_html = nl2br($message_retour);




      	$message_retour.=$message_noreply;
      	$msg_retour = new Swift_Message();
      	$msg_retour->setSubject('Accusé de reception de votre demande');
      	$msg_retour->setFrom(['noreply@uptofourmies.fr' => 'Simon']);
      	$msg_retour->setTo([$_POST['emai1'] => $_POST['nom']]);
      	$msg_retour->setBody($message_retour);
      	$message_noreply = "<br><br><i>Ne repondez pas à ce message, il s'agit d'un email automatique</i>";
      	//$body_html_retour = nl2br($message_retour);
      	$body_mail_retour = $message_html;
      	$body_mail_retour.=$message_noreply;
      	$msg_retour->addPart($body_mail_retour, 'text/html');
      	$instance_swiftmailer->send($msg_retour);

    }
    ?>

    <div class="row ml-1 mr-1 mt-5">
        <div class="col-sm-3"></div>
        <!-- Div Titre Nos Renseignements -->
        <div class="col-sm-6 text-center mb-4 mt-5 programme">
            <h2 class="color h2_inherit">NOS RENSEIGNEMENTS</h2>
        </div>
        <div class="col-sm-3"></div>
    </div>

    <div id="renseignements">
        <div id="contacter" class="row justify-content-center">

            <div class="col-md-4 text-center" id="adresse2">
                <h5><b>UP TO FOURMIES</b></h5><br>
                <div class="info">
                    UpToFourmies <br>
                    5 rue Arlette Corrente <br>
                    59610 Fourmies <br>
                </div>
            </div>
            <div id="adresse" class="col-md-4">
                <h5><b>FACE Thierache</b></h5><br>
                <div class="info">
                    Siège sociale : Face Thiérache <br>
                    2 Rue du Général Raymond Chomel <br>
                    59610 FOURMIES<br>
                    Du lundi au vendredi de 9h à 17h <br>
                    Tel: 03 27 57 55 17 <br>
                    mail: contact@facethierache.fr<br>
                </div>
            </div>
            <div id="map" class="col-md-4">
                <iframe id="iframe"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.4942521083353!2d4.029901115636413!3d50.02083387941851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2747b555b139b%3A0x5a4cc7aaeb54bcc6!2s2+Rue+du+G%C3%A9n%C3%A9ral+Raymond+Chomel%2C+59610+Fourmies!5e0!3m2!1sfr!2sfr!4v1544432954053">
                </iframe>
            </div>
        </div>
    </div>

</section>

<div id="partages" class="container">
    <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=https://uptofourmies.fr/"
       data-size="large">
        <img id="twitter" src="image/twitter_optimiser.png" alt="Logo Twitter"></a>
    <div class="fb-share-button" data-href="https://uptofourmies.fr/" data-layout="button_count" data-size="small"
         data-mobile-iframe="true">
        <a target="_blank"
           href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fuptofourmies.fr%2F&amp;src=sdkpreparse"
           class="fb-xfbml-parse-ignore">Partager</a>
    </div>
</div>

<?php require_once 'footer.php'; ?>
<script src="jquery.js"></script>
<script src="script.js"></script>
</body>
</html>
