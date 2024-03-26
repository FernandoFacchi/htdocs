<?php

$name = "Nome";
$sobrenome = "Sobrenome";
$dt_nasc = "2005-08-15";

?>

<Form action= ".php">
<div>
    <label for="inome"></label>
    <input type="text" name="Nome" id="inome" Value= 
    "<?= $name; ?>">
</div>
<div>
    <label for="isobrenome"></label>
    <input type="text" name="sobrenome" id="isobrenome" value= 
    "<?= $sobrenome; ?>">
</div>
<div>
    <label for="dt_nasc"></label>
    <input type="date" name="nascimento" id="dt_nasc" value= "<?= $dt_nasc; ?>">
</div>
<div>
    <input type="submit" value="Enviar">
</div>
</Form>