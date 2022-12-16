<?php
include_once __DIR__ . "/class/class.php";

$movie1=new movie('harry potter',' magic',2002);

$movie2=new movie('Dragonball',' action',1997);

$movie3=new movie('Space Jam',' Cartoon',2000);

echo $movie1->isAdult();
echo "<br>";
echo $movie2->isAdult();
echo "<br>";
echo $movie3->isAdult();