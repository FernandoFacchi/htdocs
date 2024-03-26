<?php

include_once "back_end.php";

?>

<h2>Seja Bem-vindo!</h2>
<p><?=$nome;?>, que tal desfrutas dos melhores produtos na nossa loja?!</p>

<h3>Confira os nossos produtos:</h3>
<ul>
    <?php foreach ($produtos as $produto): ?>

        <li><?= $produto; ?></li>
    
        <?php endforeach; ?>
</ul>