<?php

require 'Perso.php';
require 'PersoManager.php';
require 'db.php';

echo "<pre>";

$manager = new PersoManager($db);

/**
 * Test ajout d'un perso
 */
// $perso = new Perso([
//   'name' => 'Merlin',
//   'damage' => 0,
// ]);
// $manager = new PersoManager($db);
// $manager->add($perso);


/**
 * Test recherche d'un perso en fonction de son id
 */
// var_dump($manager->find(5));


/**
 * Test supression d'un perso en fonction de son id
 */
// $manager->delete(1);


/**
 * Test compter le nombre de personnages
 */
// var_dump($manager->count());


/**
 * Test retourner la liste des personnages
 */
// var_dump($manager->getList('Ned Stark'));

/**
 * Test si exist fonction
 */
// var_dump($manager->exist(5));
//

/**
 * Test modification d'un perso
 */
// $perso = $manager->find(5);
// $perso->setName('Grégoire');
// $manager->update($perso);
