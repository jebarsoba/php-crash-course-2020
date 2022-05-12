<?php
// Magic constants
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';

// Create directory
//mkdir('test');

// Rename directory
//rename('test', 'my_folder');

// Delete directory
//rmdir('my_folder');

// Read files and folders inside directory
$files = scandir('./');
var_dump($files);

// file_get_contents, file_put_contents
$content = file_get_contents('lorem.txt');
//file_put_contents('test.txt', 'Hello World!');
//file_put_contents('test.txt', 'My file' . PHP_EOL . $content);

// file_get_contents from URL

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file