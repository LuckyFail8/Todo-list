<?php
include('create-to-do.php');
include('edit-to-do.php');
include('update-to-do.php');
$editTask = editTaskById();
$createTask = createTask();
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
        <input type="text" class="p-1" placeholder="Enter something..." name="task" value="<?= $editTask['task'] ?? '' ?>">
        <button type="submit" class='btn px-2 py-1 bg-cyan-600 rounded' name="<?= count($editTask) ? 'update' : 'add' ?>">
            <?= count($editTask) ? 'update' : 'add' ?>
        </button>
    </div>
</form>