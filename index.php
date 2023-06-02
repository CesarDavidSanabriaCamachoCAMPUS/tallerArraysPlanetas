<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema-Solar</title>
</head>
<body>
    <div class="container1">
        <form action="./main1.php" method="POST">
            <h1>Planet Search</h1>
            </br>
            <input type="number" name="position" placeholder="Position">
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="container">
        <h1>System Maker</h1>
        </br>
        <form action="./main2.php" method="POST">
        <input type="number" name="numberOfPlanets" placeholder="Number of planets">
        <input type="submit" value="Submit">
        </form>
    </div>
    <div>
    <h1>Habitable Planets</h1>
        </br>
        <form action="./main3.php" method="POST">
        <input type="submit" value="Submit">
        </form>
    </div>
    </div>
</body>
</html>