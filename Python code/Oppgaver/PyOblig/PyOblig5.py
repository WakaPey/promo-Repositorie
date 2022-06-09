pris = int(input('pris: '))
tikroning = 0
femkroning = 0
enkroning = 0
i = pris
while i > 0:
    if (i % 10 == 0):
        tikroning += 1
        i -= 10
    elif(i % 5 == 0):
        femkroning += 1
        i -= 1
    else:
        enkroning += 1
        i -= 1

print('Du brukte ', tikroning, '10kr mynter, ', femkroning, '5kr mynter og ', enkroning, '1kr mynter.')