<?php
/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */

echo "<img src='script-captchas.php' alt='captcha' />";

if(!empty($_POST['captcha']) && !empty($_POST['captcha']))
{
  if($_POST['captcha'] == $_SESSION['code'])
  
		echo 'Le captcha n\'est pas bon.';
}
else
	echo 'Il faut remplir le champ.';
?>

<!DOCTYPE html>

<html>
  <head>
        <meta charset="utf-8"/>
  </head>
  <body>
      <form method="post" action="">
          <input type="text" id="captcha" name="captcha" />
          <input type="submit" name="valider" value="valider" />
      </form>
  </body>
</html>



