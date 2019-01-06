<?php
echo 'pulling new';
echo system('git reset --hard');
echo system('git checkout -- .');
echo system('git pull git@github.com:lmccart/DMA28-Interactivity.git master');
?>
