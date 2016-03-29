<div id="menu">
    {if $Privilege->hasPermission('permission') ||
        $Privilege->hasPermission('role') ||
        $Privilege->hasPermission('rolePermission') ||
        $Privilege->hasPermission('roleJoueur')
    }
    <ul class="menu" id="menuSuperAdmin">
        <li>
            <a href="#">Droits</a>
            <ul>
                {if $Privilege->hasPermission('permission')}
                    <li>
                        <a href="superAdminPermission.php">permission</a>
                    </li>                
                {/if}
                {if $Privilege->hasPermission('role')}
                <li>
                    <a href="superAdminRole.php">rôle</a>
                </li>
                {/if}                
                {if $Privilege->hasPermission('rolePermission')}
                <li>
                    <a href="superAdminPermissionRole.php">rôle et permissions</a>
                </li>
                {/if}                
                {if $Privilege->hasPermission('roleJoueur')}
                <li>
                    <a href="superAdminJoueurRole.php">rôle et joueur</a>
                </li>
                {/if}                
            </ul>
        </li>      
    </ul>
    {/if}
    {if $Privilege->hasPermission('evolutionCreerModifier') ||
        $Privilege->hasPermission('IconePersonnage') ||
        $Privilege->hasPermission('personnageCreer')
    }        
    <ul class="menu" id="menuAdmin">
        {if $Privilege->hasPermission('evolutionCreerModifier')}
        <li>
            <a href="#">Evolution</a>
            <ul>
                <li>
                    <a href="adminEvolution.php">créer, modifier</a>
                </li>
            </ul>
        </li>
        {/if}
        {if $Privilege->hasPermission('IconePersonnage')}
        <li>
            <a href="#">Icônes</a>
            <ul>
                <li>
                    <a href="adminIconePersonnage.php">personnages</a>
                </li>
            </ul>
        </li>
        {/if}
        {if $Privilege->hasPermission('personnageCreer')}
        <li>
            <a href="#">Personnage</a>
            <ul>
                <li>
                    <a href="adminCreatePersonnage.php">créer</a>
                </li>
            </ul>
        </li>
        {/if}
    </ul>
    {/if}    
    <ul class="menu" id="menuPlayer">
        <li>
            <a href="jeu.php">Jeu</a>
        </li>
    </ul>
    
    <ul class="menu" id="menuInformation">
        <li>
            <a href="http://localhost:81/phpmyadmin">phpmyadmin</a>
        </li>
        
        <li>
            <select id="menuJoueurId">
            {foreach from=$selectJoueurs key=roleNom item=item }
                <optgroup label='{$roleNom}'>
                    {foreach from=$item  item=JoueurItem }
                        <option 
                        {if $JoueurItem->getId() eq $Joueur->getId()}
                            selected="selected"
                        {/if}
                            value="{$JoueurItem->getId()}">{$JoueurItem->getLogin()}</option>
                    {/foreach}
                </optgroup>
            {/foreach}-->
            </select>
        </li>
        
        <li>
            <a href="index.php?page=deco">Deco</a>
        </li>        
    </ul>
    
</div>
