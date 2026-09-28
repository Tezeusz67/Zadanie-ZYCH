<?php

echo "<h2>SUMA</h2>";

$a = 10;
$b = 5;

echo "Wynik: " . ($a + $b);
echo "<br><br>";


echo "<h2>PODSTAWY</h2>";

echo "Różnica: " . ($a - $b);
echo "<br>";
echo "Iloczyn: " . ($a * $b);
echo "<br>";
echo "Iloraz: " . ($a / $b);
echo "<br><br>";


echo "<h2>KALKULATOR</h2>";

$dzialanie = "+";

if($dzialanie == "+")
    $wynik = $a + $b;
elseif($dzialanie == "-")
    $wynik = $a - $b;
elseif($dzialanie == "*")
    $wynik = $a * $b;
else
    $wynik = $a / $b;

echo "Wynik: " . $wynik;
echo "<br><br>";


echo "<h2>MAKS</h2>";

$a = 10;
$b = 20;
$c = 15;

echo "Największa liczba: " . max($a, $b, $c);
echo "<br><br>";


echo "<h2>WZROST</h2>";

$wzrost = 175;

if($wzrost < 150)
    echo "Wzrost niski";
elseif($wzrost > 180)
    echo "Wzrost wysoki";
else
    echo "Wzrost średni";

echo "<br><br>";


echo "<h2>STARSZY</h2>";

$data1 = "2005-05-10";
$data2 = "2006-03-20";

if($data1 < $data2)
    echo "Pierwsza osoba jest starsza";
elseif($data1 > $data2)
    echo "Druga osoba jest starsza";
else
    echo "Osoby są w tym samym wieku";

echo "<br><br>";


echo "<h2>PRZESTĘPNY</h2>";

$rok = 2024;

if($rok % 400 == 0 || ($rok % 4 == 0 && $rok % 100 != 0))
    echo "Rok jest przestępny";
else
    echo "Rok nie jest przestępny";

echo "<br><br>";


echo "<h2>SIŁA</h2>";

$haslo = "Haslo123!";

if(strlen($haslo) <= 4)
    echo "Hasło słabe";
elseif(strlen($haslo) <= 8)
    echo "Hasło średnie";
else
    echo "Hasło mocne";

echo "<br><br>";


echo "<h2>TRÓJKĄT</h2>";

$a = 3;
$b = 4;
$c = 5;

if($a + $b > $c && $a + $c > $b && $b + $c > $a)
    echo "Można utworzyć trójkąt";
else
    echo "Nie można utworzyć trójkąta";

echo "<br><br>";
