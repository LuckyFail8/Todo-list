<?php

function deleteTaskById()
{
    global $connect;

    $data = [];

    if (isset($_GET['delete-task']) && !empty($_GET['delete-task'])) {
        $id = $_GET['delete-task'];

        $query = "SELECT task FROM todo WHERE id=$id";

        $result = $connect->query($query);

        $data = $result->fetch_assoc();

        /* if ($statement->execute()) {
            $data['taskMsg'] = "Task deleted";
            echo "<script>window.location='index.php'</script>";
        } else {
            $data['taskMsg'] = "Error deleting task : " . $statement->error;
        } */
    }
    return $data;
}
