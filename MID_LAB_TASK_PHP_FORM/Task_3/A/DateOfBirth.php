<?php

if(isset($_REQUEST['submit'])){
    
    if($_REQUEST['day']=="" or $_REQUEST['month']=="" or $_REQUEST['year']==""){
        
        echo "Please input all the fields";
        
    }
    
    else{
        
        
        echo "Date of Birth ".$_REQUEST['day']."/".$_REQUEST['month']."/".$_REQUEST['year'];
        
    }
    
    
}


?>
