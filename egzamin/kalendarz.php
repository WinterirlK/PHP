<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" lang="PL">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <section class="baner1">
        <img src="logo1.png" alt="lipiec">
    </section>

    <section class="baner2">
        <h1>TERMINARZ</h1>
        <p id="skrypt1">najbliższe zadania:

        <?php
        $c = mysqli_connect('localhost','root','','terminarz');
        $q = "SELECT DISTINCT wpis from zadania WHERE dataZadania>='2020-07-01' AND dataZadania<='2020-07-07' AND zadania.wpis !=''";
        $r = mysqli_query($c,$q);

        while($row = mysqli_fetch_array($r)){
            echo"$row[0]"."; ";
        }

        ?>
        </p>
        
    </section>

    <div class="main">  
        <?php
        $c = mysqli_connect('localhost','root','','terminarz');
        $q = "SELECT dataZadania, wpis from zadania WHERE dataZadania>='2020-07-01' AND datazadania<='2020-07-31'";
        $r = mysqli_query($c, $q);
        while($row = mysqli_fetch_array($r)){
            echo"<section class='kalendarz'><h6>$row[0]</h6><p>$row[1]</p></section>";
        }
        ?>


    </div>

    <div class="futer">
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: Kamil W</p>
    </div>
</body>
</html>