<?php
/*
Ik heb overwogen om hier define("VARIABLE_NAME","VARIABLE_VALUE") te 
gebruiken, omdat de waarden niet veranderen, maar omdat in de opdracht 
nadrukkelijk 'variabelen' stond, heb ik gekozen voor $variable_name =
variable_value.  
*/
$name = 'Marjolein';
$age = 45;
$city = "Driel";
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