<?php
    $c = mysqli_connect("localhost","root","","prognoza_winter");
        $d = $_POST['data'];
        $n = $_POST['noc'];
        $dz = $_POST['dzien'];
        $o = $_POST['opady'];
        $cis = $_POST['cisnienie'];

        $q1 = "INSERT INTO pogoda(id ,data_prognozy, temperatura_noc, temperatura_dzien, opady, cisnienie) VALUES (NULL,'$d','$n','$dz','$o','$cis')";
        $r1 = mysqli_query($c,$q1);
        if($r1){
            
                echo"<span>Dodano</span>";
            
        }
        else{
            echo"<span>Nie dodano</span>";
        }
        mysqli_close($c);
    ?>


