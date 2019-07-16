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
     * Generate hash from given string, shuffle more to make it unpredictable
     *
     * @param  string  $string
     * @return string
     */
     public function makeHash($string = '');
}