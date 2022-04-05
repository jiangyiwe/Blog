<?php
include("./initialize.php");
if ($SQLconn->loginStatus->loginSuccessful) {
	$redirect = "Location:./showBlog.php?userID=" . $SQLconn->loginStatus->userID;
	header($redirect);
}

include(__ROOT__ . "/PageParts/header2.php");
?>

<?php
if ($SQLconn->loginStatus->loginAttempted) {
	echo '<h3 class="errorMessage">' . $SQLconn->loginStatus->errorText . '</h3>';
}
?>

<hr>

<?php include(__ROOT__ . "/PageParts/loginForm.php"); ?>

<?php
include(__ROOT__ . "/PageParts/displayRandomUsers.php");
include(__ROOT__ . "/PageParts/footer.php");
$SQLconn->DisconnectDatabase();
?>