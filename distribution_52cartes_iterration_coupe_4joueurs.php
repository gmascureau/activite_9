<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROM Kactivité 9</title>
    <style>
        body, html{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 1em;
            margin: 20px 30px 0px 30px;
            width: auto;
        }
        h1{
            font-weight: bold;
            font-size: 1.3em;
        }
        h2{
            font-variant: small-caps;
            font-weight: bold;
            font-size: 1.2em;
        }
        h3{
            font-weight: bold;
            font-size: 1.1em;
        }
        table{
            border: 2px solid black;
            border-collapse:collapse;
            width:auto;
        }
        th{
            border: 1px solid #999;
            text-align: center;
            font-variant: small-caps;
            font-size: 1.2em;
            color: chocolate;
            width:150px;
        }
        tr{
            border-collapse:collapse;
            border: 2px solid green; 
        }
        td{
            text-align: center;
            color: black;
            font-size: 1em;
            border-collapse:collapse;
            width: auto;
        }
    </style>
</head>
<body>
<h1>Distribution d'un jeu de 52 cartes à quatre joueurs.</h1>
         <?php
        echo "<h2>Constitution du paquet de 52 cartes</h2>";

        $valeurCartes = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);
        $Suites = array("Pique", "Coeur", "Carreaux", "Trèfle");

        for ($k=0; $k < 4 ; $k++) 
        { 
            for ($j=0; $j < 13 ; $j++) 
            { 
            $i = $j+$k*13;
            $Cartes[]= $valeurCartes[$j] . "-" . $Suites[$k];
            }
        }
        print_r($Cartes);
        echo "<br><hr>"; 

        //echo "<table>";
        

            

           //echo "<tr><td>$Cartes[$i]</td><td>{$Cartes[$i+1]}</td><td>{$Cartes[$i+2]}</td><td>{$Cartes[$i+3]}</td><td>{$Cartes[$i+4]}</td><td>{$Cartes[$i+5]}</td><td>{$Cartes[$i+6]}</td><td>{$Cartes[$i+7]}</td><td>{$Cartes[$i+8]}</td><td>{$Cartes[$i+9]}</td><td>{$Cartes[$i+10]}</td><td>{$Cartes[$i+11]}</td><td>{$Cartes[$i+12]}</td></tr>";

        //echo "</table>";
        
        echo "<h2>Division du paquet de cartes en 2 paquets</h2>";
        for ($j=0; $j < 4 ; $j++) 
        { 
            $i=13*$j;
            for ($j=0; $j < 13 ; $j++){
            }
        }

        $sousPaquet1 = array_slice($Cartes, 0, 26);
        $sousPaquet2 = array_slice($Cartes, 26, 26);



        echo "<h3>Paquet 1</h3>";
        echo "<table>";
        for ($j=0; $j < 2 ; $j++) 
        { 
            $i=13*$j;
        echo "<tr>";
        echo "<td>$sousPaquet1[$i]</td><td>{$sousPaquet1[$i+1]}</td><td>{$sousPaquet1[$i+2]}</td><td>{$sousPaquet1[$i+3]}</td><td>{$sousPaquet1[$i+4]}</td><td>{$sousPaquet1[$i+5]}</td><td>{$sousPaquet1[$i+6]}</td><td>{$sousPaquet1[$i+7]}</td><td>{$sousPaquet1[$i+8]}</td><td>{$sousPaquet1[$i+9]}</td><td>{$sousPaquet1[$i+10]}</td><td>{$sousPaquet1[$i+11]}</td><td>{$sousPaquet1[$i+12]}</td>";
        echo "</tr>";
        }
        echo "</table><br>";
        print_r($sousPaquet1);

        echo "<br>_ _ _ _ <br>";       
        echo "<h3>Paquet 2</h3>";
        echo "<table>";

        for ($j=0; $j < 2 ; $j++) 
        { 
            $i=13*$j;
        echo "<tr>";
        echo "<td>$sousPaquet2[$i]</td><td>{$sousPaquet2[$i+1]}</td><td>{$sousPaquet2[$i+2]}</td><td>{$sousPaquet2[$i+3]}</td><td>{$sousPaquet2[$i+4]}</td><td>{$sousPaquet2[$i+5]}</td><td>{$sousPaquet2[$i+6]}</td><td>{$sousPaquet2[$i+7]}</td><td>{$sousPaquet2[$i+8]}</td><td>{$sousPaquet2[$i+9]}</td><td>{$sousPaquet2[$i+10]}</td><td>{$sousPaquet2[$i+11]}</td><td>{$sousPaquet2[$i+12]}</td>";
        echo "</tr>";
        }
        echo "</table><br>";
        print_r($sousPaquet2);

        echo "<br><hr>"; 
       
        echo"<h2>Assemblage des paquets 1 & 2, par itération <h2>";
        for ($p=0; $p < 26; $p++) { 
   
            $nouveauPaquet[] = $sousPaquet1[$p];
            $nouveauPaquet[] = $sousPaquet2[$p]; 
        }
        
        echo "<h3>Nouveau paquet assemblé</h3>";

        print_r($nouveauPaquet);
        echo "<br><hr>";
        echo "<h2>Distibution du jeu</h2>";
        echo "<h3>Les 4 mains distribuées</h3>";

        echo "<table>";
        for ($j=0; $j < 4 ; $j++) 
        { 
            $i=13*$j;
            echo "<tr>";
            echo "<td>$nouveauPaquet[$i]</td><td>{$nouveauPaquet[$i+1]}</td><td>{$nouveauPaquet[$i+2]}</td><td>{$nouveauPaquet[$i+3]}</td><td>{$nouveauPaquet[$i+4]}</td><td>{$nouveauPaquet[$i+5]}</td><td>{$nouveauPaquet[$i+6]}</td><td>{$nouveauPaquet[$i+7]}</td><td>{$nouveauPaquet[$i+8]}</td><td>{$nouveauPaquet[$i+9]}</td><td>{$nouveauPaquet[$i+10]}</td><td>{$nouveauPaquet[$i+11]}</td><td>{$nouveauPaquet[$i+12]}</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br><hr><hr><br>";
?>

</body>
</html>
