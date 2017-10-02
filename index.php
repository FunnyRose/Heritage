<?php
/**
 * Created by PhpStorm.
 * User: fannyperret
 * Date: 02/10/2017
 * Time: 09:49
 

require_once 'Computer.php';
require_once 'Laptop.php';

$computer = new \Wcs\Computer('MiniPC', 'Intel Core I3');
$computer->setMemory(4);

$computer->display(); (pour la classe computer (premier exercice)*/

require_once 'Computer.php';
require_once 'Laptop.php';
require_once 'Desktop.php';

/* Plus possible depuis que la classe a été mise en abstract
on ne peut pas créer des objets computer
$computer = new \Wcs\Computer('MiniPC', 'Intel Core I3');
$computer->setMemory(4);
$computer->display();
*/

$laptop = new \Wcs\Laptop('MiniPC', 2);
$laptop->setMemory(4);
$laptop->setWeight(2);
$laptop->display();

$desktop = new Wcs\Desktop('MiniPC', 'Maxi Tour');
$desktop->setMemory(4);
$desktop->setBoxtype("Maxi Tour");
$desktop->display();
