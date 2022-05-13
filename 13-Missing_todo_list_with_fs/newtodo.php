<?php
var_dump($_POST);

$todoName = trim($_POST['todo_name'] ?? '');
if ($todoName) {
    echo "Save to-do";

    $json = file_get_contents('todo.json');
    $jsonArray = json_decode($json, true);
    $jsonArray[$todoName] = ['completed' => false];
    file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));

    echo '<pre>';
    var_dump($jsonArray);
    echo '</pre>';
}