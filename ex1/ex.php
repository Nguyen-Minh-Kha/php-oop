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

    public int $life;

    public int $maxLife;

    public int $attack;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->life = 100;
        $this->attack = 50;
    }

    public function __toString()
    {
        return "<p> $this->name : $this->life ( attack : $this->attack )</p>";
    }
}

$merlin = new Character("Merlin");
$arthur = new Character("Arthur");
$morganne = new Character("Morganne");

echo $merlin;
