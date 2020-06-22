<?php

if (isset($_POST['submit'])){
	$error = '';
	$name = htmlspecialchars($_POST['name']);
	$mail = htmlspecialchars($_POST['mail']);
	$message = htmlspecialchars($_POST['msg']);

	 if (!empty($name) AND !empty($mail) AND !empty($message)) {
	 	if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	 		$from = $mail;
			// $to ="MAIL DE MORGANE";
			$subject = "Contact from altr.fr";
			$headers = "From:" . $from;
			mail($to,$subject,$message, $headers);
			$ok = '<p class="formok"> Votre mail a été transmis avec succés!</p>';
	 	} else $error = '<p class="formerror">Mail not avaible, please try with a real mail adress.</p>';
	 } else $error = '<p class="formerror">Name, mail or message was empty, please try again.</p>';
}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
	    <title>ALT-R - Contact</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"> <!-- feuille de style -->
		<meta charset="utf-8">
	</head>

	<header>
	    <?php include 'include/menu.php'; ?>
	</header>

	<body>

		<div class="container contact">
			<div class="contactcase">
				<img class="contact" src="medias/contact.jpg">
			</div>
			<div class="contactcase">
				<p class="contact">Vous avez des questions ? Nous restons à votre écoute avec le formulaire de contact ci-dessous!</p>
				<?php if (isset($error)){ echo $error; }  ?>
				<?php if (isset($ok)){ echo $ok; }  ?>
				<form method="post" class="formcontact">
					<input type="text" placeholder="Nom Prénom" name="name"  class="formcontact" />
					<input type="mail" placeholder="Votre Mail" name="mail"  class="formcontact" />
					<textarea placeholder="Votre Message" cols="12" rows="6" name="msg" class="formcontact" ></textarea>
				<button type="submit" class="formcontact" name="submit" id="submit">send mail</button>
				</form>
			</div>
		</div>

	</body>

	<?php include 'include/footer.php'; ?>
</html>