from turtle import *

shape('turtle')
shapesize(2)
bgcolor('darkblue')
color('yellow')

sides = 4
legth = 100
angle = 90

def polylines(sides, length, angle):
    for i in range(sides):
        forward(length)
        right(angle)

def spiral(sides, length, angle):
    for i in range(sides):
        forward(length)
        right(angle)
        length = length + 1

spiral(200, 10, 250)   