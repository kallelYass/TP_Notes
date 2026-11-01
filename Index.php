
<link rel="stylesheet" href="style.css">
<?php
require_once "config.php";
require_once "Fonction.php";
$notes =["Mohamed" => 14, "Sami" => 9, "Amel" => 17,
"Yassine" => 8, "Ines" => 12];
// QUestion 1 : Afficher chaque étudiant et sa note avec foreach
foreach ($notes as $cle => $valeur) {
    echo "Etudiant : $cle, Note : $valeur<br>";
}

