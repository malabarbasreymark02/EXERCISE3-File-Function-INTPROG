<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Funtion</title>
</head>
<body>

<?php

// Creating a file named Exercise3-IntProg.txt
$phpContent = "This is a php file created for exercise number 3 in Integrative Programming";
$createFile = file_put_contents("Exercise3-IntProg.php", $phpContent);

$fileName = "Exercise3-IntProg.php";

// This is our condition statement to check if the file exists
if (file_exists($fileName)) {
    
    //Our file_get_content() funtion to display the entire file content
    echo "<strong>File Content:</strong><br>";
    echo "<pre>" .file_get_contents($fileName). "</pre>";

    //Our file() function to read the file in array.
    echo "<br><strong>Reading the file in array:</strong><br>";
    $fileLines = file($fileName);

    foreach ($fileLines as $fileLine) {
        echo $fileLine;
    }
} else {
    echo "File does not exist!";
}

?>

</body>
</html>
