<?php
require_once './Connection.php';
$connection = new Connection();
$notes = $connection->getNotes();

var_dump($notes);
?>

<html lang="en">
<head>
    <link rel="stylesheet" href="app.css">
    <title>Notes</title>
</head>
<body>
<form class="new-note">
    <input type="text" name="title" placeholder="Note title">
    <textarea name="description" cols="30" rows="4" placeholder="Note description"></textarea>
    <button>New note</button>
</form>
<div class="notes">
    <div class="note">
        <div class="title">
            Sample note
        </div>
        <div class="description">
            Sample description
        </div>
        <small>24/05/22 9:00:00</small>
        <button class="close">X</button>
    </div>
</div>
</body>
</html>