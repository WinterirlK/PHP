<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Godziny<input type="number" name="godziny"><br>
        stawka<input type="number" name="stawka"><br>

        <input type="submit" value="oblicz" name="oblicz">
        
    </form>

    <?php
   if(isset($_POST["oblicz"])) {
    $a = $_POST['godziny'];
    $b = $_POST['stawka'];
    $suma = 0;
    if($a > 40) {
        $nad = $a - 40;
        $suma = 40 * $b + ($nad * $b * 2.5);
    } else {
        $suma = $a * $b;
    }

    echo "Wynagrodzenie: ".$suma;
}
    ?>
</body>
</html>