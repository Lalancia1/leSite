<?php
require_once "meta_css.php";
require_once "header.php";

?>
<h2>Espace connection</h2>
<form method="post" action="" class="container-presentation">
    <label>
        <span> Votre nom d'utilisateur :<br></span> <input type="text" id="utilisateur" name="utilisateur"  required><br><br>
        <span> Votre mot de passe :<br></span> <input type="password" name="motdepass" id="motdepasse" required><br><br>
        <span><input type="submit"> &emsp;&emsp; <input type="reset"></span>
    </label>
</form>

<?php
require_once "footer.php";

