<?php
function remove(string $s): string {
    // Sprawdź, czy ciąg znaków jest niepusty
    if (!empty($s)) {
        // Spróbuj uzyskać ostatnią literę, jeśli ciąg znaków nie jest pusty
        try {
            $lastChar = $s[-1];
        } catch (Error $e) {
            // Obsłuż błąd indeksu dla pustego ciągu znaków
            return $s;
        }

        // Sprawdź, czy ostatnia litera to wykrzyknik
        if ($lastChar === '!') {
            // Usuń ostatnią literę (wykrzyknik)
            $s = substr($s, 0, -1);
        }
    }

    return $s;
}