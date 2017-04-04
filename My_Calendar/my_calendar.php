 <?php
    
 
 function currentCalendar($num_of_days, $first_day){
     echo "<table>";
     echo "<tr>";
     
     for($i = 0; $i < 7; $i++){
         switch( $i ){
             case 0:echo "<td style='text-align:center; width:30px; height:30px margin: 3px;'>" . "Su" . "</td>"; break;
             case 1:echo "<td style='text-align:center; width:30px; height:30px margin: 3px;'>" . "Mo" . "</td>"; break;
             case 2:echo "<td style='text-align:center; width:30px; height:30px margin: 3px;'>" . "Tu" . "</td>"; break;
             case 3:echo "<td style='text-align:center; width:30px; height:30px margin: 3px;'>" . "We" . "</td>"; break;
             case 4:echo "<td style='text-align:center; width:30px; height:30px margin: 3px;'>" . "Th" . "</td>"; break;
             case 5:echo "<td style='text-align:center; width:30px; height:30px margin: 3px;'>" . "Fr" . "</td>"; break;
             case 6:echo "<td style='text-align:center; width:30px; height:30px margin: 3px;'>" . "Sa" . "</td>"; 
                        echo "</tr><tr>";
                        break;
         }
     }
     
     for ($i = 0; $i < $first_day; $i++){
         //this loop will create blank table cells that will meet up with the first day's position in the week
         //i.e. between Sunday and Saturday (0 == Sunday, 6 == Saturday)
         echo "<td style='text-align:right; width:30px; height:30px; border: 1px solid black; margin: 3px;'>" . " " . "</td>";
     }
     
     $day_counter = $first_day;
     
     for($i = 1; $i <= $num_of_days; $i++){
         echo "<td style='text-align:right; width:30px; height:30px; border: 1px solid black; margin: 3px;'>" . $i . "</td>";
         //now we have set up the next cell with the current day number in it
         
         $day_counter++;
         
         if( ($day_counter % 7) == 0){
             echo "</tr>";
             echo  "<tr>";
         }
     }
     //once here the calendar is complete and we can end the row and table
     echo "</tr>";
     echo "</table>";
 }
        
 currentCalendar(30, 2);
 currentCalendar(28, 6);
 
 ?>