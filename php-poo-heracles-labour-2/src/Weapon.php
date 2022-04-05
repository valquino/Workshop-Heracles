<?php

class Weapon {
    private int $damage;
    private string $image;

    public function __construct(
        int $damage = 10, 
        string $image = 'sword.svg'
    ){
        $this->damage = $damage;
        $this->image = $image;
    }

    public function getImage(): string {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void {
        $this->image = $image;
    }

    public function getWeaponDamage(): int {
        return $this->damage;
    }
}

?>
