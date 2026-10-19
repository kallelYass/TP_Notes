
<link rel="stylesheet" href="style.css">
<?php
$notes =["Mohamed" => 14, "Sami" => 9, "Amel" => 17,
"Yassine" => 8, "Ines" => 12];
// QUestion 1 : Afficher chaque étudiant et sa note avec foreach
foreach ($notes as $cle => $valeur) {
    echo "Etudiant : $cle, Note : $valeur<br>";
}
// Question 2 : Calculer et afficher la moyenne de la classe avec array_sum
function moyenne($notes) {
    $somme = array_sum($notes);
    $nbNotes = count($notes);
    return $somme / $nbNotes;
}

// Question 3 :  Obtenir les étudiants admis (note ≥ 10) avec array_filter

$admis = array_filter($notes, fn($note)=> $note >= 10);
print_r($admis);

// Question 4 : Trier les notes et afficher résultat

$valeurs=$notes;
sort($valeurs);
print_r($notes);    

// Question 5 : Avec array_map, ajouter 1 point à chaque note
$Bonus = array_map(fn($note)=> $note + 1, $notes);
print_r($Bonus); 