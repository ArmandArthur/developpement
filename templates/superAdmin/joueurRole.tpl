<div id="joueurRole">
    <div id="ajouter">
        <h1>Associer un rôle à un joueur</h1>
        <form id="formAjouterJoueurRole" action="superAdminJoueurRole.php" method="post">
            <div class="line">
                <label for="login">Login :</label>  
                <input id="login" name="login" />
            </div>            
            <div class="line">
                <label for="roleId">Rôle :</label>  
                <select id="roleId" name="roleId">
                    <option value=""> -- selection rôle --</option>
                {foreach from=$listeRole item=$role}
                    <option value="{$role->getId()}" >{$role->getNom()}</option>
                {/foreach}
                </select>
            </div>
            <div class="line">
                <input id="action" name="action" type="hidden" value="ajouter" />
                <input type="submit" value="Valider" />
            </div>            
        </form>
    </div>
    <div id="liste">
        <h1>Liste des joueurs par groupe de rôle</h1>
            {foreach from=$selectJoueurs key=roleNom item=item }
                <div class="line">
                    <span class="groupe">{$roleNom}</span>
                    {foreach from=$item  item=JoueurItem }
                        <span class="joueurs">
                            {$JoueurItem->getLogin()}
                            <span class="mif-cross mif-lg">
                                <span>{$JoueurItem->getId()}</span>
                            </span>
                        </span>
                    {/foreach}                    
                </div>                
            {/foreach}      
    </div>                
</div>    