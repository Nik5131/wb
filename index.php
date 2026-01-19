<?php


require_once __DIR__ . '/php/database.php';
require_once __DIR__ . '/php/power.php';
require_once __DIR__ . '/php/spaceship.php';
require_once __DIR__ . '/php/weapon.php';
require_once __DIR__ . '/php/crud/create.php';
require_once __DIR__ . '/php/interfaces/Ipower.php';
require_once __DIR__ . '/php/interfaces/Ispaceship.php';
require_once __DIR__ . '/php/interfaces/Iweapon.php';

$ship = new Spaceship("Astral Express", 30, 1000);
$weapon = new Weapon("PopPom's Cannon", 100, 50, 5);
$power  = new Power("Stellaron", 400, 100);

$actionResult = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['boost'])) {
        $actionResult = $power->boost();
    } elseif (isset($_POST['fire'])) {
        $actionResult = $weapon->fire();
    } elseif (isset($_POST['scan'])) {
        $actionResult = $ship->scan();
    }
}

createShip($ship->name, $ship->damage, $ship->hp);
createPower($power->type, $power->speed, $power->fuel);
createWeapon($weapon->name, $weapon->maxdmg, $weapon->mindmg, $weapon->ammo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
<div class="container py-5">
    <h1 class="text-center mb-4">Spaceship</h1>
    <div class="row g-4">
       
        <div class="col-md-4">
            <div class="card bg-secondary text-light">
                <div class="card-body">
                    <h5 class="card-title">Ship</h5>
                    <p class="card-text"><strong>Name:</strong> <?php echo $ship->name; ?></p>
                    <p class="card-text"><strong>Damage:</strong> <?php echo $ship->damage; ?></p>
                    <p class="card-text"><strong>HP:</strong> <?php echo $ship->hp; ?></p>
                    <form method="post">
                        <button class="btn btn-danger" name="scan">Scan</button>
                    </form>
                </div>
            </div>
        </div>

    
        <div class="col-md-4">
            <div class="card bg-secondary text-light">
                <div class="card-body">
                    <h5 class="card-title">Power</h5>
                    <p class="card-text"><strong>Type:</strong> <?php echo $power->type; ?></p>
                    <p class="card-text"><strong>Speed:</strong> <?php echo $power->speed; ?></p>
                    <p class="card-text"><strong>Fuel:</strong> <?php echo $power->fuel; ?></p>
                    <form method="post">
                        <button class="btn btn-danger" name="boost">Boost</button>
                    </form>
                </div>
            </div>
        </div>

        
        <div class="col-md-4">
            <div class="card bg-secondary text-light">
                <div class="card-body">
                    <h5 class="card-title">Weapon</h5>
                    <p class="card-text"><strong>Name:</strong> <?php echo $weapon->name; ?></p>
                    <p class="card-text"><strong>Mn Damage:</strong> <?php echo $weapon->mindmg; ?></p>
                    <p class="card-text"><strong>Max Damage:</strong> <?php echo $weapon->maxdmg; ?></p>
                    <p class="card-text"><strong>Ammo:</strong> <?php echo $weapon->ammo; ?></p>
                    <form method="post">
                        <button class="btn btn-danger" name="fire">Fire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</div>
          <div class="card bg-secondary text-light mt-5">
        <div class="card-body">
            <h5 class="card-title">Add a new ship</h5>
            <form method="post" class="row g-3">
                <div class="col-md-4">
                    <input type="text" name="shipName" class="form-control" placeholder="Ship Name" required>
                </div>
                <div class="col-md-3">
                    <input type="number" name="shipDamage" class="form-control" placeholder="Damage" required>
                </div>
                <div class="col-md-3">
                    <input type="number" name="shipHP" class="form-control" placeholder="HP" required>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-warning w-100" name="newShip">Add Ship</button>
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




