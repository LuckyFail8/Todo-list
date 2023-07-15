<?php
function getTask(): array
{

    global $connect;
    $data['data'] = [];

    $query = "SELECT id, task FROM todo ORDER BY id DESC";

    $result = $connect->query($query);

    if ($result) {
        if ($result->num_rows > 0) {
            $data['data'] = $result->fetch_all(MYSQLI_ASSOC);
        }
    }

    return $data;
}
