<div class="warning">
      {if $seToucher eq false}
        Vous devez être au contact de votre adversaire pour le frapper.
      {else}
        Vous infligez {$personnage->getDegat()} dégats à {$personnageAttaquer->getNom()}.
        {if $personnageAttaquer->isMort() eq "true"}
          Il succombe à ses blessures.
        {/if}
    {/if}
</div>