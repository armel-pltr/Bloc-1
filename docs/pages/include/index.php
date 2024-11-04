<?php
require_once 'pages/include/fonctions.php';

/*echo title('Titre de niveau 1');
echo title('Titre de niveau 2','',2);
echo title('Titre de niveau 2',level:2);
echo title('Titre de niveau 1', toUpper: true);
*/

$nb=get('nb',2);
for($i=0;$i<$nb;$i++){
    echo title("Itération$i",level: $i+1);
}