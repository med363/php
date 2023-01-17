<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_GET['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $nom = $_GET['nom']; 
     $age = $_GET['age']; 
     $adresse = $_GET['adresse'];
     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant GET</h3>'; 
     echo 'Nom : ' . $nom . ' <br> Age : ' . $age . '<br> Adresse : ' . $adresse; 
     exit;
  }
?>