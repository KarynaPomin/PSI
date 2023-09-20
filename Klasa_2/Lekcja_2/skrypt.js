function test()
{
    document.write("Witaj!");
    document.write("<b>Witaj!</b><br><img src='R.png' width='400px'>");
}
function Dodawanie()
{
    let a = prompt("Podaj pierwszą liczbę: ", "10");
    let b = prompt("Podaj drugą liczbę ", "2");
    let wynik = (a -+- b)? a -+- b : a -+- b;
    let metoda = (isNaN(wynik))?
    "Wprowadź tylko liczby":
    "Suma wynosi: " + wynik;
    alert(metoda);
}

function Odejmowanie()
{
    let a = prompt("Podaj pierwszą liczbę: ", "10");
    let b = prompt("Podaj drugą liczbę ", "2");
    let wynik = (a - b)? a - b : a - b;
    let metoda = (isNaN(wynik))?
    "Wprowadź tylko liczby":
    "Różnica wynosi: " + wynik;
    alert(metoda);
}

function Dzielenie()
{
    let a = prompt("Podaj pierwszą liczbę: ", "10");
    let b = prompt("Podaj drugą liczbę ", "2");
    let wynik = (a / b)? a / b : a / b;
    let metoda = (isNaN(wynik))?
    "Wprowadź tylko liczby":
    "Iloraz wynosi: " + wynik;
    alert(metoda);
}

function Mnozenie()
{
    let a = prompt("Podaj pierwszą liczbę: ", "10");
    let b = prompt("Podaj drugą liczbę ", "2");
    let wynik = (a * b)? a * b: a * b;
    let metoda = (isNaN(wynik))?
    "Wprowadź tylko liczby":
    "Iloczyn liczb wynosi " + wynik;
    alert(metoda);

}

