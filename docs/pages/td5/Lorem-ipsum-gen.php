<?php
// Tableau contenant les 30 paragraphes
$paragraphes = [
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ultrices nisi, at aliquam erat...",
    "Aliquam semper condimentum eros. In eget nisl turpis. Nullam venenatis nunc vitae elit mattis rhoncus...",
    "Donec congue vehicula ornare. Nunc sed vestibulum lacus. Morbi sagittis placerat facilisis...",
    "Aliquam mollis blandit turpis, non convallis dui. Maecenas eu dictum ante...",
    "Nulla facilisi. Morbi in lectus non enim accumsan accumsan. Mauris sit amet porta arcu...",
    "Phasellus nunc justo, imperdiet ac metus id, ullamcorper suscipit felis. Pellentesque tincidunt ac mauris...",
    "Nunc non mi eu quam suscipit vehicula. Aliquam nulla arcu, sodales non elementum eget, sagittis quis nisl...",
    "Ut enim magna, porttitor quis consequat non, dapibus sed ante. Nam suscipit posuere augue nec facilisis...",
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac tortor laoreet est pharetra sagittis at non sapien...",
    "Cras consequat, orci id gravida vehicula, augue ex dictum sapien, quis dapibus risus ipsum sed ligula...",
    "Aliquam porttitor tellus nec eros pretium, ut vehicula justo efficitur. Nullam tincidunt quam a orci tempus...",
    "Praesent tristique, massa vitae auctor blandit, est odio tempus nisi, ac ullamcorper risus sem ac sapien...",
    "Vestibulum sit amet urna commodo, euismod lacus id, sollicitudin orci...",
    "Sed mollis scelerisque erat, vitae eleifend elit pellentesque non...",
    "Aliquam pellentesque arcu in condimentum congue. Donec neque metus, tristique id turpis nec...",
    "Curabitur dapibus neque sit amet tellus dapibus euismod...",
    "Fusce eget lectus non lorem blandit interdum eget non nunc...",
    "Morbi consectetur turpis tortor, eu tempor nisl mollis sed...",
    "Curabitur malesuada nunc felis, vel accumsan dolor volutpat nec...",
    "Vivamus facilisis non massa in elementum. Quisque accumsan dapibus tincidunt...",
    "Donec eget ante id lectus ornare rhoncus. In cursus tortor massa, vel aliquet nisi semper eu...",
    "Nullam ultricies nulla vel metus porttitor pulvinar...",
    "Proin tincidunt finibus libero, sed rutrum sem pretium vitae...",
    "Sed consequat mollis orci. Duis ligula ligula, porta vitae tellus non, pellentesque convallis metus...",
    "In bibendum quis tellus eget dignissim. Nulla aliquet magna finibus, dignissim nunc sed, consectetur ante...",
    "Donec imperdiet nisl mi, ut lobortis quam semper in...",
    "Duis viverra sollicitudin ipsum, sed interdum augue tempor quis...",
    "Integer placerat dui eu purus volutpat malesuada ultricies id nulla...",
    "Nam porttitor nec nulla id dictum. Nunc et luctus dui, et finibus sem...",
    "Curabitur aliquam purus bibendum mauris varius egestas..."
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de Paragraphes</title>
</head>
<body>
    <h1>Générateur de Paragraphes</h1>
    <form method="POST">
        <label for="nbParagraphes">Combien de paragraphes souhaitez-vous générer ?</label>
        <input type="number" id="nbParagraphes" name="nbParagraphes" min="1" max="30" required>
        <button type="submit">Générer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nbParagraphes = intval($_POST['nbParagraphes']);
        if ($nbParagraphes >= 1 && $nbParagraphes <= 30) {
            echo '<textarea rows="15" cols="100" readonly>';
            for ($i = 0; $i < $nbParagraphes; $i++) {
                echo $paragraphes[$i] . "\n\n";
            }
            echo '</textarea>';
        } else {
            echo '<p>Veuillez choisir un nombre entre 1 et 30.</p>';
        }
    }
    ?>
</body>
</html>
