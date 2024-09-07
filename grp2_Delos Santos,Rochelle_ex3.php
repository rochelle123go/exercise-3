<?php
$filename = 'Group 2.txt';

if (file_exists($filename)) {
    $fileContents = file_get_contents($filename);
    echo "File contents: " . htmlspecialchars($fileContents) . "<br>";

    $fileArray = file($filename);
    echo "File contents using file():<br>";
    foreach ($fileArray as $line) {
        echo htmlspecialchars($line) . "<br>";
    }
} else {
    echo "The file does not exist.<br>";

    $content = "This is an exercise 3 file.";
    file_put_contents($filename, $content);
    echo "File created and content written.<br>";
}

if (file_exists($filename)) {
    echo "Updated file contents: " . htmlspecialchars(file_get_contents($filename));
}
?>
