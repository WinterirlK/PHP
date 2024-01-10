<?php
    $c = mysqli_connect("localhost","root","","odloty");
        $lp = $_POST['lp'];
        $q1 = "DELETE FROM odloty WHERE id= $lp";
        $r1 = mysqli_query($c,$q1);
        if($r1){
            echo"<span>Usunieto</span>";
        }
        else{
            echo"<span>Nie usunieto</span>";
        }
        mysqli_close($c);
    ?>