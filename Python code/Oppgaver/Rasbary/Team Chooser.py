from os import remove
from random import choice

players = ['Harry', 'Hermione', 'Ronnie', 'Freddy']
print(players)

teamA = []

playerA = choice(players)
print(playerA)
teamA.append(playerA)
players.remove(playerA)
print('Players left:', players)