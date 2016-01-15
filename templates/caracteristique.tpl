Caracteristiques de {$personnage->getNom()}

<table>
    <tr>
        <td>Degat : </td>
        <td>{$personnage->getDegat()}</td>
    </tr>
    <tr>
        <td>Mouvement : </td>
        <td>{$personnage->getMouvement()} / {$personnageType->getMouvement()}</td>
    </tr>
    <tr>
        <td>Point de vie : </td>
        <td>{$personnage->getPointDeVie()} / {$personnageType->getPointDeVie() }</td>
    </tr>
    <tr>
        <td>Nombre Attaque : </td>
        <td>{$personnage->getNombreAttaque()} / {$personnageType->getNombreAttaque() }</td>
    </tr>    
    <tr>
        <td>Tour de jeu </td>
        <td>{$personnage->getTourDeJeu()}</td>
    </tr>     
    <tr>
        <td>Prochain tour de jeu </td>
        <td>{$personnage->getProchainTourDeJeu()}</td>
        <td>
        {if $smarty.now > $personnage->getProchainTourDeJeu()|strtotime }
            <button id='finDeTour'>Activer</button>
        {/if}
        </td>        
    </tr>      
</table>
    