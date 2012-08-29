<?php

require_once 'Calclator.php';

$calclator = new Calclator();

?>

1 + 1 = <?php echo $calclator->plus(1, 1); ?>
<br/>
1 - 1 = <?php echo $calclator->minus(1, 1); ?>
<br/>
