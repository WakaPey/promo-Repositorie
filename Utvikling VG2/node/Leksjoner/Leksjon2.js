//Oppgave 2
//Lag flaske tuten peker på
//Du skal lage tre objekter som hver har lagret verdi om mat du må spise, og aktivitet
//du må gjøre
//Plasser objektene i en tabell, og lag kode som plukker villkårlig en av objektene
//i tabellen

let number = Math.floor(Math.random() * 3);

let navnNumber = Math.floor(Math.random() * 5);

let object1 = {
    mat: "Hamburger",
    aktivitet: " eller Orgasme"
}

let object2 = {
    mat: "Lungemos",
    aktivitet: " eller knekk ett bein"
}

let object3 = {
    mat: "Spis dritt",
    aktivitet: " eller Drep deg selv"
}

let tabell = [object1.mat + object1.aktivitet, object2.mat + object2.aktivitet, object3.mat + object3.aktivitet]

let tabbelle = ["Vetle: ", "Stian: ", "pHiLLPPP: ", "Moren din: ", "Faren Din: "]

console.log(tabbelle[navnNumber], tabell[number])