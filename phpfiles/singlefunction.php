<?php

function single($startindex) {
  
   echo "<input style='margin:5px;' name=\"s$startindex\" type='text' placeholder='ادخل السؤال'>";
   
   echo "<input name=\"sc$startindex\" style='margin:5px;' type='number' placeholder='ادخل رقم الجواب الصحيح '>";
    echo "<ol type=\"1\" >
            <li >
                <input name=\"sa$startindex\" style='margin:5px;' type='text' placeholder='ادخل الجواب'>
                
            </li>
            <li>
                <input name=\"sa$startindex\" style='margin:5px;' type='text' placeholder='ادخل الجواب'>
            </li>
            <li >
                <input name=\"sa$startindex\" style='margin:5px;' type='text' placeholder='ادخل الجواب'>
            </li>
            <li >
                <input name=\"sa$startindex\"  style='margin:5px;'type='text' placeholder='ادخل الجواب'>
            </li>


        </ol>
    ";
  
}
?>
