<?php

function editTaskById()
{
    global $connect;

    $data =  [];

    if (isset($_GET['edit-task']) && !empty($_GET['edit-task'])) {
        $id = $_GET['edit-task'];

        $msg = [];

        $query = "SELECT task FROM todo WHERE id=$id";

        $result = $connect->query($query);

        $data = $result->fetch_assoc();
        var_dump($id);
    }
    return $data;
}
