<?php
include("./initialize.php");

include(__ROOT__ . "/PageParts/header2.php");
include(__ROOT__ . "/PageParts/IDzone.php");

//Try to get user for ID used as GET parameter
$blogOwnerName = "";
$isMyOwnBlog = false;
if (isset($_GET["userID"])) {

    if (isset($SQLconn->loginStatus->userID) && $SQLconn->loginStatus->userID == $_GET["userID"]) {
        $isMyOwnBlog = true;
        $blogOwnerName = $SQLconn->loginStatus->userName;
    } else {
        $query = 'SELECT `logname` FROM `login` WHERE `ID` =' . $_GET["userID"];
        $result = $SQLconn->conn->query($query);

        if (mysqli_num_rows($result) != 0) {
            $blogOwnerName = $result->fetch_assoc()["logname"];
        }
    }
?>

    <?php
    if ($blogOwnerName != "") {
        if ($isMyOwnBlog) {
    ?>
            <div class="monblog">
                <?php
                echo "<h1>Ceci est mon blog à moi, " . $blogOwnerName . " !</h1>";
                ?>
            </div>
        <?php
        } else {
        ?>
            <div class="monblog">
                <?php
                echo "<h1>Bienvenue sur le blog de " . $blogOwnerName . "</h1>";
                ?>
            </div>
<?php

        }

        $SQLconn->GenerateHTML_forPostsPage($_GET["userID"], $blogOwnerName, $isMyOwnBlog);
    } else {
        echo "<h1>Erreur! Cette ID ne correspond à aucun utilisateur actif!</h1>";
    }
}

include(__ROOT__ . "/PageParts/displayRandomUsers.php");
include(__ROOT__ . "/PageParts/footer.php");
$SQLconn->DisconnectDatabase();
