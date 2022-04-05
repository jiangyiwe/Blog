<?php
if (isset($SQLconn->loginStatus->userName) && isset($SQLconn->loginStatus->userID)) {
?>


    <div class="IDzone">
        <form action="./logout.php" method="POST">


            <div class="ID_logout">
                <input type="hidden" value="logout" name="logout"></input>
                <button type="submit" class="btn">Se déconnecter</button>
            </div>
            <div class="ID_myblog">
                <p><a href="./showBlog.php?userID=<?php echo $SQLconn->loginStatus->userID; ?>">Mon Blog Personnel</a></p>
            </div>
            <div style="clear:both"></div>
        </form>
    </div>
<?php
}
?>