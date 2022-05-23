<?php
$json = file_get_contents('todo.json');
$jsonArray = json_decode($json, true);

$todoName = $_POST['todo_name'];
echo $todoName;
$jsonArray[$todoName]['completed'] = !$jsonArray[$todoName]['completed'];
file_put_contents('todo.json', json_encode($jsonArray));

header('Location: index.php');