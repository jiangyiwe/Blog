<?php
include("./initialize.php");
if ($SQLconn->loginStatus->loginSuccessful) {
    $redirect = "Location:./showBlog.php?userID=" . $SQLconn->loginStatus->userID;
    header($redirect);
}

include(__ROOT__ . "/PageParts/header2.php");
?>




<?php

include(__ROOT__ . "/PageParts/footer.php");
$SQLconn->DisconnectDatabase();
?>