<?php

function multiple($startindex) {
  
   echo "<input style='margin:5px;' name=\"m$startindex\"  type='text' placeholder='ادخل السؤال'>";
    echo "<ol type=\"1\" >
            <li >
                <input name=\"ma1$startindex\" style='margin:5px;' type='text' placeholder='ادخل الجواب'>
                <input name=\"mc1$startindex\" type=\"checkbox\" value='1'> الخيار صحيح ام لا 
            </li>
            <li>
                <input name=\"ma2$startindex\" style='margin:5px;' type='text' placeholder='ادخل الجواب'>
                <input name=\"mc2$startindex\" type=\"checkbox\" value='1'> الخيار صحيح ام لا 
            </li>
            <li >
                <input name=\"ma3$startindex\" style='margin:5px;' type='text' placeholder='ادخل الجواب'>
                <input name=\"mc3$startindex\" type=\"checkbox\" value='1'> الخيار صحيح ام لا 
            </li>
            <li >
                <input name=\"ma4$startindex\"  style='margin:5px;'type='text' placeholder='ادخل الجواب'>
                <input name=\"mc4$startindex\" type=\"checkbox\" value='1'> الخيار صحيح ام لا 
            </li>


        </ol>
    ";
  
}
?>
