<form method="post" action="">
    <input type="text" id="login" /> 
</form>

<div id="listeJoueur">
    <span> Liste des joueurs</span>
    <br />
{foreach from=$joueurs item=joueur}
        <span>{$joueur->getLogin()}</span> ,
{/foreach}
</div>