<?php

if(isset($_GET['vue'])){ 
    
    switch($_GET['vue']){
        case 'salon':
            include "pages/salon.php";
            break;
        case 'prix':
            include "pages/prix.php";
            break;
        case 'photo':
            include "pages/photo.php";
            break;
        default:
           include_once "pages/salon.php";
    }
}else{
     include_once "pages/salon.php";
    }

?>