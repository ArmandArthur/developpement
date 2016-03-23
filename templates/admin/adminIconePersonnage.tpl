<div id="message">
    {if $insertIconePersonnage eq "true" }
        {$insertIconePersonnageContent}
    {/if}
</div>
<div id="iconePersonnage">
    <div id="ajouter">
        <h1>Ajouter un icône</h1>
        <form id="formAjouterIconePersonnage" action="adminIconePersonnage.php" method="post" enctype="multipart/form-data">
                <div class="line">
                    <label for="chemin">Fichier :</label>             
                    <input type="file" id="chemin" name="chemin" />
                </div>
                <div class="line">
                    <input type="submit" class="submit"></button>
                </div>
        </form>
    </div>
    <div id="liste">
        <h1>Liste des icônes</h1>
        <table>
        {foreach from=$listeIconePersonnage item=$iconePersonnage}
            <tr>
                <td><img src="{$iconePersonnage->getChemin()}" alt="{$iconePersonnage->getChemin()}" /></td>
            </tr>
        {/foreach}
        </table>
    </div>    
</div>
