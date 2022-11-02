<?php
/*
Exercice : Faire un petit jeux

Le jeux est le suivant :

Nous pouvons créer des personnages et les faire
interargir grâce à des propriétés et de méthodes.

1. Créer la classe Character :
   Cette class doit contenir les propriétés suivantes :
   - $name : string
   - $life : int
   - $maxLife : int
   - $attack : int

  ATTENTION ! Il y a peut-être 1 propriétés obligatoire
  lors de la création du personnage (constructeur ... ?)

2. Créer une méthode magique toString qui retourne :
   « name : life (attack: attack) »

3. Créer 3 personnages :
   - Arthur
   - Merlin
   - Morganne

4. Afficher arthur, merlin et morganne sur la page en
   utilisant "echo"
*/

class Character
{

    public String $name;

    public int $life = 100;

    public int $maxLife = 100;

    public int $attack = 40;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return "<p> $this->name : ( life : $this->life ) ( attack : $this->attack )</p>";
    }

    function hit(Character $target): void
    {
        $target->life -= $this->attack;
    }

    function heal(int $value): void
    {
        $tmp = $this->life + $value;
        if ($tmp > $this->maxLife) {
            $this->life = $this->maxLife;
        } elseif (!($tmp < 0)) {
            $this->life = $tmp;
        }
    }
}

class Warrior extends Character
{

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return "<p> $this->name : ( life : $this->life ) ( attack : $this->attack )</p>";
    }

    function charge(Character $target): void
    {
        $target->life -= $this->attack;

        $target->attack -= 10;
    }
}

class Magician extends Character
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return "<p> $this->name : ( life : $this->life ) ( attack : $this->attack )</p>";
    }

    public function charm(Character $target): void
    {
        $this->heal(10);

        $tmp = $target->attack - $this->attack;

        echo $tmp;

        if ($tmp > 0) {
            $target->attack = $tmp;
        } else {
            $target->attack = 0;
        }
    }
}


$merlin = new Magician("Merlin");
$arthur = new Warrior("Arthur");
$morganne = new Character("Morganne");

echo $merlin;
echo $arthur;
// $merlin->hit($arthur);
// echo $arthur;
// $arthur->heal(40);
// echo $arthur;
echo 'arthur charge merlin';

$arthur->charge($merlin);
echo $merlin;

echo $arthur;

echo 'merlin charm arthur';

$merlin->charm($arthur);


echo $merlin;

echo $arthur;
