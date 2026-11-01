<?php
function moyenne(array $notes): float {
    return array_sum($notes) / count($notes);
}

function admis(array $notes): array {
    return array_filter($notes, fn($note) => $note >= SEUIL_ADMIS);
}

function trierNotes(array $notes): array {
    sort($notes);
    return $notes;
}

function ajouterBonus(array $notes, int $points = 1): array {
    return array_map(fn($note) => $note + $points, $notes);
}
