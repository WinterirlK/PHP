<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="liczba1"><br>
        <input type="number" name="liczba2"><br>

        <input type="submit" value="dodawanie" name="dodawanie">
        <input type="submit" value="odejmowanie" name="odejmowanie">
        <input type="submit" value="mnozenie" name="mnozenie">
        <input type="submit" value="dzielenie" name="dzielenie">
    </form>
    
    <?php 
        if(isset($_POST["dodawanie"])){
            $a=$_POST['liczba1'];
            $b=$_POST['liczba2'];
            $suma = $a+$b;
            echo "Wynik dodawania: ".$suma;
        }
        if(isset($_POST["odejmowanie"])){
            $a=$_POST['liczba1'];
            $b=$_POST['liczba2'];
            $suma = $a-$b;
            echo "Wynik dodawania: ".$suma;
        }
        if(isset($_POST["mnozenie"])){
            $a=$_POST['liczba1'];
            $b=$_POST['liczba2'];
            $suma = $a*$b;
            echo "Wynik dodawania: ".$suma;
        }
        if(isset($_POST["dzielenie"])){
            $a=$_POST['liczba1'];
            $b=$_POST['liczba2'];
            if($b == 0){
                echo "Nie mozna dzielic przez zero!";
            }
            else{
                $suma = $a/$b;
                echo "Wynik dodawania: ".$suma;
            }
            
        }
        if(isset($_POST["silnia"])){
            
        }


    ?>
</body>
</html>