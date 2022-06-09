print('High this program will help you devide')
print('--------------------------------------')

a = input('Plz enter the first number ')
a = int(a)

b = input('Plz enter second number ')
b = int(b)

is0 = (a == 0 or b == 0)
while is0:
    a = input('Plz enter the first number ')
    a = int(a)

    b = input('Plz enter second number ')
    b = int(b)
    is0 = (a == 0 or b == 0)

answer = a / b

print(answer)


