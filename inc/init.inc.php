<?php
session_start();

if(!isset($_SESSION["form_data"]))
{
    $_SESSION["form_data"]["percentual_increase"]=0;
    $_SESSION["form_data"]["stage"]=0;
}

if(!isset($_SESSION["calc"]))
{
    $_SESSION["calc"]["percent"]="checked";
}

if(isset($_POST)) {
    
    $filteredPOST= filter_input_array(INPUT_POST);
    
    if(isset($filteredPOST["calculation"]) && $filteredPOST["calculation"]=="percentually") {
    
        $_SESSION["calc"]["percent"]="checked";
        $_SESSION["calc"]["stage"]="";
    
        
    }
    else
    {
        
        $_SESSION["calc"]["percent"]="";
        $_SESSION["calc"]["stage"]="checked";
    
    }
    $wage="";
    if(isset($filteredPOST["wage"]) && is_numeric($filteredPOST["wage"])) {
        $wage="value=\"{$filteredPOST["wage"]}\"";
    }
    include (__DIR__."/calculation.inc.php");
}