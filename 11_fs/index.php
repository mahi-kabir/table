<?php
// Magic constants

// Create directory

// Rename directory

// Delete directory

// Read files and folders inside directory

// file_get_contents, file_put_contents

// file_get_contents from URL
$usersJSON = file_get_contents('https://jsonplaceholder.typicode.com/posts');
echo $usersJSON;

$users = json_decode($usersJSON);
echo'<pre>';
var_dump($usersJSON);
echo'</pre>';
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file