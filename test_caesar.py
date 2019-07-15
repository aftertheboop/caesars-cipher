import unittest
from caesar_cipher import caesar_cipher


class CaesarTest(unittest.TestCase):

    def test(self):
        print(self.assertEqual(caesar_cipher('middle-Outz', 2), 'okffng-Qwvb'))
        print(self.assertEqual(caesar_cipher('abcdefghijklmnopqrstuvwxyz', 3), 'defghijklmnopqrstuvwxyzabc'))
        print(self.assertEqual(caesar_cipher('hello', 1), 'ifmmp'))
        print(self.assertEqual(caesar_cipher('hello', 27), 'ifmmp'))
