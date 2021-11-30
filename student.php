<?php
$student =	array(
    "voornaam" =>  "Jan",
    "naam" =>  "Janssens",
    "straat" =>  "Oude baan",
    "huisnr" =>  "22",
    "postcode" =>  2800,
    "gemeente" =>  "Mechelen",
    "geboortedatum" =>  "14/05/1991",
    "telefoon" =>  "015 24 24 26",
    "e-mail" =>  "jan.janssens@gmail.com"
);

function StudentToTable($student){
    echo "<h1>Student</h1>";
    echo "<table>";
    foreach ($student as $key => $value){
        echo "<tr><td>". ucfirst($key). "</td><td>". $value. "</td></tr>";
    }
    echo "</table>";
}

StudentToTable($student);