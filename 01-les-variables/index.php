<!-- Affichage d'une variable avec une chaine de caractere -->

<?php
echo "<br>";
$age_du_visiteur = 17;
echo "Le visiteur a $age_du_visiteur ans";
echo "<br>";
echo 'Le visiteur a ' . $age_du_visiteur . ' ans';
echo "<br>";

//Type de variable
$personne = 17; //int
$poids = 57.3; //float
$je_suis_un_zero = true; //bool
$je_suis_bon_en_php = false; //bool
$pas_de_valeur = NULL; //Null //ne prend pas d'espace en memoire

echo "<br>";
echo "$je_suis_un_zero";
echo "$je_suis_bon_en_php";
echo "$pas_de_valeur";


 ?>