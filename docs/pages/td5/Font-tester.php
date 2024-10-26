<?php
$defaultMsg = "Veuillez choisir un message.";
$msg = isset($_GET['msg']) ? $_GET['msg'] : null;
$color = isset($_GET['color']) ? $_GET['color'] : null;
$size = isset($_GET['size']) ? (int)$_GET['size'] : null;
$validColors = ['rouge', 'vert', 'bleu'];


echo '<a href="?msg=rouge">Message Rouge</a><br>';
echo '<a href="?msg=vert">Message Vert</a><br>';
echo '<a href="?msg=bleu">Message Bleu</a><br>';

if ($msg === 'rouge') {
    echo "<h1 style='color:red; font-size:15px;'>Ceci est un message rouge.</h1>";
} elseif ($msg === 'vert') {
    echo "<h1 style='color:green; font-size:30px;'>Ceci est un message vert.</h1>";
} elseif ($msg === 'bleu') {
    echo "<h1 style='color:blue; font-size:50px;'>Ceci est un message bleu.</h1>";
} elseif ($msg !== null) {
    echo "<h1 style='color:red;'>Erreur : Message non valide.</h1>";
} else {
    echo "<h1>$defaultMsg</h1>";
}

// Afficher le formulaire
echo '<form method="GET" action="">';
echo 'Message : <input type="text" name="msg" required><br>';
echo 'Couleur : <select name="color">
        <option value="défaut">Defaut</option>
        <option value="rouge">Rouge</option>
        <option value="vert">Vert</option>
        <option value="bleu">Bleu</option>
      </select><br>';
echo 'Taille : <input type="number" name="size" min="1" required><br>';
echo '<input type="submit" value="Soumettre">';
echo '</form><br>';

// Afficher le message correspondant
if ($msg && in_array($color, $validColors)) {
    echo "<h1 style='color:$color; font-size:{$size}px;'>$msg</h1>";
} elseif ($msg !== null) {
    echo "<h1 style='color:red;'>Erreur : Couleur non valide.</h1>";
} else {
    echo "<h1>$defaultMsg</h1>";
}

// Afficher les boutons + et -
echo '<form method="GET" action="">';
echo '<input type="hidden" name="msg" value="' . htmlspecialchars($msg) . '">';
echo '<input type="hidden" name="color" value="' . htmlspecialchars($color) . '">';
echo '<input type="hidden" name="size" value="' . htmlspecialchars($size + 2) . '">';
echo '<input type="submit" value="+">';
echo '</form>';
echo '<form method="GET" action="">';
echo '<input type="hidden" name="msg" value="' . htmlspecialchars($msg) . '">';
echo '<input type="hidden" name="color" value="' . htmlspecialchars($color) . '">';
echo '<input type="hidden" name="size" value="' . htmlspecialchars(max(1, $size - 2)) . '">';
echo '<input type="submit" value="-">';
echo '</form><br>';




?>

