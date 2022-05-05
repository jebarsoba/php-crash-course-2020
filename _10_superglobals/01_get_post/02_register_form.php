<?php
const REQUIRED_FIELD_ERROR = 'This field is required';

function postData($username): string {
    $_POST[$username] ??= false;
    return htmlspecialchars($_POST[$username]);
}

$username = postData('username');
echo '<pre>';
var_dump($username);
echo '</pre>';

$errors = [];
if (!$username) {
    $errors['username'] = REQUIRED_FIELD_ERROR;
}
?>

<form action="02_register_form.php" method="post">
    <label>Username</label>
    <input name="username">
    <label
            visible="<?php echo isset($errors['username']); ?>"
            style="color: red;">
        <?php echo $errors['username']; ?>
    </label>
    <button>Register</button>
</form>