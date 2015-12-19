<?php

function single($row) {
    extract($row);
  
   echo "<p>".$que_question."</p>";
   
   
    echo "<ol type=\"1\" >
            <li >
                <input name=\"$que_id\" style='margin:5px;' type='radio' value='1'  >$que_a1
                
            </li>
            <li>
                <input name=\"$que_id\" style='margin:5px;' type='radio' value='2' >$que_a2
            </li>
            <li >
                <input name=\"$que_id\" style='margin:5px;' type='radio' value='3' >$que_a3
            </li>
            <li >
                <input name=\"$que_id\"  style='margin:5px;'type='radio' value='4' >$que_a4
            </li>


        </ol>
    ";
  
}
?>
