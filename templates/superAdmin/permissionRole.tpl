<div id="permissionRole">
    <div id="ajouter">
        <h1>Associer des permissions à un rôle</h1>
        <form id="formAjouterPermissionRole" action="superAdminPermissionRole.php" method="post">
            <div class="line">
                <label for="roleId">Rôle :</label>  
                <select id="roleId" name="roleId">
                    <option value="-"> -- selection rôle --</option>
                {foreach from=$listeRole item=$role}
                    <option 
                    {if $role->getId() eq $roleIdSelected}
                        selected="selected"
                    {/if}
                    value="{$role->getId()}" >{$role->getNom()}</option>
                {/foreach}
                </select>
            </div>
            <div class="line">
                <label for="permissionId">Permissions :</label>  
                {foreach from=$listePermission item=$permission}                    
                    <div class="checkbox">
                        {$permission->getNom()} : 
                        <input 
                        {foreach from=$listePermissionSelected item=$permissionSelected}
                            {if $permissionSelected instanceOf Permission}
                                {if $permission->getId() eq $permissionSelected->getId()}
                                    checked="checked"
                                {/if}
                            {/if}
                        {/foreach}
                        type="checkbox" name="permissionId[]" value="{$permission->getId()}">
                    </div>
                {/foreach}
            </div>
            <div class="line">
                <input id="action" name="action" type="hidden" value="ajouter" />
                <input type="submit" value="Valider" />
            </div>            
        </form>
    </div>
</div>    