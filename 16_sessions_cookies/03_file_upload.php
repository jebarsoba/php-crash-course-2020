<?php
var_dump($_FILES);

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);

    if (!in_array($ext, ['png', 'jpg'])) {
        echo 'Extension not supported!';
        return;
    }

    move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button>Submit</button>
</form>