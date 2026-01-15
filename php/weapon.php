<?php
require_once __DIR__ .'/interfaces/Iweapon.php';
class weapon implements WeaponInterface
{
    public string $name;
    public int $maxdmg;
    public int $mindmg;
    public int $ammo;
    
    public function __construct(string $name, int $maxdmg, int $mindmg, int $ammo){
       $this->name=$name;
       $this->maxdmg=$maxdmg;
       $this->mindmg=$mindmg;
       $this->ammo=$ammo;
    }
     public function __getname():string{
       return $this->name;
    }
    public function __getmaxdmg():int{
        return $this->maxdmg;
    }
    public function __getmindmg():int{ 
        return $this->mindmg;
    }
    public function __getammo(): int{
        return $this->ammo;
    }
    public function __setname(string $name):void
    {
        $this->name = $name;
    }
     public function __setmaxdmg(int $maxdmg):void
    {
        $this->maxdmg = $maxdmg;
    }
     public function __setmindmg(int $mindmg):void
    {
        $this->maxdmg = $mindmg;
    }
     public function __setammo(int $ammo):void
    {
        $this->ammo = $ammo;
    }
    public function fire(): string{
        return "fired!!";
    }
}
