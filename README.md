# Ree-random-hash
Generates random Hash and Random String 

#Usage

To generate random string 

```
$hashObj = new  \ProfessorHash\ProfessorHash();
$randomString = $hashObj->randomString();

````
The Default random string length is 10 characters but you can go further as you like 

````
$randomString = $hashObj->randomString(30); //and so on

````

To generate random hash string 

````
$hashObj = new  \ProfessorHash\ProfessorHash();
$randomString = $hashObj->randomString();
$hashedString = $hashObj->makeHash( $randomString );

````
And ofcourse if you don't wanna pass in the random string it will pickup default random string i.e 10 characters

````
$hashObj = new  \ProfessorHash\ProfessorHash();
$hashedString = $hashObj->makeHash( );

````