<?php
$name = 'Marjolein';
$age = 45;
$city = "Arnhem";
$favorite_food = 'pasta';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        <?php
        echo "Over $name";
        ?>
    </title>
</head>

<body>
    Hello, World!
    <article>
        <header>
            <h1>
                <?php
                echo "Over $name";
                ?>
            </h1>
        </header>
        <p>
            <?php
            echo "
                    Naam:           $name <br />
                    Leeftijd:       $age  <br />
                    Woonplaats:     $city <br />
                    Favoriete eten: $favorite_food
            ";
            ?>
        </p>
    </article>
</body>

</html>
