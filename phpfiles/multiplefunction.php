<?php

function multiple($startindex) {
  
   echo "<input style='margin:5px;' name=\"m$startindex\" type='text' placeholder='ادخل السؤال'>";
    echo "<ol type=\"1\" >
            <li >
                <input name=\"ma$startindex\" style='margin:5px;' type='text' placeholder='ادخل الجواب'>
                <input name=\"mc$startindex\" type=\"checkbox\"> الخيار صحيح ام لا 
            </li>
            <li>
                <input name=\"ma$startindex\" style='margin:5px;' type='text' placeholder='ادخل الجواب'>
                <input name=\"mc$startindex\" type=\"checkbox\"> الخيار صحيح ام لا 
            </li>
            <li >
                <input name=\"ma$startindex\" style='margin:5px;' type='text' placeholder='ادخل الجواب'>
                <input name=\"mc$startindex\" type=\"checkbox\"> الخيار صحيح ام لا 
            </li>
            <li >
                <input name=\"ma$startindex\"  style='margin:5px;'type='text' placeholder='ادخل الجواب'>
                <input name=\"mc$startindex\" type=\"checkbox\"> الخيار صحيح ام لا 
            </li>


        </ol>
    ";
  
}
?>
