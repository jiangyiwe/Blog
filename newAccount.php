<?php
include("./initialize.php");
$newAccountStatus = $SQLconn->Process_NewAccount_Form();

include(__ROOT__ . "/PageParts/header2.php");
?>


<script>
    var close = document.getElementsByClassName("closebtn");
    var i;

    for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function() {
                div.style.display = "none";
            }, 600);
        }
    }
</script>
<section class="contact" id="contact">


    <?php
    if ($newAccountStatus[1]) {

    ?>
        <div class="success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Success!</strong> Nouveau compte crée avec succès!
        </div>
        <script>
            window.alert("Nouveau compte crée avec succès!");
        </script>
    <?php
    } elseif ($newAccountStatus[0]) {

    ?>

        <div class="alertwarning">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Warning!</strong> La création d'un compte n'a pas abouti, veuillez réessayer.
        </div>
        <script>
            window.alert("La création d'un compte n'a pas abouti, veuillez réessayer.");
        </script>
    <?php
    }
    ?>


    </p>
    <hr>
    <?php include("./PageParts/newLoginForm.php"); ?>
    <hr>

</section>
<?php

include(__ROOT__ . "/PageParts/displayRandomUsers.php");
include(__ROOT__ . "/PageParts/footer.php");
$SQLconn->DisconnectDatabase();

?>