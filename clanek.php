<?php
require "./ClanekObjekt.php";
$clanek = new Clanek($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $clanek->get_title() ?></title>
</head>
<body>
    <?php
        echo "<h1>".$clanek->get_title()."</h1>";
        echo "<h2>".$clanek->get_author().", ".$clanek->get_destination().", ".$clanek->get_date()."</h2>";
        echo "<p>".$clanek->get_content()."</p>";
        echo "<br>";
        echo $clanek->get_image();
    ?>
</body>
</html>