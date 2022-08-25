import chalk from 'chalk';

//Sette opp prosjektet sitt, til å bruke npm pakker
//Vi bruker da kommandoen npm, som fulgte med innstallasjonen av
//node.js
//Vi kan sjekke at vi har npm programmet, med å kjøre kommandoen "npm -v"
//For å sette opp prosjektet med å kjøre kommandoen "npm int"

//Instalering av pakke
//Første pakken vi installerer heter chalk. Den gjør at vi kan få 
//fargefull output
//Vi installerer denne kommandoen "npm install chalk"

//console.log(chalk.red.bold.inverse("Hello!"))

//typiske problem:
//
//

//oppgave 1
//Lag en variabel som inneholder alderen din.
//Leg en if, og sjekk om du er over 18. viss du er over 18 skriver du "Du kan komme inn"
//med grønne bokstaver
//Viss du er under 18, skriver du "NEI" med rød bakgrunn bak bokstavene.
//Bruk dokumentasjonen til chalk på npm-siden for å finne ut hvordan du skal gjøre det

let age = 17

if (age >= 18) {
    console.log(chalk.green.bold('Approved'))
    console.log(1000101)
}

else if (age <= 18) {
    console.log(chalk.red.bold.inverse('Denied'))

    console.log(chalk.white.bold('◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙'));
    console.log(chalk.white.bold('◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙'));
    console.log(chalk.white.bold('◙◙◙◙◙◙'+ chalk.red('◙◙◙') +'◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙'));
    console.log(chalk.white.bold('◙◙◙◙◙◙'+ chalk.red('◙') +'◙'+ chalk.red('◙') +'◙◙◙◙◙◙◙'+ chalk.red('◙◙◙◙◙◙◙') +'◙◙◙◙◙◙'));
    console.log(chalk.white.bold('◙◙◙◙◙◙'+ chalk.red('◙◙◙') +'◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙'));
    console.log(chalk.white.bold('◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙'));
    console.log(chalk.white.bold('◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙'));
    console.log(chalk.white.bold('◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙'));
    console.log(chalk.white.bold('◙◙◙◙'+ chalk.red('◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙') +'◙◙◙◙'));
    console.log(chalk.white.bold('◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙'));
    console.log(chalk.white.bold('◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙◙'));
}


//Oppgave 2
//Lag et fint bilde med bruk av chalk. Post på teams ^^^


