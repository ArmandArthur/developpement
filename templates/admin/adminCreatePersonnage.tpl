<div id="message">
    {if $messageInsertPersonnage eq "true" }
        {$messageInsertPersonnageContent}
    {/if}
</div>
<div id="createPersonnage">
    <div id="ajouter">
        <h1>Créer un personnage</h1>
        <form id="formAjouterPersonnage" action="adminCreatePersonnage.php" method="post" enctype="multipart/form-data">
                <div class="line">
                    <label for="joueurId">Joueur :</label>             
                    <select id="joueurId" name="joueurId">
                    {foreach from=$listeJoueur item=$joueur}
                        <option value="{$joueur->getId()}" >{$joueur->getLogin()}</option>
                    {/foreach}
                    </select>
                </div>
                <div class="line">
                    <label for="personnageTypeId">Type de personnage :</label>  
                    <select id="personnageTypeId" name="personnageTypeId">
                    {foreach from=$listePersonnageType item=$personnageType}
                        <option value="{$personnageType->getId()}" >{$personnageType->getNom()}</option>
                    {/foreach}
                    </select>
                </div>
                <div class="line">
                    <label for="nom">Nom :</label>  
                    <input id="nom" name="nom" value="" />
                </div>
                <div class="line">
                    <input type="submit" class="submit"></button>
                </div>            
        </form>
    </div>      
    
</div>
