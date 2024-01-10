<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <style>
        body{
            background-color: indigo;
            color: lime;
        }
        table,td,tr,th{
            border: 5px solid yellow;
            border-collapse: collapse;
        }
        tr,td{
            text-align: center;
        }
        table{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .form{
            display flex;
            justify-content: space-evenly;
        }
    </style>
</head>
<body>
    <?php
     $c = mysqli_connect("localhost","root","","odloty");
     ?>
    <div class="form">
        <div class="f1">
            <form action ="dodaj.php" method="POST">
                <label>nuemr rejsu:</label>
                <input type="text" name="nr_rejsu">
                <br>
                <label>czas:</label>
                <input type="time" name="czas">
                <br>
                <label>kierunek:</label>
                <input type="text" name="kierunek">
                <br>
                <label>status:</label>
                <input type="text" name="status">
                <br>
                <input type="submit" value="Dodaj odlot">
            </form>
        </div>
        <div class="f2">
            <form action ="usun.php" method="POST">
                <label>nuemr lp:</label>
                <input type="number" name="lp">
                <input type="submit" value="usun odlot">
            </form>
        </div>
        <div class="upd">
            <h1>Aktualizuj odlot</h1>
            <form method="POST">
                <label>Nr ID do akutualizacji: </label>
                <input type="number" name="ID"><br>
                <label>Nowy numer rejsu: </label>
                <input type="text" name="id_new"><br>
                <label>Nowy czas: </label>
                <input type="time" name="time"><br>
                <label>Nowy kierunek: </label>
                <input type="text" name="kier"><br>
                <label>Nowy status: </label>
                <input type="text" name="stat"><br>
                <input type="submit" value="Aktualizuj">
                <?php
                    $ID = $_POST['ID'];
                    $id_new = $_POST['id_new'];
                    $t = $_POST['time'];
                    $k = $_POST['kier'];
                    $s = $_POST['stat'];
                    if(isset($ID) && isset($id_new) && isset($t) && isset($k) && isset($s)){
                        $q1 = "UPDATE odloty SET nr_rejsu = '$id_new', kierunek ='$k', status_lotu = '$s', czas = '$t' WHERE id='$ID'";
                        $r1 = mysqli_query($c,$q1);
                        if($r1){
                            echo"<span>Zaktualizowano</span>";
                        }
                    }
                ?>
            </form>
            <br>
            <h1>Zlicz odloty dla danego kierunku</h1>
            <form method="POST">
                <p>kierunek: <input type="text" name="ll"></p>
                <input type="submit">
                <?php
                    $kier = $_POST['ll'];
                    if(isset($kier)){
                        $q = "SELECT count(id) FROM odloty WHERE kierunek = '$kier'";
                        $r = mysqli_query($c,$q);
                        $w = mysqli_fetch_array($r);
                        echo"<br><span>ilosc lotow z kierunkiem ".$kier.": ".$w[0]."</span>";
                    }
                ?>
            </form>
        </div>
    </div>
    <form method="POST">
        <input type="submit" name = "1" value="Rosnąco">
        <input type="submit" name="1" value="Malejąco">
    </form>
    <table>
        <tr>
            <th>LP.</th>
            <th>Numer rejsu</th>
            <th>czas</th>
            <th>kierunek</th>
            <th>status</th>
        </tr>
        <?php
            $tryb = $_POST['1'];
            if($tryb =="Rosnąco"){
                $tryb = "ASC";
            }
            else{
                $tryb = "DESC";
            }
            $q = "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas $tryb";
            $r = mysqli_query($c,$q);
            while($row = mysqli_fetch_array($r)){
                echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
            }
        ?>
    </table>
    <?php
     mysqli_close($c);
     ?>
</body>
</html>