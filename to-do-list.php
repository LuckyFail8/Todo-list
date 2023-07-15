<?php
include('get-to-do.php');
$getTask = getTask();
?>

<?php if (count($getTask['data'])) : ?>
    <?php foreach ($getTask['data'] as $task) : ?>
        <div class="row-span-1">
            <div class="sm:col-span-10">
                <?= $task['task'] ?>
            </div>
            <div class="sm:col-span-1">
                <a href="index.php?edit-task=<?= $task['id']; ?>" class="text-green-500">
                    <i></i>
                </a>
            </div>
            <div class="sm:col-span-1">
                <a href="index.php?delete-task=<?= $task['id']; ?>" class="text-red-500">
                    <i></i>
                </a>
            </div>
        </div>
        <hr>
    <?php endforeach ?>
<?php endif ?>