<?php

namespace ProfessorHash;

class ProfessorHash implements ProfessorHashInterface
{  

  	/**
     * Complete set of characters support random string generation
     *
     * @var  string 
     */
	 private $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

	/**
     * Generate random string, the default length is 10 
     *
     * @param  int  $length
     * @return string
     */
     public function randomString($length = 10){

        //Get the length of the string
        $charactersLength = strlen($this->characters);
        $randomString = '';
        //pick up random characters from string 
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $this->characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
     }


    /**
     * Generate hash from given value, shuffle more to make it unpredictable
     * if the given value is string will make hash from the given seed,
     * if given value is int will make random string with the given length to seed hash string
     *
     * @param  string|int  $value
     * @return string
     */
	 public function makeHash($value){
       
        $hash_seed ='';

         //varify is given arg is int 
		if(is_int($value))
           $hash_seed = $this->randomString($value); //Generate random string
        
        //If by default args are empty 
        elseif(is_string($value))
            $hash_seed = $value; 
        
        else{
            $hash_seed = $this->randomString($value); //Generate random string with default length
        }
            
        return $this->hash($hash_seed);
	
      }
      

	/**
     * Generate hash from given seed, shuffle more to make it unpredictable
     *
     * @param  string  $seed_string
     * @return string
     */
     public function hash($seed_string ){

        //Validate input seed string
        if(!is_string($seed_string) || !isset($seed_string))
            return "Validate Seed"; //Throw an Exception

        $hashed_string ='';
        //Generate string
        for ($i=0; $i < strlen($seed_string); $i++){
             $hashed_string .= dechex( //Convert to Hex
                                     strval( //Convert To String                                          
                                         ord(  $seed_string[$i]   ) //Get ASCI
                                         ));
         }
         
         return sha1(md5($hashed_string)); 
     }      

}