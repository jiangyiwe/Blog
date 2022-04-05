<section class="afficherlesautres" id="afficherlesautres">
    <div class="displayuser">

        <h2>Ou alors, découvrez un blog crée par un autre utilisateur!</h2>
        <hr>
    </div>

    <?php
    $query =
        "SELECT `ID`,`logname` FROM `login`
    ORDER BY RAND()
    LIMIT 3
    ";
    $result = $SQLconn->conn->query($query);

    if (mysqli_num_rows($result) != 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo '<li>Découvrir <a href="./showBlog.php?userID=' . $row["ID"] . '"><i class="latin">le blog de ' . $row["logname"] . '</i></a></li>';
        }
        echo "</ul>";
    } else {
        echo '<p class="warning"> Aucun utilisateur/blog n\'existe dans le système pour l\'instant!</p>';
    }
    ?>

</section>