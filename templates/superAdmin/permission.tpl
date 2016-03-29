<div id="permission">
    <div id="ajouter">
        <h1>Ajouter Permission</h1>
        <form id="formAjouterPermission" action="superAdminPermission.php" method="post">
            <div class="line">
                <label for="nom">Nom :</label>  
                <input id="nom" name="nom" />
            </div>
            <div class="line">
                <input id="action" name="action" type="hidden" value="ajouter" />
                <input type="submit" value="Valider" />
            </div>            
        </form>
    </div>
</div>    