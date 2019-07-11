import sys

# String to shift
s = sys.argv[1]
# By value
k = int(sys.argv[2])

if k < 0 or k > 100:
    print("Invalid rotation integer. Please enter a number between 0 and 100")
    exit()

if k >= 26:
    k = k % 26

newString = ''

for i in s:
    if not i.isalpha():
        newString = newString + i
    else:
        letterChar = ord(i)

        shift = letterChar + k

        if shift > 122:
            shift = shift - 26

        newString = newString + chr(shift)

print(newString)
