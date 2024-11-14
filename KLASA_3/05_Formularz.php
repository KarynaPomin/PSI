<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sprawdź swoje uprawnienia</title>
</head>
<body>

<h2>Podaj swój wiek:</h2>
<!-- action="" -- dane zostaną przesłane na tę samą stronę, na której jest formularz.
    która obsłuży je i wyświetli wynik -->
<form method="post" action="">
    <label for="wiek">Wiek:</label>
    <input type="number" id="wiek" name="wiek" required>
    <button type="submit">Sprawdź</button>
</form>

<?php
# Sprawdza, czy formularz został wysłany z metodą POST.
# Warunek, kod wykona się tylko wtedy, gdy formularz został wysłany
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $w = intval($_POST["wiek"]);

    if ($w <= 0) {
        echo "Wiek nie może być ujemnym.";
    } elseif ($w >= 35) {
        echo "Możesz głosować i kandydować do Sejmu i Senatu oraz na Prezydenta.";
    } elseif ($w >= 30) {
        echo "Możesz głosować i kandydować do Sejmu i Senatu.";
    } elseif ($w >= 21) {
        echo "Możesz głosować i kandydować do Sejmu.";
    } elseif ($w >= 18) {
        echo "Możesz tylko głosować.";
    } else {
        echo "Jeszcze nie możesz głosować.";
    }
}
?>

</body>
</html>
