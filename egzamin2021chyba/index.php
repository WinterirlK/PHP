<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podzespoły komputerowe</title>
    <link rel="stylesheet" href="style_1.css">
</head>
<body>
    <div class="logo">
        <h1>Sklep Komputerowy</h1>
    </div>
    <div class="menu">
        <a href="index.php">Główna</a>
        <a href="procesory.html">Procesory</a>
        <a href="ram.html">RAM</a>
        <a href="grafika.html">Grafika</a>
        <a href="hdd.html">HDD</a>
    </div>
    <div class="glowny">
        <h2>Lista aktualnie dostępnych podzespołów</h2>
        <table>
            <tr>
                    <th>Nazwa Podzespoły</th>   
                    <th>OPIS</th>
                    <th>CENA</th>
            </tr>
            <?php 
            $c = mysqli_connect("localhost","root","","baza");
            $q =  "SELECT nazwa, opis, cena FROM `podzespoly` WHERE dostepnosc = '1'";
            $r = mysqli_query($c, $q);
            while ($row = mysqli_fetch_array($r)) {
                echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
            }
            ?>

                
                
            
            
                
        </table>

        <h2>Zgadnij liczbe</h2>
        <?php 
        function zamien(){
         $c = mysqli_connect("localhost","root","","baza");
        $random = rand(1,100);
        $q = "UPDATE `random` SET `liczba`='$random' WHERE 1";
        $r = mysqli_query($c, $q);
        }
        function dodaj(){
            $c = mysqli_connect("localhost","root","","baza");
            $random1 = "SELECT licznik from random";
            $r = mysqli_query($c, $random1);
            while ($row = mysqli_fetch_array($r)) {
                $liczba = $row[0];}
            $liczba = $liczba + 1;
            $q1 = "UPDATE `random` SET `licznik`='$liczba' WHERE 1";
            $r1 = mysqli_query($c, $q1);
        }
        ?>
        <form method="POST">
            <input type="number" name="liczba">
            <input type="submit">
        </form>
        <?php 
            
            
            $num = $_POST['liczba'];    
        $i = 0;
        $random = "SELECT liczba from random;";
        $r1 = mysqli_query($c, $random);
        while($row = mysqli_fetch_array($r1)) {
            $liczba = $row[0];
        }
        if ($num > $liczba) {
            echo 'za duza!';
            dodaj();
        }
        else if ($num == $liczba) {
            echo 'Zgadles! Ta liczba to:'.$liczba;
            zamien();
            $zapytanie = "UPDATE `random` SET `licznik`='0' WHERE 1";
            $r3 = mysqli_query($c, $zapytanie);
        }
        else if ($num < $liczba) {
            echo 'Za mała!';
            dodaj();
        }
        echo'<br>';
        $c = mysqli_connect("localhost","root","","baza");
        $q2 = 'SELECT licznik from random';
        $r2 = mysqli_query($c, $q2); 
        while($row = mysqli_fetch_array($r2)) {
            echo"Liczba prób:".$row[0];
        }
        
        ?>


      
    </div>
            
    <div class="stopka1">
        <h3>Sklep Komputerowy</h3>
        <p>ul. Legnicka 61, Wrocław</p>
        <p>Współpracujemy z hurtownią <a href="http://www.ddata.pl/" target="_blank">ddata</a></p>
    </div>
    <div class="stopka2"><p>Stronę wykonał: elo</p></div>
    <div class="stopka3">
        <p>zadzwoń do nas: 71 506 50 60</p>
    </div>
    <div class="stopka4"><img src="sklep.jpg" alt=""></div>



</body>
</html>