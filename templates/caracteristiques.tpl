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
</table>
    