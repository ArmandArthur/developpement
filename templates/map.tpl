{for $vL=0 to $carte->getLargeur() -1}
	{for $vH=0 to $carte->getHauteur() -1}	
	<div class="icon" id="icon-{$vL}-{$vH}" style="left:{math equation="x*y" x=45 y=$vL}px; top:{math equation="x*y" x=$vH y=33}px;"></div>
	{/for}
{/for}
<img class="personnage_principal" src="img/personnage.png" style="left:{math equation="x*y-45" x=$personnage->getPositionX() y=45}; top:{math equation="x*y-33" x=$personnage->getPositionY() y=33};";/>
{foreach from=$personnage->getDeplacementPossible() item=i}
	<div datapositionx="{$i.flecheX}" datapositiony="{$i.flecheY}" class="icon_fleche {$i.flecheClass}" style="left:{math equation="x*y-45" x=$i.flecheX y=45}px; top:{math equation="x*y-33" x=$i.flecheY y=33}px;" ></div>
{/foreach}
