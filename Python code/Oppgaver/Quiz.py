points = 0

task1 = input("Who is better? Omni man or Dodge? ")
if (task1 == "Omni man"):
    points += 1
elif (task1 == "Dodge"):
    points -= 100
task2 = input("Who is better? 1IMB or 1IMA ")
if (task2 == "1IMB"):
    points += 1
elif (task2 == "1IMA"):
    points -= 1
task3 = input("When are you born? 2003, 2004, 2005, 2006 ")
if (task3 == "2003"):
    points += 1
elif (task3 == "2004"):
    points += 1
elif (task3 == "2005"):
    points += 10
elif (task3 == "2006"):
    points +=1
    print("Are you not a bit young? :3 ")
else:
    print("sus")
    points -= 1



if (points == 12):
    print("You had everything right. Your score was", points, "!")
elif (points == -102):
    print("Ur really bad. Imagine having negativ points. Not only that but you think Dodge is better then Omniman. Man you are really fucked up. Anywas u had", points)
else:
    print("Ur score were ok. U got", points)