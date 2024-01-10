<?php
    $c = mysqli_connect("localhost","root","","odloty");
        $a = $_POST['nr_rejsu'];
        $t = $_POST['czas'];
        $k = $_POST['kierunek'];
        $s = $_POST['status'];
        $q1 = "INSERT INTO odloty (id, nr_rejsu, czas, kierunek, status_lotu) VALUES(NULL,'$a','$t','$k','$s')";
        $r1 = mysqli_query($c,$q1);
        if($r1){
            if($r1){
                echo"<span>Dodano</span>";
            }
        }
        else{
            echo"<span>Nie dodano</span>";
        }
        mysqli_close($c);
    ?>