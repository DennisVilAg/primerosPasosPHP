<?php
    $name = "Dennis";
    $age = 30;
    $isDev = true;

    $isOld = $age > 40;

    /*información de la variable
    var_dump($name);
    gettype($age);
    */

    $output= "Hola $name, con una edad de $age";
    $outputAge = match (true) {
        $age < 2  => "Eres un bebé , $name",
        $age < 10 => "Eres un niño , $name",
        $age < 18 => "Eres un adolescente, $name",
        $age < 40 => "Eres un adulto, $name",
        $age < 60 => "Eres un adulto viejo",
        default   => "Hueles más a madera que a fruta"
    };

    /* ARRAY */
    $bestLanguages = ["PHP", "JavaScript", "Python"];
    $bestLanguages[]= "Java";
    $bestLanguages[]="TypeScript";
 
?>

<!-- SACAR EL INDICE -->
<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?> </li>
    <?php endforeach; ?>
</ul>

<!-- RECCORRER UN ARRAY -->
<ul>
    <?php foreach ($bestLanguages as $language) : ?>
        <li><?= $language ?> </li>
    <?php endforeach; ?>
</ul>

<!-- MOSTRAR UNA POSICIÓN EN CONCRETO -->
<h2>El mejor lenguaje es <?= $bestLanguages[2] ?></h2>

<h2><?= $outputAge ?></h2>

<?php if ($isOld) : ?>
    <h2>Eres viejo</h2>
<?php elseif ($isDev) : ?>
    <h2>No eres viejo, pero eres Dev</h2>
<?php else : ?>
    <h2>Eres joven</h2>
<?php endif ; ?>

<h1>
    <?php echo $output; ?>
</h1>
