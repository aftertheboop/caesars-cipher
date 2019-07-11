<?php

/**
 * Caeser's Cipher
 *
 * @param string $s
 * @param int $k
 */
function caesar_cipher($s, $k) {
	
    if(0 > $k || $k > 100) {
        echo 'Invalid rotation integer. Please enter a number between 0 and 100';
        exit;
    }
    
    $new_string = '';
    
    if($k >= 26) {
        $k = $k % 26;
    }
    
        
    for($i = 0; $i < strlen($s); $i++) {
        // Check if the character is alphabetical
        if(ctype_alpha($s[$i]) == false) {
            // If not, append to $new_string
            $new_string = $new_string . $s[$i];
            
        } else {
            // Get the unicode character value
            $letter_char = ord($s[$i]);

            // Shift the value forward by $k
            $shift = $letter_char + $k;

            // If $k > 122 (`z`), then move $shift 26 characters backwards
            if($shift > 122) {

                $shift = $shift - 26;

            }

            // Append character to the new string
            $new_string = $new_string . chr($shift);
        }
    }
    
    return $new_string;
    
}

// Should output `defghijklmnopqrstuvwxyzabc`
echo caesar_cipher('abcdefghijklmnopqrstuvwxyz', 3);
echo '<br/>';
// Should output `okffng-Qwvb`
echo caesar_cipher('middle-Outz', 2);
echo '<br/>';
// Should output `vszzc`
echo caesar_cipher('hello', 92);