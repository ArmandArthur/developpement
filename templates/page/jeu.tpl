<select id="selectPersonnage">
    <option value="{$personnage->getId()}">{$personnage->getNom()}</option>
    {foreach from=$personnages item=personnage}
        <option value="{$personnage->getId()}" >{$personnage->getNom()}</option>
    {/foreach}
</select>  
<div id="message">
    {if $messageMouvement eq "true" }
        {$messageMouvementContent}
    {/if}
    {if $messageAttaque eq "true" }
        {$messageAttaqueContent}
    {/if}
</div>
<div id="map">
    {include file='map.tpl'}
</div>
<div id="caracteristique">
    {include file='caracteristique.tpl'}
</div>
<div id="action">
    {include file='action.tpl'}
</div>
