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
     * Generate hash from given string, shuffle more to make it unpredictable
     *
     * @param  string  $string
     * @return string
     */
	 public function makeHash($rand_string = ''){

	  //varify is given arg is string 
		if(!is_string($rand_string))
	    	return;//Do not make any operation
 		
 		$hashed_string ='';

	   for ($i=0; $i < strlen($rand_string); $i++){
	        $hashed_string .= dechex( //Convert to Hex
                                    strval( //Convert To String                                          
                                        ord($rand_string[$i])) // 
                                        );
	    }

	   return sha1(md5($hashed_string)); 
	  }
}