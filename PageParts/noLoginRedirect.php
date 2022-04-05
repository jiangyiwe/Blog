<?php
    if ( $SQLconn->loginStatus->loginSuccessful == false ) {
        $redirect = "Location:./index.php";
       header($redirect);
    }
