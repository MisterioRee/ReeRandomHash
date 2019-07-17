<?php  

namespace ProfessorHash;

interface ProfessorHashInterface{



	/**
     * Generate random string, the default length is 10 
     *
     * @param  int  $length
     * @return string
     */
     public function randomString($length = 10);


  	/**
     * Generate hash from given value, shuffle more to make it unpredictable
     * if the given value is string will make hash from the given seed,
     * if given value is int will make random string with the given length to seed hash string
     *
     * @param  string|int  $value
     * @return string
     */
     public function makeHash($value);


     /**
     * Generate hash from given seed, shuffle more to make it unpredictable
     *
     * @param  string  $seed_string
     * @return string
     */
     public function hash($seed_string );
}