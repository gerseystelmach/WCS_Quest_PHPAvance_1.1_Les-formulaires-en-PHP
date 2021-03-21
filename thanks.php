<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fic Page | Thanks for your message!</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="contactMe">
    <h1>Message envoyé!</h1>
    <div class="thanksmsg">
        <p>Merci <strong><?php echo $_POST['userFirstName'] . " " . $_POST['userLastName'] ?></strong> de nous avoir
            contacté à propos
            de: <strong><?php echo $_POST['reasonContact'] ?></strong>.

            Un de nos conseiller vous contactera soit à l’adresse <strong><?php echo $_POST['userEmail'] ?></strong> ou
            par téléphone au <strong><?php echo $_POST['userTelephone'] ?></strong> dans les plus
            brefs délais pour traiter votre demande :<br><br>

            <em><?php echo $_POST['message'] ?></p></em>
    </div>

</section>
</body>
</html>

