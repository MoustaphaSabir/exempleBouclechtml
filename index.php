<?php
$animaux = [
    [
        'espece' => 'Lion',
        'taille' => '1.2m',
        'cri' => 'Rugissement',
        'description' => 'Le lion est un grand félin de la famille des félidés.',
        'url' => 'https://fr.wikipedia.org/wiki/Lion'
    ],
    [
        'espece' => 'Éléphant',
        'taille' => '3m',
        'cri' => 'Barrit',
        'description' => 'L\'éléphant est le plus grand mammifère terrestre vivant.',
        'url' => 'https://fr.wikipedia.org/wiki/Éléphant'
    ],
    [
        'espece' => 'Chien',
        'taille' => '0.5m',
        'cri' => 'Aboiement',
        'description' => 'Le chien est un mammifère domestique, l\'un des animaux de compagnie les plus populaires.',
        'url' => 'https://fr.wikipedia.org/wiki/Chien'
    ]
];
/*1. Utilisez une boucle `foreach` pour parcourir chaque animal et intégrer ses informations dans du HTML. 
2. Chaque animal doit être affiché dans une section distincte avec :
    - Une bordure autour de chaque section.
    - L'espèce dans une balise `<h2>`.
    - Un lien fonctionnel vers la page Wikipedia, qui s’ouvre dans un nouvel onglet.*/ 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php foreach ($animaux as $animal) : ?>
        <section style="border: 1px solid black; margin-bottom: 20px; padding: 5px;">
           <ul>
                <li>
                   <h2><?= "$animal[espece]"; ?></h2>
                </li>
                <li>
                 <p>Taille <?php $animal['taille']; ?></p>
                </li>
                <li>
                    <p>Son cri: <?php $animal['cri']; ?></p> 
                    <p>Dsscription <?php $animal['description']; ?></p>
                </li> 
                <li>
                    <p><a href="<?php echo  $animal['url'];?>"  target="_blank" rel="noopener noreferrer">Voici le lien</a></p>
                </li>
                <li>
                    <p><a href="<?php echo $animal['url']; ?>" target="_blank" rel="noopener noreferrer">Voici le lien</a></p>
                </li>

            </ul>
            
        </section>
    <?php endforeach; ?>
</body>
</html>