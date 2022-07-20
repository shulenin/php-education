<?php
use app\models\CarForm;
?>

<h1>My PAGE!!!</h1>

<br>

<?php
foreach ($cars as $car) {
?>

<ul>
    <li>
        <?php echo $car->name . ' ' . $car->subname . ' ' . $car->color; ?>
    </li>
</ul>

<?php
}
?>