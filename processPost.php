<?php

include("./initialize.php");
include(__ROOT__ . "/PageParts/noLoginRedirect.php");

//The forms that bring the user here have hidden fields to tell if we're here to add or edit...
if (isset($_POST["action"])) {

    if ($_POST["action"] == "edit") {

        if (isset($_POST["title"]) && isset($_POST["content"])) {
            $query = "UPDATE `post` SET 
                    `title` = '" . $SQLconn->SecurizeString_ForSQL($_POST["title"]) . "',  
                    `content` = '" . $SQLconn->SecurizeString_ForSQL($_POST["content"]) . "' 
                    WHERE `ID_post` = " . $_POST["postID"];
        }
    } elseif ($_POST["action"] == "new") {

        if (isset($_POST["title"]) && isset($_POST["content"])) {
            $query = "INSERT INTO `post` (title, content, owner_login) VALUES            
                    ('" . $SQLconn->SecurizeString_ForSQL($_POST["title"]) . "', '" . $SQLconn->SecurizeString_ForSQL($_POST["content"]) . "', '" . $SQLconn->loginStatus->userID . "')";
        }
    } elseif ($_POST["action"] == "delete") {
?>
       
<?php

        $query = "DELETE FROM `post` WHERE `ID_post` = " . $_POST["postID"];
    }

    if (isset($query)) {
        $result = $SQLconn->conn->query($query);
    }


    header("Location:./showBlog.php?userID=" . $SQLconn->loginStatus->userID);
}
