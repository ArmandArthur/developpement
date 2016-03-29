<form id="formLogin" method="post" action="index.php">
    <input type="text" id="login" name="login" /> 
    <input type="hidden" name="action" value="connecter"/>
    <input type="submit" value="se connecter" />
</form>

<div id="listeJoueur">
    <span> Liste des joueurs</span>
    <br />
{foreach from=$joueurs item=joueur}
        <span>{$joueur->getLogin()} ({$joueur->getId()})</span> ,
{/foreach}
</div>