<?php

/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE G�N�R�E EN PHP */

/**
 * Activation des variables de sessions
 */

session_start();

/**
 * Utilisation des caract�res accentu�s
 */
header('Content-Type: text/html; charset=iso-8859-1');

/**
 * Image contenant le code
 */

echo "Veuillez saisir le code de s�curit�";
echo "<br>";
echo "<img src='script-captchas.php' alt='captchas' />";
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Captcha</title>
</head>

<body>
    <form method="post">
        <input type="text" name="code"/><input type="submit" name="valider" value="Valider"/>
    </form>
</body>

</html>

<?php

if (isset($_POST['valider']) AND !empty($_POST['code'])) {
    $code = $_POST['code'];
    if ($code == $_SESSION['code']) {
        echo "Vous avez saisi le bon code";
    }else {
        echo "Le code est incorrect";
    }
}else{
    echo "Le code de securite doit etre imperativement rempli";
}

?>