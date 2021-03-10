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
 *  file name - Path to the file or directory. 
 *  On windows, use //computername/share/filename or \\computername\share\filename to check files on network shares.
 * 
 * Return Values 
 *  Returns true if the file or directory specified by filename exists; false otherwise.
 *  Note - this fucntion is done using the real UID/GID instead of the effective one. 
 *  Note - Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected
 *  result for files which are larger than 2GB.
 */
    $filename = '/path/to/foo.txt';

    if (file_exists($filename)) {
        echo "The file $filename exists";
    } else {
        echo "The file $filename does not exist";
    }

/** is_string 
 *      find wheter the type of a variable is string.
 * Description 
 *      is_string ( mixed $value ) : bool
 *      Finds whether the type of the given variable is string.
 * 
 * PARAMETERS
 *  value - the variable beign evalueted. 
 *  Return Values - Returns true if value is of type string, false otherwise. 
 */
    echo '\n';
$values = array(false, true, null, 'abc', '23', 23, '23.5', 23.5, '', ' ', '0', 0);
foreach ($values as $value) {
    echo "is_string(";
    var_export($value);
    echo ") = ";
    echo var_dump(is_string($value));
}
/** other similiar functions 
    *is_float() - Finds whether the type of a variable is float
    *is_int() - Find whether the type of a variable is integer
    *is_bool() - Finds out whether a variable is a boolean
    *is_object() - Finds whether a variable is an object
    *is_array() - Finds whether a variable is an array
 */

 class B {
     public function __toString(){
         return "Instance of B() can be treated as a String! \n";
        }
 }
 $b = new B();
 print($b); // Instances of B() can be treated as a strings! 
 print(is_string($b) ? 'true' : 'false' ); 
 echo "\n";

 /** preg_replace - Perform a regular expression seach and replace
   * 
   * Description 
   *    
   * preg_replace ( string|array $pattern , string|array $replacement , 
   * string|array $subject , int $limit = -1 , int &$count = null ) : string|array|null
   * 
   * Seaches subject or matches to pattern and replaces them with replacement
   * 
   * Parameters 
   *    Pattern to search for. It can be either a string or an array with string 
   * 
   * Several PCRE midifies are also avaible. 
   * 
   * Replacement 
   *    The string or an array with strings to replace. If this parameter 
   *    is a string and the pattern parameter is an array, all patterns
   *     will be replaced by that string. If both pattern and replacement
   *     parameters are arrays, each pattern will be replaced by the replacement 
   *    counterpart. If there are fewer elements in the replacement array than in 
   *    the pattern array, any extra patterns will be replaced by an empty string.
   * 
   *    replacement may contain references of the form \n or $n, with the latter 
   *    form being the preferred one. Every such reference will be replaced by the text 
   *    captured by the n'th parenthesized pattern. n can be from 0 to 99, and \0 or $0
   *     refers to the text matched by the whole pattern. Opening parentheses are counted 
   *    from left to right (starting from 1) to obtain the number of the capturing subpattern.
   *     Note that backslashes in string literals may require to be escaped.
   *    
   *     When working with a replacement pattern where a backreference is immediately followed by 
   *    another number (i.e.: placing a literal number immediately after a matched pattern),
   *     you cannot use the familiar \1 notation for your backreference. \11, for example, 
   *    would confuse preg_replace() since it does not know whether you want the \1 backreference followed
   *     by a literal 1, or the \11 backreference followed by nothing. In this case the solution
   *     is to use ${1}1. This creates an isolated $1 backreference, leaving the 1 as a literal.
   *    
   *     When using the deprecated e modifier, this function escapes some characters (namely ', ", \ and NULL)
   *     in the strings that replace the backreferences. This is done to ensure that no syntax errors arise 
   *    from backreference usage with either single or double quotes (e.g. 'strlen(\'$1\')+strlen("$2")').
   *     Make sure you are aware of PHP's string syntax to know exactly how the interpreted string will look.
   * 
   * Subject 
   *    The string or an array with strings to search and replace.
   *    
   *    If subject is an array, then the search and replace is performed on every entry oj subject, 
   *    and the return value is an array as well. 
   * 
   * Limit 
   *    the maximum possible replacements for each pattern in each subject string. Defaults to -1 (no limit) 
   *    
   * Count  
   *    if specified, this variable will be filled with the nubmer of replacements done.
   * 
   * Return values 
   *    preg_replace() returns an array f the subject parameter is an array, or a string otherwise 
   *    if matches are found, the new subject will be returned, otherwise subject will be returned unchanged 
   *    or null if an error occurred.
   * 
   * Errors/ Exceptions
   *    As of PHP 5.5.0 E_DEPRECATED level error is emitted when passing in the "\e" modifier.
   *     As of PHP 7.0.0 using the "\e" modifier is an error; an E_WARNING is emitted in this case.
   * 
  */
    $string = 'April 15, 2003';
    $pattern = '/(\w+) (\d+), (\d+)/i';
    $replacement = '${1}1,$3';
    echo preg_replace($pattern, $replacement, $string);

    $string = 'The quick brown fox jumps over the lazy dog.';
    $patterns = array();
    $patterns[0] = '/quick/';
    $patterns[1] = '/brown/';
    $patterns[2] = '/fox/';
    $replacements = array();
    $replacements[2] = 'bear';
    $replacements[1] = 'black';
    $replacements[0] = 'slow';
    echo preg_replace($patterns, $replacements, $string);

    ksort($patterns);
    ksort($replacements);
    echo preg_replace($patterns, $replacements, $string);

    /**
     * file_get_contents - Reads entire file into a string
     * 
     * Description 
     *      file_get_contents ( string $filename , bool $use_include_path = false , 
     *      resource $context = ? , int $offset = 0 , int $maxlen = ? ) : string|false
     * 
     *  This function is similar to file(), except that file_get_contents() returns the 
     *  file in a string, starting at the specified offset up to maxlen bytes. On failure, file_get_contents() will return false.
     *  
     *  file_get_contents() is the preferred way to read the contents of a file into a string. 
     *  It will use memory mapping techniques if supported by your OS to enhance performance
     *  
     *  Note: If you're opening a URI with special characters, such as spaces, you need to encode the URI with urlencode().
     * 
     *  Parameters 
     *  Filename name of the file to read. 
     *  use_include_path
     *  Note: The FILE_USE_INCLUDE_PATH constant can be used to trigger include path search. 
     *  This is not possible if strict typing is enabled, since FILE_USE_INCLUDE_PATH is an int. 
     *  Use true instead.
     * 
     *  Context - A valid context resource created with stream_context_create(). 
     *  If you don't need to use a custom context, you can skip this parameter by null.
     * 
     *  offset - the offset where the reading starts on the original stram. negative offsets
     *  count from the end of the strem
     * 
     *  seeking (offset) is not supported with remote files. Attempting to seek on non-local files may work with
     *  small offsets, but this is unpredictable because it works on the buffered stream.
     * 
     *  maxlen - maximum length of data read. The default is to read until end of file is reached. 
     *  Note that this parameter is applied to the stream processed by the filters. 
     * 
     *  Return Values - The function returns the read data or false on failure.
     *  Warning
     *   his function may return Boolean false, but may also return a non-Boolean value which 
     *   evaluates to false. Please read the section on Booleans for more information. Use the ===
     *   operator for testing the return value of this function.
     */

    $homepage = file_get_contents('http://www.example.com/');
    //  echo $homepage; // klaus

    // If strict types are enabled i.e. declare(strict_types=1);
    $file = file_get_contents('./people.txt', true);
    // Otherwise
    $file = file_get_contents('./people.txt', FILE_USE_INCLUDE_PATH);

    // Read 14 characters starting from the 21st character
    $section = file_get_contents('./people.txt', FALSE, NULL, 20, 14);
    var_dump($section);

    /**
     * array_key_exists - checks if the given key or index in the array
     * 
     * Description 
     * array_key_exists ( string|int $key , array $array ) : bool
     * 
     * array_key_exists() returns true if the given key is set in the array.
     * key can be any value possible for an array index.
     * 
     * Parameters 
     *  key - Value to check
     *  array - An array with keys to check
     * 
     * Return Values
     *   Returns true on success or false on failure.
     * Note: 
     *  array_key_exists() will search for the keys in the first dimension only.
     *  Nested keys in multidimensional arrays will not be found.
     */
    $search_array = array('first' => 1, 'second' => 4);
    if (array_key_exists('first', $search_array)) {
        echo "The 'first' element is in the array";
    } // dar galima naudoti isset() bet array_key_exists() kad return true

    /**
     * array_keys - Return all the keys or a subset of the keys of an array.
     * 
     * Description 
     * array_keys ( array $array ) : array
     * 
     * array_keys ( array $array , mixed $search_value , bool $strict = false ) : array
     * 
     * If a search_value is specified, then only the keys for that value are returned. 
     * Otherwise, all the keys from the array are returned.
     * 
     * Parameters
     *  array - an array containin keys to return. 
     *  search Value - If specified, then only keys containin these values are returned. 
     *  strict - determines if strict comparison(===) should be used durin the search.
     * 
     * Return Values 
     *  Returns an array of all the keys in array.
     * 
     */
    $array = array(0 => 100, "color" => "red");
    print_r(array_keys($array));

    $array = array("blue", "red", "green", "blue", "blue");
    print_r(array_keys($array, "blue"));

    $array = array("color" => array("blue", "red", "green"),
                "size"  => array("small", "medium", "large"));
    print_r(array_keys($array));

    /**
     * dirname - Returns a parent directory's path
     * dirname ( string $path , int $levels = 1 ) : string
     * 
     * Given a string containing the path of a file or directory,
     * this function will return the parent directory's path that is levels up from the current directory.
     * Note 
     *  dirname() operates naively on the input string, 
     *  and is not aware of the actual filesystem, or path components such as "..".
     * 
     * CAUTION
     *  Caution
     *   On Windows, dirname() assumes the currently set codepage, so for it to see the correct directory 
     *   name with multibyte character paths, the matching codepage must be set. If path contains characters
     *   which are invalid for the current codepage, the behavior of basename() is undefined.
     *  On other systems, dirname() assumes path to be encoded in an ASCII compatible encoding.
     *  Otherwise the behavior of the the function is undefined.
     * 
     * Parameters
     *  A Path 
     *  On Windows, both slash (/) and backslash (\) 
     *  are used as directory separator character. In other environments, it is the forward slash (/).
     * 
     * Levels
     * The number of parent directories to go up.
     * This must be an integer greater than 0.
     * 
     * Return values
     * Returns the path of a parent directory. If there are no slashes in path, a dot ('.')
     *  is returned, indicating the current directory. Otherwise, the returned string is path with any trailing /component removed.
     * 
     *  
     */
    echo dirname("/etc/passwd") . PHP_EOL;
    echo dirname("/etc/") . PHP_EOL;
    echo dirname(".") . PHP_EOL;
    echo dirname("C:\\") . PHP_EOL;
    echo dirname("/usr/local/lib", 2);

    /**
     * function_exists - Return true if the given function has been defined
     * function_exists ( string $function_name ) : bool
     * Checks the list of defined functions, both built-in (internal) and user-defined, for function_name.
     * 
     * Parameters
     * function_name
     *  The function name, as a string
     * 
     * Return Values
     * Returns true if function_name exists and is a function, false otherwise.
     * 
     * NOTE 
     * This function will return false for constructs, such as include_once and echo.
     */
    function countToTen(){ // this will work 
        echo "random text";
    }

    // and with functions which are build in php will not work

    if (function_exists('countToTen')) {
        echo "IMAP functions are available.<br />\n";
    } else {
        echo "IMAP functions are not available.<br />\n";
    }
    



?>
