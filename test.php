<?php 

require_once './src/ProfessorHashInterface.php';
require_once './src/ProfessorHash.php';

$hashObj = new  \ProfessorHash\ProfessorHash();

$randomString = $hashObj->randomString();
$hashedString = $hashObj->makeHash( $randomString );


print_r( "Random String: " . $randomString .' <br>'  );
print_r( "Random Hash: " . $hashedString  );