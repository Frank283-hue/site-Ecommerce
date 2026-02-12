<?php
$Etudiants = [["Sourabie","Rahim",10],["A","B",14],["S","R",16],["S","m",18]];
$Sommenote =0;
for ($i=0 ;$i<=3;$i++)
    {
        for ($j=0 ;$j<=2;$j++)
        {
            echo $Etudiants[$i][$j] ."</br>";
             $note = $Etudiants[$i][2];
             $Sommenote = $Etudiants[$i][3] +$Sommenote;
            if($note >= 16)
                {
                    echo("Mention Tres bien");
                }
                elseif ($note <= 16 && $note >= 16){
                    echo("Mention Bien");
                }
                elseif($note <= 14 && $note >= 10){
                    echo("Mention Passable");
                }
                elseif($note < 10){
                    echo("Insuffisant");
                }
            $Moyenneclasse= $Sommenote / 4;
            echo("La moyenne generale de la classe est "+ $Moyenneclasse);
        }
        
     }

