<?php
$n1 = readline();
$n2 = readline();
$n3 = readline();

switch ($n1){
    case "vertebrado":
        switch ($n2){
            case "ave":
                switch ($n3){
                    case "carnivoro":
                        echo "aguia\n";
                        break;
                    case "onivoro":
                        echo "pomba\n";
                        break;
                }
                break;
            case "mamifero":
                switch ($n3){
                    case "onivoro":
                        echo "homem\n";
                        break;
                    case "herbivoro":
                        echo "vaca\n";
                        break;
                }
                break;
        }
        break;
    case "invertebrado":
        switch ($n2) {
            case "inseto":
                switch ($n3){
                    case "hematofago":
                        echo "pulga\n";
                        break;
                    case "herbivoro":
                        echo "lagarta\n";
                        break;
                }
                break;
            case "anelideo":
                switch ($n3){
                    case "hematofago":
                        echo "sanguessuga\n";
                        break;
                    case "onivoro":
                        echo "minhoca\n";
                        break;
                }
                break;
        }
        break;
}
?>