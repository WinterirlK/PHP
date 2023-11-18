<?php
            setcookie('last_time', time(), time() + 1 / 24 * 60 * 60); // time() - bieżąca data + 30 [dni] * 24 [godziny] * 60 [minuty] * 60 [sekundy] = czas wygaśnięcia ciasteczka w sekundach
            if(isset($_COOKIE['last_time'])){
                echo("<p>Miło nam że znowu nas odwiedziłeś!</p>");
                echo("<p>" . date('d.m.Y, H:i:s', $_COOKIE['last_time']) . "</p>");
            }else{
                echo("<p><em>Dzień dobry! Sprawdź regulamin naszej strony!</em></p>");
            }
        ?>


