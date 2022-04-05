<?php 

class Shield {
    private int $protection;
    private string $image;

    public function __construct(
        int $protection = 10,
        string $image = 'shield.svg'
        ){
        $this->protection = $protection;
        $this->image = $image;
    }

    public function getImage(): string {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void {
        $this->image = $image;
    }

    public function getWeaponDefense(): int {
        return $this->protection;
    }
}

?>