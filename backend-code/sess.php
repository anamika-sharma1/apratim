<?php

   session_start();

   function is_logged_in() {
    		if (isset($_SESSION['logged_in'])) {
                if($_SESSION['logged_in']!="null"){
                    if($_SESSION['logged_in']=="true") {
                       return true;
                    }
                }
                else{
                    $_SESSION['logged_in']="null";
                }
    		}
            return false;
    }    
?>