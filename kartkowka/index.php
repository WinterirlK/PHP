<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{
            border: 2px solid black;
        }

    </style>
</head>
<body>
    
    <?php 
    echo"<table>";
    $c = mysqli_connect("localhost","root","","prognoza_Winter");
    $q = "SELECT * FROM `pogoda` WHERE miasta_id = 2 GROUP BY data_prognozy DESC";
    echo"<th>L.P</th><th>data</th><th>Noc - temperatura</th><th>Dzień - temperatura</th><th>Opady</th><th>CIśnienie</th>";
    $r = mysqli_query($c,$q);
    $i = 1;
    while($row = mysqli_fetch_array($r)){
        echo"<tr><td>".$i."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>";
        $i++;
    }
    echo"</table>";
    mysqli_close($c);
    ?>

    <form action="dodaj.php" method="POST">
        
        <span>data</span>
        <input type="date" name="data"><br>
        <span>Noc - temperatura</span>
        <input type="number" name="noc"><br>
        <span>Dzień - temperatura</span>
        <input type="number" name="dzien"><br>
        <span>opady[mm/h]</span>
        <input type="number" name="opady"><br>
        <span>cisnienie[hPa]</span>
        <input type="number" name="cisnienie"><br>
        <input type="submit" value="dodaj pogode">
        
    </form>
    
    <form method="post">
    
    <p>cisnienie:</p> <input type="number" name="cisnienie">
    <input type="submit">
    <?php 
    $cis = $_POST['cisnienie'];
    if(isset($cis)){
        $c = mysqli_connect("localhost","root","","prognoza_Winter");
        $q = "SELECT count(id) FROM pogoda WHERE cisnienie = '$cis'";
        $r = mysqli_query($c,$q);
        $w = mysqli_fetch_array($r);
        echo"<br><span>ilosc dni: ".$w[0]."</span>";
    }
    ?>
    </form>
    
    
</body>
</html>

