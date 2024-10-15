function szyfrowanie(){
    let login = prompt("Podaj login:", "");
    let password = prompt("Podaj hasło: ", "");
    let haslo = password.charCodeAt(0);
    if (login == "admin" && haslo == 56){
        document.write("SUKCES!");
    }
    else{
        alert("Błędny login lub hasło");
    }
    let litera = prompt("Podaj jeden znak do zaszyfrowania: ", "");
    alert(litera.charCodeAt(0));
    }
