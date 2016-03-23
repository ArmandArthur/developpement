<div id="message">
</div>
<div id="menu">
<a href="jeu.php">Jeu</a>
    <select id="selectPersonnage">
        <option value="{$personnage->getId()}">{$personnage->getNom()}</option>
        {foreach from=$personnages item=personnage}
            <option value="{$personnage->getId()}" >{$personnage->getNom()}</option>
        {/foreach}
    </select>
</div>
    
<div id="upgrade">
        
</div>
