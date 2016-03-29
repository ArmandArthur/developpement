<div id="message">
    {if $messageInsertEvolution eq "true" }
        {$messageInsertEvolutionContent}
    {/if}
    {if $messageUpdateEvolution eq "true" }
        {$messageUpdateEvolutionContent}
    {/if}    
</div>
<div id="evolution">
    <div id="ajouter">
        <h1 class="warning">
        Pour ajouter une évolution, il faut ajouter des icônes de personnage.</h1>
        <h1>Ajouter évolution</h1>
        <form id="formAjouterEvolution" action="adminEvolution.php" method="post">
                <div class="line">
                    <label for="selectPersonnageType">Type de personnage :</label>             
                    <select id="selectPersonnageType" name="personnageTypeId">
                    {foreach from=$listePersonnageType item=$personnageType}
                            <option 
                            {if $evolutionSelected instanceof Evolution}
                                {if $evolutionSelected->getPersonnageTypeId() eq $personnageType->getId()}
                                    selected="selected"
                                {/if}                            
                            {/if}
                            value="{$personnageType->getId()}" >{$personnageType->getNom()}</option>                        
                        
                    {/foreach}
                    </select>                    
                </div>
                <div class="line">
                    <label for="palierInferieur">Palier inférieur:</label>
                    <input id="palierInferieur" name="palierInferieur" type="text" 
                     value="{if $evolutionSelected instanceof Evolution}{$evolutionSelected->getPalierInferieur()}{/if}"/> 
                </div>
                <div class="line">
                    <label for="palierSuperieur">Palier supérieur:</label>
                    <input id="palierSuperieur" name="palierSuperieur" type="text"
                     value="{if $evolutionSelected instanceof Evolution}{$evolutionSelected->getPalierSuperieur()}{/if}"/>
                </div>
                <div class="line">
                    <label for="iconePersonnageId">Icône personnage Id: </label>
                    <ul id="selectIconePersonnageId" name="selectIconePersonnageId">
                        {foreach from=$listeIconePersonnage item=$iconePersonnage}
                            <li 
                            {if $evolutionSelected instanceof Evolution}
                                {if $evolutionSelected->getIconePersonnageId() eq $iconePersonnage->getId()}
                                    class="selected"
                                {/if}
                            {/if}
                                value="{$iconePersonnage->getId()}">
                                <img src="{$iconePersonnage->getChemin()}" alt="" />
                                
                            </li>
                        {/foreach}   
                                      
                    </ul>
                    <input id="iconePersonnageId" name="iconePersonnageId" type="hidden" />
                </div>
                <div class="line">
                    {if $evolutionSelected instanceof Evolution}
                        <input type="hidden" name="id" value="{$evolutionSelected->getId()}" />
                    {/if}
                    <input type="hidden" id="uniqueId" name="uniqueId" value="{$FormulaireUniqueId->displayUniqueId()}"/>
                    <input id="action" name="action" type="hidden" value="ajouter" />
                    <input type="submit" class="submit">
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
               <td>
                   <form id="formModifierEvolution" action="adminEvolution.php" method="post">
                       <input name="action" type="hidden" value="modifier" />
                       <input name="id" type="hidden" value="{$evolution->getId()}" />
                       <input type="submit" value="modifier" />
                   </form>
               </td>
               <td>
                   <form id="formSupprimerEvolution" action="adminEvolution.php" method="post">
                       <input id="action" name="action" type="hidden" value="supprimer" />
                       <input name="id" type="hidden" value="{$evolution->getId()}" />
                       <input type="submit" value="supp" />
                   </form>
               </td>
           </tr>
        {/foreach}
        </table>
    </div>    
</div>
