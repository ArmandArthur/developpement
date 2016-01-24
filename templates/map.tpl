{for $vL=0 to $carte->getLargeur() -1}
    {for $vH=0 to $carte->getHauteur() -1}	
	<div datapositionx="{$vL}" datapositiony="{$vH}" class="icon" style="left:{math equation="x*y" x=45 y=$vL}px; top:{math equation="x*y" x=$vH y=33}px;"></div>
    {/for}
{/for}

<img class="personnage_principal" src="{$personnage->getChemin()}" style="left:{math equation="x*y-45" x=$personnage->getPositionX() y=45}; top:{math equation="x*y-33" x=$personnage->getPositionY() y=33};";/>
{foreach from=$direction item=i}
	<div datapositionx="{$i.flecheX}" datapositiony="{$i.flecheY}" class="icon_fleche {$i.flecheClass}" style="left:{math equation="x*y-45" x=$i.flecheX y=45}px; top:{math equation="x*y-33" x=$i.flecheY y=33}px;" ></div>
{/foreach}

{foreach from=$personnages item=personnage}
	<img class="personnage_secondaire" dataId="{$personnage->getId()}" src="{$personnage->getChemin()}" style="left:{math equation="x*y-45" x=$personnage->getPositionX() y=45}; top:{math equation="x*y-33" x=$personnage->getPositionY() y=33};";/>
{/foreach}

{foreach from=$adversaires item=adversaire}
	<img class="personnage" dataId="{$adversaire->getId()}" src="{$adversaire->getChemin()}" style="left:{math equation="x*y-45" x=$adversaire->getPositionX() y=45}; top:{math equation="x*y-33" x=$adversaire->getPositionY() y=33};";/>
{/foreach}