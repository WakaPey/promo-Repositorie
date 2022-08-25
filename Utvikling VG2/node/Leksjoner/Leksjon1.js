console.log("Hello World!")


var ofdisjdf = "Dette er en gammel variabel" //Glem denne
 
let variabel = "Dette er en ny Variabel" //bruk denne hoved sakelig

const enKonstant = "Dette er en konstant som ikke kan endres"

//enKonstant = "Nytt innhold"

variabel = 'Denne kan man gi nytt "innhold'
//console.log(variabel)

let tallVariabel = 1234
tallVariabel = 1234.34


//Lister
let liste = [1,2,3,4,5,6,7,8,9]
//console.log(liste[8])
liste = ["tesk", 2, 434n, [1,2,3,4]]
console.log(liste[3])

//Tabell
let tabell = [Vetle, Fimreite]

console.log(tabell[0])

//Objekter
let Objekt = {
    fornavn: "Vetle",
    etternavn:"Fimreite"
}

console.log(Objekt.fornavn)

//Funksjoner
function enFunksjon(fornavn, etternavn) {
    console.log("hei", fornavn, etternavn)
}

enFunksjon("Vetle", "Fimreite")