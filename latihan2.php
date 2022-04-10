<?php

    function getIps($bobot1 = 3, $bobot2 = 2, $bobot3 = 3, $sksMk1 = 2, $sksMk2 = 3, $sksMk3 = 4, $totalSks = 9){
    
        $ips = ($bobot1 * $sksMk1 + $sksMk2 * $sksMk2 + $bobot3 * $sksMk3) / $totalSks;
    }

    function getSks($ips){
        echo "IPS : " . round($ips, 2);
        echo "<br/>";
        echo "SKS yang dapat Diambil : ";

        if($ips > 3){
            echo "Anda dapat mesngambil 24 SKS";
        }
        else if($ips >= 2.5){
            echo "Anda dapat mengambil 21 SKS";
        }
        else if($ips >= 2.0){
            echo "Anda dapat mengambil 18 SKS";
        }
        else if($ips >= 1.5){
            echo "Anda dapat mengambil 15 SKS";
        }
        else if($ips < 1.5){
            echo "Anda dapat mengambil 12 SKS";
        }
        else {
            echo "Data Tidak Valid";
        }

    }

    getIps();

?>