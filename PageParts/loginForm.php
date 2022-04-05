    <script>
    	//Fonction pour vérifier le formulaire
    	//---------------------------------------------------------------
    	function CheckLoginForm() {
    		var name = document.getElementById("name").value;
    		var password = document.getElementById("password").value;

    		if (name.length < 4) {
    			alert("Veuillez entrer un nom d\'au moins 4 caractères ou plus.!")
    			return false;
    		} else if (password.length == 0) {
    			alert("Le champ du mot de passe ne doit pas être vide!")
    			return false;
    		} else {
    			return true;
    		}
    	}

    	//Fonction pour rollover image "oeil"
    	//---------------------------------------------------------------
    	function ShowPass_MouseOn(icone) {
    		icone.style.width = "34px";
    		icone.style.height = "34px";
    		icone.style.marginTop = "61px";
    	}

    	//Fonction pour rollout image "oeil"
    	//---------------------------------------------------------------
    	function ShowPass_MouseOff(icone) {
    		icone.style.width = "32px";
    		icone.style.height = "32px";
    		icone.style.marginTop = "62px";
    	}

    	//Fonction pour montrer/cacher le mot de passe
    	//---------------------------------------------------------------
    	function TogglePass(icone) {
    		var field = document.getElementById("password");
    		if (field.type == "password") {
    			icone.src = "./Images/password_show.png";
    			field.type = "text";
    		} else {
    			icone.src = "./Images/password_hide.png";
    			field.type = "password";
    		}
    	}
    </script>

    <section class="contact" id="contact">

    	<div>
    		<svg class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="300" height="300" viewbox="0 0 640 480" xml:space="preserve">
    			<g transform="matrix(3.31 0 0 3.31 320.4 240.4)">
    				<circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(61,71,133); fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
    			</g>
    			<g transform="matrix(0.98 0 0 0.98 268.7 213.7)">
    				<circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
    			</g>
    			<g transform="matrix(1.01 0 0 1.01 362.9 210.9)">
    				<circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
    			</g>
    			<g transform="matrix(0.92 0 0 0.92 318.5 286.5)">
    				<circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
    			</g>
    			<g transform="matrix(0.16 -0.12 0.49 0.66 290.57 243.57)">
    				<polygon style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" points="-50,-50 -50,50 50,50 50,-50 "></polygon>
    			</g>
    			<g transform="matrix(0.16 0.1 -0.44 0.69 342.03 248.34)">
    				<polygon style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" points="-50,-50 -50,50 50,50 50,-50 "></polygon>
    			</g>
    		</svg>
    	</div>
    	<div class="inside">
    		<form action="./index.php" method="post" onsubmit="return CheckLoginForm()">
    			<h3><span>B</span>logger</h3>

    			<div style="float:center; width:100%;padding-top:100px; margin-top: 170px; border-top: 300px;">

    				<div class="name">
    					<label for="name">Login :</label>

    					<input autofocus type="text" id="name" name="name">
    				</div>


    				<div class="password">
    					<label for="password">Password :</label>

    					<input type="password" id="password" name="password">

    				</div>

    			</div>

    			<div style="clear:both; height:20px"></div>

    			<button type="submit" class="btn">Se Connecter</button>
    			<div class="foot">
    				<div class="endlink">
    					<p><a href="./newAccount.php">>>Créer un nouveau compte </a><br><br></p>
    				</div>
    			</div>
    		</form>
    	</div>
    </section>