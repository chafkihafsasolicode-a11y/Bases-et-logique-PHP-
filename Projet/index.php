
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
    <input type="text" name="recherche" placeholder="Tapez le titre">
    <button type="submit">Rechercher</button> 
</form>


<table border="1">

<?php

$livres = [
    ["titre"=>"Apprendre PHP","auteur"=>"Fatine Chebab","annee"=>2024,"prix"=>120,"disponible"=>true],
    ["titre"=>"JavaScript pour débutants","auteur"=>"Ali Ahmed","annee"=>2023,"prix"=>100,"disponible"=>false],
    ["titre"=>"HTML & CSS","auteur"=>"Sara Benali","annee"=>2022,"prix"=>80,"disponible"=>true],
    ["titre"=>"Programmation en Python","auteur"=>"Youssef El Amrani","annee"=>2021,"prix"=>150,"disponible"=>true],
    ["titre"=>"Bases de données MySQL","auteur"=>"Khadija Rahmani","annee"=>2020,"prix"=>110,"disponible"=>false],
    ["titre"=>"Algorithmes et logique","auteur"=>"Omar Bennani","annee"=>2019,"prix"=>90,"disponible"=>true],
    ["titre"=>"Développement Web avancé","auteur"=>"Imane Zahraoui","annee"=>2022,"prix"=>130,"disponible"=>true],
    ["titre"=>"PHP & MySQL","auteur"=>"Rachid Ait Lahcen","annee"=>2021,"prix"=>140,"disponible"=>false],
    ["titre"=>"Java orienté objet","auteur"=>"Salma El Idrissi","annee"=>2020,"prix"=>160,"disponible"=>true],
    ["titre"=>"Introduction à l’informatique","auteur"=>"Hassan Mouline","annee"=>2018,"prix"=>70,"disponible"=>true]
];

$total = 0;


echo "<tr>
    <th>Titre</th>
    <th>Auteur</th>
    <th>Année</th>
    <th>Prix</th>
    <th>Disponible</th>
</tr>";

foreach ($livres as $livre) 
    if ($livre['disponible']) {
    
         { {
        echo "<tr>
            <td>{$livre['titre']}</td>
            <td>{$livre['auteur']}</td>
            <td>{$livre['annee']}</td>
            <td>{$livre['prix']}</td>
            <td>Oui</td>
        </tr>";

        $total += $livre['prix'];
    }
}
    }

?>
</table>

<p> <?php echo " Total :  "  . $total; ?></p>


</body>
</html>
