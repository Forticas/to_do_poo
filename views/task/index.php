
<h1>Ceci est la page index task</h1>
<ul>
<?php foreach ($tasks as $task): ?>

    <li><?= $task->getName() ?></li>

<?php endforeach; ?>
</ul>
