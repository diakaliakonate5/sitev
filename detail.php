<?php
$pdo = new PDO("mysql:host=localhost;dbname=numeric_history", "root", "");
$Id = $_GET['personnageId'];
$detail = $pdo->prepare("SELECT * FROM personnages WHERE personnageId=$Id ");
$detail->execute();
$data = $detail->fetch();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $data['nom_complet'];?>
    <?php echo(" <img src=images/".$data['nom_image'].">");?>
    <?php echo $data['historique'];?>

</body>
</html>