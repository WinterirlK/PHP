<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="nr">
        <input type="submit" name="SPRAWDZ">

    </form>

    <?php
    $c = mysqli_connect("localhost","root","","egzamin1");
    $x = $_POST["nr"];
    $q = "SELECT imie,nazwisko,id FROM zawodnik WHERE pozycja_id=$x";
    $r = mysqli_query($c,$q);
    while($row = mysqli_fetch_assoc($r)){
        echo "id: ". $row["id"]. " - Nazwisko: ".$row["nazwisko"]." - imie: ". $row["imie"]."<br>";
    }

     
mysqli_close($c);
    ?>
</body>
</html>