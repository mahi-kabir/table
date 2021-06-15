 <?php

// Create simple string

// String concatenation
//echo 'hey there, '.'hello wrold '.'how are you . <br>';
// String functions

// Multiline text and line breaks
$text = "
    Hello i am <b>mahi</b>.,
    i am <b>25</b>. years alt,
    i love travelling
";

echo "1- ".$text . '<br>';
echo "2- ".nl2br($text) . '<br>';
echo "3- ".htmlentities($text). '<br>';
echo "4- ".nl2br(htmlentities($text)). '<br>';
// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php