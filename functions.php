<?php

/* count - Count all elements in an array, or something in an object.
 count ( Countable|array $value , int $mode = COUNT_NORMAL ) : int

 parametrai 

  value - an array or countable object
  mode - If the optional mode parameter is set to COUNT_RECURSIVE (or 1),count() will
   recursively count the array. This is particularly useful for counting all the elements of a multidimensional array.

   LABAI SVARBU, kad tai yra count priklauso array tipui! 

*/
    $animals = array('birds'=>array('eagle', 'duck','stork'),
        'Mammals'=> array('pig', 'cow','horse'));

    $numberArray = array('lyginiai' => array('2', '4', '6', '8'),
    'nelyginiai' => array('1','3','5','7','9')); 

    // recurusive count
    echo count($numberArray, COUNT_RECURSIVE),"\n";

    // normal count
    echo count($numberArray);

    // we can with count() do for loop 
    $catNames = array('Tiger', 'Greedy', 'iris');
    for($i=0;$i<count($catNames);$i++){
        echo $catNames[$i].'<br>';
    }

/*
is_array - finds wheter a variable is an array.

is_array ( mixed $value ) : bool

Parameters 
    value - The variable being evaluated.

Return Values 
    Returns true if value is an arra, false otherwise.
*/

$array = array('this', 'is', 'array');
ECHO "\n";
echo is_array($array) ? 'Array' : 'not an Array';

/**
 * substr - Return part of a string
 * 
 * substr ( string $string , int $offset , int|null $length = null ) : string
 * Returns the portion of string specified by the offset and length parameters.
 * 
 * parameters
 *  String - The input string
 *  offset -if offset is non-negative, the returned string will start ar the offset'th position in string, 
 * counting from zero. For instance, in the strin 'abcdef', the character at position 0 is 'a', 
 * the character at position 2 is 'c', and so forth.
 * 
 * if offset is negatvie, the returned strin will start at the offset'th character from the end of string.
 * 
 * if string is less than offset character long, false will be returned.
 */
// examples

$data = substr("abcdef", -1);
$data = substr("abcdef", -2);
$data= substr("abcdef", -3,1); 
ECHO "<br>";
echo $data;
?>