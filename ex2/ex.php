<?php 
$clients=array(
    "client 1"=>array("nom1"=>"Dulong","ville 1"=>"paris","age 1"=>"35"),
    "client 2"=>array("nom1"=>"Dulong","ville 2"=>"paris","age 1"=>"35"),
    "client 3"=>array("nom1"=>"Dulong","ville 3"=>"paris","age 1"=>"35"),
    "client 4"=>array("nom1"=>"Dulong","ville 1"=>"paris","age 1"=>"35"),
    "client 5"=>array("nom1"=>"Dulong","ville 1"=>"paris","age 1"=>"35"),

);


for($i = 0, $size = count($clients); $i < $size; ++$i) {
    for($j =count($clients);$i < $size;--$j)
    echo "<td>$i</td><td>$j</td>";
}
// echo "bjr";
?>