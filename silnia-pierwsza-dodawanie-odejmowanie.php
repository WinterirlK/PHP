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

   

       


        <select name="sel">
            <option value="1">+</option>
            <option value="2">-</option>
            <option value="3">*</option>
            <option value="4">/</option>
            <option value="5">silnia</option>
            <option value="6">pierwsza</option>
            
        </select>
        <input type="submit" value="oblicz"name="obl">
    </form>
    
    <?php 
        function liczbapierwsza($int)
        {
         
          $xd = true;
          $i = 2;
          while($i < $int)
          {
            if($int % $i == 0)
            {
              $xd = false;
            }
            $i++;
          }
          return $xd;
        }

        if(isset($_POST['obl'])){
            $t = $_POST['sel'];
            switch($t){
                case 1:
                    $a=$_POST['liczba1'];
                    $b=$_POST['liczba2'];
                    $suma = $a+$b;
                    echo "Wynik dodawania: ".$suma;
                    break;
            
                case 2:
                    $a=$_POST['liczba1'];
                    $b=$_POST['liczba2'];
                    $suma = $a-$b;
                    echo "Wynik odejmowania: ".$suma;
                    break;
                
                case 3:
                    $a=$_POST['liczba1'];
                    $b=$_POST['liczba2'];
                    $suma = $a*$b;
                    echo "Wynik mnozenia: ".$suma;
                    break;
            
                case 4:
                    $a=$_POST['liczba1'];
                    $b=$_POST['liczba2'];
                    if($b == 0){
                        echo "Nie mozna dzielic przez zero!";
                    }
                    else{
                        $suma = $a/$b;
                        echo "Wynik dzielenia: ".$suma;
                    }
                    break;
                
                case 5:
                    $liczba = 0;
                    $suma = 1;
                    $num = $_POST['liczba1'];
                    for($i = 0;$i<$num;$i++){
                        $liczba += 1;
                        $suma = $suma * $liczba;
                        
                    }
                    echo "silnia: ".$suma;
                    break;
                
                case 6:
                    $a = $_POST['liczba1'];
                    if(liczbapierwsza($a)){
                        echo "liczba pierwsza";
                    }
                    else{
                        echo "liczba nie jest pierwsza  ";
                    }
                default:
                    $a = $_POST['liczba1'];
                    $b = $_POST['liczba2'];
                    $suma = $a + $b;
                    echo "<p>wynik: ".$suma."</p>";
                    break;

            }
        }   
                

        

    ?>
</body>
</html>
