<?php

/** @testString string [test string] */
	$testString = "Qbc.-_&&$@^&^(&)45461454*&*&^&$#!@#$AbC";
	$result     =	testUpperCase($testString);
	echo $result;

/**
 * [testUpperCase check if string start with the upper case letter]
 * @param  [string] $str [pass test string]
 * @return [type]      [string]
 */
	function testUpperCase($str){
		// test if pattren matches
		if(preg_match('/^[A-Z][a-z0-9]/', $str)){
		 	return "Uppercase in the string starting";
		}else{
			return "No uppercase in the string starting";
		}
	}

?>
