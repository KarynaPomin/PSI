switch(prompt("Podaj imię:", ""))
{
    case "Zuzana":
        alert ("Ale do czego?");
        break;
    case "Marta":
        alert ("Eeeeee");
        break;
    case "Bartosz":
        alert ("Nie ja!");
        break;
    case "Ja chyba":
        alert ("Bomba")
        break;
    case "Karyna":
        alert ("Witaj właścicielko!");
        break;
    default:
        alert ("Mie znam ciebie.")
        break;
}

// Istrukcje iteracji: - pętla

let a = "";

for (i = 1; i <= 10; i++)
{
    a += i + "\n";
}

document.write(a);
// alert(a);

// while ()
// {

// }

// do{

// }
// while()

// Policz do potęgi

let podstawa_potegi = prompt("Podaj podstawę potęgi: ", "");
let wykladnik_potega = prompt("Podaj wykładnik potęgi: ", "");
let wynik = 1;

for(i = 0; i <= wykladnik_potega; i++)
{
    wynik *= podstawa_potegi;
}

alert("Wynik wynosi: " + wynik);
