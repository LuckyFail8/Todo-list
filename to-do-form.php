<?php
include('create-to-do.php');
include('edit-to-do.php');
include('update-to-do.php');
$editTask = editTaskById();
$createTask = createTask();
$deleteTask = deleteTaskById();
if (isset($_GET['edit-task'])) {
    $createTask = updateTaskById();
}
?>

<form method="post">
    <p class="text-red-500">
        <?php
        echo $createTask['success'] ?? '';
        echo $createTask['taskMsg'] ?? '';
        ?>
    </p>
    <div class="input mb-3">
        <input type="text" class="p-1" placeholder="Enter something..." name="task" value="<?= $editTask['task'] ?? '' ?> <?= $deleteTask['task'] ?? '' ?>">
        <?php if (!isset($_GET['delete-task'])) : ?>
            <button type="submit" class='btn px-2 py-1 bg-cyan-600 rounded' name="<?= count($editTask) ? 'update' : 'add' ?>">
                <?= count($editTask) ? 'update' : 'add' ?>
            </button>
        <?php endif ?>
        <?php if (isset($_GET['delete-task'])) : ?>
            <button type="submit" class='btn px-2 py-1 bg-red-600 rounded' name="delete">delete
            </button>
        <?php endif ?>
    </div>
</form>