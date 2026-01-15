<?php

require_once __DIR__ . '/php/power.php';
require_once __DIR__ . '/php/spaceship.php';
require_once __DIR__ . '/php/weapon.php';

require_once __DIR__ . '/php/interfaces/Ipower.php';
require_once __DIR__ . '/php/interfaces/Ispaceship.php';
require_once __DIR__ . '/php/interfaces/Iweapon.php';

function usePower(PowerInterface $power){
    echo $power->boost();
}
function useWeapon(WeaponInterface $weapon){
    echo $weapon->fire();
}
function useShip(SpaceshipInterface $ship){
    echo $ship->scan();
}
function createPower($type,$speed,$fuel){
    $stmt=$conn->prepare("INSERT INTO powers (type, speed, fuel)VALUES(?,?,?) ");
    $stmt->bind_param("sii",$type,$speed,$fuel);
    $stmt->execute();
    $stmt->close();
}

function getWeapons(){
    $stmt=$conn->query("SELECT * FROM weapons");
    return $result->fetch_all(MYSQLI_ASSOC);
}
function updateShip($id,$hp){
    $stmt=$conn->prepare("UPDATE spaceships SET hp=? WHERE id=?");
   $stmt->bind_param("ii",$hp,$id);
    $stmt->execute();
    $stmt->close();
}
function deleteShip($id){
    $stmt=$conn->prepare("DELETE FROM spaceships WHERE id=?");
   $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
}


$power= new Power("A Engine",400, 100);
$weapon= new Weapon("Big Cannon",100, 50,5);
$ship= new Spaceship("Astral Express",30, 1000);

usePower($power);
useWeapon($weapon);
useShip($ship);
?>
