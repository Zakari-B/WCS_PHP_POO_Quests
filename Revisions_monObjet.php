<?php

class MonObjet
{
    public string  $nom;
    public string $prenom;
    public string $adresse;
    public string $dateDeNaissance;

    public function __construct()
    {
    }

    public function infos()
    {
        return 'Cette personne est ' . $this->prenom . ' ' . $this->nom . ', il/elle est né(e) le ' . $this->dateDeNaissance . ' et habite à l\'adresse suivante : ' . $this->adresse . '.' . PHP_EOL;
    }

    public function devInfos()
    {
        return var_dump($this);
    }

    public function changeAddress(string $newData)
    {
        $this->adresse = $newData;
    }

    public function showAge()
    {
        return "$this->prenom a " . date_diff(date_create($this->dateDeNaissance), date_create(date("Y-m-d")))->format('%y') . ' ans.' . PHP_EOL;
    }
}

$monObjet1 = new MonObjet();
$monObjet1->nom = 'Toto';
$monObjet1->prenom = 'Tutu';
$monObjet1->adresse = '15 place du Général de Gaulle';
$monObjet1->dateDeNaissance = '15-06-1994';

echo $monObjet1->infos();
echo $monObjet1->showAge();
