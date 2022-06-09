speed = input('Hva var farten på kjøreturen? ')
speed = float(speed)

time = input('Hvor lang var kjøretimen i timer? ')
time = float(time)

isTimeOverZero = time > 0
print(isTimeOverZero)

if(isTimeOverZero): 
    distance = time * speed
    print('Su har kjørts', distance, 'km denne turen')
    print('')
else:
    print('Du har skrevet inn en tid som ikke er gyldig, start pogrammet på nytt og prøv igjen')
    print('')