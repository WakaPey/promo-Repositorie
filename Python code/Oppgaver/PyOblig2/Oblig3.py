ask = input('Do you want a buss ticket? write *yes* to procide: ')
if (ask == 'yes'):
    age = input('How old are you? ')
    age = float(age)
    if (age <= 5 ):
        print('Your ticket is free')
    elif (age <= 17 ):
        print('Your ticket costs 20kr')
    elif (age <= 66 ):
        print('Your ticket costs 40kr')
    elif (age > 67 ):
        print('you ticket costs 20kr')
    else:
        print('we do not have a ticket for someone your age.')
else:
    print('You decided to not buy a buss ticket. It fills you with depression.')

