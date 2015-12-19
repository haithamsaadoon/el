<?php

function single($startindex) {
  
   echo "<input style='margin:5px;' name=\"s$startindex\" type='text' placeholder='ادخل السؤال' >";
   
   echo "<input name=\"sc$startindex\" style='margin:5px;' type='number' value='1' max='4' placeholder='ادخل رقم الاجابة الصحيح '>";
    echo "<ol type=\"1\" >
            <li >
                <input name=\"sa1$startindex\" style='margin:5px;' type='text' placeholder='ادخل الجواب'>
                
            </li>
            <li>
                <input name=\"sa2$startindex\" style='margin:5px;' type='text' placeholder='ادخل الجواب'>
            </li>
            <li >
                <input name=\"sa3$startindex\" style='margin:5px;' type='text' placeholder='ادخل الجواب'>
            </li>
            <li >
                <input name=\"sa4$startindex\"  style='margin:5px;'type='text' placeholder='ادخل الجواب'>
            </li>


        </ol>
    ";
  
}
?>
