<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        a: <input type="number" name="liczba1"><br>
        b: <input type="number" name="liczba2"><br>
       

        

        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['liczba1'];
        $b = $_POST['liczba2'];
        $arrayofdzielniks = [];
        $arrayofdzielniks2 = [];
 

        if (isset($_POST['submit'])) {
            $temp1 = $a;
            $temp2 = $b;
            $dzielnik = 2;
            $dzielnik2 = 2;
            
            while ($temp1 > 1) {
                if ($temp1 % $dzielnik == 0) {
                    $temp1 = $temp1 / $dzielnik;
                    array_push($arrayofdzielniks, $dzielnik);
                } else {
                    $dzielnik++;
                }
            }
            if ($temp1 == 1) {
                array_push($arrayofdzielniks, 1);
            }

            while ($temp2 > 1) {
                if ($temp2 % $dzielnik2 == 0) {
                    $temp2 = $temp2 / $dzielnik2;
                    array_push($arrayofdzielniks2, $dzielnik2);
                } else {
                    $dzielnik2++;
                }
            }
            if ($temp2 == 1) {
                array_push($arrayofdzielniks2, 1);
            }

            $unique1 = array_unique($arrayofdzielniks);
            $unique2 = array_unique($arrayofdzielniks2);
            $suma = 1;

            foreach ($arrayofdzielniks as $val) {
                $suma *= $val;
            }
            foreach ($arrayofdzielniks2 as $val) {
                $suma *= $val;
            }
            $licz = 1;
            foreach ($arrayofdzielniks as $key) {
                echo "numer ".$licz." = ".$key. "<br>";
                $licz++;
            }
            
            if($a>$b){
                $min = $b;
            }
            else{
                $min = $a;
            }
            $nww = 0;
            for($k = $min; $k>=1;$k--){
                if($a % $k == 0 && $b % $k == 0){
                    $nww = $k;
                    break;
                }
            }
           
            echo "najmniejszy wspolny dzielnik: ".$nww."<br>";
            echo "najwieksza wspolna wielokrotnosc: ".$suma;

        }
    }
    ?>
</body>
</html>     



