<?php

function criarSelect($name, $lista){
    
    $optionTemplate = '<option value="{0}">{1}</option>';
    $options = $option = "";

    foreach ($lista as $value => $description) {        
        $option = str_replace("{0}", $value, $optionTemplate);  
        $option = str_replace("{1}", $description, $option);  

        $options .= $option;
    }
    
    $select = "<select name='$name'>$options</select>";   
    return $select;
}
?>