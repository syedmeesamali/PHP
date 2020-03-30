<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Number List</title>
    </head>
    <body><h2>
        <p>Generating a random number between 1 and 10:
            <?php
            for ($x=1; $x <=10; $x++)
            {
                echo "{$x}<br>";
                if ($x % 2 == 0)
                {
                    echo "<h2 style='color:blue';>Even number<br></h2>";
                }
            }
            ?>
        </p></h2>
    </body>
</html>