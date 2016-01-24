<div class="warning">
      {if $seToucher eq false}
        Vous devez être au contact de votre adversaire pour le frapper.
      {elseif $nombreAttaqueDisponible eq false}
          Vous n'avez plus d'attaque de disponible
      {elseif $tourDisponible eq false}
          Votre tour est expiré
      {else}
        Vous infligez {$personnage->getDegat()} dégats à {$personnageAttaquer->getNom()}.
        {if $personnageAttaquer->isMort() eq true}
          Il succombe à ses blessures.
        {/if}
      {/if}
</div>