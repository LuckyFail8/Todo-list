<?php

function editTaskById()
{
    global $connect;

    $data =  [];

    if (isset($_GET['task']) && !empty($_GET['task'])) {
        $id = $_GET['task'];

        $msg = [];

        $query = "SELECT task FROM todo WHERE id=$id";

        $result = $connect->query($query);

        $data = $result->fetch_assoc();
    }
    return $data;
}
