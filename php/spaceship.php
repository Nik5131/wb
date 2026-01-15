<?php
require_once __DIR__ .'/interfaces/Ispaceship.php';
class spaceship implements SpaceshipInterface
{
    public string $name;
    public int $damage;
    public int $hp;
    public function __construct(string $name, int $damage, int $hp){
$this->name =$name;
$this->damage=$damage;
$this->hp=$hp;
    }
public function __getname():string{
    return $this->name;
}
public function __getdamage():int
{
    return $this->damage;
}
public function __gethp():int
{
    return $this->hp;
}
public function __setname(string $name):void
{
    $this->name =$name;
}
public function __setdamage(int $damage):void
{
    $this->damage =$damage;
}
public function __sethp(int $hp):void
{
    $this->hp =$hp;
}
public function scan(): string{
    return 
        "name:{$this->name},
        hp:{$this->hp},
        damage:{$this->damage}";

}

}
