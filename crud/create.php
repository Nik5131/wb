<?php

require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/../power.php';
require_once __DIR__ . '/../spaceship.php';
require_once __DIR__ . '/../weapon.php';
require_once __DIR__ . '/../crud/create.php';

$power  = new Power("A Engine", 400, 100);
$weapon = new Weapon("Big Cannon", 100, 50, 5);
$ship   = new Spaceship("Astral Express", 30, 1000);

function createShip($name, $damage, $hp){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO spaceships (name, damage, hp) VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $name, $damage, $hp);
    $stmt->execute();
    $stmt->close();
}
function createPower($type, $speed, $fuel){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO powers (type, speed, fuel) VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $type, $speed, $fuel);
    $stmt->execute();
    $stmt->close();

}

function createWeapon($name, $maxDmg, $minDmg, $ammo){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO weapons (name, maxDmg, minDmg, ammo) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("siii", $name, $maxdmg, $mindmg, $ammo);
    $stmt->execute();
    $stmt->close();
}
function getShips(){
    global $conn;
    $stmt=$conn->query("SELECT * FROM spaceships");
    return $result->fetch_all(MYSQLI_ASSOC);
}
function updateShip($id,$hp){
    global $conn;
    $stmt=$conn->prepare("UPDATE spaceships SET hp=? WHERE id=?");
   $stmt->bind_param("ii",$hp,$id);
    $stmt->execute();
    $stmt->close();
}
function deleteShip($id){
     global $conn;
    $stmt=$conn->prepare("DELETE FROM spaceships WHERE id=?");
   $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
}


echo $power->boost();
echo $weapon->fire();
echo $ship->scan();


?>

