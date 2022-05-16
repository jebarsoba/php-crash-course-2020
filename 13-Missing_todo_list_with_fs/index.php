<?php
if (file_exists('todo.json')) {
    $json = file_get_contents('todo.json');
    $todos = json_decode($json, true);
}
?>

<form action="newtodo.php" method="post">
    <input type="text" name="todo_name" placeholder="Enter your to-do">
    <button>New to-do</button>
</form>
<br>

<?php foreach ($todos as $todoName => $todo): ?>
    <div style="margin-bottom: 20px;">
        <input type="checkbox" <?php echo $todo['completed'] ? 'checked' : ''; ?>>
        <?php echo $todoName ?>
        <form style="display: inline-block;" action="delete.php" method="post">
            <input type="hidden" name="todo_name" value="<?php echo $todoName; ?>">
            <button>Delete</button>
        </form>
    </div>
<?php endforeach; ?>
