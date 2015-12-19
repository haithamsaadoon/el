<?php

function multiple($row) {
    extract($row);
  
   echo " <p>$quem_question</p>";
    echo "<ol type=\"1\" >
            <li >
                <input name=\"a1$quem_id\" style='margin:5px;' type='checkbox' value='1' />$quem_a1
                
            </li>
            <li>
                <input name=\"a2$quem_id\" style='margin:5px;' type='checkbox' value='1'/>$quem_a2
                
            </li>
            <li >
                <input name=\"a3$quem_id\" style='margin:5px;' type='checkbox' value='1'/>$quem_a3
              
            </li>
            <li >
                <input name=\"a4$quem_id\"  style='margin:5px;' type='checkbox'  value='1'/>$quem_a4
                
            </li>


        </ol>
        
    ";
  
}
?>
