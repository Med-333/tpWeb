<?php

require './models/Liver.php';

$livre = new Livre('tit', 'aut', 23, 'edit', '2003-12-1');
$livre->addLivre();

echo "done"


?>