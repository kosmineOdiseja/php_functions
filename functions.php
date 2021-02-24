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
$data = substr("abcdef", 0); // the number shows where to start extracting value from array.
$data = substr("abcdef", -1);// -1 means that extracts value from other side
$data = substr("abcdef", -3, 2); // first number means starting position, second end point number.
$data = substr("abcdef", 1, 5);
ECHO "<br>";
echo $data;

/**
 * in_array - checks if a value exist in an array 
 * 
 * in_array ( mixed $needle , array $haystack , bool $strict = false ) : bool
 * Searches for needle in haystack using loose comparison unless strict is set.
 * 
 * Parameters 
 *  needle searched value. 
 *      Note: If needle is a string, the comparison is done in a case-sensitive manner.
 *  haystack the array
 * 
 *  strict - if the third parameter strict is set to true then the in_array() function will also check the types of the needle in the haystack
 * 
 * Return Values 
 *  Returns true if needle is found in the array, false otherwise.
 */
echo "\n";
echo "new line for function in_array()";
echo "\n";
 $time =  array('week', 'day', 'tomorrow'); 
    if(in_array("tomorrow", $time)){
        echo "it means tomorrow\n";
    } 
    if(in_array("week", $time)){
        echo " it means today\n";
    }
    
    $a = array('1.10', 12.4, 1.13);

    if (in_array('12.4', $a, true)) {
        echo "'12.4' found with strict check\n";
    } else {
        echo "SHIT HAPPENS\n";
    }

    if (in_array(1.13, $a, true)) {
        echo "1.13 found with strict check\n";
    }

     // this is interesting. Example from PHP documentation.
     $array = array(
        'egg' => true,
        'cheese' => false,
        'hair' => 765,
        'goblins' => null,
        'ogres' => 'no ogres allowed in this array'
    );
    
        // Loose checking -- return values are in comments
        
        // First three make sense, last four do not
        echo '\n';
        if (in_array("blabla", $array, true)){ 
            echo " Random ";
        } else{
                echo "done";
            }// true 
        in_array(false, $array); // true
        in_array(765, $array); // true
        in_array(763, $array); // true
        in_array('egg', $array); // true
        in_array('hhh', $array); // true
        in_array(array(), $array); // true

        





?>