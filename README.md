# Caesar's Cipher Coding Test

Julius Caesar protected his confidential information by encrypting it using a cipher.

Caesar's cipher shifts each letter by a number of letters. If the shift takes you past the end of the alphabet, just rotate back to the front of the alphabet. In the case of a rotation by 3, w, x, y and z would map to z, a, b and c.

Original alphabet: abcdefghijklmnopqrstuvwxyz

Alphabet rotated +3: defghijklmnopqrstuvwxyzabc


**Function Description**

Create a function called `caesar_cipher` that returns the encrypted string.
`caesar_cipher` has the following parameter(s):
* s: a string in cleartext
* k: an integer, the alphabet rotation factor

**Constraints**

* 0 <=k <= 100
* s is a valid ASCII string

**Sample**

`> caesar_cipher(middle-Outz, 2)`
`> okffng-Qwvb`

** Testing **
From the Python command line:
`> from test_caesar import CaesarTest`
`> CaesarTest().test()``