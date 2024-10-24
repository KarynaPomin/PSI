function sprawdzFormularz() {
    const imie = document.getElementById('imie').value.toUpperCase();
    const nazwisko = document.getElementById('nazwisko').value.toUpperCase();
    const zgloszenie = document.getElementById('zgloszenie').value;
    const regulamin = document.getElementById('regulamin').checked;
    const wynik = document.getElementById('wynik');

    if (!regulamin) {
        wynik.innerHTML = 'Musisz zapoznać się z regulaminem';
        wynik.style.color = 'red';
    } else {
        wynik.innerHTML = `${imie} ${nazwisko}<br>Treść Twojej sprawy: ${zgloszenie}`;
        wynik.style.color = 'navy';
    }
}
