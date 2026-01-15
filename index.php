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

$power= new Power("A Engine",400, 100);
$weapon= new Weapon("Big Cannon",100, 50,5);
$ship= new Spaceship("Astral Express",30, 1000);

usePower($power);
useWeapon($weapon);
useShip($ship);
?>