<?php

require_once __DIR__ .'/interfaces/Ipower.php';
class power implements PowerInterface
{
    public string $type;
    public int $speed;
    public int $fuel;
    public function __construct(string $type, int $speed, int $fuel){
$this->type =$type;
$this->speed=$speed;
$this->fuel=$fuel;
    }
    public function __gettype():string{
    return $this->type;
}
public function __getspeed():int{
    return $this->speed;
}
public function __getfuel():int{
    return $this->fuel;
}
public function __settype(string $type):void{
    $this->type= $type;
}
public function __setspeed(int $speed):void{
    $this->speed= $speed;
}
public function __setfuel(int $fuel):void{
    $this->fuel= $fuel;
}
public function boost(): string{
    return "";
}
}