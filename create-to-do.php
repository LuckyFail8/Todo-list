<?php
global $connect;

if (isset($_POST['add'])) {
    $task = $_POST['task'];

    $data['taskMsg'] = '';
    if (empty($task)) {
        $data['taskMsg'] = 'Empty task field';
    }

    $validation = false;
    if (empty($data['taskMsg'])) {
        $validation = true;
    }

    if ($validation) {
        $query = "INSERT  INTO todo (task) VALUES ('$task')";

        $result = $connect->query($query);

        if ($result) {
            $data['success'] = "Task is added successfully";
        }
    }
    return $data;
}
