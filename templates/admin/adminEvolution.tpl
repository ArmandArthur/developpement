<div id="message">
    {if $messageInsertEvolution eq "true" }
        {$messageInsertEvolutionContent}
    {/if}
</div>
<div id="evolution">
    <div id="ajouter">
        <h1 class="warning">Les évolutions sont obligatoires.<br/><br/>
        Pour ajouter une évolution, il faut ajouter des icônes de personnage.</h1>
        <h1>Ajouter évolution</h1>
        <form id="formAjouterEvolution" action="adminEvolution.php" method="post">
                <div class="line">
                    <label for="selectPersonnageType">Type de personnage :</label>             
                    <select id="selectPersonnageType" name="personnageTypeId">
                    {foreach from=$listePersonnageType item=$personnageType}
                        <option value="{$personnageType->getId()}" >{$personnageType->getNom()}</option>
                    {/foreach}
                    </select>                    
                </div>
                <div class="line">
                    <label for="palierInferieur">Palier inférieur:</label>
                    <input id="palierInferieur" name="palierInferieur" type="text" /> 
                </div>
                <div class="line">
                    <label for="palierSuperieur">Palier supérieur:</label>
                    <input id="palierSuperieur" name="palierSuperieur" type="text" />
                </div>
                <div class="line">
                    <label for="iconePersonnageId">Icône personnage Id: </label>
                    <ul id="selectIconePersonnageId" name="selectIconePersonnageId">
                        {foreach from=$listeIconePersonnage item=$iconePersonnage}
                            <li value="{$iconePersonnage->getId()}"><img src="{$iconePersonnage->getChemin()}" alt="" />{$iconePersonnage->getChemin()}</li>
                        {/foreach}   
                    </ul>
                    <input id="iconePersonnageId" name="iconePersonnageId" type="hidden" />
                </div>
                <div class="line">
                    <input type="submit" class="submit"></button>
                </div>
        </form>
    </div>
    <div id="liste">
        <h1>Liste des évolutions</h1>
        <table>
            <tr>
                <th>Palier inférieur</th>
                <th>Palier supérieur</th>
                <th>Icone</th>
            </tr>
       {foreach from=$listeEvolution item=$evolution}
           <tr>
               <td>{$evolution->getPalierInferieur()}</td>
               <td>{$evolution->getPalierSuperieur()}</td>
               <td><img src="{$evolution->getIconePersonnagePath()}" /></td>
           </tr>
        {/foreach}
        </table>
    </div>    
</div>
