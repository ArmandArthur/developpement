<a href="">Admin carte</a>
<select id="selectPersonnage">
    <option value="{$personnage->getId()}">{$personnage->getNom()}</option>
    {foreach from=$personnages item=personnage}
        <option value="{$personnage->getId()}" >{$personnage->getNom()}</option>
    {/foreach}
</select>