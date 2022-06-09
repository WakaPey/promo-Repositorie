#Denne importen brukte jeg for vitsene som jeg brukte.
# Hvis den ikke funker for deg så kan det hende det er fordi du må laste ned pyjokes først
import pyjokes
ask = input('Do you wanna hear a joke? ')
while (ask == 'yes' or ask == 'ja'):
        My_joke = pyjokes.get_joke(language="en", category="neutral")
        print(My_joke)
        ask = input('Do you wanna hear another joke? ')
print('have a nice day')