<?php


// UNION TYPE
// Accetta più tipi di dato (int oppure float)
function somma(int|float $a, int|float $b): int|float {
return $a + $b;
}

echo somma(2, 3.5) . PHP_EOL;


// NULLABLE
// Il parametro può essere string oppure null
function saluta(?string $nome): string {
return $nome ?? "Ciao ospite";
}

echo saluta(null) . PHP_EOL;


// VALORE DI DEFAULT
// Se non passo il secondo parametro, usa "user"
function creaUtente(string $nome, string $ruolo = "user"): string {
return "$nome è un $ruolo";
}

echo creaUtente("Mario") . PHP_EOL;


// VARIADIC
// Accetta un numero variabile di argomenti
function sommaTutti(int ...$numeri): int {
return array_sum($numeri);
}

echo sommaTutti(1, 2, 3) . PHP_EOL;


// CALLBACK
// Riceve una funzione e la esegue
function esegui(callable $callback, int $valore): int {
return $callback($valore);
}

echo "modifica aggiunta";
