<pre><?php

// Mise en route du chargement automatique (PSR-4) des classes
spl_autoload_register();

// J'importe les classes que j'utilise
use Inc\Engine;
use Inc\Car;

// Instanciate a Car
$engine = new Engine(
    230,
    'petrol',
    true,
    'MERZRTGRZSTRSTRSZTRS',
    'Mercedes'
);
$mercedes = new Car(
    'Mercedes',
    'Grey',
    $engine,
    true,
    256802,
    '500SL',
    4,
    'MER87987AD987987F556768BC'
);

// Utilisation des méthodes de l'interface
$mercedes->firstRegistered();
$mercedes->register('ET-4578');

// un exemple d'erreur !
try {
    $mercedes->register('ET4578sfhgfsdh');
}
catch (Inc\Exceptions\LicensePlateFormatException $e) {
    echo 'Format de la plaque incorrect<br/>';
    echo '<br/>';
}
catch (Exception $e) {
    echo 'Error : '.$e->getMessage().'<br>';
}

var_dump($mercedes);

?></pre>
