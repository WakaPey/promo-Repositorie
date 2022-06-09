from random import randint

ant_stykker = 10
ant_rett = 0

for i in range(ant_stykker):
    tall1 = randint(2, 12) 
    tall2 = randint(2, 12)

    print('Hva er ' + str(tall1) + ' ganger ' + str(tall2) + '?')
    svar = input()

    if int(svar) == tall1 * tall2:
        ant_rett = ant_rett + 1

print('Du fikk ' + str(ant_rett) + ' av ' + str(ant_stykker))
