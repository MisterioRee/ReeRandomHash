<?php 

require_once './src/ProfessorHashInterface.php';
require_once './src/ProfessorHash.php';

$hashObj = new  \ProfessorHash\ProfessorHash();

$randomString = $hashObj->randomString();
$hashedString = $hashObj->makeHash( 20 );
 
$hash = $hashObj->hash( 0 );
 



print_r( "Random String: " . $randomString .' <br>'  );
print_r( "Random Hash: " . $hashedString.' <br>'   );
print_r( "Hash: " . $hash  );