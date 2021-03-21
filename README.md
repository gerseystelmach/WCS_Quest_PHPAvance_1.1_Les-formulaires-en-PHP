# formphp_gettingdata

Solution presented for the challenge proposed by Wild Code School during the web development course. Quest: (PHP Avancé) 1.1. Les formulaires en PHP - Récupération:

1) Challenge: 

"Simuler une prise de contact
À partir de ce que tu viens de réaliser, il faut améliorer ce formulaire. Tu dois rajouter un champ pour entrer le numéro de téléphone de l'utilisateur, ainsi qu'une liste déroulante proposant plusieurs thématiques, qui sera reprise comme sujet du mail.

Une fois que l’utilisateur clique sur le bouton de soumission, les données du formulaires sont envoyées sur une nouvelle page “thanks.php” et les informations saisies sont reprises de la sorte sur la page :

Merci {Prénom} {Nom} de nous avoir contacté à propos de “{sujet}”."

Un de nos conseiller vous contactera soit à l’adresse {e-mail} ou par téléphone au {téléphone} dans les plus brefs délais pour traiter votre demande : 

{message}"

2) Files description:

  2.0) The file index.php is the "Contact me" main page, which displays the content disposed in the form.php file (below);
  2.1) The file form.php contains the form that is being included on the index.php; 
  2.2) The file thanks.php is the page that will be displayed after the form submit by the user, which contains a customized message using the obtained data from POST method;
  2.3) The file style.css apply the style in all pages.
