<?php
/**
 * @return string
 */
function postData($username): string {
    $_POST[$username] ??= false;
    return htmlspecialchars($_POST[$username]);
}

$username = postData('username');
echo '<pre>';
var_dump($username);
echo '</pre>';
?>

<form action="02_register_form.php" method="post">
    <label>Username</label>
    <input name="username">
    <button>Register</button>
</form>