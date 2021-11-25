<?php
    function generateCalendar($month) {
        if($month >= 1 && $month <= 12) {
            $year = date("o");
            $week = date("W", mktime(0, 0, 0, $month, 1, $year)); //Нахожу первую неделю месяца
            if($week > 52) $week = 0;
            $date = new DateTime();
            $date->setISODate($year, $week);

            // $date->format("F, Y")
            echo "<div class='tableContainer'><span class='year'>".''."</span><table>
            <thead>
                    <tr>
                        <th>M</th>
                        <th>T</th>
                        <th>W</th>
                        <th>T</th>
                        <th>F</th>
                        <th>S</th>
                        <th>S</th>
                    </tr>
                </thead>
                <tbody>";     
                
                $week = 1;
                do {
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++) {
                        if($date->format('n') != $month) {
                            echo "<td class='wrong ".(($j >= 5) ? 'weekends' : '')."'>".$date->format('j')."</td>";
                        } else {
                            echo "<td class='correct ".(($j >= 5) ? 'weekends' : '')."'>".$date->format('j')."</td>";
                        }
                        $date->modify('+1 day');
                    }
                    echo "</tr>";
                    if($week > 3 && $date->format('n') != $month) { // Если прошло больше 3 итераций и месяц изменился - выход из цикла
                        break;
                    }
                    $week++;
                } while(true);

            echo "</tbody></table></div>";
        } else {
            echo "<h1>Wrong month number</h1>";
        }
    }
?>