<?php

echo '<h1>recap de votre achat</h1>';
 $var = $_POST['myoption'];
 $var2 = $_POST['qte'];
 $var3 = $_POST['nom'];
 $var4 = $_POST['prenom'];
 $var5 = $_POST['adress'];
 $var6 = $_POST['tel'];
 $carte=$_POST["cartevisa"];

 echo  "<h4>Votre article :</h4> <span>$var</span><br/>";
 echo  "<h4>Quantite :</h4><span> $var2</span><br/>";
 echo  "<h4>les coordonnes :<br/>";

 echo  "<h4>nom :</h4><span> $var3</span><br/>";
 echo  "<h4>prenom :</h4><span> $var4</span><br/>";
 echo  "<h4>adresse :</h4><span> $var5</span><br/>";
 echo  "<h4>telephone :</h4><span> $var6</span><br/>"

 ?>