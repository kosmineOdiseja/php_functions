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
        if (in_array("blabla", $array, true)){ // without true runs part "done". 
            echo " Random \n";
        } else{
                echo "done \n";

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

    /**
     * explode() - Split an array of strigs,
     *  each of which is a substrgin of string formed by spitting it on boundaries formed by th string separator.
     * 
     * PARAMETERS  
     *  Separator - the boundary string.
     *  string - the input string.
     *  limit - if limit is set and positive, the returned array will contai a maximum of limit elements with the last element containing the rest of string. 
     *  if the limit parameter is negative, all component except the last -limit are returned. 
     *  if the limt parameter is zero, then this is treated as 1.
     * NOTE Prior to PHP 8.0 implode() accepted its paremeters in eith order. explode() has never supported this: 
     *  you must ensure that the separator argument comes before the strign argument.
     * 
     * RETURN VALUES - Returns an array of strings created by splitting the string parameter on boundaries formed by the separator. 
     * 
     * if separator is an empty string(""), explode  will return false. If separator contains a value that is not contained in string and a negative limit is used, 
     * an empty array will be returned,  otherwise an array containing string will be returned. 
     */

    $data = "foo:*:1023:1000::/home/foo:/bin/sh";
    list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
    echo $user ."\n"; // foo
    echo $pass ."\n"; // *

    $_functions  = "is-array, in_array, explode, substr";
    $newStr = explode(", ", $_functions, -1);

    /**
     * str_replace - Replace all occurrences of the search strig with the replacement string 
     * 
     * DESCRIPTION 
     * str_replace ( array|string $search , array|string $replace , string|array $subject , int &$count = null ) : string|arry
     * 
     * This function returns a string or an array with all occurrences of search in subject replaced with the given replace value. 
     * if you don't need fancy replacing rules (like regular expression), you should use this function instead of preg_replace().
     * 
     * PARAMETERS 
     *  If seach and replace are arrays, then str_replace(), then an empty strin is used for the rest of replacement values. If search is an array and raplace
     * is a strin, the ths replacement string is used for every value of seach. The converse would not make sence, though. 
     * 
     * if search or replace are arrays, their elements are processed first to last. 
     * 
     * SEARCH The value being searched for, otherwise known as the needle. An array may be used to disignate multiple needles. 
     * 
     * REPLACE The replacement value that replces found search values. An array may be used to disignate muyltiple replacements. 
     * 
     * SUBJECT The string or array being searched and replaced on, otherwise know as the haystack. 
     *  If subject is an array, then the search and replace is performed with every entry of subject, and the return value is an array as well. 
     * 
     * COUNT If passed, this will be set to the number of replacements performed. 
     * 
     * RETURN VALUES
     *      this function returns a string or an array with the replaced values. 
     */

     // Provides: <body text='black'>
    $bodytag = str_replace("%body%", "black", "<body text='%body%'>");

    // Provides: Hll Wrld f PHP
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
    echo $onlyconsonants;
    echo "<br>";

    // Provides: You should eat pizza, beer, and ice cream every day
    $phrase  = "You should eat fruits, vegetables, and fiber every day.";
    $healthy = array("fruits", "vegetables", "fiber");
    $yummy   = array("pizza", "beer", "ice cream");

    $newphrase = str_replace($healthy, $yummy, $phrase);

    // Provides: 2
    $str = str_replace("ll", "", "good golly miss molly!", $count); // $count shows how many times changes made. 
    echo $count."\n";
    
        // Order of replacement
    $str     = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
    $order   = array("\r\n", "\n", "\r");
    $replace = '<br />';
    echo print_r($replace) ."\n";

/**
 * implode - join array elements with a string 
 * 
 * DESCRIPTION 
 * implode ( string $separator , array $array ) : string
 * 
 * Alternative signature (not supported with named arguments):
 * implode ( array $array ) : string
 * 
 * Legacy signature (deprecated as of PHP 7.4.0, removed as of PHP 8.0.0):
 * implode ( array $array , string $separator ) : string
 * 
 * PARAMETERS
 *  separator
 *  Defaults to an empty string
 * 
 *  array
 *  The array of string to implode.
 * 
 * RETURN VALUES
 *  Return a string containing a string representation of all the array elements in the same order, with the separator string between each element.
 * 
 */

$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated; // lastname,email,phone

// Empty string when using an empty array:
var_dump(implode('hello', array())); // string(0)

/**
 * array_merge() - array_merge one or more arrays
 * 
 * DESCRIPTION 
 * array_merge ( array ...$arrays ) : array
 *  
 * Merges the elements of one or more arrays together so that the values of one are appended to the end of the previous one.
 * It returns the resulting array. 
 * 
 * If the input arrays have the same4 string keys, then the later value for that key will overwrite the previous one. 
 * If, however, the arrays contain numeric keys, the later value will not overwrite the original value, but will be appended. 
 * 
 * Values, in the input arrays iwth numeric keys will be renumbered with incrementing keys starting from zero in the result array.
 * 
 * PARAMETERS   
 *  arrays 
 *      variables list of arrays to merge
 *  return values
 *      returns the resultin array. If called withoud any arguments, return an empty array.
 * 
 */
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $result = array_merge($array1, $array2);
    print_r($result)."\n";

/**
 * If you want to append array elements from the second array to the first array while not overwriting 
 * the elements from the first array and not re-indexing, use the + array union operator:
 */
    $array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
    $array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
    $result = $array1 + $array2;
    var_dump($result)."\n";

/**
 * The keys from the first array will be preserved. If an array key exists in both arrays, 
 * then the element from the first array will be used and the matching key's
 *  element from the second array will be ignored.
 */

   // one more trick how to merge strings
    $beginning = 'foo';
    $end = array(1 => 'bar');
    $result = array_merge((array)$beginning, (array)$end);
    print_r($result);
/**
 * strpos() -  Find the position of the first occurrence of a substring in a string
 * 
 * DESCRIPTION 
 *  strpos ( string $haystack , string $needle , int $offset = 0 ) : int|false
 * 
 * PARAMETERS 
 *  haystack   
 *      the string to search in. 
 *  needle 
 *      Prior to PHP 8.0.0, if needle is not a string, it is converted to an integer and applied as the ordinal value of a character. 
 *      This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, 
 *      the needle should either be explicitly cast to string, or an explicit call to chr() should be performed.
 *  offset 
 *      If specified, search will start this number of characters counted from the beginning of the string. If the offset is negative, 
 *      the search will start this number of characters counted from the end of the string.
 *  Return Values
 *      Returns the position of where the needle exists relative to the beginning of the haystack string (independent of offset).
 *      Also note that string positions start at 0, and not 1.
 *      Returns false if the needle was not found.
 */
    // Using ===
    $mystring = 'abc';
    $findme   = 'a';
    $pos = strpos($mystring, $findme);

    // Note our use of ===.  Simply == would not work as expected
    // because the position of 'a' was the 0th (first) character.
    if ($pos === false) {
        echo "The string '$findme' was not found in the string '$mystring'";
    } else {
        echo "The string '$findme' was found in the string '$mystring'";
        echo " and exists at position $pos";
    }

    $mystring = 'abc';
    $findme   = 'a';
    $pos = strpos($mystring, $findme);
    
    // The !== operator can also be used.  Using != would not work as expected
    // because the position of 'a' is 0. The statement (0 != false) evaluates
    // to false.
    if ($pos !== false) {
         echo "The string '$findme' was found in the string '$mystring'";
             echo " and exists at position $pos";
    } else {
         echo "The string '$findme' was not found in the string '$mystring'";
    }
}
/**
 * preg_match — Perform a regular expression match
 * 
 * DESCRIPTION  
 *  preg_match ( string $pattern , string $subject , array &$matches = null , int $flags = 0 , int $offset = 0 ) : int|false
 * 
 * searches subject for a match to the regular expresion given in pattern
 * 
 * PARAMETERS 
 *  pattern - the pattern to search for, as a string. 
 *  subject - the input string. 
 *  matches - if mateches is provided, then it is filled with the result of search. $matches[0], will contain the text that matched
 *  the full pattern, $matches[1] will have the text that matched the first captured parenthesized subpattern, and so on. 
 *  flags - can be a combination of the following flags: 
 *      PREG_OFFSET_CAPTURE - if this flag is passed, for every occurring match the appendant string offset (in bytes) will also be returned. 
 *      Note that this changes the value of matches into an array where every element is an array consinting of the matched string at offset 0 
 *      and its string offset into subject at offset 1.
 *      PREG_UNMATCHED_AS_NULL - If this flag is passed, unmatched subpatterns are reported as null;
 *      otherwise they are reported as an empty string.
 */

preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
print_r($matches);

// The "i" after the pattern delimiter indicates a case-insensitive search
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}
/**
 * sprintf() - Return a formated string.
 *  
 * DESCRIPTION 
 *  sprintf ( string $format , mixed ...$values ) : string
 *  Returns a string produced according to the formatting string format.
 *  PARAMETERS 
 *      format - The format string is composed of zero or more directives: ordinary characters (excluding %)
 *      that are copied directly to the result and conversion specifications, 
 *      each of which results in fetching its own parameter.
 * 
 *      A conversion specification follows this prototype: %[argnum$][flags][width][.precision]specifier.
 * 
 *   RETURN VALUES - Returns a string produced according to the formatting string format.
 *       
 */
        $num = 5;
        $location = 'tree';

        $format = 'There are %d monkeys in the %s';
        echo sprintf($format, $num, $location);
/**
 *  trim() — Strip whitespace (or other characters) from the beginning and end of a string
 *  
 *  DESCRIPTION
 *      trim ( string $string , string $characters = " \n\r\t\v\0" ) : string
 *      This function returns a string with whitespace stripped from the beginning and end of string.
 *      Without the second parameter, trim() will strip these characters:
 *          " " (ASCII 32 (0x20)), an ordinary space.
 *          "\t" (ASCII 9 (0x09)), a tab.
 *          "\n" (ASCII 10 (0x0A)), a new line (line feed).
 *          "\r" (ASCII 13 (0x0D)), a carriage return.
 *          "\0" (ASCII 0 (0x00)), the NUL-byte.
 *          "\v" (ASCII 11 (0x0B)), a vertical tab.   
 * 
 *  Parameters 
 *      String - the string that will  be trimmed.
 *      characters - Optionally, the stripped characters can also be specified using the characters parameter. 
 *      Simply list all characters that you want to be striipped. With .. you can specify a range of characters.
 * 
 *  Return values - The trimmed string 
 */ 

$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = trim($text);
var_dump($trimmed);

$trimmed = trim($text, " \t.");
var_dump($trimmed);

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);

$trimmed = trim($hello, 'HdWr');
var_dump($trimmed);

// trim the ASCII control characters at the beginning and end of $binary
// (from 0 to 31 inclusive)
$clean = trim($binary, "\x00..\x1F");
var_dump($clean);
    
/**
 * strtolower() — Make a string lowercase
 * 
 * Description 
 *   strtolower ( string $string ) : string
 * 
 *   Returns string with all alphabetic characters converted to lowercase.
 *      Note that 'alphabetic' is determined by the current locale. 
 *      This means that e.g. in the default "C" locale, characters such as umlaut-A (Ä) will not be converted.
 *  Parameters 
 *      String - the imput strig
 *  Return Values - Returns the lowercased string 
 */

    $str = "Mary Had A Little Lamb and She LOVED It So";
    $str = strtolower($str);
    echo $str; // Prints mary had a little lamb and she loved it so
/**
 * file_exists() — Checks whether a file or directory exists
 * 
 * Description
 *  file_exists ( string $filename ) : bool
 * Parameters 
 */
?>
