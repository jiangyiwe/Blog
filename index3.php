<?php
include("./initialize.php");
if ($SQLconn->loginStatus->loginSuccessful) {
    $redirect = "Location:./showBlog.php?userID=" . $SQLconn->loginStatus->userID;
    header($redirect);
}

include(__ROOT__ . "/PageParts/header2.php");
?>


<!-- about -->
<section class="about" id="about">
    <div class="container">

        <div class="photo">
            <img src="./Images/images.jpg" height="300">
        </div>
        <div class="about-text">

            <h1>Yiwen Jiang</h1>
            <p>Coding is my passion</p>
            <p>Bienvenue sur mon blog, j'espère que vous l'apprécierez !</p>



        </div>

    </div>
</section>
<!-- end of about -->

<?php

include(__ROOT__ . "/PageParts/footer.php");
$SQLconn->DisconnectDatabase();
?>