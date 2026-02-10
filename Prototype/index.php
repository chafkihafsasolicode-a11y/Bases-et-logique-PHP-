<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method="post">
    <label>Nombre 1</label>
    <input type="text" name="nombre1"><br><br>

    <label>Nombre 2</label>
    <input type="text" name="nombre2"><br><br>

    <select name="operation">
        <option value="">-- choisir operation --</option>
        <option value="plus">+</option>
        <option value="moins">-</option>
        <option value="fois">*</option>
        <option value="div">/</option>
    </select><br><br>

    <button type="submit" name="calculer">Calculer</button>
</form>


<?php



if (isset($_POST['calculer'])) {

    if (empty($_POST['nombre1']) || !isset($_POST['nombre2']) || empty($_POST['operation'])) {
       echo  "Veuillez remplir tous les champs.";
    }
    else if (!is_numeric($_POST['nombre1']) || !is_numeric($_POST['nombre2'])) {
       echo  "Veuillez saisir des nombres valides.";
    }
    else {
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $op = $_POST['operation'];
        if ($op == "plus") {
           echo $result = $nombre1 + $nombre2;
        } else if ($op == "moins") {
           echo $result = $nombre1 - $nombre2;
        } else if ($op == "fois") {
           echo $result = $nombre1 * $nombre2;
        } else if ($op == "div") {
            if ($nombre2 == 0) {
                echo  "La division par zéro est impossible.";
            } else{
                echo $result = $nombre1 / $nombre2;
            }
           
        }
    }
}
?>

</body>

</html>
