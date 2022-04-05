<?php

// Function to check login. returns an array with 2 booleans
// Boolean 1 = is login successful, Boolean 2 = was login attempted
//--------------------------------------------------------------------------------
/*function CheckLogin(){
    global $conn, $username, $userID;

    $error = NULL; 
    $loginSuccessful = false;

    //Données reçues via formulaire?
	if(isset($_POST["name"]) && isset($_POST["password"])){
		$username = SecurizeString_ForSQL($_POST["name"]);
		$password = md5($_POST["password"]);
		$loginAttempted = true;
	}
	//Données via le cookie?
	elseif ( isset( $_COOKIE["name"] ) && isset( $_COOKIE["password"] ) ) {
		$username = $_COOKIE["name"];
		$password = $_COOKIE["password"];
		$loginAttempted = true;
	}
	else {
		$loginAttempted = false;
	}

    //Si un login a été tenté, on interroge la BDD
    if ($loginAttempted){
        $query = "SELECT * FROM login WHERE logname = '".$username."' AND password ='".$password."'";
        $result = $conn->query($query);

        if ( $result ){
            $row = $result->fetch_assoc();
            $userID = $row["ID"];
            CreateLoginCookie($username, $password);
            $loginSuccessful = true;
        }
        else {
            $error = "Ce couple login/mot de passe n'existe pas. Créez un Compte";
        }
    }

    return array($loginSuccessful, $loginAttempted, $error, $userID);
}*/

// Function to check a new account form
//--------------------------------------------------------------------------------
function CheckNewAccountForm(){

}

// Function to display a page with 10 posts for a blog
//--------------------------------------------------------------------------------
function DisplayPostsPage($blogID, $ownerName, $isMyBlog){
    global $conn;

    
}


// Function to close connection to database
//--------------------------------------------------------------------------------
/*function DisconnectDatabase(){
	global $conn;
	$conn->close();
}*/

// Function to get current URL, without file name
//--------------------------------------------------------------------------------
function GetUrl() {
    $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
    $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
    $url .= dirname($_SERVER["REQUEST_URI"]);
    return $url;
}


?>