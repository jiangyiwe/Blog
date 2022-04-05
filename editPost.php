<?php

include("./initialize.php");
include(__ROOT__ . "/PageParts/noLoginRedirect.php");

include(__ROOT__ . "/PageParts/header2.php");
include(__ROOT__ . "/PageParts/IDzone.php");

//First, try to see if there is POST data. This allows us to identify
//if we are in the "create new post" case
if (isset($_POST["newPost"]) && $_POST["newPost"] == 1) {
?>

    <div class="monblog">
        <div class="contact">
            <form action="./processPost.php" method="POST">
                <div class="titre">
                    <h4>Création d'un nouveau post</h4>
                </div>

                <div class="inputBox">
                    <input type="hidden" name="action" value="new">
                    <label for="title">Category :</label>
                    <input autofocus type="text" name="title">
                </div>
                <div class="inputBox">
                    <input type="hidden" name="action" value="new">
                    <label for="title">Titre :</label>
                    <input autofocus type="text" name="title">
                </div>
                <div class="inputBox">
                    <label for="content">Message :</label>
                    <textarea name="content">Tapez votre texte ici...</textarea>
                </div>
                <div class="formbutton">
                    <button type="submit">Ajouter ce post à mon blog</button>
                </div>
            </form>
        </div>
    </div>
    <?php
}
//Otherwise, we are in "edit" mode. Then, try to get post for ID used as GET parameter
elseif (isset($_GET["postID"])) {

    $query = 'SELECT * FROM `post` WHERE `ID_post` =' . $_GET["postID"];
    $result = $SQLconn->conn->query($query);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
    ?>
        <div class="monblog">
            <div class="contact">
                <form action="./processPost.php" method="POST">
                    <div class="titre">
                        <h4>Modification d'un post pasé</h4>
                    </div>
                    <div class="inputBox">
                        <input type="hidden" name="action" value="edit">
                        <input type="hidden" name="postID" value="<?php echo $data["ID_post"]; ?>">
                        <label for="title">Titre :</label>
                        <input autofocus type="text" name="title" value="<?php echo $data["title"]; ?>">
                    </div>
                    <div class="inputBox">
                        <label for="content">Message :</label>
                        <textarea name="content"><?php echo $data["content"]; ?></textarea>
                    </div>
                    <div class="formbutton">
                        <button type="submit">Modifier le post</button>
                    </div>
                </form>
                <form action="./processPost.php" method="POST">

                    <div>
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="postID" value="<?php echo $data["ID_post"]; ?>">
                    </div>
                    <div class="formbutton">
                        <script>
                            function ConfirmDelete() {
                                return confirm("Vous êtes sûr de vouloir supprimer ?");
                            }
                        </script>
                        <button type="submit" onclick="return ConfirmDelete()" value="1">Supprimer le post</button>

                    </div>
                </form>
            </div>
        </div>
<?php
    } else {
        echo "<h1>Erreur! Cette ID ne correspond à aucun post!</h1>";
    }
}

include(__ROOT__ . "/PageParts/displayRandomUsers.php");
include(__ROOT__ . "/PageParts/footer.php");
$SQLconn->DisconnectDatabase();

?>