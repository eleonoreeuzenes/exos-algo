<?php
include('../inc/header.php') ?>
<?php
/* === Exo 1 :Roman to Integer ===

source : https://leetcode.com

Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.

Symbol       Value
I             1
V             5
X             10
L             50
C             100
D             500
M             1000
For example, 2 is written as II in Roman numeral, just two ones added together. 12 is written as XII, which is simply X + II. The number 27 is written as XXVII, which is XX + V + II.

Roman numerals are usually written largest to smallest from left to right. However, the numeral for four is not IIII. Instead, the number four is written as IV. Because the one is before the five we subtract it making four. The same principle applies to the number nine, which is written as IX. There are six instances where subtraction is used:

I can be placed before V (5) and X (10) to make 4 and 9. 
X can be placed before L (50) and C (100) to make 40 and 90. 
C can be placed before D (500) and M (1000) to make 400 and 900.
Given a roman numeral, convert it to an integer.

 

Example 1:

Input: s = "III"
Output: 3
Explanation: III = 3.
Example 2:

Input: s = "LVIII"
Output: 58
Explanation: L = 50, V= 5, III = 3.
Example 3:

Input: s = "MCMXCIV"
Output: 1994
Explanation: M = 1000, CM = 900, XC = 90 and IV = 4.
 

Constraints:

1 <= s.length <= 15
s contains only the characters ('I', 'V', 'X', 'L', 'C', 'D', 'M').
It is guaranteed that s is a valid roman numeral in the range [1, 3999].

*/

 /**
     * @param String $s
     * @return Integer
     */
    
   
    
    function romanToInt($s) {
    
        // mon tableau de correspondance    
        $romanNumber = [
            
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000,
        ];
    
        // ma variable résultat    
        $result = 0;
        
        // je boucle sur la longueur de caractères de ma variable $s
        for ($i=0; $i < strlen($s); $i++) {
            // condition si ma lettre romaine a une valeur moins grande que la suivante 
            if ($romanNumber[$s[$i]] < $romanNumber[$s[$i + 1]] ) {
                //on ajoute au résultat la soustraction : la lettre suivante - la lettre actuelle
                    $result += $romanNumber[$s[$i + 1]] - $romanNumber[$s[$i]];
                // on passe à la lettre suivante
                    $i++;
                }
                else {
                    // sinon on a joute la lettre au résultat
                    $result += $romanNumber[$s[$i]];   
                }
        }
        return $result;
        }
        ?>



        <!-- snippetHTML -->
        <pre><code class="language-php">
        for ($i=0; $i < strlen($s); $i++) {
                    // condition si ma lettre romaine a une valeur moins grande que la suivante 
                    if ($romanNumber[$s[$i]] < $romanNumber[$s[$i + 1]] ) {
                        //on ajoute au résultat la soustraction : la lettre suivante - la lettre actuelle
                            $result += $romanNumber[$s[$i + 1]] - $romanNumber[$s[$i]];
                        // on passe à la lettre suivante
                            $i++;
                        }
                        else {
                            // sinon on a joute la lettre au résultat
                            $result += $romanNumber[$s[$i]];   
                        }
                }
        </code></pre>

<?php include('../inc/footer.php') ?>