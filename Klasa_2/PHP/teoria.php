<!-- 
    FUNKCJA isset("zmienna")
    --- sprawdza czy zmienna istnieje (true / false)
    --- empty - spawdza, czy jest pusta
    --- lempty - sprawdza, czy nie jest pusta

    FUNKCJA unset("zmienna")
    --- usuwa zmienną

    FUNKCJA date()
    --- np. date('l, d.m.r');
    --- d - dzień w formacie z 0 na początku
    --- D - dzień w formacie 3-literowego skrótu
    --- F - pełna nazwa miesiąca
    --- g - godzina w formacie 12-stogodzinnym
    --- G - godzina w formacie 24-godzinnym
    --- H - godzina od 01-24
    --- i - liczba minut
    --- s - liczba sekund
    --- l - nazwa dnia tygodnia
    --- m - miesiąc w postaci cyfry od 01-12
    --- Y - rok pełny

    FUNKCJA getdate(znacznik czasu): 
    --- minutes, 
    --- hours, 
    --- year, 
    --- month,
    --- mday (dzień miesiąca),
    --- wday (dzień tygodnia w postaci liczby),
    --- yday (numer kolejnego dnia roku), 
    --- weekday (nazwa dnia tygodnia po ang.)
    --- na początku wywołuje się funkcje: $data = getdate();
    --- potem dodajemy indeksy do tablicy np. $data['hours'];

    FUNKCJA wordwrap()
    --- służy do formatowania tekstu w postaci kolumny.
    --- funkcja przyjmuje dwa argumenty: 
    --- --- liczba okteślająca maks. dł. linii oraz argument podziału
    --- wordwrap($tekst, 30, '<br>\n');

    FUNKCJE include 
    --- wstawia całą zawartość pliku, dołącza cały plik
    --- jeśli np. plik nie instnieje to pojawi się ostrzeżenie i program wykona siędalej

    FUNKCJA require
    --- wstawia całą zawartość pliku, dołącza cały plik
    --- jeśli np. plik nie istnieje to pojawi się błąd krytyczny

    FUNKCJA gatrandmax()
    --- funkcja zwraca największą liczbę jaka może zostać wygenerowana przy pomocy funkcji rand()
    --- funkcja rand(liczba_min, liczba_max)

    FUNKCJA pow(podstawa, wykładnik)
    --- zwraca wartość obliconą przez podniesienie do potęgi

    FUNKCJA sqrt()
    --- zwraca pierwiastek kwadratowy
    
    FUNKCJA pi()
    --- zwraca przybliżoną wartość liczby pi

    FUNKCJA ucfirst()
    --- zamienia pierwszą literę na wielką

    FUNKCJA strtoupper()
    --- zamienia wszystkie litery w ciągu znaków na wielkie

    FUNKCJA strtolower()
    --- zamienia wszystkie litery ciągu znaków na małe

    FUNKCJA strstr(tekst, fragment)
    --- wyszukuje wskazaty tekst w dowolnym ciągu znaków
    --- jeżeli znajdzie wskazany fragment to zwraca ciąg od niego
    --- strstr('ala ma kota', 'ma') - wyświetli: ma kota

    FUNKCJA str_replace(słowo_zastąpione, słowo_którym_zastępujemy, tekst)
    --- zamienia dowolny ciąg znaków na inny

    FUNKCJA strlen(tekst)
    --- podaje długość ciągu znaków

    FUNKCJA substr(tekst, początek, koniec)
    --- zwraca podany ciąg znaków dla którego jest podana liczba znaków
    --- np. substr('ala ma kota', 0, 3) - zwraca: ala

    FUNKCJA nl2br()
    --- wyświetla tekst przed każdym znakiem końca linii wstawi <br>

    FUNKCJA trim(tekst)
    --- usywa spacje po obu stronach
    --- ltrim - usuwa spacje z lewej strony
    --- rtrim - usuwa spacje z prawej strony


 -->
