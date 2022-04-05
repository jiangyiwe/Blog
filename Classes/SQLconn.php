<?php
require_once(__ROOT__ . "/Classes/loginStatus.php");

class SQLconn
{
    public $conn = NULL;
    public $loginStatus = NULL;

    // Fonction qui connecte la BDD
    //--------------------------------------------------------------------------------
    function __construct()
    {

        //Créer connection
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "yiwenjiang";

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        // Après connection, créer l'objet loginstatus
        $this->loginStatus = new LoginStatus($this);
    }

    //Fonction pour sécuriser les données utilisateur de manière basique
    //--------------------------------------------------------------------------------
    function SecurizeString_ForSQL($string)
    {
        $string = trim($string);
        $string = stripcslashes($string);
        $string = addslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    }

    //Fonction pour traiter un formulaire de création de compte
    //--------------------------------------------------------------------------------
    function Process_NewAccount_Form()
    {

        $creationAttempted = false;
        $creationSuccessful = false;
        $error = NULL;

        //Données reçues via formulaire?
        if (isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["confirm"])) {

            $creationAttempted = true;

            //Form is only valid if password == confirm, and username is at least 4 char long
            if (strlen($_POST["name"]) < 4) {
                $error = "Un nom utilisateur doit avoir une longueur d'au moins 4 lettres";
            } elseif ($_POST["password"] != $_POST["confirm"]) {
                $error = "Le mot de passe et sa confirmation sont différents";
            } else {
                $username = $this->SecurizeString_ForSQL($_POST["name"]);
                $password = md5($_POST["password"]);

                $query = "INSERT INTO `login` VALUES (NULL, '$username', '$password' )";
                $result = $this->conn->query($query);

                if (mysqli_affected_rows($this->conn) == 0) {
                    $error = "Erreur lors de l'insertion SQL. Essayez un nom/password sans caractères spéciaux";
                } else {
                    $creationSuccessful = true;
                }
            }
        }

        return array($creationAttempted, $creationSuccessful, $error);
    }

    //Fonction pour générer une page de posts en HTML à partir de paramètres
    //--------------------------------------------------------------------------------
    function GenerateHTML_forPostsPage($blogID, $ownerName, $isMyBlog)
    {

        $query = "SELECT * FROM `post` WHERE `owner_login` = " . $blogID . " ORDER BY `date_lastedit` DESC LIMIT 10";
        $result = $this->conn->query($query);
        if (mysqli_num_rows($result) != 0) {

            if ($isMyBlog) {
?>
                <div class="monblog">
                    <form action="editPost.php" method="POST">
                        <input type="hidden" name="newPost" value="1">
                        <button type="submit">Ajouter un nouveau post!</button>
                    </form>

                <?php
            }

            while ($row = $result->fetch_assoc()) {
                date_default_timezone_set('Europe/Paris');
                $timestamp = strtotime($row["date_lastedit"]);
                echo '
                <div class="blogPost">
                    <div class="postTitle">';

                if ($isMyBlog) {

                    echo '
                    <div class="postModify">
                        <form action="editPost.php" method="GET">
                            <input type="hidden" name="postID" value="' . $row["ID_post"] . '">
                            <button type="submit">Modifier/effacer</button>
                        </form>
                    </div>';
                } else {
                    echo '
                    <div class="postAuthor">par ' . $ownerName . '</div>
                    ';
                }

                echo '
                    <h3>•' . $row["title"] . '</h3>
                    <p>dernière modification le '  .
                    date("D d/F/Y à H:i:s e", $timestamp) . '
                </div>
                ';



                echo '
                <p class="postContent">' . $row["content"] . '</p>
                <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>by ' . $ownerName .
                    '</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-comment"></i>
                    <span>(45)</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                    <span>(29)</span>
                </a>
               </div>
                </div>
                </div>
                ';
            }
        } else {
                ?>
                <div class="monblog">
                    <?php
                    echo '
            <h1>Il n\'y a pas de post dans ce blog.</h1>';

                    if ($isMyBlog) {
                    ?>
                        <form action="editPost.php" method="POST">
                            <input type="hidden" name="newPost" value="1">
                            <button type="submit">Ajouter un premier post!</button>
                        </form>
                </div>
<?php
                    }
                }
            }

            //Fonction pour fermer la connection sur base de données
            //--------------------------------------------------------------------------------
            function DisconnectDatabase()
            {
                $this->conn->close();
            }
        }

?>