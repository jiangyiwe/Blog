<section class="contact" id="contact">

    <div class="inside">
        <form action="./newAccount.php" method="post">
            <div style="margin-top: 80px;">
                <h3><span>B</span>logger</h3>
            </div>

            <div style="float:center; width:100%;padding-top:0px; margin-top: 100px; border-top: 20px; margin-bottom: 100px">

                <div class="name">
                    <label for="name">Nouveau Login :</label>
                    <input autofocus type="text" id="name" name="name">
                </div>
                <div class="password">
                    <label for="password">Définir Password :</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="password">
                    <label for="confirm">Confirmer Password :</label>
                    <input type="password" id="confirm" name="confirm">
                </div>
                <div style="clear:both; height:20px"></div>

                <button type="submit" class="btn">Créer le compte</button>
                <div class="foot">
                    <div class="endlink">
                        <p><a href="./index.php">
                                >>Retour au début</a><br><br></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>